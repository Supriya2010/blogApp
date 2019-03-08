<?php

namespace App\Http\Controllers;
use App\Comment;
use App\Blog;
use Illuminate\Http\Request;

class CommentController extends Controller
{
     public function create(){
    
    
      }

      

  public function store($blogId,Request $request)
    {
        $comment=new Comment;
        $comment->blog_id=$blogId;
        $comment->name=request('name');
        $comment->email=request('email');
        $comment->comment=request('comment');
        $comment->save();

    return back();
}
}
