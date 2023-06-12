<?php

namespace App\View\Components\Admin;

use App\Models\Order;
use App\Models\Product;
use Illuminate\View\Component;

class Invoice extends Component
{
    public $order;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($order)
    {
        $order_detail=Order::with(['orderedProducts','user'])->find($order);
        foreach($order_detail->orderedProducts as $prd){
            $prd["title"]=Product::find($prd->product_id)->title;
            $prd["cover_image"]=Product::find($prd->product_id)->cover_image;
        }

       $this->order=$order_detail;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.admin.invoice');
    }
}
