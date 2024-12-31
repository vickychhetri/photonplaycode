<?php

namespace App\Http\Controllers\customer;

use App\Http\Controllers\Controller;
use App\Jobs\ResetPasswordJob;
use App\Mail\OrderPlaceMail;
use App\Models\Cart;
use App\Models\Coupon;
use App\Models\Currency;
use App\Models\Customer;
use App\Models\Order;
use App\Models\OrderedProduct;
use App\Models\Product;
use App\Models\Setting;
use App\Models\ShippingRate;
use App\Models\UserAddress;
use App\Models\UserPostalCode;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;
use Stripe\StripeClient;
use Stripe;

class CartController extends Controller
{
    public function shoppingBag(Request $request){
        $sessionId = Session::getId();
        $taxes = DB::table('settings')->select('shipping_time','gst')->first();
        $coupon = Coupon::where('coupon_name', $request->coupon)->first();
        $discount = 0;
        $discounted_amount = 0;
        $coupon_name = '0';
        if($coupon){
            if ($coupon->expiry_date < date('Y-m-d')) {
                return redirect()->back()->with('error', 'Coupon expired! Please try another one');
            }
            if ($coupon->type == '1') {
                $discount = $coupon->value;
                $discounted_amount = $coupon->value;
                $coupon_name = $coupon->coupon_name;
            } else if ($coupon->type == '2') {
                $discount = ($request->total * $coupon->value) / 100;
                $discounted_amount = ($request->total * $coupon->value) / 100;
                $coupon_name = $coupon->coupon_name;
            }else{
                $discount = $request->total;
                $discounted_amount = 0;
            }
        }
        if(isset($request->remove_coupon)){
            $discount = 0;
            $discounted_amount = 0;
            $coupon_name = '0';
        }
$products_list_ids=[];
        if(!Session::get('user')){
            $cart_table =  Cart::where('session_id', Session::getId())->get();
            // dd(unserialize($cart_table[0]['option_ids']));
            $total = 0;
            foreach($cart_table as $cart_t){
                $total += ($cart_t->price * $cart_t->quantity);
                if(!in_array($cart_t->product_id,$products_list_ids)){
                    $products_list_ids[]=$cart_t->product_id;
                }
            }
            $grand_total = $total - $discount;
        }else{
            $cart_table =  Cart::where('user_id', Session::get('user')->id)->get();
            $total = 0;
            foreach($cart_table as $cart_t){
                $total += ($cart_t->price * $cart_t->quantity);
                if(!in_array($cart_t->product_id,$products_list_ids)){
                    $products_list_ids[]=$cart_t->product_id;
                }
            }
            $grand_total = $total - $discount;
        }

        $linked_products=Product::getLinkedProducts($products_list_ids);

        // if(Session::get('user')){
        //     $postalCode = UserPostalCode::where('user_id', Session::get('user')->id)->first();
        // }else{
        //     $postalCode = UserPostalCode::where('session_id', $sessionId)->first();
        // }

        // if($postalCode){
        //     $shippingRate = ShippingRate::where('postal_code', $postalCode->postal_code)->first();
        // }else{
        //     $shippingRate = null;
        // }


        // $shippingTax = $shippingRate->shipping_rate ?? $taxes->shipping_time;

        return view('customer.cart.shopping_bag', compact('cart_table','taxes','grand_total', 'discounted_amount', 'coupon_name','total','linked_products'));
    }



    public function addAccessoryBag(Request $request){
        $sessionId = Session::getId();
        if(!Session::get('user')){
            $cart = Cart::where(['session_id' => $sessionId, 'product_id' => $request->product_id, 'price' => $request->price,])->first();
            if($cart){
                $cart->update(['quantity' => $cart->quantity + $request->quantity]);
            }else{
                Cart::create([
                    'session_id' => $sessionId,
                    'option_ids' => null,
                    'product_id' => $request->product_id,
                    'price' => $request->price,
                    'title' => $request->title,
                    'color' => NULL,
                    'category' => $request->category,
                    'quantity' => $request->quantity,
                    'cover_image' => $request->cover_image,
                ]);
            }

        }else{
            $cart = Cart::where(['user_id' => Session::get('user')->id, 'product_id' => $request->product_id, 'price' => $request->price,])->first();
            if($cart){
                $cart->update(['quantity' => $cart->quantity + $request->quantity]);
            }else{
                Cart::create([
                    'user_id' => Session::get('user')->id,
                    'product_id' => $request->product_id,
                    'option_ids' =>  null,
                    'price' => $request->price,
                    'title' => $request->title,
                    'category' => $request->category,
                    'quantity' => $request->quantity,
                    'cover_image' => $request->cover_image,
                    'color' => null,
                ]);
            }

        }
        if($request->p == 1){
            return redirect()->back()->with('success', 'Item added to cart successfully!');
        }
        return redirect()->route('customer.shopping.bag');
    }


    public function addShoppingBag(Request $request){
        // dd($request->dynamic_specs);
        $specPrice = 0;
        $sessionId = Session::getId();
        $impodeSpec = array();
        if(isset($request->dynamic_specs)){
            foreach($request->dynamic_specs as $specs){
                $implodeSpec[] = $specs;
                    $specPrice += DB::table('product_spcialization_options')->where('id', $specs)->value('specialization_price');
            }
        }

        if($request->postal_code){
            if(Session::get('user')){
                UserPostalCode::where('user_id', Session::get('user')->id)->delete();
            }
            UserPostalCode::where('session_id', $sessionId)->delete();
            UserPostalCode::updateOrCreate([
                'user_id' => Session::get('user')->id ?? null,
                'session_id' => $sessionId,
            ],[
                'postal_code' => $request->postal_code,
            ]);
        }

        if(!Session::get('user')){
        $cart = Cart::where(['session_id' => $sessionId, 'product_id' => $request->product_id, 'price' => $request->price,])->first();
            if($cart){
                $cart->update(['quantity' => $cart->quantity + $request->quantity]);
            }else{
                Cart::create([
                    'session_id' => $sessionId,
                    'option_ids' => serialize($request->dynamic_specs) ?? null,
                    'product_id' => $request->product_id,
                    'price' => $request->price + $specPrice,
                    'title' => $request->title,
                    'color' => $request->color,
                    'category' => $request->category,
                    'quantity' => $request->quantity,
                    'cover_image' => $request->cover_image,
                ]);
            }

        }else{
            $cart = Cart::where(['user_id' => Session::get('user')->id, 'product_id' => $request->product_id, 'price' => $request->price,])->first();
            if($cart){
                $cart->update(['quantity' => $cart->quantity + $request->quantity]);
            }else{
                Cart::create([
                    'user_id' => Session::get('user')->id,
                    'product_id' => $request->product_id,
                    'option_ids' => serialize($request->dynamic_specs) ?? null,
                    'price' => $request->price + $specPrice,
                    'title' => $request->title,
                    'category' => $request->category,
                    'quantity' => $request->quantity,
                    'cover_image' => $request->cover_image,
                    'color' => $request->color,
                ]);
            }

        }
        if($request->p == 1){
            return redirect()->back()->with('success', 'Item added to cart successfully!');
        }
        return redirect()->route('customer.shopping.bag');
    }

    public function confirmation($order_id){
        $orders = Order::with('orderedProducts', 'user', 'orderedProducts.product')->where('order_number', Crypt::decrypt($order_id))->first();
        // dd($orders);
        return view('customer.cart.confirmation', compact('orders'));
    }

    public function checkout(Request $request){
        if(Session::get('user')){
            $customer = Customer::find((Session::get('user')->id));
            $addresses = UserAddress::where('user_id', Session::get('user')->id)->get();
            $cart_table =  Cart::where('user_id', Session::get('user')->id)->get();
        }else{
            $customer = Session::getId();
            $addresses = [];
            $cart_table =  DB::table('carts')->where('session_id', $customer)->get();
        }

        // dd($addresses);
        $coupon_name = $request->coupon_s;
        $discount = $request->discount_s;
        $taxes = DB::table('settings')->select('shipping_time','gst')->first();

        $total = 0;
            foreach($cart_table as $cart_t){
                $total += ($cart_t->price * $cart_t->quantity);
            }
        return view('customer.cart.checkout', compact('taxes','cart_table','total','coupon_name','discount', 'addresses','customer'));
    }

    public function removeCartItem($id){
        //  json_decode($_COOKIE['cart_cookie'])[$id];

        $arrays = json_decode($_COOKIE['cart_cookie'], true);
        unset($arrays[$id]);

        setcookie('cart_cookie', json_encode($arrays), time() + 3600, "/");
        return redirect()->route('customer.shopping.bag');
    }

    public function deleteCartTableItem($id){
        Cart::find($id)->delete();
        return redirect()->route('customer.shopping.bag');
    }

    public function placeOrder(Request $request){
        try{
            if(!Session::get('user')){
                $this->validate($request, [
                    'email' => 'required|email',
                    'name' => 'required|string',
                ]);
                $email = $request->email;
                $name = $request->name;
                $userId=$this->findAndUseExistUser($request->email);
                if(!isset($userId)){
                    $userId = $this->createGuestUser($email, $name);
                }
                $type = 'guest';
            }else{
                $email = Session::get('user')->email;
                $userId = Session::get('user')->id;
                $type = 'user';
            }
            $icon=Session::get('currency_icon', '$');
            $currency_handler = Currency::where('currency_code', $icon)->first();
            $pay_currency=$currency_handler->stripe_currency_code??'usd';

            $orderId ='#'.mt_rand(1111, 99999);
            $stripe = Stripe\Stripe::setApiKey(config('services.stripe.stripe_secret'));
               header('Content-Type: application/json');
               $price = \Stripe\Price::create([
                   'unit_amount' => $request->grand_total * 100,
                   'currency' => $pay_currency,
                   'product_data' => [
                     'name' => 'Total Amount',
                   ],
                 ]);


           $checkout_session = \Stripe\Checkout\Session::create([
           'line_items' => [[
                'price' => $price->id,
                'quantity' => 1,
           ]],
           'customer_email' => $email,
           'mode' => 'payment',
           'success_url' => route('customer.success.response', ['order_id' => $orderId, 'userId' => $userId, 'email' => $email, 'type' => $type]),
           'cancel_url' => route('customer.cancel.response'),
           ]);

           $order = Order::create([
               'user_id' => $userId,
               'trx_id' => $checkout_session->id,
               'order_number' => $orderId,
               'coupon' => $request->coupon,
               'cart_subtotal' => $request->cart_subtotal,
               'discounted_amount' => $request->discount,
               'shipping' => $request->shipping,
               'gst' => $request->gst,
               'grand_total' => $request->grand_total,
               'billing_street' => $request->billing_street,
               'billing_flat_suite' => $request->billing_flat_suite,
               'billing_city' => $request->billing_city,
               'billing_state' => $request->billing_state,
               'billing_country' => $request->billing_country,
               'billing_postcode' => $request->billing_postcode,
               //main_shipping_double_address - vicky 26-12-2024 start
               'is_shipping_same' => $request->is_shipping_same==1?1:0,
               'shipping_street' => $request->shipping_street,
               'shipping_flat_suite' => $request->shipping_flat_suite,
               'shipping_city' => $request->shipping_city,
               'shipping_state' => $request->shipping_state,
               'shipping_country' => $request->shipping_country,
               'shipping_postcode' => $request->shipping_postcode,
               //main_shipping_double_address - vicky 26-12-2024 end
               'address' => $request->address,
               'order_notes' => $request->order_notes,
           ]);

           if($order){
               if(!Session::get('user')){
                   $token = Str::random(64);
                   DB::table('password_resets')->insert([
                       'email' => $email,
                       'token' => $token,
                       'created_at' => Carbon::now()
                   ]);
                   $data = [
                       'token' => $token,
                       'email' => $email,
                       'created_at' => now(),
                   ];
                   ResetPasswordJob::dispatch($data);
               }
               foreach($request->product_ids as $product){
                   $carts = Cart::find($product);
                   OrderedProduct::create([
                       'order_id' => $order->id,
                       'product_id' => $carts->product_id,
                       'option_ids' => $carts->option_ids,
                       'quantity' => $carts->quantity,
                       'price' => $carts->price,
                       'color' => $carts->color,
                   ]);
               }

           }

           return redirect()->away($checkout_session->url);

        }catch(Stripe\Exception\InvalidRequestException $e){
            if(!Session::get('user') && isset($userId)){
                Customer::where('id', $userId)->delete();
            }
            return redirect()->route('customer.homePage')->with('error', 'Cart is empty, Please add some products');
        }
    }

    public function checkoutSuccess(Request $request){
       $stripe = Stripe\Stripe::setApiKey(config('services.stripe.stripe_secret'));
            $orderId = $request->order_id;
            $order =  Order::where('order_number',$orderId)->first();
            $checkout =  \Stripe\Checkout\Session::retrieve($order->trx_id);

            $order->update([
                'status' => $checkout->status,
                'payment_status' => $checkout->payment_status
            ]);
            if($request->type == 'guest'){
                Cart::where('session_id', $request->userId)->delete();
            }else{
                Cart::where('user_id', $request->userId)->delete();
            }


        $order_product=OrderedProduct::where('order_id',$order->id)->get();
                $products_list=[];
            foreach ($order_product as $product_order){
                $order_p=array();
                $order_p["product_price"]=$product_order->price??"-";
                $order_p["product_color"]=$product_order->color??"-";
                $order_p["product_quantity"]=$product_order->quantity??"-";

                $product_selected=Product::where('id',$product_order->product_id)->first();
                $order_p["product_name"]=$product_selected->title??"-";
                $order_p["product_cover_image"]=url("storage")."/".($product_selected->cover_image??"/default.png");
                $products_list[]=$order_p;
            }
            $order['item']=$products_list;

        $place_order = new OrderPlaceMail($order);
//dd($order);
        Mail::to($request->email)->send($place_order);

            return redirect()->route('customer.confirmation', Crypt::encrypt($orderId));
    }

    public function checkoutCancel(){
        return redirect()->route('customer.shopping.bag');
    }

    public function getSavedAddress($addressId){
        if($addressId == 0){
            return response()->json(null);
        }
        $address = UserAddress::find($addressId);
        return response()->json($address);
    }

    public function getUserPostalCode($postalCode){
        $rate = ShippingRate::where('postal_code', $postalCode)->first();
        $shipping = Setting::select('shipping_time')->first();
        $shippingPrice = 0;
        if($rate){
            $shippingPrice = $rate->shipping_rate;
        }else{
            $shippingPrice = $shipping->shipping_time;
        }
        return response()->json((int)$shippingPrice);
    }


    public function findAndUseExistUser($email)
    {
        $customer= Customer::select('id')->where('email',$email)->first();
        if(isset($customer)){
            return $customer->id;
        }
       return null;
    }
    public function createGuestUser($email, $name)
    {
        $stripe = Stripe\Stripe::setApiKey(config('services.stripe.stripe_secret'));

        $customer = \Stripe\Customer::create([
            'email' => $email,
            'name' => $name,
        ]);

        $customer = Customer::create([
            'stripe_id' => $customer->id,
            'name' => $name,
            'email' => $email,
            'password' => Hash::make(rand(10000000, 99999999)),
        ]);

        return $customer->id;
    }
}
