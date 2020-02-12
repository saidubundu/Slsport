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
                            <a class="navbar-brand" href="admin.blade.php"><img src="assets/images/logo/logo.png" alt="BEFIT logo"></a>
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
                                        <a class="nav-link" href="{{route('front.index')}}">home</a>
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
                                        <a class="nav-link" href="{{route('table.index')}}">point table</a>
                                    </li>
                                    <li class="nav-item dropdown">
                                        <a class="nav-link " href="{{route('post.index')}}" >BLOGS</a>
                                    </li>
                                    <li class="nav-item ">
                                        <a class="nav-link " href="#">more</a>
                                    </li>
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
        <div class="header-match-area pad20 yelow d-none d-lg-block">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="live-up">
                            <p><strong>live score</strong> : <span>rma</span> 0:0 <span>bra</span></p>
                        </div>
                    </div>
                    <div class="col-lg-8">
                        <div class="football-match">
                            <a href="#">LIGA BBVA </a>
                            <a href="#">UEFA</a>
                            <a href="#">EPL</a>
                            <a href="#">SUPER CUP </a>
                            <a class="active" href="#">WORLD CUP</a>
                            <a href="#">NPL</a>
                            <a href="#">SOUTHERN</a>
                            <a href="#">NATIONAL LEAGUE</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!--header end-->

    <!-- page title & breadcrumbs start -->
   @yield('content')
    <!--fixtures area end-->

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
                                    <p><a href="#"><i class="fa fa-location-arrow"></i></a><a href="http://sitetemplate.demo.ithemeslab.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="d0a3a0bfa2a4aa90b7bdb1b9bcfeb3bfbd">[email&#160;protected]</a></p>
                                    <p class="mb-0"><a href="#"><i class="fa fa-phone" ></i></a>+880-123-456-7890</p>
                                </div>
                            </div>
                            <div class="footer-content">
                                <div class="ftr-title xs-mt-40">
                                    <h4>sponsors</h4>
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
                                <div class="ftr-title xs-mt-40">
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
                                        <p class="mb-0">This treatment sounded just what I was looking for.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="footer-content">
                                <div class="ftr-title xs-mt-40">
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
                            <div class="footer-content">
                                <div class="ftr-title xs-mt-40">
                                    <h4>sportz channel</h4>
                                </div>
                                <div class="partners pt30">
                                    <a href="#">Sports Main Event</a>
                                    <a href="#">S. Sports Premier League</a>
                                    <a href="#">Sky Sports Football</a>
                                    <a href="#">Sky Sports Cricket</a>
                                    <a href="#">Sky Sports Golf</a>
                                    <a href="#">Sky Sports Action</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="copyright pad30">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h4>Copyright © {{\Carbon\Carbon::now()->year}} designed by <span>peektower</span> All Rights Reserved</h4>
                    </div>
                </div>
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
<script data-cfasync="false" src="../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script src="assets/js/vendor/jquery-3.2.1.min.js"></script>
<!--Migrate Js-->
<script id="dsq-count-scr" src="//slsport.disqus.com/count.js" async></script>
<script src="{{asset('js/front.js')}}"></script>
@yield('scripts')
</body>



</html>
