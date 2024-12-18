<?php

namespace App\Http\Controllers\customer;

use App\Http\Controllers\Controller;
use App\Jobs\VendorJob;
use App\Models\BrochureDownload;
use App\Models\Cart;
use App\Models\Product;
use App\Models\UserPostalCode;
use App\Models\Vendor;
use App\Rules\ReCaptcha;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use Psy\VersionUpdater\Downloader;

class SignController extends Controller
{
    public function radarSpeedSigns_menus()
    {

        return view('customer.profile.links_pages');
    }
    public function radarSpeedSigns()
    {
        $products = Product::where('category_id', 1)->get();
        return view('customer.sign', compact('products'));
    }

    public function radarSpeedSigns_v1()
    {
        $products = Product::select('id','slug')->where('category_id', 1)->get();
        $postsSlice = Http::get(env('WORDPRESS_BASE_URL') . 'wp-json/wp/v2/posts?_embed=1&orderby=date&order=desc')->json();
        $blogs = array_slice($postsSlice, 0 , 3);

        return view('signv1.sign', compact('products','blogs'));
    }

    public function radarSpeedSignsget_quote_v1()
    {
        $products = Product::where('category_id', 1)->get();
        $postsSlice = Http::get(env('WORDPRESS_BASE_URL') . 'wp-json/wp/v2/posts?_embed=1&orderby=date&order=desc')->json();
        $blogs = array_slice($postsSlice, 0 , 3);

        return view('signv1.get_quote', compact('products','blogs'));
    }


    public function radarSigns($id)
    {
        $sessionId = Session::getId();
        $product = Product::with(['images' => fn ($r) => $r->where('color', 'amber'), 'specilizations.specilization', 'specilizations.options', 'specilizations.options.specializationoptions', 'category'])->where('slug', $id)->first();
        $productLists = Product::where('category_id', 1)->take(5)->get();

        //list all accessories
        $linked_products=Product::getLinkedProducts($product->id);

        // dd($product);
        $postalCode = '';
        $cartCount = 0;
        if (Session::get('user')) {
            $cartCount = Cart::where('user_id', Session::get('user')->id)->count();
            $postalCode = UserPostalCode::where('user_id', Session::get('user')->id)->first();
        } else {
            $postalCode = UserPostalCode::where('session_id', $sessionId)->first();
            $cartCount = Cart::where('session_id', $sessionId)->count();
        }

        return view('customer.radar_sign', compact('product', 'productLists', 'postalCode', 'cartCount','id','linked_products'));
    }

    public function specificationAjax(Request $request)
    {
        $specs = $request->dict;
        $data = array();
        if (!isset($specs)) {
            return $data;
        }
        // dd($specs);

        foreach ($specs as $key => $spec) {
            $ids =  DB::table('product_spcialization_options')->where('id', $spec)->orderBy('id', 'asc')->value('id');
            array_push($data, $ids);
        }
        return $data;
    }

    public function downloadBrochure(Request $request)
    {
        BrochureDownload::create([
            'name' => $request->name_b,
            'email' => $request->email_b,
            'phone_number' => $request->phone_number_b,
            'pdf' => $request->pdf,
        ]);

        $filePath = ($request->pdf) ?  $request->pdf : '';
        if (Storage::disk('public')->exists($filePath)) {
            $mimeType = Storage::disk('public')->mimeType($filePath);
            $headers = [
                'Content-Type' => $mimeType,
            ];
            $url = Storage::disk('public')->url($filePath);

            return response()->json([
                'download_url' => $url,
                'status' => true
            ]);
        } else {
            return response()->json([
                'status' => false,
                'message' => 'File not found'
            ], 404);
        }
    }

    public function vendorStore(Request $request){

        $validator = Validator::make($request->all(), [
            'g-recaptcha-response' => ['required', new ReCaptcha]
        ]);

        if($validator->fails()){

            return redirect()->back()->with('error',  $validator->errors()->first());
        }

        $data=$request->except('token');
        $data["dealer_data"]=json_encode($request->except('token'));
        $vendor = Vendor::create($data);

        try{
            VendorJob::dispatch($vendor);
        }catch(Exception $e){
            //
        }

        return redirect()->back()->with('success', 'Application submitted successfully.');;
    }

}

