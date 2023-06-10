<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\ContentPage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ContentPageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($page)
    {
        $record=ContentPage::where('page_name',$page)->first();
        if(!isset($record)){
            abort(404);
        }
        return view('cms.content.index', compact('record'));

    }


    public function index_guest($page)
    {

        $record=ContentPage::where('page_name',$page)->first();
        if(!isset($record)){
            abort(404);
        }

        return view('customer.policy_page', compact('record'));

    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.content.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
//        dd($request->all());
        $validator= Validator::make($request->all(),[
            'page_name' => 'required|in:about-us,term-conditions,privacy-policy,shipping,return-policy',
            'description' => 'required',
        ]);
        #IF VALIDATION FAIL SEND RESPONSE
        if($validator->fails()){
            return  redirect()->back()->with('error', $validator->messages()->first());
        }
        $pagetoEdit=ContentPage::where('page_name',$request->page_name)->first();
        if(!isset($pagetoEdit)){
            $pagetoEdit=new ContentPage();
        }
        isset($request->page_name)?$pagetoEdit->page_name=$request->page_name:NULL;
        isset($request->title)?$pagetoEdit->title=$request->title:NULL;

        if(isset($request->image)){
            $image_path = $request->file('image')->store('image', 'public');
            if(isset($image_path)){
                $pagetoEdit->image=$image_path;
            }
        }
        isset($request->description)?$pagetoEdit->description=$request->description:NULL;
        $pagetoEdit->save();
        return  redirect()->back()->with('status', 'Content updated successfully!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $item=Page::where('page_name',$id)->first();
        if($item){
            return response()->json([
                'success'=>true,
                'data'=>$item
            ],200);
        }else {
            return response()->json([
                'success'=>false,
                'message'=>'Not Found'
            ],404);
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($page)
    {
        $record=ContentPage::where('page_name',$page)->first();
        if(!isset($record)){
            abort(404);
        }
        return view('cms.content.edit',compact('record'));
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
