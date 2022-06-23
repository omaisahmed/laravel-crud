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
            <div class="row justify-content-center">
                <div class="d-flex text-left">
                    <h1 class="py-4 mx-4">POST DETAILS</h1>
                    <a type="button" href="/posts" class="btn btn-primary px-4 btn-md my-auto">Back</a>
                    </div>
                <div class="col-lg-12">
                    <table class="table table-bordered table-striped">
                         <thead>
                         <tr>  
                             <td>Post Title</td>
                             <td>Post Description</td>
                         </tr>
                         </thead>
                         <tbody>
                         <tr>
                            <td>{{$post->title}}</td>
                            <td>{{$post->body}}</td>
    
                        </tr>
                         </tbody>
                     </table>
    
            </div>
        </div>

 
    </body>
</html>