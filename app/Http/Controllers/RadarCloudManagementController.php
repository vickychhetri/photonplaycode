<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RadarCloudManagementController extends Controller
{
    public function index(){
        return view('customer.radar_cloud_management');
    }
}
