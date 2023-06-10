<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\ProductPricing;
use Illuminate\Http\Request;

class ProductPricingController extends Controller
{
    public function open_pricing_form(Request $request,$id){
        $product=Product::find($id);
        $product_price=ProductPricing::where('product_id',$id)->first();
        return view('product.pricing.index',compact('product','product_price'));
    }

    public function open_pricing_store(Request $request){
        $request->validate([
            'cost_price' => 'required',
            'price_type_set' => 'required|in:normal,sale',
            'discount' => 'required',
        ]);


        $product=Product::find($request->product_id);
        $product=ProductPricing::updateOrCreate([
            'product_id'=>$request->product_id,],
            $request->except(['_token','quantity'])
        );
        return back()->with('success', 'Prices successfully updated');
    }

    public function open_quantity_store(Request $request){
        $request->validate([
            'quantity' => 'required',
        ]);

        $product_quantity=ProductPricing::where('product_id',$request->product_id)->update(['quantity'=>$request->quantity]);
//        $product_quantity->quantity=;
//        $product_quantity->save();

        return back()->with('success', 'Quantity successfully updated');
    }

}
