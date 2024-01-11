<?php

namespace App\Http\Controllers\customer;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use App\Models\BlogCategory;
use App\Models\BlogLike;
use App\Models\Category;
use App\Models\ClientTestimonial;
use App\Models\Page;
use App\Models\Product;
use App\Models\Setting;
use App\Models\TeamMember;
use Carbon\Carbon;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Collection;

use function Webmozart\Assert\Tests\StaticAnalysis\integer;

class ContactUsController extends Controller
{
    public function contactUs(){
        $setting = Setting::first();
        return view('customer.contact_us', compact('setting'));
    }

    public function aboutUs(){

        $blogs = Blog::latest()->take(3)->get();
        foreach ($blogs as $blog){
            $blog["category"]=BlogCategory::find($blog->blog_category_id)->category;
        }

        return view('customer.about_us',compact('blogs'));
    }

    /**
     * @return Application|Factory|View
     */
    public function blog(){

        return view('customer.blog');
    }

    public function blog_listing(Request $request){
        $blogs=Blog::select();

        if(isset($request->category)){
            // $blogs_category_id=BlogCategory::where('slug',$request->category)->first();
            // if(isset($blogs_category_id)){
            //     $blogs=$blogs->where('blog_category_id',$blogs_category_id->id);
            // }
            $categories=Http::get(env('WORDPRESS_BASE_URL') . 'wp-json/wp/v2/categories')->json();
            foreach($categories as $category){
                if($category['slug'] == $request->category){
                    $posts = Http::get(env('WORDPRESS_BASE_URL') . 'wp-json/wp/v2/posts?_embed=1&orderby=date&order=desc&categories='.$category['id'])->json();
                }

            }

        }elseif(isset($request->months)){
            $posts = Http::get(env('WORDPRESS_BASE_URL') . 'wp-json/wp/v2/posts?_embed=1&orderby=date&order=desc')->json();
                // $data = array();
                // foreach($dates as $date){
                //     $i =  date('F d Y', strtotime($date['date']));
                //     array_push($data, $i);
                // }
        }else{
            $posts = Http::get(env('WORDPRESS_BASE_URL') . 'wp-json/wp/v2/posts?_embed=1&orderby=date&order=desc')->json();
        }



        // if(isset($request->tags)){
        //     $blogs=$blogs->where('keywords', 'LIKE', '%' . $request->tags . '%');
        // }




        $blogs=$blogs->orderBy('id','DESC')->paginate(5);


        $blog_created_date1 = array();
        foreach ($posts as $blog){
            // dd(date('F, Y', strtotime($blog['date'])));
            $blog_created_date = date('F, Y', strtotime($blog['date']));
            array_push($blog_created_date1, $blog_created_date);
        }
        $groupedPosts["blog_created_date"] = array();
        if($blog_created_date1){
            $groupedPosts = array_unique($blog_created_date1);
        }

        $categories=Http::get(env('WORDPRESS_BASE_URL') . 'wp-json/wp/v2/categories')->json();
        $postsSlice = Http::get(env('WORDPRESS_BASE_URL') . 'wp-json/wp/v2/posts?_embed=1&orderby=date&order=desc')->json();

        $latestBlogRecords = array_slice($postsSlice, 0 , 3);

        // // Group posts by month-year
        // $groupedPosts = Blog::selectRaw('DATE_FORMAT(created_at, "%M %Y") as month_year, COUNT(*) as count')
        //     ->groupBy('month_year')
        //     ->orderBy('month_year', 'desc')
        //     ->get();
        $posts = $this->paginate($posts);
        $posts->withPath(url()->current());
        dd($posts);
        return view('customer.blog_listing',compact('blogs','categories','latestBlogRecords','groupedPosts','posts'));
    }

    public function paginate($items, $perPage = 10, $page = null, $options = [])
    {
        $page = $page ?: (Paginator::resolveCurrentPage() ?: 1);
        $items = $items instanceof Collection ? $items : Collection::make($items);

        return new LengthAwarePaginator($items->forPage($page, $perPage)->values(), $items->count(), $perPage, $page, $options);
    }

    /**
     * @param $page_name
     * @return Application|Factory|View
     */
    public function blog_show(Request  $request,$page_name){
        $blogs = Http::get(env('WORDPRESS_BASE_URL') . 'wp-json/wp/v2/posts?_embed&slug=' . $page_name)->json();

        $s_blog = $blogs[0];
        $categories=Http::get(env('WORDPRESS_BASE_URL') . 'wp-json/wp/v2/categories')->json();

        if(!isset($s_blog)){
            abort(404);
        }
        // $tags=explode(",",$blog->keywords);
        $tags = [];
        $date = Carbon::createFromFormat('Y-m-d H:i:s', '2023-04-27 17:43:36');
        $blog_created_date = $date->format('d F, Y');
        $postsSlice = Http::get(env('WORDPRESS_BASE_URL') . 'wp-json/wp/v2/posts?_embed=1&orderby=date&order=desc')->json();

        $latestBlogRecords = array_slice($postsSlice, 0 , 3);
        $relatedBlogRecords = array_slice($postsSlice, 0 , 5);

        // $like=BlogLike::where('session_id',$request->getSession()->getId())
        //     ->where('blog_id',$blog->id)->exists();
        $like = 0;
        // $count=BlogLike::where('blog_id',$blog->id)->count();
        $count = 0;
        // Group posts by month-year
        $groupedPosts = Blog::selectRaw('DATE_FORMAT(created_at, "%M %Y") as month_year, COUNT(*) as count')
            ->groupBy('month_year')
            ->orderBy('month_year', 'desc')
            ->get();

        return view('customer.blog',compact('s_blog','tags','blog_created_date','categories','latestBlogRecords','relatedBlogRecords','like','count','groupedPosts'));
    }

    public function signal(){
        $pages = Page::where('page_type_id', Page::SIGNAGES)->get();
        // dd($page);
        return view('customer.signal', compact('pages'));
    }

    public function smartcity(){
        return view('customer.smartcity');
    }
    public function variableMessage(){
        $page = Page::where('page_type_id', Page::VMS)->get();
        // dd($page);
        return view('customer.variable_message', compact('page'));
    }
    public function variableSpeedLimit(){
        $page = Page::with('specs','images','features', 'galleries')->where('page_type_id', Page::VSLS)->first();
        // dd($page);
        return view('customer.variable_speed_limit', compact('page'));
    }
    public function pasengerInformationDisplay(){
        $page = Page::with('specs','images','features', 'galleries')->where('page_type_id', Page::PIDS)->first();
        // dd($page);
        return view('customer.pessenger_information', compact('page'));
    }
    public function portableVariableMessageSigns(){
        $products = $page = Page::with('specs','images','features','galleries')->where('page_type_id', Page::PVMS)->get();
        // dd($products);
        return view('customer.portable_variable_message_signs', compact('products'));
    }

    public function laneControlSystem(){
        $page = Page::with('specs','images','features','galleries')->where('page_type_id', Page::LCS)->first();
        // dd($page);
        return view('customer.lane_control_system', compact('page'));
    }

    public function pvmsICop($id){
        $product = Page::with('specs','images','features','galleries')->where('slug',$id)->first();
        // dd($product);
        return view('customer.pvms_icop', compact('product'));
    }

    public function vmsSubPage($slug){
        $page = Page::with('specs','images','features','galleries')->where('slug', $slug)->where('page_type_id', Page::VMS)->first();
//         dd($page);
        return view('customer.vms_sub_page', compact('page'));
    }

    public function signagesSubPage($slug){
        $page = Page::with('specs','images','features','galleries')->where('slug', $slug)->where('page_type_id', Page::SIGNAGES)->first();
        // dd($page);
        return view('customer.signages_sub_page', compact('page'));
    }





}
