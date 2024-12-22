<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\ProductFeature;
use App\Models\ProductImage;
use App\Traits\UploadImageNameTrait;
use Illuminate\Http\Request;

class ProductMediaController extends Controller
{
    use UploadImageNameTrait;
    public function open_media_form(Request $request,$id){
        $product=Product::find($id);
        $color =  $request->color ?? 'amber';
        $product_images=ProductImage::where('product_id',$id)->where('color', $color)->get();
        // dd($product_images);
        return view('product.media.index',compact('product','product_images'));
    }

    public function open_product_features_form(Request $request,$id){
        $product=Product::find($id);

        $productFeatures=  ProductFeature::where('product_id',$id)->orderby('order','asc')->get();
        return view('product.features_content.index',compact('product','productFeatures'));
    }

    public function open_product_features_edit_form(Request $request,$id,$f_id){
        $product=Product::find($id);
        $productFeaturesItem=null;
        $productFeatures=  ProductFeature::where('product_id',$id)->orderby('order','asc')->get();
        foreach ($productFeatures as $productFeature_item){
                if($productFeature_item->id==$f_id){
                    $productFeaturesItem=$productFeature_item;
                }
        }
        return view('product.features_content.edit',compact('product','productFeatures','productFeaturesItem'));
    }


    public function open_product_features_delete($id)
    {
        $record = ProductFeature::find($id);
        if($record->delete()){
            return back()->with('success', 'Feature Deleted!');
        }
        return back()->with('error', 'Sorry cannot delete!');
    }


    public function open_product_features_Store(Request $request){

//        $request->validate([
//            'product_feature_id' > 'nullable',
//            'product_id' => 'required|exists:products,id',
//            'icon' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
//            'heading_text' => 'required|string|max:255',
//            'status' => 'required',
//        ]);

        if ($request->filled('product_feature_id')) {
            $productFeature = ProductFeature::findOrFail($request->product_feature_id);
            // Update the record with new data
            $productFeature->product_id = $request->product_id;
            $productFeature->heading_text = $request->heading_text;
            $productFeature->status = $request->status;
            $productFeature->order = $request->order;

            if ($request->hasFile('icon')) {
                if ($productFeature->icon) {
                  $this->deleteImageWithName($productFeature->icon);
                }
                $productFeature->icon =$this->storeImageWithName($request->file('icon'));
            }
            $productFeature->save();
            $message = 'Product feature updated successfully.';
        } else {

            $image_path = null;
            if ($request->hasFile('icon')) {
                $image_path=$this->storeImageWithName($request->file('icon'));
            }
            ProductFeature::create([
                'product_id' => $request->product_id,
                'icon' => $image_path,
                'heading_text' => $request->heading_text,
                'status' => $request->status,
                'order' => $request->order,
            ]);
            $message = 'Product feature created successfully.';
        }

        return back()->with('success', $message);
    }

    public function open_media_form_ajax(Request $request,$id){
        $product=Product::find($id);
        $color =  $request->color ?? 'amber';
        $product_images=ProductImage::where('product_id',$id)->where('color', $color)->get();

        if($request->frontSlider){
            return response()->json($product_images);
        }
        return view('partials.pro_gallery',compact('product_images'));

    }

    public function store(Request $request){
        $request->validate([
            'solar_image' => 'required|image|mimes:jpg,png,jpeg,webp,gif,svg|max:2048',
        ]);
        $product=Product::find($request->product_id);
//        $image_path = $request->file('solar_image')->store('image', 'public');
        $image_path=$this->storeImageWithName($request->file('solar_image'));

        $product->solar_image=$image_path;
        $product->save();
        return back()->with('success', 'Solar Image is successfully uploaded');
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
                $image_path=$this->storeImageWithName($file);
//                $image_path = $file->store('image', 'public');
//                $files[] = $image_path;
                if(isset($image_path)){
                    ProductImage::create([
                        'image' => $image_path,
                        'product_id' => $product->id,
                        'color' => $request->color
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
