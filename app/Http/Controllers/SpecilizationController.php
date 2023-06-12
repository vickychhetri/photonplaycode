<?php

namespace App\Http\Controllers;

use App\Models\SpecializationOption;
use App\Models\Specilization;
use Illuminate\Http\Request;

class SpecilizationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $specilizations = Specilization::orderBy('id','DESC')->get();
        $Sr=1;
        return view('specilization.index', compact('specilizations','Sr'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('specilization.add');
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
            'title' => 'required|unique:categories',
            'image' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:512',
        ]);
        $image_path = $request->file('image')->store('image', 'public');
        Specilization::create([
            'title' => $request->title,
            'image' => $image_path,
        ]);

        return redirect()->route('admin.specilization.index')->with('status', 'Specilization Successfully added');
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
        $specilization = Specilization::find($id);
        return view('specilization.edit', compact('specilization'));
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
        $specilization = Specilization::find($id);
        $input = array();
        $input['title']=$request->title;
        if(isset($request->image)){
            $request->validate([
                'image' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:512',
            ]);
            $image_path = $request->file('image')->store('image', 'public');
            $input['image']=$image_path;
        }
        $specilization->update($input);

        return redirect()->route('admin.specilization.index')->with('status', 'Specilization Successfully updated');
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
    public function delete($id)
    {
        $specilization = Specilization::find($id);
        if($specilization){
            SpecializationOption::where('specialization_id', $id)->delete();
        }
        $specilization->delete();
        return redirect()->route('admin.specilization.index')->with('status', 'Specilization Successfully deleted');
    }
}
