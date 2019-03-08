<!doctype html>
<html>
   <head>
      <title>Details Page</title>
      <link rel="stylesheet" type="text/css" href="{{url('css/bootstrap.min.css')}}"/>
   </head>
   <body>
      <div class="container my-4">
      <h4 style="text-align: center">Blog Details</h4>
         <p>{{ $blog->title }}</p>
         <p>{{ $blog->description}}</p>
         <div class="jumbotron mt-3">
            <small class="form-text text-muted">*Enter details to add comments</small>
            <form method="POST" action="/blogs/{{$blog->id}}/comments">
               @csrf
               <div class="form-group col-md-6">
                  <label for="exampleInputEmail1">Name</label>
                  <input type="text" class="form-control" name="name" placeholder="Enter Name">
               </div>
               <div class="form-group col-md-6">
                  <label for="exampleInputPassword1">Email</label>
                  <input type="text" class="form-control" name="email" placeholder="Enter Email">
               </div>
               <div class="form-group col-md-6">
                  <label for="exampleFormControlTextarea1">Comment</label>
                  <textarea class="form-control" placeholder="Enter Comment" name="comment" rows="3"></textarea>
               </div>
               <button type="submit" class="btn btn-primary">Submit</button>
               <button type="reset" class="btn btn-danger">Clear</button>
            </form>
         </div>
         <div>
            <h5>User Comments</h5>
            <ul>
               @foreach($comments as $comment)
               <p> {{$comment['name']}}</p>
               <p> {{$comment['email']}}</p>
               <p> {{$comment['comment']}}</p>
               @endforeach
            </ul>
         </div>
         <link rel="stylesheet" type="text/js" href="{{url('js/bootstrap.min.js')}}"/>
      </div>
   </body>
</html>