<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
       
    </head>
    <body>
        <div class="container py-5">
            <div class="row">
                <div class="d-flex text-left">
                <h1 class="py-4 mx-4">All Posts</h1>
                <a type="button" href="{{route('add-post')}}" class="btn btn-primary px-4 btn-lg my-auto">Add Post</a>
                </div>

              <form action="{{route('search.filter')}}" method="get">
             
                <div class="col-lg-6 my-auto justify-content-center">
                        <div class="mx-auto pull-right">
                            <input type="text" class="form-control col-md-4 float-left" name="title" id="title" placeholder="Search..." >
                        </div>            
                </div>
               </form>

                <div class="col-lg-12 justify-content-center">
                    <table class="table table-bordered table-striped">
                        @if(Session::has('post_deleted'))
                        <div class="alert alert-danger" role="alert">
                            {{Session::get('post_deleted')}}
                        </div>
                        @endif
                         <thead>
                         <tr>
                             <td>ID</td>
                             <td>User ID</td>
                             <td>Post Title</td>
                             <td>Post Description</td>
                             <td>Action</td>
                         </tr>
                         </thead>
                         <tbody>
                             @foreach($posts as $post)
                         <tr>
                            <td>{{$post->id}}</td>
                            <td>Name</td>
                            <td>{{$post->title}}</td>
                            <td>{{Str::limit($post->body, 20, '...')}}</td>
                            <td>
                                <a type="button" href="{{route('post.view',$post->id)}}" class="btn btn-primary">Details</a>
                                <a type="button" href="/update-post/{{$post->id}}" class="btn btn-info">Update</a>
                                <a type="button" href="/posts-delete/{{$post->id}}" class="btn btn-danger">Delete</a>
                            </td>
                        </tr>
                        @endforeach
                         </tbody>
                        
                     </table>

                     <div class="col-lg-12 text-center">
                     {{ $postpages->links() }}
                     </div>
    
            </div>
   

        </div>
        </div>
     
       
    </body>
</html>