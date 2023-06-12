<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

use App\Models\User;

class UserController extends Controller
{
    public function index()
    {
        $employee = Customer::get();
        $Sr = 1;
        return view('employees.all-employees', compact('employee','Sr'));
    }

    public function add_employee(){

        return view('employees.add_edit-employee');
    }

    public function edit_employee($id){

        $employee = Customer::find($id);
        return view('employees.add_edit-employee', compact('employee'));
    }

    public function insert_employee(Request $request){
        $request->validate([
            'name'=>'required',
            'email'=>'required|email|unique:customer,email,'.$request->id,
            'password' => 'required|min:6',
            'confirm_password' => 'required_with:password|same:password|min:6',
        ]);

        if($employee = Customer::find($request->id)){
            $employee->name = $request->name;
            $employee->email = $request->email;
            $employee->password = Hash::make($request->password);
            $employee->created_by = Auth::user()->id;
            $employee->update();
            return redirect('admin/manage-employees')->with('status','Employee Update Successfully');
        }else{
            $employee = New Customer;
            $employee->name = $request->name;
            $employee->email = $request->email;
            $employee->password = Hash::make($request->password);
            $employee->created_by = Auth::user()->id;
            $employee->save();
            return redirect('admin/manage-employees')->with('status','Employee Added Successfully');
        }
    }



    public function delete_employee($id)
    {
        $employee = Customer::find($id);
        $employee->delete();
        return redirect('admin/manage-employees')->with('status','Employee Deleted Successfully');
    }
}
