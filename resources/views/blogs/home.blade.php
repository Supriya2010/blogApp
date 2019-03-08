<!doctype html>
<html>
   <head>
      <title>Home Page</title>
      <link rel="stylesheet" type="text/css" href="{{url('css/bootstrap.min.css')}}"/>
   </head>
   <body>
      <div class="jumbotron mt-3">
         <h4 style="text-align: center">Blog Application</h4>
         <button class="float-right mx-4"><a href="/blogs/create">New</a></button>
         @foreach($blogs as $blog)
         <h6><a href="/blogs/{{$blog->id}}/details">{{$blog->title}}</a></h6>
         <p>{{(substr($blog->description,0,500))}}</p>
         
         @endforeach
         <link rel="stylesheet" type="text/js" href="{{url('js/bootstrap.min.js')}}"/>
      </div>
   </body>
</html>