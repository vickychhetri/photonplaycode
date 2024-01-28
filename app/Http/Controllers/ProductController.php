<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use App\Models\ProductSpcializationOption;
use App\Models\ProductSpecilization;
use App\Models\Specilization;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{
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
            'slug' => 'required|max:255',
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
            'sku' => 'nullable'
        ]);



        $product= Product::find($id);
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
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
