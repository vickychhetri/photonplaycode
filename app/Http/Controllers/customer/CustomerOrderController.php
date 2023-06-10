<?php

namespace App\Http\Controllers\customer;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CustomerOrderController extends Controller
{
        public function  show_order(Request $request,$id){

            return view('customer.profile.track_order');
        }
}
