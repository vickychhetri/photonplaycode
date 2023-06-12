<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductDescriptionController extends Controller
{
    public function open_description_form(Request $request,$id){
        $product=Product::find($id);
        return view('product.description.index',compact('product'));
    }

    public function open_description_store(Request $request){

        $input = $request->only(['description', 'specification','feature','power_option','visibility','ideal_for']);
       Product::updateOrCreate([
            'id'=>$request->product_id,],
           $input
        );
        return back()->with('status', 'Descriptions details successfully updated');
    }

}
