@extends('layouts.app')

@section('content')
<div class="container">
    <div class = "row">
        <div class ="col-8 offset-4">
            <div class="row">
                <h1>Report a missing person</h1>
            </div>

        {!! Form::open(array('route' => 'reports.store', 'files' => true)) !!}
        @csrf

        <div class="form-group row col-md-6">
            {{ Form::label('name_of_missing_person', 'Name of Missing Person') }}
            {{ Form::text('name_of_missing_person', null, array('class' => 'form-control', 'required' => '')) }}
        </div>
            
        <div class="form-group row col-md-6">
            {{ Form::label('phone_number', 'Phone Number') }}
            {{ Form::text('phone_number', null, array('class' => 'form-control', 'required' => '')) }}
        </div>

        <div class="form-group row col-md-6">
            {{ Form::label('your_name', 'Your Name') }}
            {{ Form::text('your_name', null, array('class' => 'form-control', 'required' => '')) }}
        </div>    

        <div class="form-group row col-md-6">
            {{ Form::label('email', 'Email Address') }}
            {{ Form::text('email', null, array('class' => 'form-control', 'required' => '')) }}
        </div>      

        <div class="form-group row col-md-6">
            {{ Form::label('age', 'Age of Missing Person') }}
            {{ Form::text('age', null, array('class' => 'form-control', 'required' => '')) }}
        </div>
                
        <div class="form-control-file row col-md-6 autofocus">
            {{ Form::label('image_url', 'Image of Missing Person') }}
            {{ Form::file('image_url') }}
        </div>       

        <div class="form-group row col-md-6">
            {{ Form::label('additional_info', 'Describe in full details about the missing person') }}
            {{ Form::textarea('additional_info', null, array('class' => 'form-control')) }}
        </div>
        
        <div class="btn pt-3">
            {{ Form::submit('Submit', array('class' => 'post-btn btn-primary')) }}
        </div>

        {!! Form::close() !!}

        </div>
    </div>
</div>
@endsection