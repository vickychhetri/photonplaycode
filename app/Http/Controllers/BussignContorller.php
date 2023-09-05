<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BussignContorller extends Controller
{
 public function bus_sign(){
     return view('customer.bus_sign');
 }
}
