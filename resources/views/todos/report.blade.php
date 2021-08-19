@extends('layouts.app')

@section('content')
<div class="container">
{!! Form::open(array('route' => 'reports.store', 'files' => true)) !!}

                {{ Form::label('name_of_missing_person', 'Name of Missing Person') }}
                {{ Form::text('name_of_missing_person', null, array('class' => 'form-control', 'required' => '')) }}

                {{ Form::label('phone_number', 'Phone Number:') }}
                {{ Form::text('phone_number', null, array('class' => 'form-control', 'required' => '')) }}

                {{ Form::label('your_name', 'Your Name:') }}
                {{ Form::text('your_name', null, array('class' => 'form-control', 'required' => '')) }}

                {{ Form::label('email', 'Email Address:') }}
                {{ Form::text('email', null, array('class' => 'form-control', 'required' => '')) }}

                {{ Form::label('age', 'Age of Missing Person:') }}
                {{ Form::text('age', null, array('class' => 'form-control', 'required' => '')) }}            

                {{ Form::label('image_url', 'Image of Missing Person') }}
                {{ Form::file('image_url') }}

                {{ Form::label('additional_info', 'Describe in full details about the missing person') }}
                {{ Form::textarea('additional_info', null, array('class' => 'form-control')) }}
           
                {{ Form::submit('Submit', array('class' => 'post-btn btn-block')) }}

            {!! Form::close() !!}

</div>
@endsection