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
                        <br>
                        <span>{!!$post->body!!}</span>
                            <hr>
                        <div class="fb-comments " data-href="{{Request::url()}}" data-width="100%" data-numposts="5"></div>

                    </div>

                </div>
            </div>

        </div>
    </div>
    @stop
@section('scripts')

{{--    <script>--}}
{{--        $(".comment-reply-container .toggle-reply").click(function () {--}}

{{--            $(this).next().slideToggle('slow')--}}
{{--        })--}}
{{--    </script>--}}

    @stop
