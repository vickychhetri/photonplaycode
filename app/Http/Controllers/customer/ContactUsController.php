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
            $blogs_category_id=BlogCategory::where('slug',$request->category)->first();
            if(isset($blogs_category_id)){
                $blogs=$blogs->where('blog_category_id',$blogs_category_id->id);
            }
        }

        if(isset($request->tags)){
            $blogs=$blogs->where('keywords', 'LIKE', '%' . $request->tags . '%');
        }

        if(isset($request->months)){
            // Get the "month" parameter from the URL
            $monthParam = request()->query('months');

            // Extract the month and year values from the parameter
            $monthYear = urldecode($monthParam);
            $monthYear = explode(' ', $monthYear);
            $month = date('m', strtotime($monthYear[0]));
            $year = $monthYear[1];

            $blogs = $blogs->whereMonth('created_at', $month)
                ->whereYear('created_at', $year);
        }


        $blogs=$blogs->paginate(5);

        foreach ($blogs as $blog){
            $date = Carbon::createFromFormat('Y-m-d H:i:s', $blog->created_at);
            $blog_created_date = $date->format('d F, Y');
            $blog["blog_created_date"]=$blog_created_date;
            $blog["likes"]=BlogLike::where('blog_id',$blog->id)->count();

        }
        $categories=BlogCategory::take(5)->get();
        $latestBlogRecords = Blog::latest()->take(3)->get();

        // Group posts by month-year
        $groupedPosts = Blog::selectRaw('DATE_FORMAT(created_at, "%M %Y") as month_year, COUNT(*) as count')
            ->groupBy('month_year')
            ->orderBy('month_year', 'desc')
            ->get();

        return view('customer.blog_listing',compact('blogs','categories','latestBlogRecords','groupedPosts'));
    }

    /**
     * @param $page_name
     * @return Application|Factory|View
     */
    public function blog_show(Request  $request,$page_name){

        $blog=Blog::where('slug',$page_name)->first();
        $categories=BlogCategory::take(5)->get();

        if(!isset($blog)){
            abort(404);
        }
        $tags=explode(",",$blog->keywords);
        $date = Carbon::createFromFormat('Y-m-d H:i:s', '2023-04-27 17:43:36');
        $blog_created_date = $date->format('d F, Y');
        $latestBlogRecords = Blog::latest()->take(3)->get();
        $relatedBlogRecords = Blog::where('blog_category_id',$blog->blog_category_id)->latest()->take(5)->get();
        $like=BlogLike::where('session_id',$request->getSession()->getId())
            ->where('blog_id',$blog->id)->exists();
        $count=BlogLike::where('blog_id',$blog->id)->count();

        // Group posts by month-year
        $groupedPosts = Blog::selectRaw('DATE_FORMAT(created_at, "%M %Y") as month_year, COUNT(*) as count')
            ->groupBy('month_year')
            ->orderBy('month_year', 'desc')
            ->get();

        return view('customer.blog',compact('blog','tags','blog_created_date','categories','latestBlogRecords','relatedBlogRecords','like','count','groupedPosts'));
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
        $product = Page::with('specs','images','features','galleries')->find($id);
        // dd($product);
        return view('customer.pvms_icop', compact('product'));
    }

    public function vmsSubPage($slug){
        $page = Page::with('specs','images','features','galleries')->where('slug', $slug)->where('page_type_id', Page::VMS)->first();
        // dd($page);
        return view('customer.vms_sub_page', compact('page'));
    }

    public function signagesSubPage($slug){
        $page = Page::with('specs','images','features','galleries')->where('slug', $slug)->where('page_type_id', Page::SIGNAGES)->first();
        // dd($page);
        return view('customer.signages_sub_page', compact('page'));
    }


}
