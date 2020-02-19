<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>SL - Sports club & magazine </title>
{{--    <meta name="author" content="iThemesLab">--}}
    <meta name="description" content="Sierra Leone Premiere League">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Favicons -->
{{--    <link rel="shortcut icon" href="assets/favicon/favicon.ico">--}}
{{--    <link rel="apple-touch-icon" href="assets/favicon/apple-icon-57x57.png">--}}
{{--    <link rel="apple-touch-icon" sizes="72x72" href="assets/favicon/apple-icon-72x72.png">--}}
{{--    <link rel="apple-touch-icon" sizes="114x114" href="assets/favicon/apple-icon-114x114.png">--}}
{{--    <link rel="apple-touch-icon" sizes="144x144" href="assets/favicon/apple-icon-144x144.png">--}}

    <!--All Css Here-->

    <!--Bootstrap Css-->
    <link href="{{ asset('css/front.css') }}" rel="stylesheet">



    <!--[if lt IE 9]>
        <script src="//oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="//oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

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
            <div class="header-match-area pad20">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 col-lg-4">
                            <div class="social-icon">
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-google-plus-square"></i></a>
                                <a href="#"><i class="fa fa-instagram"></i></a>
                                <a href="#"><i class="fa fa-youtube-play"></i></a>
                            </div>
                        </div>
{{--                        <div class="col-md-12 col-lg-8 d-none d-lg-inline">--}}
{{--                            <div class="football-match">--}}
{{--                                <a href="#">LIGA BBVA </a>--}}
{{--                                <a href="#">UEFA</a>--}}
{{--                                <a href="#"> EPL</a>--}}
{{--                                <a href="#">SUPER CUP </a>--}}
{{--                                <a class="active" href="#">WORLD CUP</a>--}}
{{--                                <a href="#">NPL</a>--}}
{{--                                <a href="#">SOUTHERN</a>--}}
{{--                                <a href="#">NATIONAL LEAGUE</a>--}}
{{--                            </div>--}}
{{--                        </div>--}}
                    </div>
                    <!--row end-->
                </div>
            </div>
            <div class="header-middle-area">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-5">
                            <div class="logo">
                                <a href="admin.blade.php"><img src="{{asset('/image/logo/slogo.png')}}" alt="logo"></a>
                            </div>
                        </div>
                        <div class="col-md-12 col-lg-7">
                            <div class="bnr-img zoom">
                                <img height="20" class="full-width img-fluid" src="{{asset('image/bg-banner/bnr7.jpg')}}" alt="banner img">
                            </div>
                        </div>
                    </div>
                    <!--row end-->
                </div>
            </div>
            <div class="header-bottom-area nav-menu full-black" id="sticky-menu">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-10">
                            <button class="navbar-toggler d-md-inlline d-xl-none" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="fa fa-bars"></span>
                            </button>
                            <nav class="navbar navbar-expand-lg">
                                <div class="collapse navbar-collapse" id="navbarNavDropdown">
                                    <ul class="navbar-nav">
                                        <li class="nav-item active">
                                            <a class="nav-link " href="/" >home</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="{{route('clubs.index')}}">clublist</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link " href="{{route('fixture.index')}}">fixtures</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="{{route('result.index')}}">results</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="{{route('table.index')}}">Table</a>
                                        </li>
                                        <li class="nav-item dropdown">
                                            <a class="nav-link " href="{{route('post.index')}}">BLOGS</a>
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
                        <div class="col-lg-2">
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
                    <!--row end-->
                </div>
            </div>
        </header>
        <!--header end-->

        <!--slider-area start-->
        @yield('content')
        <!--features video end-->

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
    <script src="{{asset('js/front.js')}}"></script>
</body>

</html>
