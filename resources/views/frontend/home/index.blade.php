@extends('layouts.frontend')

@section('content')

    <div class="home2-slider">
        <div class="slider-area owl-carousel">
            <div class="sliding-item">
                <img src="{{ asset('image/slider-show/4.jpg') }}" alt="slider-img">

            </div>
            <div class="sliding-item">
                <img src="{{ asset('image/slider-show/2.jpg') }}" alt="slider-img">
            </div>
            <div class="sliding-item">
                <img src="{{ asset('image/slider-show/3.jpg') }}" alt="slider-img">
            </div>
        </div>
        <div class="live-scores">
            <div class="score-head">
                <h4><a href="#">live scores</a></h4>
            </div>
            @foreach($scores as $score)
            <div class="scores-area">
                <p>{{$score->hometeam->name}} {{$score->result1_id}} - {{$score->result2_id}} {{$score->awayteam->name}}</p>
{{--                <p>| messi 45' 69'</p>--}}
            </div>
                @endforeach
        </div>
        <div class="score-content">
            <h2>{{\Carbon\Carbon::now()->year}} Sierra Leone <br> Premiere League</h2>
            <div class="upcoming">
                <span class="is-countdown"> </span>
                <div data-countdown="2018/09/01"></div>
            </div>
        </div>
    </div>
    <!--row end-->
    <!--slider-area end-->

    <!--match-box area start-->
    <div class="match-box pad60">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-lg-9">
                    <div class="row">
                        <div class="col-md-12 col-lg-5">
                            <div class="video-highlight">
                                <div class="section-title">
                                    <h4> <span>highlights</span></h4>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="highlights-bg h-bg1 mini-bg overlay mt20">
                                            <a class="mfp-iframe video-play-btn" href="https://www.youtube.com/watch?v=pZexlSaNvP0"><i class="fa fa-play"></i> <span></span></a>
                                            <p>liverpool 2-0 man city</p>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="highlights-bg h-bg2 mini-bg overlay mt30">
                                            <a class="mfp-iframe video-play-btn" href="https://www.youtube.com/watch?v=Kbg777rhMrA"><i class="fa fa-play"></i> <span></span></a>
                                            <p>chile vs mexico</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12 col-lg-7">
                            @include('frontend.partials.upcoming')
                        </div>
                    </div>
{{--                    <div class="row">--}}
{{--                        <div class="col-md-12">--}}
{{--                            <div class="bnr-img mt30 zoom">--}}
{{--                                <img class="full-width" src="{{asset('image/bg-banner/bnr2.png')}}" alt="banner img">--}}

{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="row">--}}
{{--                        <div class="col-md-12">--}}
{{--                            <div class="banner-box mt30">--}}
{{--                                <div class="banner-img overlay">--}}
{{--                                    <img class="full-width" src="{{asset('image/bg-banner/1.png')}}" alt="banner-img">--}}
{{--                                    <p>philipe</p>--}}
{{--                                    <h4><a href="#">liverpool win Pl<br> Aisa trophy</a> </h4>--}}
{{--                                </div>--}}
{{--                                <div class="banner-img overlay">--}}
{{--                                    <img class="full-width" src="assets/images/bg-banner/2.png" alt="banner-img">--}}
{{--                                    <p>football</p>--}}
{{--                                    <h4><a href="#">Mesut Ozil back in <br> Arsenal training.</a></h4>--}}
{{--                                </div>--}}
{{--                                <div class="banner-img overlay">--}}
{{--                                    <img class="full-width" src="assets/images/bg-banner/3.png" alt="banner-img">--}}
{{--                                    <p>26.07.17</p>--}}
{{--                                    <h4><a href="#">Euro Papers: Messi <br> wants Dybala</a></h4>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
                    @include('frontend.partials.post')
                    <div class="sport-section pad60">
                        <div class="section-title">
                            <h4> <span>player of the year</span></h4>
                        </div>
                        <div class="row">
                            <div class="col-md-12 col-lg-5">
                                <div class="banner-img overlay mt20">
                                    <img class="full-width" src="{{asset('image/bg-banner/4.jpg')}}" alt="banner-img">
                                    <h4><a href="#">The Best FIFA Men's Player is an association football award presented.</a></h4>
                                </div>
                                <div class="bnr-img mt30 zoom">
                                    <img class="full-width" src="{{asset('image/bg-banner/bnr4.png')}}" alt="banner img">
                                </div>
                            </div>
                            <div class="col-md-12 col-lg-7">
                                <div class="recent-video">
                                    <div class="highlights-bg h-bg6 mini-bg overlay mt20 xs-mt-30">
                                        <a class="mfp-iframe video-play-btn" href="https://www.youtube.com/watch?v=Kbg777rhMrA"><i class="fa fa-play"></i> <span></span></a>
                                        <p>bardhi's brilliant free-kick</p>
                                    </div>
                                    <div class="highlights-bg h-bg7 mini-bg overlay mt30">
                                        <a class="mfp-iframe video-play-btn" href="https://www.youtube.com/watch?v=Kbg777rhMrA"><i class="fa fa-play"></i> <span></span></a>
                                        <p>Most Amazing Goals Of The Year 2016</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-12 col-lg-3">
                    @include('frontend.partials.results')

                    <div class="bnr-img mt30 zoom">
                        <img class="full-width" src="{{asset('image/bg-banner/bnr1.jpg')}}" alt="banner img">
                    </div>
                    @include('frontend.partials.table')
                    <div class="bnr-img mt30 zoom">
                        <img class="full-width" src="{{asset('image/bg-banner/bnr5.png')}}" alt="banner img">
                    </div>
                    <div class="follow-us-area mt60">
                        <div class="section-title">
                            <h4> <span>follow us</span></h4>
                        </div>
                        <div class="link-box mt30">
                            <a href="#"><i class="fa fa-facebook"></i>faceboook</a>
                            <a href="#"><i class="fa fa-twitter"></i>twitter</a>
                            <a href="#"><i class="fa fa-google-plus-official"></i>google plus</a>
                            <a href="#"><i class="fa fa-linkedin"></i>linkedin</a>
                            <a href="#"><i class="fa fa-instagram"></i>instagram</a>
                        </div>
                    </div>
                </div>
            </div>
            <!--row end-->
        </div>
    </div>
    <!--match-box area end-->

    <!--blog & news start-->
    <div class="blog-news bg3 parallax overlay2 pad40">
        <div class="container">
            <div class="row">
                @include('frontend.partials.topscore')

                <div class="col-md-12 col-lg-5">
                    <div class="section-title xs-mt-50">
                        <h4> <span>transfer news</span></h4>
                    </div>
                    <div class="trans-news nws2 wht-txt mt20">
                        <img class="img-fluid full-width mb30 " src="{{asset('image/blog/3.jpg')}}" alt="blog img">
                        <h5 class="mb15"><a href="#">Quo mazim splendide id, qui tale reque ad. Simul nobis ius eu,</a></h5>
                        <p>Lorem ipsum dolor sit amet, id quot primis philosophia mea. Sea in legi mus interesset, in vivendo tibique reprimique eos. Ne ridens anc illae mel, vim utroque laoreet suscipit ad.</p>
                    </div>
                </div>
                <div class="col-md-12 col-lg-3">
                    <div class="section-title xs-mt-50">
                        <h4> <span>Text Ads</span></h4>
                    </div>
                    <div class="twit-area mt40">
                        <div class="twit-box">
                            <i class="fa fa-twitter"></i>
                            <div class="twitted">
                                <p class="wht-txt">barcelona is the best represclub</p>
                                <a href="#">https://twitter.com/cigacmfcmr</a>
                                <p class="wht-txt">2 hours ago</p>
                            </div>
                        </div>
                        <div class="twit-box">
                            <i class="fa fa-twitter"></i>
                            <div class="twitted">
                                <p class="wht-txt">barcelona is the best represclub</p>
                                <a href="#">https://twitter.com/cigacmfcmr</a>
                                <p class="wht-txt">2 hours ago</p>
                            </div>
                        </div>
                        <div class="twit-box">
                            <i class="fa fa-twitter"></i>
                            <div class="twitted">
                                <p class="wht-txt">barcelona is the best represclub</p>
                                <a href="#">https://twitter.com/cigacmfcmr</a>
                                <p class="wht-txt">2 hours ago</p>
                            </div>
                        </div>
                        <div class="twit-box">
                            <i class="fa fa-twitter"></i>
                            <div class="twitted">
                                <p class="wht-txt">barcelona is the best represclub</p>
                                <a href="#">https://twitter.com/cigacmfcmr</a>
                                <p class="wht-txt">2 hours ago</p>
                            </div>
                        </div>
                        <div class="twit-box">
                            <i class="fa fa-twitter"></i>
                            <div class="twitted">
                                <p class="wht-txt">barcelona is the best represclub</p>
                                <a href="#">https://twitter.com/cigacmfcmr</a>
                                <p class="wht-txt">2 hours ago</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--row end-->
        </div>
    </div>
    <!--blog & news end-->

    <!--features area2 start-->
    <div class="features-area2 pad60">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-lg-5">
{{--                    <div class="football-gallery">--}}
{{--                        <div class="section-title">--}}
{{--                            <h4><span>football gallery</span></h4>--}}
{{--                        </div>--}}
{{--                        <div class="gallery-slider owl-carousel owl-loaded mt40">--}}
{{--                            <div class="gallery-img">--}}
{{--                                <img class="img-fluid" src="{{asset('image/gallery/n1.jpg')}}" alt="gallery img">--}}
{{--                            </div>--}}
{{--                            <div class="gallery-img">--}}
{{--                                <img class="img-fluid" src="assets/images/gallery/2.jpg" alt="gallery img">--}}
{{--                            </div>--}}
{{--                            <div class="gallery-img">--}}
{{--                                <img class="img-fluid" src="assets/images/gallery/3.jpg" alt="gallery img">--}}
{{--                            </div>--}}
{{--                            <div class="gallery-img">--}}
{{--                                <img class="img-fluid" src="assets/images/gallery/4.jpg" alt="gallery img">--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
                </div>
                <div class="col-md-12 col-lg-4">
                    <div class="section-title xs-mt-90 ">
                        <h4><span>latest post</span></h4>
                    </div>
                    <div class="post-slider owl-carousel mt40">
                        <div class="post-area">
                            <div class="banner-img">
                                <img class="img-fluid" src="{{asset('image/bg-banner/5.jpg')}}" alt="banner-img">
                            </div>
                            <div class="blog-post">
                                <h4 class="mt30 mb-0"><a href="#">jose convinced me to join.</a></h4>
                                <div class="coments mt20">
                                    <a href="#"><i class="fa fa-calendar"></i>April 15, 2017</a>
                                    <a href="#"><i class="fa fa-pencil-square"> </i>by admin</a>
                                </div>
                                <p class="mt20">Diam reformidans duo an, per diam accusam eu. His alterum deseruisse cu, at pri facilis mandamus, usu ei minimum vituperatoribus. Euismod voluptatum cu usu, ad sale delenit pri, vim nonumy postea suavitate no. Repudiare </p>
                            </div>
                        </div>
                        <div class="post-area">
                            <div class="banner-img">
                                <img class="img-fluid" src="assets/images/bg-banner/3.png" alt="banner-img">
                            </div>
                            <div class="blog-post">
                                <h4 class="mt30 mb-0"><a href="#">jose convinced me to join.</a></h4>
                                <div class="coments mt20">
                                    <a href="#"><i class="fa fa-calendar"></i>April 15, 2017</a>
                                    <a href="#"><i class="fa fa-pencil-square"> </i>by admin</a>
                                </div>
                                <p class="mt20">Diam reformidans duo an, per diam accusam eu. His alterum deseruisse cu, at pri facilis mandamus, usu ei minimum vituperatoribus. Euismod voluptatum cu usu, ad sale delenit pri, vim nonumy postea suavitate no. Repudiare </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-12 col-lg-3">
                    <div class="bnr-img mt60 zoom">
                        <img class="full-width" src="{{asset('image/bg-banner/bnr8.jpg')}}" alt="banner img">
                    </div>
                </div>
            </div>
            <!--row end-->
        </div>
    </div>

    @stop
