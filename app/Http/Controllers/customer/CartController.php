<?php

namespace App\Http\Controllers\customer;

use App\Http\Controllers\Controller;
use App\Jobs\ResetPasswordJob;
use App\Mail\OrderPlaceMail;
use App\Models\Cart;
use App\Models\Country;
use App\Models\Coupon;
use App\Models\Currency;
use App\Models\Customer;
use App\Models\MasterConfiguration;
use App\Models\Order;
use App\Models\OrderedProduct;
use App\Models\PostalCode;
use App\Models\Product;
use App\Models\Setting;
use App\Models\ShippingRate;
use App\Models\UserAddress;
use App\Models\UserPostalCode;
use PDF;
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

        if(isset($request->coupon) && strlen($request->coupon) > 2 ){
            if(!isset($coupon)){
                return redirect()->back()->with('error', 'Coupon Invalid! Please try another one');
            }
        }
        $correct_coupon=false;
        $coupon_on_exist_customer_order= MasterConfiguration::where('code','coupon_on_exist_customer_order')->where('status',1)->first();
        if(isset($coupon_on_exist_customer_order) && $coupon_on_exist_customer_order->value=="Y"  && isset($request->coupon) && strlen($request->coupon) > 2){
            $coupon_apply_on_number_order_after= MasterConfiguration::where('code','coupon_apply_on_number_order_after')->where('status',1)->first();

            if(isset($coupon_apply_on_number_order_after)){
                if(isset(Session::get('user')->id)){
                    $confirm_order_status_delivery_status= MasterConfiguration::where('code','confirm_order_status_delivery_status')->where('status',1)->first();

                    if(isset($confirm_order_status_delivery_status)){
                        $already_delivered_count = Order::where('user_id', Session::get('user')->id)
                            ->where('delivery_status', $confirm_order_status_delivery_status->value)
                            ->count();

                        if(!(isset($already_delivered_count) && $already_delivered_count >= $coupon_apply_on_number_order_after->value)){
                            return redirect()->back()->with('error', 'Coupon Invalid! Please try another one');
                        }else {
                            $correct_coupon=true;
                        }
                    }else {
                        return redirect()->back()->with('error', 'Something went wrong!');
                    }

                }else {
                    return redirect()->back()->with('error', 'Coupon Invalid! Please try another one');
                }
            }
        }else {
            $correct_coupon=true;
        }

        $discount = 0;
        $discounted_amount = 0;
        $coupon_name = '0';
        if(isset($coupon) && $correct_coupon){
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
            try{
                $coupon_name = $request->c;
                $discount_a = \Illuminate\Support\Facades\Crypt::decrypt($request->d);
            }catch (\Exception $e){
                return redirect()->route('customer.shopping.bag')->with('error', 'Something went wrong, please try again.');;
            }

        $taxes = DB::table('settings')->select('shipping_time','gst')->first();

        $total = 0;
        $pid=[];
            foreach($cart_table as $cart_t){
                $total += ($cart_t->price * $cart_t->quantity);
                $pid[]=[
                    "count"=>$cart_t->quantity,
                    "pid"=>$cart_t->product_id
                ];
            }
            $shipping_amount=0;
            foreach ($pid as $ps){
                $Amount=0;
                    if(isset($ps["pid"])){
                        $pst=Product::find($ps["pid"]);
                        $c=$ps["count"]??1;
                        if(isset($pst))
                            if($pst->shipping_fees_us) {
                                if($pst->shipping_type==2){
                                    $Amount=$pst->shipping_fees_us*$c;
                                }else {
                                    $Amount=0;
                                }

                            }
                        if(isset($Amount))
                        {
                            $shipping_amount+=$Amount;
                        }
                    }

            }

        $countries = Country::all();
        return response()->view('customer.cart.checkout', compact('taxes','cart_table','total','coupon_name','discount_a', 'addresses','customer','countries','shipping_amount'))->header('Cache-Control', 'no-store, no-cache, must-revalidate, max-age=0')
                ->header('Pragma', 'no-cache')
                ->header('Expires', 'Fri, 01 Jan 1990 00:00:00 GMT');;
    }

    public function removeCartItem($id){
        //  json_decode($_COOKIE['cart_cookie'])[$id];

        $arrays = json_decode($_COOKIE['cart_cookie'], true);
        unset($arrays[$id]);

        setcookie('cart_cookie', json_encode($arrays), time() + 3600, "/");
        return redirect()->route('customer.shopping.bag');
    }

    public function deleteCartTableItem($id){
        if($id){
            $item =Cart::find($id);
            if($item){
                $item->delete();
            }
        }
        return redirect()->route('customer.shopping.bag');
    }

    public function placeOrder(Request $request){
        try{
            $productsCart = Cart::select('id','title','price','quantity')->whereIn('id', $request->product_ids)->get() ?? [];

            $currency_code = Session::get('currency_code', 'USD');
            if(!Session::get('user')){
                $this->validate($request, [
                    'email' => 'required|email',
                    'name' => 'required|string',
                    'phone_number' => 'required',
                ]);
                $email = $request->email;
                $name = $request->name;
                $last_name = $request->last_name;
                $phone_number = $request->phone_number;
                $phone_code = $request->phone_code;
                $userId=$this->findAndUseExistUser($request->email);
                if(!isset($userId)){
                    $userId = $this->createGuestUser($email, $name,$last_name,$phone_number,$phone_code);
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
            $customer_session_id = Session::getId();
            $orderId ='#'.mt_rand(1111, 99999);
            $stripe = Stripe\Stripe::setApiKey(config('services.stripe.stripe_secret'));
            header('Content-Type: application/json');
            $productsCart = Cart::select('id', 'title', 'price', 'quantity')
                ->whereIn('id', $request->product_ids)
                ->get();

            //tax rate
            $taxRate = \Stripe\TaxRate::create([
                'display_name' => 'Tax',
                'description' => 'Sales Tax',
                'percentage' => $request->gst,
                'inclusive' => false,
            ]);



            $line_items = [];

            foreach ($productsCart as $product) {
                $price = \Stripe\Price::create([
                    'unit_amount' => (int)($product->price * 100),
                    'currency' => $pay_currency,
                    'product_data' => [
                        'name' => $product->title,
                    ],
                ]);

                $line_items[] = [
                    'price' => $price->id,
                    'quantity' => (int)$product->quantity,
                    'tax_rates' => [$taxRate->id],
                ];
            }


            //coupon code
            $couponCode = $request->coupon_name;
            $couponId = $this->applyCoupon($pay_currency, $couponCode);

            //shipping
            $shipping_charge = $request->shipping;
            $shipping_options = [];
            if ($shipping_charge > 0 ) {
                $shipping_options[] = [
                    'shipping_rate_data' => [
                        'type' => 'fixed_amount',
                        'fixed_amount' => [
                            'amount' => $shipping_charge * 100,
                            'currency' => $pay_currency,
                        ],
                        'display_name' => 'Fallback Shipping',
                        'delivery_estimate' => [
                            'minimum' => ['unit' => 'business_day', 'value' => 10],
                            'maximum' => ['unit' => 'business_day', 'value' => 15],
                        ],
                    ],
                ];
            }

            $checkout_session_params = [
                'line_items' => $line_items,
                'customer_email' => $email,
                'mode' => 'payment',
                'success_url' => route('customer.success.response', [
                    'order_id' => $orderId,
                    'userId' => $userId,
                    'email' => $email,
                    'type' => $type,
                    'tSessId' => $customer_session_id
                ]),
                'cancel_url' => route('customer.cancel.response'),
                'shipping_address_collection' => null,
                'billing_address_collection' => 'auto'
            ];

            if ($shipping_charge > 0) {
                $checkout_session_params['shipping_options'] = $shipping_options;
            }

            if ($couponId) {
                $checkout_session_params['discounts'] = [
                    [
                        'coupon' => $couponId,
                    ]
                ];
            }

            $checkout_session = \Stripe\Checkout\Session::create($checkout_session_params);
            $coupon_amount=0;
            $coupon_detail = Coupon::select('id','coupon_name','type','value')->where('coupon_name', Crypt::decrypt($request->coupon_name))->first();
            if ($coupon_detail) {
                $isPercentage = $coupon_detail->type;
                if($isPercentage == 2){
                    $couponAmount = $coupon_detail->value;
                    $coupon_amount=   $request->cart_subtotal* $couponAmount/100;

                }else{
                    $coupon_amount = $coupon_detail->value;
                }
            }
            $order = Order::create([
               'user_id' => $userId,
               'trx_id' => $checkout_session->id,
               'order_number' => $orderId,
               'coupon' => $request->coupon,
               'cart_subtotal' => $request->cart_subtotal,
               'discounted_amount' => $coupon_amount,
               'shipping' => $request->shipping,
               'gst' => $request->gst,
//               'grand_total' => 69,
               'billing_street' => $request->billing_street,
               'billing_flat_suite' => $request->billing_flat_suite,
               'billing_city' => $request->billing_city,
               'billing_state' => $request->billing_state,
               'billing_country' => $request->billing_country,
               'billing_postcode' => $request->billing_postcode,
               'billing_address_line_2' => $request->billing_address_line_2,
               'shipping_address_line_2' => $request->shipping_address_line_2,
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
                       'name'=>$request->name,
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
                       'color' => $carts->cover_image,
                       'sku_code' => $carts->sku_code,
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

    protected function applyCoupon($pay_currency, $couponCode = null) {

        $coupon_detail = Coupon::select('id','coupon_name','type','value')->where('coupon_name', Crypt::decrypt($couponCode))->first();

        if (!$coupon_detail) {
            return null;
        }
        $isPercentage = $coupon_detail->type;
        if($isPercentage == 2){
            $couponAmount = $coupon_detail->value;
        }else{
            $couponAmount = $coupon_detail->value * 100;
        }
        try {
            $existingCoupon = \Stripe\Coupon::retrieve($couponCode);
            return $existingCoupon->id;
        } catch (\Stripe\Exception\InvalidRequestException $e) {
            try {
                if ($isPercentage == 2) {
                    $coupon = \Stripe\Coupon::create([
                        'percent_off' => $couponAmount,
                        'currency' => $pay_currency,
                        'duration' => 'once',
                        'id' => $couponCode
                    ]);
                } else {
                    $coupon = \Stripe\Coupon::create([
                        'amount_off' => $couponAmount,
                        'currency' => $pay_currency,
                        'duration' => 'once',
                        'id' => $couponCode
                    ]);
                }
                return $coupon->id;
            } catch (\Stripe\Exception\InvalidRequestException $e) {
                return null;
            }
        }
    }



    public function checkoutSuccess(Request $request){
       $stripe = Stripe\Stripe::setApiKey(config('services.stripe.stripe_secret'));
            $orderId = $request->order_id;
            $order =  Order::where('order_number',$orderId)->first();
            $checkout =  \Stripe\Checkout\Session::retrieve($order->trx_id);

            $order->update([
                'status' => $checkout->status,
                'payment_status' => $checkout->payment_status,
                'payment_complete'=>true,
                'grand_total' => number_format($checkout->amount_total / 100, 2),
            ]);
            if($request->type == 'guest'){
                Cart::where('session_id', $request->tSessId)->delete();
                Cart::where('user_id', $request->userId)->delete();
            }else{
                Cart::where('session_id', $request->tSessId)->delete();
                Cart::where('user_id', $request->userId)->delete();
            }

        $customer= Customer::where('id',$request->userId)->first();
            $customer_name="Customer";
            if(isset($customer)){
                $customer_name=$customer->name;
            }
            $order["customer_first_name"]=$customer_name;

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

            if(!$order['is_shipping_same']){
                $order['shipping_address']=$order["shipping_flat_suite"]." ".$order["shipping_street"]." ".$order["shipping_city"]." ".$order["shipping_state"]." ".$order["shipping_country"]." ".$order["shipping_postcode"];
            }else {
                $order['shipping_address']=$order["billing_flat_suite"]." ".$order["billing_street"]." ".$order["billing_city"]." ".$order["billing_state"]." ".$order["billing_country"]." ".$order["billing_postcode"];
            }
        $pdfPath=null;
        try {
        $pdf = PDF::loadView('reports.invoice_customer', ['id' => $order["id"]]);
        $pdfPath = storage_path('app/public/order_invoices/' . 'invoice_' . $order["id"] . '.pdf');
        $pdf->save($pdfPath);
        $place_order = new OrderPlaceMail($order,$pdfPath);
        Mail::to($request->email)->send($place_order);

            if (file_exists($pdfPath)) {
                unlink($pdfPath);
            }
        } catch (\Exception $e) {
            // Handle any errors
            \Log::error('Error sending order confirmation email: ' . $e->getMessage());

            // Ensure cleanup even if an error occurs
            if (file_exists($pdfPath)) {
                unlink($pdfPath);
            }
        }


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

        public function getUserPostalCode(Request $request){
            $shippingType = $request->input('shipping_type');

            if($shippingType=="0"){
                $totalShippingCharges=0;
                return response()->json((int)$totalShippingCharges);
            }
            $postalCode = $request->input('postal_code');

            if(!isset($postalCode)){
                $totalShippingCharges=0;
                return response()->json((int)$totalShippingCharges);
            }

            if(empty($postalCode)){
                $totalShippingCharges=0;
                return response()->json((int)$totalShippingCharges);
            }


            if(Session::get('user')){
            $customer = Customer::find((Session::get('user')->id));
            $addresses = UserAddress::where('user_id', Session::get('user')->id)->get();
            $cart_table =  Cart::where('user_id', Session::get('user')->id)->get();
        }else{
            $customer = Session::getId();
            $addresses = [];
            $cart_table =  DB::table('carts')->where('session_id', $customer)->get();
        }
            $query = PostalCode::query();
            // Clean postal code input by removing spaces
            if ($postalCode) {
                // Remove spaces from the postal code
                $postalCode = str_replace(' ', '', $postalCode);

                // Use 'like' query for postal code without spaces
                $query->whereRaw("REPLACE(postal_code, ' ', '') LIKE ?", ["$postalCode%"]);
            }

            $postalData = $query->first();
         $totalShippingCharges = 0; // Initialize total shipping charges
            if($postalData){
                $countryCode = $postalData->country??"-";
            }
        // Iterate through the cart items
        foreach ($cart_table as $cartItem) {
            $product = DB::table('products')->where('id', $cartItem->product_id)->first();
            if ($product) {
                if ($product->shipping_type == 1) {
                    // Shipping charges are 0 for type 1
                    $shippingCharges = 0;
                } else if ($product->shipping_type == 2) {
                    // Get the country code from session
                    $shippingCharges = $product->shipping_fees_us;
//                    if ($countryCode == 'US') {
//                        $shippingCharges = $product->shipping_fees_us;
//                    } elseif ($countryCode == 'CA') {
//                        $shippingCharges = $product->shipping_fees_can;
//                    }

//                    else {
//                        $shippingCharges = 0; // Default to 0 for unsupported countries
//                    }
                } else {
                    $shippingCharges = 0; // Default to 0 for unknown shipping types
                }

                // Add the shipping charges for the current product to the total
                $totalShippingCharges += ($shippingCharges*$cartItem->quantity);
            }
        }

        return response()->json((int)$totalShippingCharges);
    }


    public function findAndUseExistUser($email)
    {
        $customer= Customer::select('id')->where('email',$email)->first();
        if(isset($customer)){
            return $customer->id;
        }
       return null;
    }
    public function createGuestUser($email, $name, $last_name=null,$phone=null,$phone_code=null)
    {
        $stripe = Stripe\Stripe::setApiKey(config('services.stripe.stripe_secret'));

        $customer = \Stripe\Customer::create([
            'email' => $email,
            'name' => $name,
        ]);

        $customer = Customer::create([
            'stripe_id' => $customer->id,
            'name' => $name,
            'last_name' => $last_name,
            'phone_code' => $phone_code,
            'phone_number' => $phone,
            'email' => $email,
            'is_guest' => true,
            'password' => Hash::make(rand(10000000, 99999999)),
        ]);

        return $customer->id;
    }
}
