@extends('layouts.app')

@section('content')
<div class="container">
    <form action="/profile/{{ $user->id }}" enctype="multipart/form-data" method="POST">
    @csrf
    @method('PATCH')

        <div class="row">
            <div class = "col-8 offset-2">

                <div class="row justify-content-center">
                    <h1>Edit profile</h1>
                </div>

                <div class="form-group">
                    <label for=""></label>
                    <input type="hidden" name="user_id" class="form-control" id="exampleInputPassword1" value="{{ $user->id }}">
                </div>

                <div class="form-group">   
                    <label for="name">Name</label>
                    <input type="text" name="name" class="form-control @error('name') is-invalid @enderror"  value="{{ old('name') ?? $user->profile->name}}" autocomplete="name" id="name" placeholder="Name" >
                    @error('name')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>

                <div class="form-group">   
                    <label for="location">Location</label>
                    <input type="text" name="location" class="form-control @error('location') is-invalid @enderror" value="{{ old('location') ?? $user->profile->location}}" autocomplete="location"  id="location" placeholder="Location" >
                    @error('location')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="form-group">   
                    <label for="phone_number">Phone Number</label>
                    <input type="text" name="phone_number" class="form-control @error('phone_number') is-invalid @enderror" value="{{ old('phone_number') ?? $user->profile->phone_number}}" autocomplete="phone_number" id="phone_number" placeholder="Phone number" >
                    @error('phone number')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="form-group">     
                    <label for="description">description</label>
                    <input type="text" name="description" class="form-control @error('description') is-invalid @enderror" value="{{ old('description') ?? $user->profile->description}}" autocomplete="description" id="description" placeholder="Description" >
                    @error('description')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <button type="submit" class="btn btn-primary">Save profile</button>
            </div>
        </div>
    </form>
</div>
@endsection