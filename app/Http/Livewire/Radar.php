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
    public $sessionId,$product = [],$productLists,$postalCode,$cartCount, $productId, $cartItems, $exchange_rate,$postal_code,$price,$quantity,$title,$category,$cover_image,$Pid, $exchangeRate,$specPrice = 0, $initial_price, $optionsIds = [], $sum,$total_price, $currency_icon ;
    public $linked_products;

    public $product_id;
    public $color = 'Amber-Color.png';
    public $dynamic_specs = [];
    public function mount($product_id)
    {
        $this->product_id = $product_id;
        $this->sessionId = Session::getId();
        $this->exchangeRate = Session::get('exchange_rate', 1);
        $this->currency_icon = Session::get('currency_icon', 'USD');

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

        if ($this->product) {
            $this->price = $this->product->price * $this->exchangeRate;
            $this->initial_price = $this->product->price * $this->exchangeRate;
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
        if(isset($this->dynamic_specs)){
            foreach($this->dynamic_specs as $specs){
                $implodeSpec[] = $specs;
                $specss = DB::table('product_spcialization_options')
                    ->where('id', $specs)
                    ->get()
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
                    'price' => $this->price,
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
                    'price' => $this->price,
                    'title' => $this->title,
                    'category' => $this->category,
                    'quantity' => $this->quantity,
                    'cover_image' => $this->cover_image,
                    'color' => $this->color,
                ]);
            }

        }
    }


    public function navigateToShopping(){
        return redirect()->route('customer.shopping.bag');
    }

    public function updatedColor($value)
    {
        $this->color = $value;
    }








}

