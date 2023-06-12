<?php

namespace App\Http\Controllers;

use App\Http\Controllers\customer\SignController;
use App\Models\Blog;
use App\Models\BlogCategory;
use App\Models\Product;
use App\Models\TeamMember;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
    * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        // return view('home');
        return redirect('admin/dashboard');
    }
    public function login()
    {
        return redirect('/login');
    }


    public function home_page(){
        $products = Product::with('category')->take(2)->get();
        $blogs = Blog::latest()->take(3)->get();
        foreach ($blogs as $blog){
            $blog["category"]=BlogCategory::find($blog->blog_category_id)->category;
        }
        $team_members = TeamMember::take(4)->get();


        return view('customer.homepage', compact('products','blogs','team_members'));
    }

}
