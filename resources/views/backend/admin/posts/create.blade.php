@extends('layouts.admin')

@section('content')
    <h1>Create post</h1>

    {!! Form::open(['method'=>'Post', 'action'=> 'AdminPostsController@store', 'files'=>true]) !!}
    <div class="form-row">

    <div class="form-group col-md-6">
        {!! Form::label('title', 'Title:') !!}
        {!! Form::text('title', null, ['class'=>'form-control']) !!}
    </div>

        <div class="form-group col-md-6">
            {!! Form::label('excerpt', 'Headline:') !!}
            {!! Form::textarea('excerpt', null, ['class'=>'form-control', 'rows'=>4]) !!}
        </div>

        <div class="form-group col-md-6">
            {!! Form::label('body', 'Body:') !!}
            {!! Form::textarea('body', null, ['class'=>'form-control', 'rows'=>8]) !!}
        </div>

        <div class="form-group col-md-6">
            {!! Form::label('category_id', 'Category:') !!}
            {!! Form::select('category_id',['' => 'Choose category'] + $categories, null, ['class'=>'form-control']) !!}
        </div>

        <div class="form-group col-md-6">
            {!! Form::label('photo_id', 'Image:') !!}
            {!! Form::file('photo_id', null, ['class'=>'form-control']) !!}
        </div>




    </div>

    <div class="form-group">
        {!! Form::submit('Create Post', ['class'=>'btn btn-primary']) !!}
    </div>

    {!! Form::close() !!}

     @if (count($errors) > 0)
             <div class="alert alert-danger">
                 <ul>
                     @foreach ($errors->all() as $error)
                         <li>{{ $error }}</li>
                     @endforeach
                 </ul>
             </div>
     @endif

    @stop
