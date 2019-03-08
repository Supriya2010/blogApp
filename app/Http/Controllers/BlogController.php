<?php

namespace App\Http\Controllers;
use App\Blog;
use App\Comment;
use Illuminate\Http\Request;

class blogController extends Controller
{

  private $blog;
public function __construct(Blog $blog) 
{
$this->blog = $blog;
}
public function index(){

// $blogs=Blog::all();
   $blogs=$this->blog->orderBy('created_at','Desc')->get();
   return view('blogs.home',compact('blogs'));
}

  public function create(){
    
    $blogs=Blog::all();
      return view('blogs.create');
  }
  
  public function store()
  {
    $blogs=new Blog();
    $blogs->title=request('title');
    $blogs->description=request('description');
    $blogs->save();
    return redirect ('/blogs');
  }

  public function show($id){
    $blog=Blog::find($id);
    $comments=Comment::select('name','email','comment')->where('blog_id',$id)->orderBy('created_at','Desc')->get()->toArray();
    return view('blogs.details',compact('blog','comments'));
  }
}