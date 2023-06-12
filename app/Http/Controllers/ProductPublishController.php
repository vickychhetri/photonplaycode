<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductPublishController extends Controller
{

    public function open_publish_form(Request $request,$id){
        $product=Product::find($id);
        return view('product.publish.index',compact('product'));
    }

    public function product_publish_update(Request $request){

        $input = $request->only(['status']);
        Product::updateOrCreate([
            'id'=>$request->product_id,],
            $input
        );
        return back()->with('status', 'Status changed successfully !');
    }
}
