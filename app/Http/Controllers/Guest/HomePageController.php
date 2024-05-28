<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use App\Models\Vendor;
use Illuminate\Http\Request;

class HomePageController extends Controller
{
    public function index(Request $request){

        return view("guest.index");
    }

   
}
