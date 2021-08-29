@extends('layouts.app')

@section('content')
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <title>Missing Persons Kenya</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.5/examples/carousel/">

    <!-- Bootstrap core CSS -->
    <link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet">
  </head>
  
    <body>
        <div class="container">       
            
            <div class="d-inline-flex">
                @foreach($crs as $cr)
                <div class="card" style="width: 18rem;">
                    <img src="/storage/{{ $cr->image_url}}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">{{ $cr->name_of_missing_person }}</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">{{ $cr->age}}</li>
                        <li class="list-group-item">{{ $cr->additional_info }}</li>
                        <li class="list-group-item">{{ $cr->your_name }}</li>
                    </ul>
                    <div class="card-body">
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
                @endforeach             
            </div>
            
        </div>
    </body>
</html>
@endsection