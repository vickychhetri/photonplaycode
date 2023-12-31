<?php

namespace App\Http\Controllers\customer;

use App\Http\Controllers\Controller;
use App\Http\Controllers\customer\SignController;
use App\Models\Blog;
use App\Models\BlogCategory;
use App\Models\Product;
use App\Models\TeamMember;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class HomepageController extends Controller
{

    public function home_page(){
        $products = Product::with('category')->take(1)->get();
        // $blogs = Blog::latest()->take(3)->get();
        // foreach ($blogs as $blog){
        //     $blog["category"]=BlogCategory::find($blog->blog_category_id)->category;
        // }
        
        $postsSlice = Http::get(env('WORDPRESS_BASE_URL') . 'wp-json/wp/v2/posts?_embed=1&orderby=date&order=desc')->json();

        $blogs = array_slice($postsSlice, 0 , 3);
        $team_members = TeamMember::take(4)->get();


        return view('customer.homepage', compact('products','blogs','team_members'));
    }
}
