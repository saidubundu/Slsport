@extends('layouts.front')

@section('content')

    <div class="bdcmb-bg4 page-head parallax overlay">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-title text-center">
                        <h3>sports news</h3>
                    </div>
                </div>
                <!-- /.colour-service-1-->
                <div class="col-md-12">
                    <ol class="breadcrumb">
                        <li><a href="index.html">home</a></li>
                        <li>।</li>
                        <li>sports news</li>
                    </ol>
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container -->
    </div>
    <!-- /.page-header -->
    <!-- page title & breadcrumbs end -->

    <div class="news-area pad60">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-lg-9">
                    <div class="sports-news mb60">
                        <div >
                            <img class="img-fluid img-fluid" height="500" width="800" src="{{$post->photo_id ? $post->photo->file : '/images/holder/post.png'}}" alt="">
                        </div>
                        <br>
                        <div class="sports-title mb20">
                            <h3>{{$post->title}}</h3>
                            <p>By <span>{{$post->user->name}}</span> / {{$post->created_at->diffForHumans()}} / 3 Comments / Categories: <span>{{$post->category->name}}</span></p>
                        </div>
                        <p>{{$post->body}}</p> <br>


@if(Auth::check())
                        <div class="well">
                            <h4><p>Leave a Comment:</p></h4>

                            {!! Form::open(['method'=>'Post', 'action'=> 'PostCommentsController@store']) !!}
                                <input type="hidden" name="post_id" value="{{$post->id}}">
                            <div class="form-group">
                                {!! Form::label('', '') !!}
                                {!! Form::textarea('body', null, ['class'=>'form-control', 'rows'=>2]) !!}
                            </div>

                            <div class="form-group">
                                {!! Form::submit('Submit', ['class'=>'btn btn-primary' ]) !!}
                            </div>

                            {!! Form::close() !!}

                        </div>
                        @endif

                        <hr>
                @if(count($comments) > 0)
                    @foreach($comments as $comment)
                        <div class="media">
                            <img height="40" src="{{$comment->photo}}" class="mr-3" alt="...">
                            <div class="media-body">
                                <h5 class="mt-0"><p>{{$comment->author}}</p></h5>
                                <p>{{$comment->body}}.</p>

                                @if(count($comment->replies) >0)
                                    @foreach($comment->replies as $reply)

                                <div class="media mt-3">
                                    <a class="mr-3" href="#">
                                        <img height="30" src="{{$reply->photo}}" class="mr-3" alt="...">
                                    </a>
                                    <div class="media-body">
                                        <h5 class="mt-0"><p>{{$reply->author}}</p></h5>
                                        <p>{{$reply->body}}</p>
                                    </div>
                                </div>
                                    @endforeach
                                   @else
                                    <div class="comment-reply-container">
                                    <button class="toggle-reply btn btn-primary pull-right">Reply</button>
                                    <div class="comment-reply">
                                        {!! Form::open(['method'=>'Post', 'action'=> 'CommentRepliesController@createReply']) !!}

                                        <div class="form-group">

                                            <input type="hidden" name="comment_id" value="{{$comment->id}}">


                                            {!! Form::label('', '') !!}
                                            {!! Form::text('body', null, ['class'=>'form-control']) !!}
                                        </div>

                                        <div class="form-group">
                                            {!! Form::submit('reply', ['class'=>'btn btn-primary']) !!}
                                        </div>

                                        {!! Form::close() !!}
                                    </div>
                                </div>
                                    @endif


                            </div>
                        </div>
                            @endforeach
@endif

{{--                        <div class="sports-arrow mt60">--}}

{{--                            <a href="#">previous</a>--}}
{{--                            <a href="#">next</a>--}}
{{--                        </div>--}}
                    </div>

                </div>
                <hr>
            </div>

        </div>
    </div>
    @stop
@section('scripts')

    <script>
        $(".comment-reply-container .toggle-reply").click(function () {

            $(this).next().slideToggle('slow')
        })
    </script>

    @stop
