<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class ProfileController extends Controller
{
    public function editProfileForm($id){
        $user = User::find($id);
       return view("admin_profile.edit-profile",compact('user'));
    }

    public function editProfile(Request  $request){
        $request->validate([
            'name'=>'required',
            'email'=>'required|email|unique:customer,email,'.$request->id,
            'password' => 'required|min:6',
            'confirm_password' => 'required_with:password|same:password|min:6',
        ]);

        if($employee = User::find($request->id)){
            $employee->name = $request->name;
            $employee->email = $request->email;
            $employee->password = Hash::make($request->password);
            $employee->created_by = Auth::user()->id;
            $employee->update();

            return redirect()->route('admin.edit_adminprofile_form', Auth::user()->id)->with('status','Profile Updated Successfully');

        }else{
            $employee = New User;
            $employee->name = $request->name;
            $employee->email = $request->email;
            $employee->password = Hash::make($request->password);
            $employee->created_by = Auth::user()->id;
            $employee->save();

            return redirect()->route('admin.edit_adminprofile_form', Auth::user()->id)->with('status','Profile Updated Successfully');
        }
    }
}
