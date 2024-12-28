<?php

namespace App\Http\Controllers\customer;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Cache;

class HomepageController extends Controller
{
    public function home_page(){
        $cacheKey = 'homepage_data';
        if (Cache::has($cacheKey)) {
            $cachedData = Cache::get($cacheKey);
            $products = $cachedData['products'];
            $blogs = $cachedData['blogs'];
        } else {
            $products = Product::with('category')->take(1)->get();
            $postsSlice = Http::get((env('WORDPRESS_BASE_URL')??'https://blog.photonplay.com/') . 'wp-json/wp/v2/posts?_embed=1&orderby=date&order=desc')->json();
            $blogs = array_slice($postsSlice, 0 , 3);
            $dataToCache = ['products' => $products, 'blogs' => $blogs];
            Cache::put($cacheKey, $dataToCache, now()->addMinutes(600));
        }

        // Return the view with the data
        return view('customer.homepage', compact('products', 'blogs'));
    }
}
