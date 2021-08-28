@extends('layouts.app')

@section('content')
<div class="container">
    <div class = "row justify-content-center">
        <div class = "col-5 p-3 ">
            <img src="https://i0.wp.com/missingchild.co.ke/wp-content/uploads/2017/11/BUTTON-1.png?w=800&ssl=1" class="img-fluid" alt="Responsive image">
        </div>
        <div class = "col-10 pt-4">
            <div><h1>{{ $user->username}}</h1></div>
            <div class = "d-flex justify-content-center">
                <div class = "pr-5"><strong>153 </strong>Posts</div>
                <div class = "pr-5"><strong>33k </strong>Followers</div>
                <div class = "pr-5"><strong>212 </strong>Following</div>
            </div>
        </div>
    </div>
    <div class = "row pt-5">
        
        @foreach($user->posts as $post)
        <div class = "col-6 offset-3">
            <img src ="/storage/{{$post->image}}" class = "w-100">
        </div>
        @endforeach
        
    </div>
</div>
@endsection
