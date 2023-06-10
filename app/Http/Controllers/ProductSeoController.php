<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\ProductSeo;
use Illuminate\Http\Request;

class ProductSeoController extends Controller
{
    //open_seo_form
    public function open_seo_form(Request $request,$id){
        $product=Product::find($id);
        $product_seo=ProductSeo::where('id','1')->get()->first();

        return view('product.seo.index',compact('product','product_seo'));
    }
    public function open_seo_edit_store(Request $request){

        $request->validate([
            'meta_title' => 'required',
            'meta_description' => 'required',
            'meta_keywords' => 'required',
        ]);

        $product_seo=ProductSeo::updateOrCreate([
            'product_id'=>$request->product_id,],
            $request->except(['_token'])
        );
        return back()->with('success', 'Meta successfully updated');
    }

}
