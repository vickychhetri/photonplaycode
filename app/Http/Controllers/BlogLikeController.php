<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use App\Models\BlogLike;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;


class BlogLikeController extends Controller
{
    public function like_unlike(Request $request,$blog_id)
    {
        $sessionId = $request->getSession()->getId();
        $blog_record=Blog::find($blog_id);
        if(!isset($blog_record)){
            return response()->json([
                "success"=>false,
                "error"=>"No such blog exist !"
            ]);
        }

        $like_status=BlogLike::where('session_id',$sessionId)
            ->where('blog_id',$blog_id)->first();

        if(isset($like_status)){
            $like_status->delete();
            $like_counts=BlogLike::where('blog_id',$blog_id)->count();
            return response()->json([
                "success"=>true,
                "liked"=>false,
                "total"=>$like_counts,
                "message"=>"Unlike !"
            ]);
        }
        $blogLike = new BlogLike([
            'blog_id' =>$blog_id,
            'session_id' =>$sessionId,
        ]);

                $blogLike->save();
        $like_counts=BlogLike::where('blog_id',$blog_id)->count();
        return response()->json([
            "success"=>true,
            "liked"=>true,
            "total"=>$like_counts,
            "message"=>"Liked !"
        ]);
    }
}
