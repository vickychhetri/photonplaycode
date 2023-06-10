<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Banner;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class BannerController extends Controller
{

    /**
     * @param Request $request
     * @return Application|Factory|View
     */
    public function index(Request $request){
        $records=Banner::orderBy('order')->get();
        $Sr=1;
        return view('banner.index',compact('records','Sr'));
    }

    public function create(){
        return view('banner.create');
    }

    public function store(Request $request){
        $validator = Validator::make($request->all(), [
            'image' => 'required',
            'type'=>'required',
            'tagline' => 'required',
        ]);

        if($validator->fails()){
            return redirect()->back()->with('error',  $validator->errors()->first());
        }

        $image_path = $request->file('image')->store('image', 'public');
        Banner::insert([
            'image' => $image_path,
            'tagline' => $request->tagline??null,
            'type' => $request->type??null,
            'sub_tagline' => $request->sub_tagline??null,
            'order' => $request->detail??0,
            'created_at'=>now(),
            'updated_at'=>now(),
        ]);
        return redirect()->route('admin.banners_index')->with('status', 'Banners successfully added !');
    }

    public function edit($id)
    {
        $data = Banner::find($id);
        if(!isset($data)){
            return abort(404);
        }
        return view('banner.edit',compact('data'));
    }

    public function update(Request $request, $id)
    {
        $cat = Banner::find($id);

        if(!isset($cat)){
            return abort(404);
        }
        $input= array();
        if(isset($request->tagline)){$input['tagline']=$request->tagline;}
        if(isset($request->sub_tagline)){$input['sub_tagline']=$request->sub_tagline;}
        if(isset($request->order)){$input['order']=$request->order;}
        if(isset($request->type)){$input['type']=$request->type;}
        if(isset($request->image)){
            $image_path = $request->file('image')->store('image', 'public');
            $input['image']=$image_path;
        }

        $cat->update($input);
        return redirect()->route('admin.banners_index')->with('status', 'Banner successfully updated');
    }
    public function destroy($id)
    {
        $item=Banner::find($id);
        if($item){
            $is_delete=$item->delete();
            return response()->json([
                'success'=>true,
                'message'=>'Banner deleted successfully!',
                'data'=>$item
            ],200);
        }else {
            return response()->json([
                'success'=>false,
                'message'=>'Unable to delete !',
            ],404);
        }
    }


}
