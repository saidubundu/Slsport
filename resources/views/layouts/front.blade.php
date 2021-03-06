<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from sitetemplate.demo.ithemeslab.com/sportzen/demo/fixtures.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 03 Jun 2019 06:11:19 GMT -->
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>SL - Sports club & magazine</title>
    <meta name="author" content="iThemesLab">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Favicons -->
    <link rel="shortcut icon" href="assets/favicon/favicon.ico">
    <link rel="apple-touch-icon" href="assets/favicon/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="72x72" href="assets/favicon/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="114x114" href="assets/favicon/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="144x144" href="assets/favicon/apple-icon-144x144.png">

    <!--All Css Here-->

    <!--Bootstrap Css-->
    <link href="{{ asset('css/front.css') }}" rel="stylesheet">




    <!--[if lt IE 9]>
    <script src="//oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="//oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>
<div id="fb-root"></div>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v6.0&appId=509994596321415&autoLogAppEvents=1"></script>
<!-- preloader -->
<div class="preloader">
    <div class='loader'>
        <div class='loader--dot'></div>
        <div class='loader--dot'></div>
        <div class='loader--dot'></div>
        <div class='loader--dot'></div>
        <div class='loader--dot'></div>
        <div class='loader--dot'></div>
        <div class='loader--text'></div>
    </div>
</div>
<!-- preloader -->

<!--main-container-->
<div class="main-container">

    <!-- /.header start -->
    <header>
        <div class="nav-menu full-black" id="sticky-menu">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3">
                        <div class="navbar-header">
                            <a class="navbar-brand" href="/"><img src="{{asset('image/logo/logotrans.png')}}" alt="BEFIT logo"></a>
                            <button class="navbar-toggler d-md-inlline d-xl-none" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="fa fa-bars"></span>
                            </button>
                        </div>
                    </div>
                    <div class="col-lg-8">
                        <nav class="navbar navbar-expand-lg">
                            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                                <ul class="navbar-nav ml-auto">
                                    <li class="nav-item ">
                                        <a class="nav-link" href="/">home</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{route('clubs.index')}}">clublist</a>
                                    </li>
                                    <li class="nav-item ">
                                        <a class="nav-link " href="{{route('fixture.index')}}">fixtures</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{route('result.index')}}">results</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{route('table.index')}}">Table</a>
                                    </li>
                                    <li class="nav-item dropdown">
                                        <a class="nav-link " href="{{route('post.index')}}" >BLOGS</a>
                                    </li>
                                    @canany(['isAdmin','isModerator','isEditor'])
                                        <li class="nav-item ">
                                            <a class="nav-link " href="/admin">Admin</a>
                                        </li>
                                    @endcanany
                                </ul>
                            </div>
                        </nav>
                    </div>
                    <div class="col-lg-1">
                        <ul class="navbar-nav">
                            <li class="nav-item d-none d-lg-inline">
                                <div class="icon-menu">
                                    <ul>
                                        <li><a href="#" class="search-btn search-box-btn"><i class="fa fa-search"></i></a></li>
                                    </ul>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
{{--        <div class="header-match-area pad20 yelow d-none d-lg-block">--}}
{{--            <div class="container">--}}
{{--                <div class="row">--}}
{{--                    <div class="col-lg-4">--}}
{{--                        <div class="live-up">--}}
{{--                            <p><strong>live score</strong> : <span>rma</span> 0:0 <span>bra</span></p>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="col-lg-8">--}}
{{--                        <div class="football-match">--}}
{{--                            <a href="#">LIGA BBVA </a>--}}
{{--                            <a href="#">UEFA</a>--}}
{{--                            <a href="#">EPL</a>--}}
{{--                            <a href="#">SUPER CUP </a>--}}
{{--                            <a class="active" href="#">WORLD CUP</a>--}}
{{--                            <a href="#">NPL</a>--}}
{{--                            <a href="#">SOUTHERN</a>--}}
{{--                            <a href="#">NATIONAL LEAGUE</a>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
    </header>
    <!--header end-->

    <!-- page title & breadcrumbs start -->
   @yield('content')
    <!--fixtures area end-->

    @include('frontend.partials.footer')

</div>
<!--main-container-->

<!--Search Popup-->
<div id="search-popup" class="search-popup">
    <div class="close-search theme-btn"><span class="fa fa-close"></span></div>
    <div class="popup-inner">

        <div class="search-form">
            <form method="post" action="http://sitetemplate.demo.ithemeslab.com/sportzen/demo/index.html">
                <div class="form-group">
                    <fieldset>
                        <input type="search" class="form-control" name="search-input" value="" placeholder="Search Here" required>
                        <input type="submit" value="Search" class="theme-btn">
                    </fieldset>
                </div>
            </form>

            <br>
            <h3>Recent Search Keywords</h3>
        </div>
    </div>
</div>
<!--End Search Popup-->

<!-- back to to btn start -->
<div id="back-to-top"></div>
<!-- back to to btn end -->

<!--All Js Here-->
<!-- jquery latest version -->
{{--<script data-cfasync="false" src="../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script src="assets/js/vendor/jquery-3.2.1.min.js"></script>--}}
<!--Migrate Js-->
<script src="{{asset('js/front.js')}}"></script>
@yield('scripts')
</body>



</html>
