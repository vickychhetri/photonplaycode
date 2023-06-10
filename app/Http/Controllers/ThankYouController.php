<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ThankYouController extends Controller
{
    public function index(){
        return view('customer.thank-you');
    }
}
