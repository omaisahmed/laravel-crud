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
                <h1 class="py-4 mx-4">All Cars</h1>
                </div>


                <div class="col-lg-12 justify-content-center">
                    <table class="table table-bordered table-striped">
                         <thead>
                         <tr>
                             <td>ID</td>
                             <td>Name</td>
                             <td>Founded</td>
                             <td>Description</td>
                             <td>Models</td>
                         </tr>
                         </thead>
                         <tbody>
                         <tr>
                            <td>{{$car->id}}</td>
                            <td>{{$car->name}}</td>
                            <td>{{$car->founded}}</td>
                            <td>{{Str::limit($car->description, 20, '...')}}</td>
                            
                                @forelse($car->carsmodel as $model)
                                <td>{{$model->model_name}}</td>
                                @empty
                                <p>No Model Found</p>
                                
                                @endforelse
                                
                            
                        </tr>
                         </tbody>
                        
                     </table>

            </div>
   

        </div>
        </div>
     
       
    </body>
</html>