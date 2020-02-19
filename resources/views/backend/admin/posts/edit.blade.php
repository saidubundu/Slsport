@extends('layouts.admin')

@section('content')
    @include('includes.tinymce')
    <div class="card card-box">
        <div class="card-head">
            <header>Edit post</header>
        </div>

        <div class="card-body">
            <div class="col-sm-3">
                <img height="100" width="100" src="{{$post->photo ? $post->photo->file : 'no image'}}" alt="" class="img-thumbnail">
            </div>
            <br>
            <div class="col-md-12">
                {!! Form::model($post,['method'=>'PATCH', 'action'=> ['AdminPostsController@update',$post->id], 'files'=>true]) !!}
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
                    {!! Form::submit('Update Post', ['class'=>'btn btn-primary col-md-12']) !!}
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
            </div>
        </div>
    </div>



@stop
