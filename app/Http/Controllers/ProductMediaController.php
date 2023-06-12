<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\ProductImage;
use Illuminate\Http\Request;

class ProductMediaController extends Controller
{
    public function open_media_form(Request $request,$id){
        $product=Product::find($id);
        $product_images=ProductImage::where('product_id',$id)->get();
        return view('product.media.index',compact('product','product_images'));
    }

    public function store(Request $request){
        $request->validate([
            'cover_image' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
        ]);
        $product=Product::find($request->product_id);
        $image_path = $request->file('cover_image')->store('image', 'public');
        $product->cover_image=$image_path;
        $product->save();

        return back()->with('success', 'Images are successfully uploaded');
    }

    public function store_all_images(Request $request){
        print("run store ");
//
//        $request->validate([
//            'product_id'=>'required',
//            'images'=>'required',
//            'images.*' => 'image|mimes:webp,jpg,png,jpeg,gif,svg|max:2048',
//        ]);
//        print_r($request->all());
//        dd($request->all());
        $product = Product::find($request->product_id);
        $files = [];
        if($request->hasfile('images'))
        {
            foreach($request->file('images') as $file) {
                $image_path = $file->store('image', 'public');
                $files[] = $image_path;
                if(isset($image_path)){
                    ProductImage::create([
                        'image' => $image_path,
                        'product_id' => $product->id
                    ]);
                }
            }}
//        print_r($files);
        return back()->with('success', 'Images are successfully uploaded');
    }

        public function delete_images($id)
        {
                $record = ProductImage::find($id);
                $record->delete();
                return response()->json([
                    'isDeleted'=>true,
                    'message'=>'Image deleted successfully !'
                ],200);
        }



}
