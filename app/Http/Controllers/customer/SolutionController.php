<?php

namespace App\Http\Controllers\customer;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SolutionController extends Controller
{
    public function solutionHighway(){
        return view('customer.solution.solution_highway');
    }

    public function solutionTunnel(){
        return view('customer.solution.solution_tunnel');
    }

    public function solutionCity(){
        return view('customer.solution.solution_city');
    }

    public function solutionTransit(){
        return view('customer.solution.solution_transit');
    }
}
