@extends('layouts.app')

@section('content')
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
                            </tr>     
                            @endforeach                  
                        </tbody>

                    </table>
                    
                    
                    </table>   
                </div>
            
        </div>
</div>
@endsection
