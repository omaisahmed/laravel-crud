<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    </head>
    <body>

        <div class="container py-5">
            <div class="row">
                <div class="d-flex text-left">
                <h1 class="py-4 mx-4">All Posts</h1>
                <a type="button" href="/posts" class="btn btn-primary px-4 btn-md my-auto">Back</a>
                </div>
                <div class="col-lg-12 justify-content-center mt-4">
                    @if ($errors->any())
                     <div class = "alert alert-danger">
                      <ul>
                        @foreach ($errors->all() as $error)
                          <li>{{ $error }}</li>
                        @endforeach
                      </ul>
                     </div>
                    @endif
                    <form method="post" action="{{route('create-post')}}">
                        @csrf
                    <table class="table table-bordered table-striped">
                        @if(Session::has('post_created'))
                         <div class="alert alert-success" role="alert">
                             {{Session::get('post_created')}}
                        </div>
                        @endif
                         <thead>
                         <tr>
                             <td>Post Title</td>
                             <td>Post Description</td>
                         </tr>
                         </thead>
                         <tbody>
                         <tr>
                            <td><input type="text" name="title"  /></td>
                            <td ><input type="text" name="body"  /></td>
                            <td><input type="submit" class="btn btn-primary" value="Add Post"></td>
                        </tr>
                         </tbody>
                     </table>
                    </form>
    
            </div>
        </div>

    </body>
</html>