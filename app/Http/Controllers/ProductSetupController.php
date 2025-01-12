<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use App\Models\ProductSpcializationOption;
use App\Models\ProductSpecilization;
use App\Models\SpecializationOption;
use App\Models\Specilization;
use Illuminate\Http\Request;

class ProductSetupController extends Controller
{
        public function product_edit_basic($id){
            $categories=Category::get();
            $product=Product::find($id);
            return view('product.edit-product',compact('categories','product'));
        }


    public  function add_specification_form($id){
        $specializations=Specilization::get();
        $product=Product::find($id);
        return view('product.addproduct-specification',compact('specializations','product'));
    }
    public  function add_specification_store(Request $request,$id){
        $request->validate([
            'specialization_id' => 'required',
            'product_id' => 'required',
        ]);
        $post= new ProductSpecilization();
        $post->product_id  = $request->product_id;
        $post->specialization_id = $request->specialization_id;
        $post->save();
        return redirect('admin/product/'.$request->product_id.'/edit');
    }

    public  function destroy_specification($id){
        $item= ProductSpecilization::find($id);
        if($item){
            $is_delete=$item->delete();
            return response()->json([
                'success'=>true,
                'message'=>'Deleted Successfully',
                'data'=>$item
            ],200);
        }else {
            return response()->json([
                'success'=>false,
                'message'=>'Unable to delete !',
            ],404);
        }
    }

    public function product_specification_options($pid,$id){
        $product=Product::find($pid);
        $product_spcialization_options=ProductSpcializationOption::with('specializationoptions')
            ->where('product_specilizations_id',$id)
            ->where('product_id',$pid)
            ->get();
        $Sr=1;
        $specialization_id=$id;
        return view('product.specific_option.index',compact( 'Sr','product_spcialization_options','product','specialization_id'));
    }

    public function product_specification_options_add_form($pid,$id){
        $product=Product::find($pid);
        $product_special=ProductSpecilization::find($id);

        $specialization_options=SpecializationOption::where('specialization_id',$product_special->specialization_id)->get();
        $Sr=1;
        return view('product.specific_option.create',compact( 'Sr','specialization_options','product','product_special'));
    }

    public function     product_specification_options_add_store(Request  $request){
        $request->validate([
            'specialization_option_id' => 'required',
            'specialization_price' => 'required',
            'product_specilizations_id' => 'required',
            'product_id'=>'required'
        ]);

        ProductSpcializationOption::updateOrCreate([
            'specialization_option_id'=> $request->specialization_option_id,
            'product_id'=> $request->product_id,
            'product_specilizations_id'=>$request->product_specilizations_id
        ],$request->except('_token'));
//        $post->save();
        return redirect('admin/product-specification-options/'.$request->product_id.'/'.$request->product_specilizations_id);

    }

    public function     product_specification_options_edit_store(Request  $request){
        $request->validate([
            'specialization_option_id' => 'required',
            'specialization_price' => 'required',
            'product_specilizations_id' => 'required',
            'product_id'=>'required'
        ]);


        $item=ProductSpcializationOption::find($request->product_specilizations_id);
        if(!isset($item)){
            abort(404);
        }
        $item->specialization_price=$request->specialization_price;
        $item->specialization_price_ca=$request->specialization_price_ca;
        $item->save();
        return redirect('admin/product-specification-options/'.$request->product_id.'/'.$item->product_specilizations_id);

    }
    public function product_specification_options_edit_form($id){
        $specialization_options=ProductSpcializationOption::with(['specializationoptions'])->find($id);

//        $specialization_options=SpecializationOption::find($specialization_options->specialization_option_id);
//        $product=Product::find($pid);
//        $product_special=ProductSpecilization::find($id);


        $Sr=1;
        return view('product.specific_option.edit',compact( 'Sr','specialization_options'));
    }

    public function product_specification_options_delete($id){
        $item=ProductSpcializationOption::find($id);
        if($item){
            $is_delete=$item->delete();
            return response()->json([
                'success'=>true,
                'message'=>'Deleted Successfully',
                'data'=>$item
            ],200);
        }else {
            return response()->json([
                'success'=>false,
                'message'=>'Unable to delete !',
            ],404);
        }
    }

    public function product_copy($id)
    {
        $original_product = Product::find($id);

        if ($original_product) {
            $new_product = $original_product->replicate();

            $new_product->title = $this->generateUniqueCopyName($new_product->title, 'title');

            $new_product->slug = $this->generateUniqueCopyName($new_product->slug, 'slug');

            $new_product->code = $this->generateUniqueCopyName($new_product->code, 'code');

            $new_product->save();

            foreach ($original_product->specilizations as $specialization) {
                $new_spec = $specialization->replicate();
                $new_spec->product_id = $new_product->id;
                $new_spec->save();

                foreach ($specialization->options as $option){
                    $new_option = $option->replicate();
                    $new_option->product_specilizations_id = $new_spec->id;
                    $new_option->product_id = $new_product->id;
                    $new_option->save();
                }
            }


            foreach ($original_product->images as $images) {
                $new_spec = $images->replicate();
                $new_spec->product_id = $new_product->id;
                $new_spec->save();
            }

            foreach ($original_product->product_features as $feature) {
                $new_spec = $feature->replicate();
                $new_spec->product_id = $new_product->id;
                $new_spec->save();
            }

            return redirect()->back()->with('success', 'Product and its specializations have been copied.');
        }

        return redirect()->back()->with('error', 'Product not found.');
    }

    private function generateUniqueCopyName($original, $field)
    {
        $counter = 1;
        $new_value = $original;

        if ($field === 'title') {
            $new_value = $original . ' (Copy)';
            while (Product::where('title', $new_value)->exists()) {
                $counter++;
                $new_value = $original . ' (Copy ' . $counter . ')';
            }
        }

        if ($field === 'slug') {
            $new_value = $original . '-copy';
            while (Product::where('slug', $new_value)->exists()) {
                $counter++;
                $new_value = $original . '-copy' . ($counter > 1 ? '-' . $counter : '');
            }
        }

        if ($field === 'code') {
            $new_value = $original . '-copy';
            while (Product::where('code', $new_value)->exists()) {
                $counter++;
                $new_value = $original . '-copy' . ($counter > 1 ? '-' . $counter : '');
            }
        }

        return $new_value;
    }






}
