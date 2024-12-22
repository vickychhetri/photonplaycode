<?php

namespace App\Http\Livewire;

use App\Models\Cart;
use App\Models\Product;
use App\Models\UserPostalCode;
use Illuminate\Support\Facades\Session;
use Livewire\Component;

class Radar extends Component
{
    public $sessionId,$product = [],$productLists,$postalCode,$cartCount, $productId, $cartItems;

    public $product_id;

    public function mount($product_id)
    {
        $this->product_id = $product_id;
    }

    public function render()
    {
        $this->sessionId = Session::getId();
        $this->product = Product::with(['images' => fn ($r) => $r->where('color', 'amber'), 'specilizations.specilization', 'specilizations.options', 'specilizations.options.specializationoptions', 'category'])->where('slug', $this->productId)->first();
        $this->productLists = Product::where('category_id', 1)->take(5)->get();
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
            'product' => $this->product,
            'productLists' => $this->productLists,
            'postalCode' => $this->postalCode,
            'cartCount' => $this->cartCount,
            'id' => $this->productId,
            'cartItems' => $this->cartItems,
        ]);
    }
}

