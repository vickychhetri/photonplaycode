<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use App\Models\Category;
use App\Models\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ClientsLogosController extends Controller
{
    public function index(Request $request){
        $records=Client::get();
        $Sr=1;
        return view('clients.index',compact('records','Sr'));
    }

    public function edit($id){
        $record = Client::find($id);

        if(!isset($record)){
            return abort(404);
        }

        return view('clients.edit',compact('record'));
    }

    public function create(){
            return view('clients.create');
    }

    public function store(Request $request){
        $validator = Validator::make($request->all(), [
            'image' => 'required',
            'name' => 'required',
        ]);

        if($validator->fails()){
            return redirect()->back()->with('error',  $validator->errors()->first());
        }

        $image_path = $request->file('image')->store('image', 'public');
        Client::create([
            'image' => $image_path,
            'name' => $request->name??null,
        ]);

        return redirect()->route('admin.clients_index')->with('status', 'Clients successfully added !');
    }

    public function update(Request $request,$id){

        $cat = Client::find($id);

        if(!isset($cat)){
            return abort(404);
        }
        if(isset($request->name)){
            $cat->update([
                'name' => $request->name,
            ]);
        }

        if(isset($request->image)){
            $image_path = $request->file('image')->store('image', 'public');
            $cat->update([
                'image' =>$image_path,
            ]);
        }

        return redirect()->route('admin.clients_index')->with('status', 'Clients successfully updated');

    }


    public function destroy($id)
    {
        $item=Client::find($id);
        if($item){
            $is_delete=$item->delete();
            return response()->json([
                'success'=>true,
                'message'=>'Client Logo deleted successfully!',
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
