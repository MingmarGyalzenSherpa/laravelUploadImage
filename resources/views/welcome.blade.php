<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Image Upload</title>
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>
<body>
    <div class="container border">
        <div class="row d-flex justify-content-center">
            <div class="col-md-7">
                <div class="card mt-3">
                    <div class="card-header">
                        <h2>Image Upload</h2>
                    </div>

                    {{-- <img src="{{asset('/storage/'.'images/7eYDuflPLrl410iVI0jJmzQ3I0xkAwNtcGGTj9wV.webp')}}" alt=""> --}}

                    <div class="card-body">
                        <form action="{{route('uploadImage')}}" method="post" class="form" enctype="multipart/form-data">
                            @csrf
                            <input type="file" name="img" id="" class="form-control">
                            <button class="btn btn-primary mt-2" type="submit">
                                Upload
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>

       
    </div>
   
    <div class="container  mt-2 border">
        <h1 class="text-center mt-2">Photos</h1>
        <div class="row justify-content-center">

            @foreach($images as $image)
            <div class="col-8 col-md-5 border m-2 p-0">
                <div class="img-container" style="aspect-ratio:3/2;">
                    
                     <img src="{{asset('/storage/'.$image->path)}}" alt="" style="width:100%;height:100%;object-fit: cover;"> 
                </div>
            </div>

            @endforeach
         
           
        </div>
    </div> 
</body>
</html>