<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use App\Models\ProductSku;
use App\Models\ProductSpcializationOption;
use App\Models\ProductSpecilization;
use App\Models\SpecializationOption;
use App\Models\Specilization;
use App\Traits\UploadImageNameTrait;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{
    use UploadImageNameTrait;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products=Product::orderBy('id','DESC')->get();
        $Sr = 1;
        return view('product.index',compact('products','Sr'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories=Category::get();
        return view('product.add',compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'category_id' => 'required|max:255',
            'title' => 'required|max:255',
            'price' => 'required|max:255',
            'slug' => 'nullable|max:255',
            'sku' => 'nullable'
        ]);

        $product= new Product();
        $product->category_id=$request->category_id;
        $product->title=$request->title;
        $product->price=$request->price;
        $product->slug=$request->slug;
        $product->sku=$request->sku;
        if (isset($request->brochure)) {
            $originalName = $request->file('brochure')->getClientOriginalName();
            $extension = $request->file('brochure')->getClientOriginalExtension();
            $number = 0;
            $brochureName = $originalName;

            while (Storage::disk('public')->exists('brochure/' . $brochureName)) {
                $number++;
                $brochureName = pathinfo($originalName, PATHINFO_FILENAME) . '_' . $number . '.' . $extension;
            }

            $brochurePath = $request->file('brochure')->storeAs('brochure', $brochureName, 'public');
            $product->brochure = $brochurePath;
        }


        $product->save();
        return redirect('/admin/product');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $specializations=Specilization::get();
        $product=Product::find($id);

        $product_specilizations=ProductSpecilization::with('specilization')->where('product_id',$product->id)->get();
         foreach ($product_specilizations as $prd){
             $prd['counts']=ProductSpcializationOption::where('product_specilizations_id',$prd->id) ->where('product_id',$id)->count();
         }
        $Sr=1;
        return view('product.edit',compact('specializations','product','product_specilizations','Sr'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'category_id' => 'required|max:255',
            'title' => 'required|max:255',
            'price' => 'required|max:255',
            'slug' => 'required|max:255',
            'pdf_download_text' => 'required|max:255',
            'product_heading_text' => 'required|max:255',
            'product_breadcrumb_text' => 'required|max:255',
            'sku' => 'nullable',
            'cover_image' => 'image|mimes:jpg,png,jpeg,webp,gif,svg|max:2048',
        ]);

        $isPriceHidden = $request->is_price_hide == 'on'? 1 : 0;
        $product= Product::find($id);
        $product->category_id=$request->category_id;
        $product->title=$request->title;
        $product->price=$request->price;
        $product->is_price_hide=$isPriceHidden;
        $product->slug=$request->slug;
//        $product->sku=$request->sku;
        $product->sku_start_range=$request->sku_start_range;

        $product->product_heading_text=$request->product_heading_text;
        $product->product_breadcrumb_text=$request->product_breadcrumb_text;
        $product->shipping_text=$request->shipping_text;


        $product->shipping_type=$request->shipping_type;
        $product->shipping_fees_us=$request->shipping_fees_us;
//        $product->shipping_fees_can=$request->shipping_fees_can;
//        $product->free_shipping_label=$request->free_shipping_label;
//        $product->paid_shipping_label=$request->paid_shipping_label;
//        $product->price_canada=$request->price_canada;


        $product->pdf_download_text=$request->pdf_download_text;
        $product->categories_linked=$request->categories_linked;
        $product->products_linked=$request->products_linked;
        $product->code=$request->code;

        if($request->file('cover_image')){
            $image_path=$this->storeImageWithName($request->file('cover_image'));
            $product->cover_image=$image_path;
        }

        if (isset($request->brochure)) {
            $originalName = $request->file('brochure')->getClientOriginalName();
            $extension = $request->file('brochure')->getClientOriginalExtension();
            $number = 0;
            $brochureName = $originalName;

            while (Storage::disk('public')->exists('brochure/' . $brochureName)) {
                $number++;
                $brochureName = pathinfo($originalName, PATHINFO_FILENAME) . '_' . $number . '.' . $extension;
            }

            $brochurePath = $request->file('brochure')->storeAs('brochure', $brochureName, 'public');
            $product->brochure = $brochurePath;
        }
        $product->save();
        return redirect('/admin/product');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $product = Product::findOrFail($id);
        $product->delete();

        return true;
    }


    public function generate_sku($id){
            $product = Product::find($id);
            if(!isset($product->sku_start_range)){
                echo "Please add start range for this product!";
                return;
            }
            $ps=ProductSpecilization::where('product_id',$id)->groupBy('specialization_id')->get();

            $complete =[];
            $data=[];
            foreach ($ps as $sp_op){
                $ops=ProductSpcializationOption::where('product_specilizations_id',$sp_op->id)
                    ->where('product_id',$id)->get();
                foreach ($ops as $options){
                    if(in_array($options->id,$complete)){
                        continue;
                    }
                    $data[]= [
                        "pid"=>$id,
                        "specialization_id"=>$sp_op->specialization_id,
                        "sp_code"=>Specilization::where('id',$sp_op->specialization_id)->first()->code,
                        "option"=>$options->specialization_option_id,
                        "option_code"=>SpecializationOption::where('id',$options->specialization_option_id)->first()->code
                    ];
                    $complete[]=$options->id;
                }

           }

            $grouped = [];
            foreach ($data as $item) {
                $sp_code = $item['sp_code'];
                $option_code = $item['option_code'];
                $grouped[$sp_code][] = $option_code;
            }
        $i=$product->sku_start_range;
            $combinations = $this->cartesianProduct($grouped);

            foreach ($combinations as $combination) {
                $ssku_number = implode(', ', $combination);
                ProductSku::where('specification_condition',$ssku_number)->where('pid',$id)->delete();
                ProductSku::create([
                    'pid' => $id,
                    'specification_condition' => $ssku_number,
                    'sku_code'=>$i++
                ]);
            }
                echo "done";
    }



    public  function  find_sku(Request  $request,$pid){
        $input = $request->sku;
        $input_keys =$this->parseKeyValue($input);
        $sku_product=ProductSku::where('pid',$pid)->get();
        $code=null;

        foreach ($sku_product as $sku){
            $d=$this->convertStringToArray($sku->specification_condition);

            if($d==$input_keys){
                $code=$sku->sku_code;
                break;
            }

        }

        if ($code) {
            return response()->json(['status' => 'success', 'data' => $code]);
        } else {
            return response()->json(['status' => 'error', 'data' => null], 404);
        }

    }
    function cartesianProduct($arrays) {
        $result = [[]];
        foreach ($arrays as $key => $values) {
            $append = [];
            foreach ($result as $product) {
                foreach ($values as $value) {
                    $append[] = array_merge($product, [$key . ' = ' . $value]);
                }
            }
            $result = $append;
        }
        return $result;
    }

    public function convertStringToArray($sskuString)
    {
        // Split the string by commas to get individual key-value pairs
        $pairs = explode(', ', $sskuString);

        $result = [];
        foreach ($pairs as $pair) {
            // Split each pair by '=' to get the key and value
            list($key, $value) = explode(' = ', $pair);
            $result[$key] = $value;
        }

        return $result;
    }

//    function parseKeyValue($input)
//    {
//        $keyValuePairs = [];
//
//        // Split into groups by '/'
//        $groups = explode('/', $input);
//
//        foreach ($groups as $group) {
//            // Split each group by '-'
//            $parts = explode('-', $group);
//            if (count($parts) === 2) {
//                $keyValuePairs[] = [
//                    'key' => $parts[0],
//                    'value' => $parts[1],
//                ];
//            }
//        }
//
//        return $keyValuePairs;
//    }

    function parseKeyValue($input)
    {
        $keyValuePairs = [];

        // Split by '/' first to get segments like ["CR", "AM-PW", "SL-CA", "YS"]
        $groups = explode('-', $input);

        foreach ($groups as $group) {
            // Split by '-' for each segment to get the key-value pairs
            $parts = explode('/', $group);

            // If there are two parts, treat them as key-value pairs
            if (count($parts) === 2) {
                $keyValuePairs[$parts[0]]=$parts[1];
            } else {
                // Handle the case where no '-' exists, it's just a single part
                $keyValuePairs[$parts[0]]=null;
            }
        }

        return $keyValuePairs;
    }


}
