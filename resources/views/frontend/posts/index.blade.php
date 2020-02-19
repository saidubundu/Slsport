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
@if($posts)
    <div class="news-area pad60">
        <div class="container">
            <div class="row">

                <div class="col-md-12 col-lg-9">
                    @foreach($posts as $post)
                    <div class="sports-news mb60">
                        <div class="sports-img zoom mb40">
                            <img class="img-thumbnail img-fluid" height="500" width="800" src="{{$post->photo_id ? $post->photo->file : '/images/holder/post.png'}}" alt="news img">
                        </div>
                        <div class="sports-title mb20">
                            <h3>{{$post->title}}</h3>
                            <p>By <span>{{$post->user->name}}</span> / {{$post->created_at->diffForHumans()}} / 3 Comments / Categories: <span>{{$post->category->name}}</span></p>
                        </div>
                        <p>{!!$post->excerpt!!}</p>
                        <div class="news-btn mt40">
                            <a href="{{route('post.show',$post->slug)}}">read more</a>
                        </div>
                    </div>
                    @endforeach


                    <nav aria-label="Page navigation mt60">
                        {{$posts->render()}}
                    </nav>
                </div>
            </div>
        </div>
    </div>

    @else
    <h1>No Blog</h1>
@endif

    @stop
