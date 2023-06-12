<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\BlogCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class BlogsController extends Controller
{
    public  function index(){
        $blogs=Blog::orderBy('id','DESC')->get();

        $Sr = 1;
        return view("blog.index",compact('blogs','Sr'));
    }
    public function create(Request $request)
    {
        $blog_categories=BlogCategory::orderBy('category')->get();
        return view("blog.create" ,compact('blog_categories'));
    }



    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|max:255',
            'description' => 'required|max:255',
            'keywords' => 'required|max:255',
            'author' => 'required|max:255',
            'category_selected' => 'required|max:255',
            'body' => 'required',
            'image' => 'required|image|mimes:jpg,png,jpeg,gif,svg,webp|max:2048',
        ]);

        $image_path = $request->file('image')->store('image', 'public');
        $post= new Blog();

       $FLAG=true;
       $Sr=1;
       $slug_blog=Str::slug($request->title);

        while($FLAG){
            if(Blog::where('slug',$slug_blog)->exists()){
                $slug_blog=Str::slug($request->title)."-".$Sr++;
            }else {
                $FLAG=false;
            }
        }

        $post->title  = $request->title;
        $post->slug =$slug_blog;
        $post->blog_category_id =$request->category_selected;

        $post->description  = $request->description;
        $post->keywords  = $request->keywords;
        $post->author  = $request->author;
        $post->body  = $request->body;
        $post->image  = $image_path;
        $post->save();
        session()->flash('success', 'Blog added successfully !');
        return redirect()->route('admin.blogs.index');
    }

    public function edit($id)
    {
        $data=Blog::find($id);
        $blog_categories=BlogCategory::orderBy('category')->get();
        if($data){
            return view("blog.edit",compact('data','blog_categories'));
        }
        return abort(404);

    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required|max:255',
            'description' => 'required|max:255',
            'keywords' => 'required|max:255',
            'author' => 'required|max:255',
            'category_selected' => 'required|max:255',
            'body' => 'required',
        ]);
        $input =array();
        if($request->image){
            $request->validate([
                'image' => 'required|image|mimes:jpg,png,jpeg,gif,svg,webp|max:2048',
                ]);
            $image_path = $request->file('image')->store('image', 'public');
            $input["image"]=$image_path;
             }
        $data=Blog::find($id);

        if(!$data){
            return abort(404);
        }


            $input["title"]=$request->title;
            $input["description"]=$request->description;
            $input["keywords"]=$request->keywords;
            $input["author"]=$request->author;
            $input["blog_category_id"]=$request->category_selected;
            $input["body"]=$request->body;


        $status=Blog::find($id)->update($input);
        if($status){
            session()->flash('success', 'Blog updated successfully !');
            return redirect()->route('admin.blogs.index');

        }

        $item=$request->all();
        return view('blog.edit',compact('item'));
    }
    public function destroy($id)
    {
        $item=Blog::find($id);
        if($item){
            $is_delete=$item->delete();
            return response()->json([
                'success'=>true,
                'message'=>'Blog deleted successfully',
                'data'=>$item
            ],200);
        }else {
            return response()->json([
                'success'=>false,
                'message'=>'Unable to delete !',
            ],404);
        }
    }



}
