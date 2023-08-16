<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VASDController extends Controller
{
   public  function vehicle_actuated_speed_displays(){

       return view('customer.cart.vasd');
   }
}
