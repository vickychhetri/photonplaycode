<?php

namespace App\Http\Controllers;

use App\Models\SpecializationOption;
use App\Models\Specilization;
use Illuminate\Http\Request;

class SpecilizationOptionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
            'option' => 'required|unique:specialization_options'
        ]);

        $options = SpecializationOption::create([
            'specialization_id' => $request->specilization_id,
            'option' => $request->option,
        ]);

        return redirect()->route('admin.specilization-option.show', $request->specilization_id)->with('status', 'Option successfully added');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $specilization = Specilization::find($id);
        $options = SpecializationOption::where('specialization_id', $id)->orderBy('id','desc')->get();
        return view('specilization_option.index', compact('specilization','options'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $option = SpecializationOption::find($id);
        return view('specilization_option.edit', compact('option'));
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
        $specilization = SpecializationOption::where('id', $id)->update([
            'option' => $request->option,
        ]);

        return redirect()->back()->with('status', 'Specilization Successfully updated');
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
        $specilization = SpecializationOption::find($id);

        $specilization->delete();
        return redirect()->back()->with('status', 'Option Successfully deleted');
    }
}
