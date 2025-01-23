<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\ProductAvailableResource;
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

    public function open_product_available_resource_form(Request $request,$id){
        $product=Product::find($id);

        $productResources=  ProductAvailableResource::where('product_id',$id)->orderby('order','asc')->get();
        return view('product.available_resource.index',compact('product','productResources'));
    }

    public function open_product_available_resource_Store(Request $request){
        // Validate the incoming request
        $validated = $request->validate([
            'pdf' => 'required|file|mimes:pdf|max:10240', // Validate file (PDF and size)
            'order' => 'required|integer',
            'status' => 'required|in:1,0', // assuming status is either active or inactive
        ]);

        // Get the validated data
        $file = $request->file('pdf');
        $order = $validated['order'];
        $status = $validated['status'];

        // Use the storeFileWithExtension method to handle the file upload
        try {
            $fileData = $this->storeFileWithExtension($file, 'pdf'); // Call the method to handle file upload

            // Store data into ProductAvailableResource model
            $productAvailableResource = ProductAvailableResource::create([
                'product_id' => $request->input('product_id'), // assuming you have a product_id field in the request
                'filename' => strtolower($fileData['filename']),  // Filename from the method
                'folder' => $fileData['folder'],      // Folder from the method
                'order' => $order,                    // Order from the form
                'type' => 'pdf',                      // Type is always pdf in this case
                'status' => $status,                  // Status from the form
            ]);

            // Redirect back with success message
            return back()->with('success', 'Resource added successfully!');
        } catch (\Exception $e) {
            // Handle errors and return back with an error message
            return back()->with('error', 'An error occurred: ' . $e->getMessage());
        }

    }

    public function open_product_resource_edit_form($id,$f_id)
    {
        $product=Product::find($id);
        // Find the resource by ID
        $resource = ProductAvailableResource::where('product_id',$id)->orderby('order','asc')->findOrFail($f_id);

        // Return the edit form with the resource data
        return view('product.available_resource.edit', compact('resource','product'));
    }

    // Handle the update functionality
    public function open_product_resource_edit_form_update(Request $request, $id)
    {
        // Validate the incoming request data
        $validated = $request->validate([
            'pdf' => 'nullable|file|mimes:pdf|max:10240', // Optional PDF file upload
            'order' => 'required|integer',
            'status' => 'required|in:1,0', // Ensure status is either active or inactive
        ]);

        // Find the resource to update
        $resource = ProductAvailableResource::findOrFail($id);

        // Handle the file upload if a new PDF is provided
        if ($request->hasFile('pdf')) {
            $file = $request->file('pdf');
            $fileData = $this->storeFileWithExtension($file, 'pdf');  // Assuming you have this method for file upload

            // Update the resource's filename and folder if a new file is uploaded
            $resource->filename = $fileData['filename'];
            $resource->folder = $fileData['folder'];
        }

        // Update other fields
        $resource->order = $validated['order'];
        $resource->status = $validated['status'] == '1' ? 1 : 0; // Convert 'active' to 1 and 'inactive' to 0
        $resource->save();  // Save the changes

        // Redirect back with success message
        return back()->with('success', 'Feature Updated!');
    }
    public function open_product_available_resource_delete($id)
    {
        $record = ProductAvailableResource::find($id);
        if($record->delete()){
            return back()->with('success', 'Feature Deleted!');
        }
        return back()->with('error', 'Sorry cannot delete!');
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
