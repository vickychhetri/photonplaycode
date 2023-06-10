<?php

namespace App\Http\Controllers\customer;

use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Models\Product;
use Illuminate\Http\Request;

class CustomerOrderController extends Controller
{
        public function  show_order(Request $request,$id){
            $order=Order::with(['orderedProducts','user'])->find($id);
            if(!isset($order)){
                return abort(404);
            }
            foreach($order->orderedProducts as $prd){
                $prd["title"]=Product::find($prd->product_id)->title;
                $prd["cover_image"]=Product::find($prd->product_id)->cover_image;
            }
            dd($order);
            return view('customer.profile.track_order',compact('order'));
        }
}
