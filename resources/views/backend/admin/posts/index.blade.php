@extends('layouts.admin')

@section('content')
    <div class="card card-box table-responsive">
        <div class="card-head">
            <header>All Posts</header>
            <div class="tools">
                <a  href="{{route('posts.create')}}"><i class="fa fa-plus"></i>Add new post</a>
            </div>
        </div>

        <div class="card-body">
            @if(Session::has('created_post'))
                <div class="alert alert-primary" role="alert">
                    {{session('created_post')}}
                </div>
            @endif

            @if(Session::has('updated_post'))
                <div class="alert alert-success" role="alert">
                    {{session('updated_post')}}
                </div>
            @endif

            @if(Session::has('deleted_post'))
                <div class="alert alert-danger" role="alert">
                    {{session('deleted_post')}}
                </div>
            @endif

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
                            <td><img height="60" src="{{$post->photo_id ? $post->photo->file : '/images/holder/post.png'}}" alt=""></td>
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
                <hr>

                <div class="row">
                    <div class="col-sm-6 col-sm-offset-5">
                        {{$posts->render()}}
                    </div>
                </div>

            @endif

        </div>
    </div>



@stop
