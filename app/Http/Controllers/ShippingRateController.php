<?php

namespace App\Http\Controllers;

use App\Models\ShippingRate;
use Illuminate\Http\Request;

class ShippingRateController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = ShippingRate::orderBy('id', 'desc')->get();
        return view("shipping.index",compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("shipping.create");
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
            'city' => 'required',
            'state' => 'required',
            'country' => 'required',
            'postal_code' => 'required|integer|unique:shipping_rates,postal_code',
            'shipping_rate' => 'required|integer',
        ]);

        ShippingRate::create($request->except('_token'));

        return redirect()->route('admin.shipping-rate.index');
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
        $data = ShippingRate::find($id);
        return view("shipping.edit",compact('data'));
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
        $shipping = ShippingRate::find($id);

        $shipping->update([
            'city' => $request->city,
            'state' => $request->state,
            'country' => $request->country,
            'postal_code' => $request->postal_code,
            'shipping_rate' => $request->shipping_rate,
        ]);

        return redirect()->route('admin.shipping-rate.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $shipping = ShippingRate::find($id);

        $shipping->delete();

        return redirect()->route('admin.shipping-rate.index');
    }
}
