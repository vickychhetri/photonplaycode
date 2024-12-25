<?php

namespace App\Http\Livewire;

use App\Models\Cart;
use App\Models\Product;
use App\Models\UserPostalCode;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Livewire\Component;

class Radar extends Component
{
    public $sessionId,$product = [],$productLists,$postalCode,$cartCount, $productId, $cartItems, $exchange_rate,$postal_code,$price,$quantity,$title,$category,$cover_image,$Pid, $exchangeRate,$specPrice = 0, $initial_price, $optionsIds = [], $sum ;

    public $product_id;
    public $color = 'Amber-Color.png';
    public $dynamic_specs = [];
    public function mount($product_id)
    {
        $this->product_id = $product_id;
        $this->sessionId = Session::getId();
        $this->exchangeRate = Session::get('exchange_rate', 2);

//        $this->sum =  Session::get('options_ids')
//            ? array_sum(array_column(Session::get('options_ids'), 'specialization_price'))
//            : 2;
//dd($this->sum);
        $this->product = Product::with([
            'images' => fn($r) => $r->where('color', 'amber'),
            'specilizations.specilization',
            'specilizations.options',
            'specilizations.options.specializationoptions',
            'category'
        ])
            ->where('slug', $this->productId)
            ->first();

        $this->quantity = 1;

        if ($this->product) {
            $this->price = $this->product->price * $this->exchangeRate;
            $this->initial_price = $this->product->price * $this->exchangeRate;
            $this->title = $this->product->title;
            $this->cover_image = $this->product->cover_image;
            $this->category = $this->product->category->id;
            $this->Pid = $this->product->id;
        }

    }

    public function render()
    {
        Session::forget('options_ids');
        $this->exchange_rate = Session::get('exchange_rate', 7);

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

        return view('livewire.radar', [
            'productLists' => $this->productLists,
            'postalCode' => $this->postalCode,
            'cartCount' => $this->cartCount,
            'id' => $this->productId,
            'cartItems' => $this->cartItems,
        ]);
    }

    public function addToCart(){
//        dd(Session::get('options_ids'));
//        $this->sum =  Session::get('options_ids')
//            ? array_sum(array_column(Session::get('options_ids'), 'specialization_price'))
//            : 2;
//        dd($this->sum);
        $impodeSpec = array();
        if(isset($this->dynamic_specs)){
            foreach($this->dynamic_specs as $specs){
                $implodeSpec[] = $specs;
                $specss = DB::table('product_spcialization_options')
                    ->where('id', $specs)
                    ->get() // returns a collection of results
                    ->map(function ($item) {
                        $item->specialization_price *= $this->exchangeRate;
                        return $item;
                    });

                $this->specPrice = $specss->sum('specialization_price');
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

        if(!Session::get('user')){
            $cart = Cart::where(['session_id' => $this->sessionId, 'product_id' => $this->Pid, 'price' => $this->price])->first();

            if($cart){
                $cart->update(['quantity' => $cart->quantity + $this->quantity]);
            }else{
                Cart::create([
                    'session_id' => $this->sessionId,
                    'option_ids' => serialize($this->dynamic_specs) ?? null,
                    'product_id' => $this->Pid,
                    'price' => $this->price + $this->specPrice,
                    'title' => $this->title,
                    'color' => $this->color,
                    'category' => $this->category,
                    'quantity' => $this->quantity,
                    'cover_image' => $this->cover_image,
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
                    'price' => $this->price + $this->specPrice,
                    'title' => $this->title,
                    'category' => $this->category,
                    'quantity' => $this->quantity,
                    'cover_image' => $this->cover_image,
                    'color' => $this->color,
                ]);
            }

        }
        Session::forget('options_ids');
    }


    public function navigateToShopping(){
        return redirect()->route('customer.shopping.bag');
    }

    public function updatedColor($value)
    {
        $this->color = $value;
    }
//
//    public function updatedDynamicSpecs($value)
//    {
//        $this->price = $this->initial_price;
//
//        $spec_id = DB::table('product_spcialization_options')
//            ->select('id', 'specialization_price', 'product_specilizations_id')
//            ->find($value);
//
//        if ($spec_id) {
//            Session::put('options_ids',$this->storeIds($spec_id));
//        }
//
//    }
//
//    protected function storeIds($spec_id)
//    {
//        // Ensure the session has a key for options_ids
//        if (!Session::has('options_ids')) {
//            Session::put('options_ids', []);
//        }
//
//        // Get the options stored in session
//        $options = Session::get('options_ids');
//
//        // Log spec_id to inspect the value being passed
////        dd($spec_id);
//
//        // Find the key where product_specilizations_id matches
//        $existingSpecKey = array_search($spec_id->product_specilizations_id, array_column($options, 'product_specilizations_id'));
//
//        if ($existingSpecKey !== false) {
//            // Update the specialization price for the matching spec_id
//            $options[$existingSpecKey]->specialization_price = $spec_id->specialization_price;
//        } else {
//            // Add the new spec_id if no match is found
//            $options[] = $spec_id;
//        }
//return $options;
//        // Save the updated options back to the session
////        $r = Session::put('', $options);
//
//        // Debug the result of saving the session
////        dd($r);
//    }








}

