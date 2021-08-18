@extends('layouts.app')

@section('content')
<div class="container">
{!! Form::open(array('route' => 'reports.store', 'files' => true)) !!}

                {{ Form::label('name', 'Brand Name:') }}
                {{ Form::text('name', null, array('class' => 'form-control', 'required' => '')) }}

                {{ Form::label('slug', 'Slug:') }}
                {{ Form::text('slug', null, array('class' => 'form-control', 'required' => '')) }}

                {{ Form::label('email', 'Email Address:') }}
                {{ Form::text('email', null, array('class' => 'form-control', 'required' => '')) }}

                {{ Form::label('mobile_1', 'Phone Number:') }}
                {{ Form::text('mobile_1', null, array('class' => 'form-control', 'required' => '')) }}

                {{ Form::label('address', 'Physical address of yor businesss:') }}
                {{ Form::text('address', null, array('class' => 'form-control', 'required' => '')) }}

                {{ Form::label('ig_profile', 'Instagram Username:') }}
                {{ Form::text('ig_profile', null, array('class' => 'form-control', 'required' => '')) }}

                {{ Form::label('fb_profile', 'Facebook Url Profile:') }}
                {{ Form::text('fb_profile', null, array('class' => 'form-control', 'required' => '')) }}

                {{ Form::label('twitter_profile', 'Twitter Url Profile:') }}
                {{ Form::text('twitter_profile', null, array('class' => 'form-control', 'required' => '')) }}

                {{ Form::label('category', 'Category:') }}
                <select class="form-control" name="category" id="category">
                    @foreach ($categories as $category)
                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                    @endforeach
                </select>

                {{ Form::label('brand_logo', 'Brand Logo Image') }}
                {{ Form::file('brand_logo') }}

                {{ Form::label('description', 'Describe in full detail about your brand') }}
                {{ Form::textarea('description', null, array('class' => 'form-control')) }}

           

                {{ Form::submit('Create Brand', array('class' => 'post-btn btn-block')) }}

            {!! Form::close() !!}

</div>
@endsection
