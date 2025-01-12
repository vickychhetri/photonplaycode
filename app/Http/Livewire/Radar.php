<?php

namespace App\Http\Livewire;

use App\Models\Cart;
use App\Models\Product;
use App\Models\ProductImage;
use App\Models\ProductSpcializationOption;
use App\Models\ProductSpecilization;
use App\Models\SpecializationOption;
use App\Models\Specilization;
use App\Models\UserPostalCode;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Livewire\Component;

class Radar extends Component
{
    public $sessionId,$product = [],$productLists,$postalCode,$cartCount, $productId, $cartItems, $exchange_rate,$postal_code,$price,$quantity,$title,$category,$cover_image,$Pid, $exchangeRate,$specPrice = 0, $initial_price, $optionsIds = [], $sum,$total_price, $currency_icon ,$Pid_a,$price_a,$title_a,$category_a,$quantity_a = 1,$cover_image_a,$currency_icon_a,$exchangeRate_a;

    public $linked_products;
    public  $currency_icon_selected;
    public $product_id;
    public $product_sku_code;
    public $color = 'Amber-Color.png';
    public $dynamic_specs = [];
    public function mount($product_id)
    {
        $this->product_id = $product_id;
        $this->sessionId = Session::getId();
        $this->exchangeRate = Session::get('exchange_rate', 1);
        $this->currency_icon_selected = Session::get('currency_icon', '$');

        $this->currency_icon = Session::get('currency_icon', '$');

        $this->product = Product::with([
            'images' => fn($r) => $r->where('color', 'amber'),
            'specilizations.specilization',
            'specilizations.options',
            'specilizations.options.specializationoptions',
            'category',
            'product_features'
        ])
            ->where('slug', $this->productId)
            ->first();

        $this->quantity = 1;
        $country_code = Session::get('country_code', 'US');
        if ($this->product) {
            if($country_code=="CA"){
                $this->price = $this->product->price_canada * $this->exchangeRate;
                $this->initial_price = $this->product->price_canada * $this->exchangeRate;
            }else {
                $this->price = $this->product->price * $this->exchangeRate;
                $this->initial_price = $this->product->price * $this->exchangeRate;
            }
            $this->title = $this->product->title;
            $this->cover_image = $this->product->cover_image;
            $this->category = $this->product->category->id;
            $this->Pid = $this->product->id;
        }

        //list all accessories


    }

    public function render()
    {
        $this->exchange_rate = Session::get('exchange_rate', 1);
        $this->currency_icon_selected = Session::get('currency_icon', '$');

        $this->productLists = Product::with(['category'])
            ->where('category_id', 1)
            ->take(5)
            ->get();


        $this->postalCode = 0;
        if (Session::get('user')) {
            $this->cartCount = Cart::where('user_id', Session::get('user')->id)->count();
            $this->cartItems = Cart::where('user_id', Session::get('user')->id)->get();
            $this->postalCode = UserPostalCode::where('user_id', Session::get('user')->id)->first();
        } else {
            $this->postalCode = UserPostalCode::where('session_id', $this->sessionId)->first();
            $this->cartCount = Cart::where('session_id', $this->sessionId)->count();
            $this->cartItems = Cart::where('session_id', $this->sessionId)->get();
        }

        $this->linked_products=Product::getLinkedProducts([$this->Pid]);

        foreach ($this->linked_products as $linked_product) {
            $this->title_a = $linked_product->product_heading_text ?? $linked_product->title;
            $this->cover_image_a = $linked_product->brochure;
        }
        return view('livewire.radar', [
            'productLists' => $this->productLists,
            'postalCode' => $this->postalCode,
            'cartCount' => $this->cartCount,
            'id' => $this->productId,
            'cartItems' => $this->cartItems,
            'linked_products' => $this->linked_products,
        ]);
    }

    public function addToCart(){
        $impodeSpec = array();
//        if(isset($this->dynamic_specs)){
//            foreach($this->dynamic_specs as $specs){
//                $implodeSpec[] = $specs;
//                $specss = DB::table('product_spcialization_options')
//                    ->where('id', $specs)
//                    ->get()
//                    ->map(function ($item) {
//                        $item->specialization_price *= $this->exchangeRate;
//                        return $item;
//                    });
//
//                $this->specPrice = $specss->sum('specialization_price');
//
//            }
//        }

//            print_r($this->dynamic_specs);
        $color_code=null;
        if(isset($this->dynamic_specs)){
            foreach($this->dynamic_specs as $key => $specs) {
                $spec_general=Specilization::where('code','CR')->first();
               $p_specs= ProductSpecilization::where('specialization_id',$spec_general->id)->where('product_id',$this->Pid)->first();
               if(isset($p_specs->id) && isset($key)){
                   if($p_specs->id==$key){
                           $pso=ProductSpcializationOption::where('id',$specs)->where('product_id',$this->Pid)->first();
                           if($pso){
                          $optin=SpecializationOption::find($pso->specialization_option_id);
                          if(isset($optin)){

                              $color_code=$optin->code;
                              break;
                          }
                      }
                   }
               }

            }
        }

        if( $this->postalCode){
            if(Session::get('user')){
                UserPostalCode::where('user_id', Session::get('user')->id)->delete();
            }
            UserPostalCode::where('session_id', $this->sessionId)->delete();
            UserPostalCode::updateOrCreate([
                'user_id' => Session::get('user')->id ?? null,
                'session_id' => $this->sessionId,
            ],[
                'postal_code' =>  $this->postalCode,
            ]);
        }
        $color =[
            'AM'=>'amber',
            'WH'=>'white',
            'GC'=>'green'
        ];
        if(isset($color_code)){
            $img=ProductImage::select('image')->where('product_id',$this->id)->where('color',$color[$color_code])->first();
            if(isset($img)){
                $this->cover_image=$img->image;
                dd($img->image);
            }
        }

        dd( $this->cover_image);

        if(!Session::get('user')){
            $cart = Cart::where(['session_id' => $this->sessionId, 'product_id' => $this->Pid, 'price' => $this->price])->first();

            if($cart){
                $cart->update(['quantity' => $cart->quantity + $this->quantity]);
            }else{
                Cart::create([
                    'session_id' => $this->sessionId,
                    'option_ids' => serialize($this->dynamic_specs) ?? null,
                    'product_id' => $this->Pid,
                    'price' => $this->price,
                    'title' => $this->title,
                    'color' => $this->color,
                    'category' => $this->category,
                    'quantity' => $this->quantity,
                    'cover_image' => $this->cover_image,
                    'currency_code'=> $this->currency_icon,
                    'exchange_rate'=>$this->exchangeRate,
                    'sku_code'=> $this->product_sku_code
                ]);
            }

        }else{
            $cart = Cart::where(['user_id' => Session::get('user')->id, 'product_id' => $this->Pid, 'price' => $this->price,])->first();

            if($cart){
                $cart->update(['quantity' => $cart->quantity + $this->quantity]);
            }else{
                Cart::create([
                    'user_id' => Session::get('user')->id,
                    'product_id' => $this->Pid,
                    'option_ids' => serialize($this->dynamic_specs) ?? null,
                    'price' => $this->price,
                    'title' => $this->title,
                    'category' => $this->category,
                    'quantity' => $this->quantity,
                    'cover_image' => $this->cover_image,
                    'color' => $this->color,
                    'currency_code'=> $this->currency_icon,
                    'exchange_rate'=>$this->exchangeRate,
                    'sku_code'=> $this->product_sku_code
                ]);
            }

        }
        $total_count = 0;
        if(!Session::get('user')){
            $cart_table =  Cart::select('quantity')->where('session_id', Session::getId())->get();
            foreach($cart_table as $cart_t){
                $total_count += $cart_t->quantity;
            }
        }else {
            $cart_table =  Cart::select('quantity')->where('user_id', Session::get('user')->id)->get();
            foreach($cart_table as $cart_t){
               $total_count += $cart_t->quantity;
            }
        }
        $this->emit('cartUpdated', $total_count);
    }


    public function navigateToShopping(){
        return redirect()->route('customer.shopping.bag');
    }

    public function updatedColor($value)
    {
        $this->color = $value;
    }

    public function addAccessory(){

        if(!Session::get('user')){
            Cart::create([
                'session_id' => $this->sessionId,
                'product_id' => $this->Pid_a,
                'price' => $this->price_a,
                'title' => $this->title_a,
                'category' => $this->category_a,
                'quantity' => $this->quantity_a,
                'cover_image' => $this->cover_image_a,
                'currency_code'=> $this->currency_icon_a,
                'exchange_rate'=>$this->exchangeRate_a,
            ]);
        }else{
            Cart::create([
                'user_id' => Session::get('user')->id,
                'product_id' => $this->Pid_a,
                'price' => $this->price_a,
                'title' => $this->title_a,
                'category' => $this->category_a,
                'quantity' => $this->quantity_a,
                'cover_image' => $this->cover_image_a,
                'currency_code'=> $this->currency_icon_a,
                'exchange_rate'=>$this->exchangeRate_a,
            ]);
        }
        $total_count = 0;
        if(!Session::get('user')){
            $cart_table =  Cart::select('quantity')->where('session_id', Session::getId())->get();
            foreach($cart_table as $cart_t){
                $total_count += $cart_t->quantity;
            }
        }else {
            $cart_table =  Cart::select('quantity')->where('user_id', Session::get('user')->id)->get();
            foreach($cart_table as $cart_t){
                $total_count += $cart_t->quantity;
            }
        }
        $this->emit('cartUpdated', $total_count);
    }






}

