<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>SL - Sports club & magazine </title>
{{--    <meta name="author" content="iThemesLab">--}}
    <meta name="description" content="">
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
                        <div class="col-md-12 col-lg-8 d-none d-lg-inline">
                            <div class="football-match">
                                <a href="#">LIGA BBVA </a>
                                <a href="#">UEFA</a>
                                <a href="#"> EPL</a>
                                <a href="#">SUPER CUP </a>
                                <a class="active" href="#">WORLD CUP</a>
                                <a href="#">NPL</a>
                                <a href="#">SOUTHERN</a>
                                <a href="#">NATIONAL LEAGUE</a>
                            </div>
                        </div>
                    </div>
                    <!--row end-->
                </div>
            </div>
            <div class="header-middle-area">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-5">
                            <div class="logo">
                                <a href="admin.blade.php"><img src="assets/images/logo/biglogo.jpg" alt="logo"></a>
                            </div>
                        </div>
                        <div class="col-md-12 col-lg-7">
                            <div class="bnr-img zoom">
                                <img class="full-width" src="assets/images/bg-banner/bnr7.jpg" alt="banner img">
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
                                            <a class="nav-link " href="{{route('front.index')}}" >home</a>
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
                                            <a class="nav-link" href="{{route('table.index')}}">point table</a>
                                        </li>
                                        <li class="nav-item dropdown">
                                            <a class="nav-link " href="{{route('post.index')}}">BLOGS</a>
                                        </li>
                                        <li class="nav-item ">
                                            <a class="nav-link " href="#">more</a>
                                        </li>
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

        <footer>
            <div class="footer-area bg2 parallax overlay2 pad60">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="section-title ">
                                <h4> <span class="wht-txt">newsletter</span></h4>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="subscribe">
                                <form action="#">
                                    <input class="name" type="text" placeholder="youremail@domain.com">
                                </form>
                                <a href="#"><i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
                            </div>
                        </div>
                    </div>
                    <!--row end-->
                    <div class="row">
                        <div class="col-md-12">
                            <div class="footer-box pt60">
                                <div class="footer-content add">
                                    <div class="footer-logo footer-content">
                                        <img src="assets/images/logo/logo.png" alt="footer logo">
                                    </div>
                                    <p class="pt30">Lorem ipsum dolor sit amet, ei ubique fastidii vim. Elitr feugait complectitur eu pro, sea audire ponderum eleifend cu. Vim at fuisset.</p>
                                    <div class="add-info">
                                        <p><a href="#"><i class="fa fa-map-marker"></i></a>23 New Design Street, Melbourne</p>
                                        <p><a href="#"><i class="fa fa-location-arrow"></i></a><a href="http://sitetemplate.demo.ithemeslab.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="0477746b76707e446369656d682a676b69">[email&#160;protected]</a></p>
                                        <p class="mb-0"><a href="#"><i class="fa fa-phone" ></i></a>+880-123-456-7890</p>
                                    </div>
                                </div>
                                <div class="footer-content">
                                    <div class="ftr-title xs-mt-40 ">
                                        <h4>partners</h4>
                                    </div>
                                    <div class="partners pt30">
                                        <a href="#">fantasy football</a>
                                        <a href="#">super 6</a>
                                        <a href="#">sky Sports Pub Finder</a>
                                        <a href="#">Living for Sport</a>
                                        <a href="#">Planet Rugby</a>
                                        <a href="#">Cricket365</a>
                                    </div>
                                </div>
                                <div class="footer-content">
                                    <div class="ftr-title xs-mt-40 ">
                                        <h4>latest post</h4>
                                    </div>
                                    <div class="news-info pt30">
                                        <div class="news-detail nws-bar zoom">
                                            <img src="assets/images/footer/1.jpg" alt="footer img">
                                            <p>Set yourself the challenge of doing the bare minimum.</p>
                                        </div>
                                        <div class="news-detail zoom">
                                            <img src="assets/images/footer/2.jpg" alt="footer img">
                                            <p>Body fat percentage: what does it really mean?</p>
                                        </div>
                                        <div class="news-detail zoom">
                                            <img src="assets/images/footer/3.jpg" alt="footer img">
                                            <p>This treatment sounded just what I was looking for.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="footer-content">
                                    <div class="ftr-title xs-mt-40 ">
                                        <h4>football</h4>
                                    </div>
                                    <div class="partners pt30">
                                        <a href="#">FIFA 2015</a>
                                        <a href="#">Copa 2015</a>
                                        <a href="#">UEFA Europa League</a>
                                        <a href="#">La Liga League</a>
                                        <a href="#">Uro 2014</a>
                                        <a href="#">Africa 2015</a>
                                    </div>
                                </div>
{{--                                <div class="footer-content">--}}
{{--                                    <div class="ftr-title xs-mt-40 ">--}}
{{--                                        <h4>sportz channel</h4>--}}
{{--                                    </div>--}}
{{--                                    <div class="partners pt30">--}}
{{--                                        <a href="#">Sports Main Event</a>--}}
{{--                                        <a href="#">S. Sports Premier League</a>--}}
{{--                                        <a href="#">Sky Sports Football</a>--}}
{{--                                        <a href="#">Sky Sports Cricket</a>--}}
{{--                                        <a href="#">Sky Sports Golf</a>--}}
{{--                                        <a href="#">Sky Sports Action</a>--}}
{{--                                    </div>--}}
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--row end-->
                </div>
            </div>
            <div class="copyright pad30">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <h4>Copyright © {{\Carbon\Carbon::now()->year}} designed by <span>peektower</span> All Rights Reserved</h4>
                        </div>
                    </div>
                    <!--row end-->
                </div>
            </div>
        </footer>

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


<!-- Mirrored from sitetemplate.demo.ithemeslab.com/sportzen/demo/home2.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 03 Jun 2019 06:07:57 GMT -->
</html>
