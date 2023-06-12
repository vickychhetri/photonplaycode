<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CMSHomeController extends Controller
{
     public function index(){
         return view('cmshomepage');
     }
}
