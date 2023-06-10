<?php

namespace App\Http\Controllers;

use App\Models\BlogCategory;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Database\QueryException;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Routing\Redirector;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;

class BlogCategoryController extends Controller
{
    // Admin area
    /**
     * Display a listing of the resource.

     */
    public function index(Request $request)
    {
        $blog_category=BlogCategory::orderBy('id','DESC')->get();
        $Sr = 1;
        return view("blog.category.index",compact('blog_category','Sr'));
    }

    public function create(Request $request)
    {
        return view("blog.category.create" );
    }


    /**
     * @param Request $request
     * @return Application|RedirectResponse|Redirector
     */
    public function store(Request $request)
    {
        $request->validate([
            'category' => 'required|max:255',
        ]);
        $post= new BlogCategory();
        $post->category  = $request->category;
        $post->slug = Str::slug($request->category);
        $post->save();
        return redirect('admin/blog-categories');
    }

    /**
     * Display the specified resource.
     */
//    public function show($id)
//    {
//
//    }

    public function edit($id)
    {
        $item=BlogCategory::find($id);
        if($item){
            return view("blog.category.edit",compact('item'));
        }


    }


    /**
     * @param Request $request
     * @param $id
     * @return Application|Factory|View|JsonResponse|RedirectResponse|Redirector
     */
    public function update(Request $request, $id)
    {
        $item=BlogCategory::find($id);

        if(!$item){
            return response()->json([
                'success'=>false,
                'error'=>'invalid'
            ],404);
        }
        $input =array();
        if($request->category){
            $input["category"]=$request->category;
        }
        $status=BlogCategory::find($id)->update($input);
        if($status){
            return redirect('admin/blog-categories');
        }
        return view('blog.category.edit',compact('item'));
    }


    public function destroy($id)
    {
        $item=BlogCategory::find($id);
        if($item){
            $is_delete=$item->delete();
            return response()->json([
                'success'=>true,
                'message'=>'Blog category Deleted Successfully',
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
