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
    public $sessionId,$product = [],$productLists,$postalCode,$cartCount, $productId, $cartItems, $exchange_rate,$postal_code,$price,$quantity,$title,$category,$cover_image,$Pid;

    public $product_id;
    public $color = 'Amber-Color.png';
    public $dynamic_specs = [];
    public function mount($product_id)
    {
        $this->product_id = $product_id;
        $this->sessionId = Session::getId();
        $this->product = Product::with([
            'images' => fn($r) => $r->where('color', 'amber'),
            'specilizations.specilization',
            'specilizations.options',
            'specilizations.options.specializationoptions',
            'category'
        ])
            ->selectRaw('products.*, products.price * ? as adjusted_price', [$this->exchange_rate]) // Multiply price by exchange rate
            ->where('slug', $this->productId)
            ->first();

        $this->quantity = 1;

        if ($this->product) {
            $this->price = $this->product->price;
            $this->title = $this->product->title;
            $this->cover_image = $this->product->cover_image;
            $this->category = $this->product->category->id;
            $this->Pid = $this->product->id;
        }
    }

    public function render()
    {
        $this->exchange_rate = Session::get('exchange_rate', 7);

        if ($this->product) {
            $this->product->price = $this->product->adjusted_price;
            unset($this->product->adjusted_price);
        }
        $this->productLists = Product::selectRaw('products.*, products.price * ? as adjusted_price', [$this->exchange_rate]) // Multiply
        ->with(['category'])
            ->where('category_id', 1)
            ->take(5)
            ->get();

        foreach ($this->productLists as $product) {
            $product->price = $product->adjusted_price;
            unset($product->adjusted_price);
        }

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
//            'product' => $this->product,
            'productLists' => $this->productLists,
            'postalCode' => $this->postalCode,
            'cartCount' => $this->cartCount,
            'id' => $this->productId,
            'cartItems' => $this->cartItems,
        ]);
    }

    public function addToCart(){
        $specPrice = 0;

        $impodeSpec = array();
        if(isset($this->dynamic_specs)){
            foreach($this->dynamic_specs as $specs){
                $implodeSpec[] = $specs;
                $specPrice += DB::table('product_spcialization_options')->where('id', $specs)->value('specialization_price');
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
                    'price' => $this->price + $specPrice,
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
                    'price' => $this->price + $specPrice,
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

