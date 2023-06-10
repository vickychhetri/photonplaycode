<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\TeamMember;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class TeamMemberController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $records=TeamMember::get();
        $Sr=1;
        return view('team_member.index',compact('records','Sr'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('team_member.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'image' => 'required',
            'name' => 'required',
        ]);

        if($validator->fails()){
            return redirect()->back()->with('error',  $validator->errors()->first());
        }

        $image_path = $request->file('image')->store('image', 'public');
        TeamMember::create([
            'image' => $image_path,
            'name' => $request->name??null,
            'detail' => $request->detail??null,
            'facebook' => $request->facebook??null,
            'linkedin' => $request->linkedin??null,
            'twitter' => $request->twitter??null,
        ]);
        return redirect()->route('admin.team_member_index')->with('status', 'Team member successfully added !');
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
        $data = TeamMember::find($id);

        if(!isset($data)){
            return abort(404);
        }

        return view('team_member.edit',compact('data'));
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
        $cat = TeamMember::find($id);

        if(!isset($cat)){
            return abort(404);
        }
        $input= array();
        if(isset($request->name)){$input['name']=$request->name;}
        if(isset($request->detail)){$input['detail']=$request->detail;}
        if(isset($request->facebook)){$input['facebook']=$request->facebook;}
        if(isset($request->linkedin)){$input['linkedin']=$request->linkedin;}
        if(isset($request->twitter)){$input['twitter']=$request->twitter;}
        if(isset($request->image)){
            $image_path = $request->file('image')->store('image', 'public');
            $input['image']=$image_path;
        }
        $cat->update($input);
        return redirect()->route('admin.team_member_index')->with('status', 'Team Member information successfully updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $item=TeamMember::find($id);
        if($item){
            $is_delete=$item->delete();
            return response()->json([
                'success'=>true,
                'message'=>'Team member record deleted successfully!',
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
