<?php

namespace App\Http\Controllers;

use App\Models\Coupon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class CouponController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $coupons = Coupon::paginate(10);
        $Sr=1;
        return view('coupon.index',compact('coupons','Sr'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('coupon.create');
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
            'coupon_name' => 'required|unique:coupons',
            'type' => 'required|in:1,2',
            'value' => 'required|integer',
            'expiry_date' => 'required|date_format:Y-m-d|after_or_equal:now',
            'is_used' => 'nullable|integer',
        ]);

        if($validator->fails()){
            return redirect()->back()->with('error',  $validator->errors()->first());
        }

        $coupon = Coupon::create([
            'coupon_name' => $request->coupon_name,
            'type' => $request->type,
            'value' => $request->value,
            'expiry_date' => $request->expiry_date,
            'is_used' => $request->is_used,
            'status' => 1,
        ]);

        return redirect()->route('admin.coupons.index')->with('success', 'New coupon successfully added !');;

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $coupon = Coupon::find($id);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $coupon = Coupon::find($id);
        if(!isset($coupon)){
            abort(404);
        }
        return view('coupon.edit',compact('coupon',));
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
        $validator = Validator::make($request->all(), [
            'type' => 'in:1,2',
            'value' => 'integer',
            'expiry_date' => 'required|date_format:Y-m-d|after_or_equal:now',
            'is_used' => 'nullable|integer',
        ]);

        if($validator->fails()){
            return redirect()->back()->with('error',  $validator->errors()->first());
        }

        $coupon = Coupon::find($id);
        if($coupon){
            $input = array();
            if($request->coupon_name){
                $input['coupon_name'] = $request->coupon_name;
            }
            if($request->type){
                $input['type'] = $request->type;
            }
            if($request->value){
                $input['value'] = $request->value;
            }
            if($request->expiry_date){
                $input['expiry_date'] = $request->expiry_date;
            }
            if($request->is_used){
                $input['is_used'] = $request->is_used;
            }

            if($request->status){
                $input['status'] = $request->status;
            }


            $coupon->update($input);

        }

        return redirect()->back()->with('success', 'Coupon successfully updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $coupon = Coupon::find($id);
        if($coupon){
            $coupon->delete();
        }
        return response()->json([
            "success"=>true,
            "message"=>"deleted successfully !"
        ]);
    }
}
