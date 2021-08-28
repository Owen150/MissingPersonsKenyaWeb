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
            <div>
                <table class="table">
                    <thead class="thead-dark">
                        <tr>
                        <th scope="col">Name of missing person</th>
                        <th scope="col">Phone number</th>
                        <th scope="col">Reporters Name</th>
                        <th scope="col">Email</th>
                        <th scope="col">Age</th>
                        <th scope="col">Additional information</th>
                        <th scope="col">Missing person image</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($crs as $cr)
                        <tr>
                        <td>{{ $cr->name_of_missing_person }}</td>
                        <td>{{ $cr->phone_number }}</td>
                        <td>{{ $cr->your_name }}</td>
                        <td>{{ $cr->email}}</td>
                        <td>{{ $cr->age}}</td>
                        <td>{{ $cr->additional_info }}</td>
                        <td><img src="/storage/{{ $cr->image_url}}" alt=""></td>
                        </tr>     
                        @endforeach                            
                    </tbody>                    
                </table>               
            </div>
        </div>
    </body>
</html>
@endsection