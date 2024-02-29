<?php

namespace App\Http\Controllers;

use App\Models\ManageSeo;
use Illuminate\Http\Request;

class ManageSeoController extends Controller
{
     public function  index(){
         $data = ManageSeo::get();
         $Sr=1;
         return view('manage_seo',compact('data','Sr'));
     }

    public function edit($id){
        $data = ManageSeo::where('id',$id)->first();
        return view('manage_seo_edit',compact('data'));
    }


    public function store(Request $request,$id)
    {
        // Validate the incoming request data
        $validatedData = $request->validate([
            'title' => 'required|string|max:255',
            'keyword' => 'nullable|string|max:255',
            'description' => 'required|string',
            'schema' => 'required|string',
            'page_name'=>'required',
        ]);

        // Assuming you have a model named 'YourModel', create a new instance
        $data =ManageSeo::where('page_name',$request->page_name)->first();

        if(!isset($data)){
            return abort(404);
        }
        // Assign values from the request to the model attributes
        $data->title = $request->title;
        $data->keyword = $request->keyword;
        $data->description = $request->description;
        $data->schema = $request->schema;
        // Save the data to the database
        $data->save();

        // Redirect the user to a confirmation page or any other appropriate action
        return redirect()->route('admin.manage_seo_form')->with('success', 'Data has been stored successfully!');
    }
}
