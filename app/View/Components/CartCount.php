<?php

namespace App\View\Components;

use App\Models\Cart;
use Illuminate\Support\Facades\Session;
use Illuminate\View\Component;

class CartCount extends Component
{
    public $total_count;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        $this->total_count = 0;
        if(!Session::get('user')){
            $cart_table =  Cart::select('quantity')->where('session_id', Session::getId())->get();
            foreach($cart_table as $cart_t){
                $this->total_count += $cart_t->quantity;
            }
        }else {
            $cart_table =  Cart::select('quantity')->where('user_id', Session::get('user')->id)->get();
            foreach($cart_table as $cart_t){
                $this->total_count += $cart_t->quantity;
            }
        }

        return view('components.cart-count');
    }
}
