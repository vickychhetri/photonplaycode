<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use App\Models\BlogLike;
use App\Models\Page;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Support\Collection;

class SearchItemsController extends Controller
{
    public function search_index(Request $request){
        $query = $request->search;

        $data=array();
        $products = Product::where('title', 'LIKE', '%'.$query.'%')->orWhere('description', 'LIKE', '%'.$query.'%')->get();
        $Sr=1;
        foreach ($products as $product){
            $data1=array();
            $data1['sr']=$Sr++;
            $data1['type']=1;
            $data1['title']=$product->title;
            $data1['description']=$product->description;
            $data1['image']=$product->cover_image   ;
            $data1['id']=$product->id;

            $data1['created_at']=$product->created_at;
            array_push($data,$data1);
        }


        $blogs = Blog::where('title', 'LIKE', '%'.$query.'%')->orWhere('body', 'LIKE', '%'.$query.'%')->get();

        foreach ($blogs as $blog){
            $data1=array();
            $data1['sr']=$Sr++;
            $data1['type']=2;
            $data1['title']=$blog->title;
            $data1['description']=$blog->description;
            $data1['image']=$blog->image;
            $data1['id']=$blog->id;
            $data1['slug']=$blog->slug;
            $data1['author']=$blog->author;
            $data1["likes"]=BlogLike::where('blog_id',$blog->id)->count();
            $data1['created_at']=$blog->created_at;
            array_push($data,$data1);
        }


        $pages = Page::where('title', 'LIKE', '%'.$query.'%')->orWhere('description', 'LIKE', '%'.$query.'%')->get();

        foreach ($pages as $page){
            $data1=array();
            $data1['sr']=$Sr++;
            $data1['type']=3;
            $data1['title']=$page->title;
            $data1['description']=$page->description;
            $data1['image']=$page->cover_image;
            $data1['id']=$page->id;
            $data1['page_type_id']=$page->page_type_id;
            $data1['slug']=$page->slug;
            $data1['created_at']=$page->created_at;
            array_push($data,$data1);
        }

        $perPage = 10;
        $collection = new Collection($data);
        $page = $request->input('page', 1);
        $currentPageItems = $collection->slice(($page - 1) * $perPage, $perPage);

        $data_page = new LengthAwarePaginator(
            $currentPageItems,
            $collection->count(),
            $perPage,
            $page,
            [
                'path' => $request->url(),
                'query' => $request->query(),
            ]
        );
        return view('customer.search',compact('data_page','query'));
    }


}
