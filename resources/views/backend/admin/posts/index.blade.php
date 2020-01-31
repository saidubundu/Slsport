@extends('layouts.admin')

@section('content')
    <h1>All Posts</h1>
    <br>
@if($posts)
    <table class="table">
        <thead class="thead-dark">
        <tr>
            <th scope="col">#</th>
            <th scope="col">Author</th>
            <th scope="col">Image</th>
            <th scope="col">title</th>
            <th scope="col">Headline</th>
            <th scope="col">Body</th>
            <th scope="col">Category</th>
            <th scope="col">Edit</th>
            <th scope="col">Delete</th>

        </tr>
        </thead>
        <tbody>
        @foreach($posts as $post)
        <tr>
            <th scope="row">{{$post->id}}</th>
            <td>{{$post->user->name}}</td>
            <td><img src="{{$post->photo_id ? $post->photo->file : '/images/holder/post.png'}}" alt=""></td>
            <td>{{$post->title}}</td>
            <td>{{str_limit($post->excerpt, 10)}}</td>
            <td>{{str_limit($post->body, 20)}}</td>
            <td>{{$post->category->name}}</td>
            <td><a href="{{route('posts.edit', $post->id)}} " class="btn btn-outline-success">Edit</a></td>

            <td>
                {!! Form::open(['method'=>'DELETE', 'action'=> ['AdminPostsController@destroy', $post->id]]) !!}

                <div>
                            {!! Form::submit('Delete', ['class="btn btn-outline-danger" col-sm-3']) !!}
                        </div>
                {!! Form::close() !!}
            </td>
        </tr>

            @endforeach
        </tbody>
    </table>
    @endif

@stop
