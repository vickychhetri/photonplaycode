<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Models\Setting;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class SettingsController extends Controller
{
     public function setting_home_page(){
         $data=Setting::where('type',1)->first();
            return view("setting-home",compact('data'));
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
            'title' => 'required|max:255',
            'description' => 'required|max:255',
            'company_location' => 'required|max:255',
            'company_name' => 'required|max:255',
            'company_address' => 'required|max:255',
            'company_phone' => 'required|max:25',
            'company_email' => 'required|max:100',
        ]);
        $record=Setting::where('type',1)->first();
        if(isset($record)){
            Setting::where('type',1)->update($request->except('_token'));
        }else {
            Setting::create($request->except('_token'));
        }

        return redirect()->route('admin.setting-home-page');
    }

}
