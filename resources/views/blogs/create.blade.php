<!doctype html>
<html>
   <head>
      <title></title>
      <link rel="stylesheet" type="text/css" href="{{url('css/bootstrap.min.css')}}"/>
   </head>
   <body>
      <div class="container my-4">
         <div class="jumbotron mt-3">
         <h4 style="text-align: center">Create New Blog</h4>
            <form method="POST" action="/blogs">
               {{ csrf_field() }}
               <div class="form-group col-md-6">
                  <label>Title</label>
                  <input type="text" name="title" class="form-control" id="title" placeholder="Enter Blog Title">
               </div>
               <div class="form-group col-md-6">
                  <label>Description</label>
                  <textarea class="form-control" name="description" id="description" rows="3"></textarea>
               </div>
               <button class="float-left ml-2" type="submit">Create</button>
            </form>
            <link rel="stylesheet" type="text/js" href="{{url('js/bootstrap.min.js')}}"/>
         </div>
      </div>
   </body>
</html>