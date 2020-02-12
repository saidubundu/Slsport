<!DOCTYPE html>
<html lang="en">
<!-- BEGIN HEAD -->

<!-- Mirrored from radixtouch.in/templates/admin/smile/source/admin.blade.php by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 05 Feb 2020 02:13:25 GMT -->
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1" name="viewport" />
    <meta name="description" content="Sierra Leone Sport" />
    <meta name="author" content="peektower" />
    <title>Sl Sportz</title>
    <!-- google font -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet" type="text/css" />
	<!-- icons -->
    <link href="{{ asset('css/admin.css') }}" rel="stylesheet">
	<!-- favicon -->
    <link rel="shortcut icon" href="assets/img/favicon.ico" />
 </head>
 <!-- END HEAD -->
<body class="page-header-fixed sidemenu-closed-hidelogo page-content-white page-md header-white dark-sidebar-color logo-dark">
    <div class="page-wrapper">
        <!-- start header -->
        <div class="page-header navbar navbar-fixed-top">
            <div class="page-header-inner ">
                <!-- logo start -->
                <div class="page-logo">
                    <a href="admin.blade.php">
                    <img alt="" src="assets/img/logo.png">
                    <span class="logo-default" >Sl Sportz</span> </a>
                </div>
                <!-- logo end -->
				<ul class="nav navbar-nav navbar-left in">
					<li><a href="#" class="menu-toggler sidebar-toggler"><i class="icon-menu"></i></a></li>
				</ul>
                 <form class="search-form-opened" action="#" method="GET">
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Search..." name="query">
                        <span class="input-group-btn">
                          <a href="javascript:;" class="btn submit">
                             <i class="icon-magnifier"></i>
                           </a>
                        </span>
                    </div>
                </form>
                <!-- start mobile menu -->
                <a href="javascript:;" class="menu-toggler responsive-toggler" data-toggle="collapse" data-target=".navbar-collapse">
                    <span></span>
                </a>
               <!-- end mobile menu -->
                <!-- start header menu -->
                <div class="top-menu">
                    <ul class="nav navbar-nav pull-right">
                    	<!-- start language menu -->
{{--                        <li class="dropdown language-switch">--}}
{{--                            <a class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false"> <img src="assets/img/flags/gb.png" class="position-left" alt=""> English <span class="fa fa-angle-down"></span>--}}
{{--                            </a>--}}
{{--                            <ul class="dropdown-menu animated tada">--}}
{{--                                <li>--}}
{{--                                    <a class="deutsch"><img src="assets/img/flags/de.png" alt=""> Deutsch</a>--}}
{{--                                </li>--}}
{{--                                <li>--}}
{{--                                    <a class="ukrainian"><img src="assets/img/flags/ua.png" alt=""> Українська</a>--}}
{{--                                </li>--}}
{{--                                <li>--}}
{{--                                    <a class="english"><img src="assets/img/flags/gb.png" alt=""> English</a>--}}
{{--                                </li>--}}
{{--                                <li>--}}
{{--                                    <a class="espana"><img src="assets/img/flags/es.png" alt=""> España</a>--}}
{{--                                </li>--}}
{{--                                <li>--}}
{{--                                    <a class="russian"><img src="assets/img/flags/ru.png" alt=""> Русский</a>--}}
{{--                                </li>--}}
{{--                            </ul>--}}
{{--                        </li>--}}
                        <!-- end language menu -->
                        <!-- start notification dropdown -->
{{--                        <li class="dropdown dropdown-extended dropdown-notification" id="header_notification_bar">--}}
{{--                            <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">--}}
{{--                                <i class="fa fa-bell-o"></i>--}}
{{--                                <span class="badge headerBadgeColor1"> 6 </span>--}}
{{--                            </a>--}}
{{--                            <ul class="dropdown-menu animated swing">--}}
{{--                                <li class="external">--}}
{{--                                    <h3><span class="bold">Notifications</span></h3>--}}
{{--                                    <span class="notification-label purple-bgcolor">New 6</span>--}}
{{--                                </li>--}}
{{--                                <li>--}}
{{--                                    <ul class="dropdown-menu-list small-slimscroll-style" data-handle-color="#637283">--}}
{{--                                        <li>--}}
{{--                                            <a href="javascript:;">--}}
{{--                                                <span class="time">just now</span>--}}
{{--                                                <span class="details">--}}
{{--                                                <span class="notification-icon circle deepPink-bgcolor"><i class="fa fa-check"></i></span> Congratulations!. </span>--}}
{{--                                            </a>--}}
{{--                                        </li>--}}
{{--                                        <li>--}}
{{--                                            <a href="javascript:;">--}}
{{--                                                <span class="time">3 mins</span>--}}
{{--                                                <span class="details">--}}
{{--                                                <span class="notification-icon circle purple-bgcolor"><i class="fa fa-user o"></i></span>--}}
{{--                                                <b>John Micle </b>is now following you. </span>--}}
{{--                                            </a>--}}
{{--                                        </li>--}}
{{--                                        <li>--}}
{{--                                            <a href="javascript:;">--}}
{{--                                                <span class="time">7 mins</span>--}}
{{--                                                <span class="details">--}}
{{--                                                <span class="notification-icon circle blue-bgcolor"><i class="fa fa-comments-o"></i></span>--}}
{{--                                                <b>Sneha Jogi </b>sent you a message. </span>--}}
{{--                                            </a>--}}
{{--                                        </li>--}}
{{--                                        <li>--}}
{{--                                            <a href="javascript:;">--}}
{{--                                                <span class="time">12 mins</span>--}}
{{--                                                <span class="details">--}}
{{--                                                <span class="notification-icon circle pink"><i class="fa fa-heart"></i></span>--}}
{{--                                                <b>Ravi Patel </b>like your photo. </span>--}}
{{--                                            </a>--}}
{{--                                        </li>--}}
{{--                                        <li>--}}
{{--                                            <a href="javascript:;">--}}
{{--                                                <span class="time">15 mins</span>--}}
{{--                                                <span class="details">--}}
{{--                                                <span class="notification-icon circle yellow"><i class="fa fa-warning"></i></span> Warning! </span>--}}
{{--                                            </a>--}}
{{--                                        </li>--}}
{{--                                        <li>--}}
{{--                                            <a href="javascript:;">--}}
{{--                                                <span class="time">10 hrs</span>--}}
{{--                                                <span class="details">--}}
{{--                                                <span class="notification-icon circle red"><i class="fa fa-times"></i></span> Application error. </span>--}}
{{--                                            </a>--}}
{{--                                        </li>--}}
{{--                                    </ul>--}}
{{--                                    <div class="dropdown-menu-footer">--}}
{{--                                        <a href="javascript:void(0)"> All notifications </a>--}}
{{--                                    </div>--}}
{{--                                </li>--}}
{{--                            </ul>--}}
{{--                        </li>--}}
                        <!-- end notification dropdown -->
                        <!-- start message dropdown -->
{{-- 						<li class="dropdown dropdown-extended dropdown-inbox" id="header_inbox_bar">--}}
{{--                            <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">--}}
{{--                                <i class="fa fa-envelope-o"></i>--}}
{{--                                <span class="badge headerBadgeColor2"> 2 </span>--}}
{{--                            </a>--}}
{{--                            <ul class="dropdown-menu animated slideInDown">--}}
{{--                                <li class="external">--}}
{{--                                    <h3><span class="bold">Messages</span></h3>--}}
{{--                                    <span class="notification-label cyan-bgcolor">New 2</span>--}}
{{--                                </li>--}}
{{--                                <li>--}}
{{--                                    <ul class="dropdown-menu-list small-slimscroll-style" data-handle-color="#637283">--}}
{{--                                        <li>--}}
{{--                                            <a href="#">--}}
{{--                                                <span class="photo">--}}
{{--                                                	<img src="assets/img/user/user2.jpg" class="img-circle" alt=""> </span>--}}
{{--                                                <span class="subject">--}}
{{--                                                	<span class="from"> Sarah Smith </span>--}}
{{--                                                	<span class="time">Just Now </span>--}}
{{--                                                </span>--}}
{{--                                                <span class="message"> Jatin I found you on LinkedIn... </span>--}}
{{--                                            </a>--}}
{{--                                        </li>--}}
{{--                                        <li>--}}
{{--                                            <a href="#">--}}
{{--                                                <span class="photo">--}}
{{--                                                	<img src="assets/img/user/user3.jpg" class="img-circle" alt=""> </span>--}}
{{--                                                <span class="subject">--}}
{{--                                                	<span class="from"> John Deo </span>--}}
{{--                                                	<span class="time">16 mins </span>--}}
{{--                                                </span>--}}
{{--                                                <span class="message"> Fwd: Important Notice Regarding Your Domain Name... </span>--}}
{{--                                            </a>--}}
{{--                                        </li>--}}
{{--                                        <li>--}}
{{--                                            <a href="#">--}}
{{--                                                <span class="photo">--}}
{{--                                                	<img src="assets/img/user/user1.jpg" class="img-circle" alt=""> </span>--}}
{{--                                                <span class="subject">--}}
{{--                                                	<span class="from"> Rajesh </span>--}}
{{--                                                	<span class="time">2 hrs </span>--}}
{{--                                                </span>--}}
{{--                                                <span class="message"> pls take a print of attachments. </span>--}}
{{--                                            </a>--}}
{{--                                        </li>--}}
{{--                                        <li>--}}
{{--                                            <a href="#">--}}
{{--                                                <span class="photo">--}}
{{--                                                	<img src="assets/img/user/user8.jpg" class="img-circle" alt=""> </span>--}}
{{--                                                <span class="subject">--}}
{{--                                                	<span class="from"> Lina Smith </span>--}}
{{--                                                	<span class="time">40 mins </span>--}}
{{--                                                </span>--}}
{{--                                                <span class="message"> Apply for Ortho Surgeon </span>--}}
{{--                                            </a>--}}
{{--                                        </li>--}}
{{--                                        <li>--}}
{{--                                            <a href="#">--}}
{{--                                                <span class="photo">--}}
{{--                                                	<img src="assets/img/user/user5.jpg" class="img-circle" alt=""> </span>--}}
{{--                                                <span class="subject">--}}
{{--                                                	<span class="from"> Jacob Ryan </span>--}}
{{--                                                	<span class="time">46 mins </span>--}}
{{--                                                </span>--}}
{{--                                                <span class="message"> Request for leave application. </span>--}}
{{--                                            </a>--}}
{{--                                        </li>--}}
{{--                                    </ul>--}}
{{--                                    <div class="dropdown-menu-footer">--}}
{{--                                        <a href="#"> All Messages </a>--}}
{{--                                    </div>--}}
{{--                                </li>--}}
{{--                            </ul>--}}
{{--                        </li>--}}
                        <!-- end message dropdown -->
 						<!-- start manage user dropdown -->
 						<li class="dropdown dropdown-user">
                            <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
                                <img alt="" class="img-circle " src="{{ Auth::user()->photo ? Auth::user()->photo->file : 'No user photo'}}" />
                                <span class="username username-hide-on-mobile"> {{Auth::user()->name}} </span>
                                <i class="fa fa-angle-down"></i>
                            </a>
                            <ul class="dropdown-menu dropdown-menu-default animated jello">
                                <li>
                                    <a href="user_profile.html">
                                        <i class="icon-user"></i> Profile </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="icon-settings"></i> Settings
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="icon-directions"></i> Help
                                    </a>
                                </li>
                                <li class="divider"> </li>
                                <li>
                                    <a href="lock_screen.html">
                                        <i class="icon-lock"></i> Lock
                                    </a>
                                </li>
                                <li>
                                    <a href="login.html">
                                        <i class="icon-logout"></i> Log Out </a>
                                </li>
                            </ul>
                        </li>
                        <!-- end manage user dropdown -->
                        <li class="dropdown dropdown-quick-sidebar-toggler">
                             <a id="headerSettingButton" class="mdl-button mdl-js-button mdl-button--icon pull-right" data-upgraded=",MaterialButton">
	                           <i class="material-icons">more_vert</i>
	                        </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- end header -->
        <!-- start color quick setting -->
        <!-- <div class="quick-setting-main">
			<button class="control-sidebar-btn btn" data-toggle="control-sidebar"><i class="fa fa-cog fa-spin"></i></button>
			<div class="quick-setting display-none">
				<ul id="themecolors" >

				<li><p class="selector-title">Sidebar Color</p></li>
				<li class="complete"><div class="theme-color sidebar-theme">
				<a href="#" data-theme="white"><span class="head"></span><span class="cont"></span></a>
				<a href="#" data-theme="dark"><span class="head"></span><span class="cont"></span></a>
				<a href="#" data-theme="blue"><span class="head"></span><span class="cont"></span></a>
				<a href="#" data-theme="indigo"><span class="head"></span><span class="cont"></span></a>
				<a href="#" data-theme="cyan"><span class="head"></span><span class="cont"></span></a>
				<a href="#" data-theme="green"><span class="head"></span><span class="cont"></span></a>
				<a href="#" data-theme="red"><span class="head"></span><span class="cont"></span></a>
				</div></li>
             	<li><p class="selector-title">Header Brand color</p></li>
             	<li class="theme-option"><div class="theme-color logo-theme">
             	<a href="#" data-theme="logo-white"><span class="head"></span><span class="cont"></span></a>
				<a href="#" data-theme="logo-dark"><span class="head"></span><span class="cont"></span></a>
				<a href="#" data-theme="logo-blue"><span class="head"></span><span class="cont"></span></a>
				<a href="#" data-theme="logo-indigo"><span class="head"></span><span class="cont"></span></a>
				<a href="#" data-theme="logo-cyan"><span class="head"></span><span class="cont"></span></a>
				<a href="#" data-theme="logo-green"><span class="head"></span><span class="cont"></span></a>
				<a href="#" data-theme="logo-red"><span class="head"></span><span class="cont"></span></a>
             	</div></li>
             	<li><p class="selector-title">Header color</p></li>
             	<li class="theme-option"><div class="theme-color header-theme">
             	<a href="#" data-theme="header-white"><span class="head"></span><span class="cont"></span></a>
             	<a href="#" data-theme="header-dark"><span class="head"></span><span class="cont"></span></a>
             	<a href="#" data-theme="header-blue"><span class="head"></span><span class="cont"></span></a>
             	<a href="#" data-theme="header-indigo"><span class="head"></span><span class="cont"></span></a>
             	<a href="#" data-theme="header-cyan"><span class="head"></span><span class="cont"></span></a>
             	<a href="#" data-theme="header-green"><span class="head"></span><span class="cont"></span></a>
             	<a href="#" data-theme="header-red"><span class="head"></span><span class="cont"></span></a>
             	</div></li>
			</ul>
			</div>
		</div> -->
		<!-- end color quick setting -->
        <!-- start page container -->
        <div class="page-container">
 			<!-- start sidebar menu -->
 			<div class="sidebar-container">
 				<div class="sidemenu-container navbar-collapse collapse fixed-menu">
	                <div id="remove-scroll">
	                    <ul class="sidemenu  page-header-fixed" data-keep-expanded="false" data-auto-scroll="true" data-slide-speed="200" style="padding-top: 20px">
	                        <li class="sidebar-toggler-wrapper hide">
	                            <div class="sidebar-toggler">
	                                <span></span>
	                            </div>
	                        </li>
	                        <li class="sidebar-user-panel">
	                            <div class="user-panel">
	                                <div class="pull-left image">
	                                    <img src="{{ Auth::user()->photo ? Auth::user()->photo->file : 'No user photo'}}" class="img-circle user-img-circle" alt="User Image" />
	                                </div>
	                                <div class="pull-left info">
	                                    <p>{{Auth::user()->name}}</p>
	                                    <a href="#"><i class="fa fa-circle user-online"></i><span class="txtOnline">{{Auth::user()->role->name}}</span></a>
	                                </div>
	                            </div>
	                        </li>
	                        <li class="nav-item start active">
	                            <a href="/admin" class="nav-link nav-toggle">
	                                <i class="material-icons">dashboard</i>
	                                <span class="title">Dashboard</span>
                                	<span class="selected"></span>
	                            </a>
	                        </li>
	                        <li class="nav-item">
	                            <a href="{{route('users.index')}}" class="nav-link nav-toggle"> <i class="material-icons">account_circle</i>
	                                <span class="title">Users</span>
	                            </a>
	                        </li>
	                        <li class="nav-item">
	                            <a href="{{route('posts.index')}}" class="nav-link nav-toggle">
	                                <i class="material-icons">library_books</i>
	                                <span class="title">Posts</span>

	                            </a>
	                        </li>
	                        <li class="nav-item">
	                            <a href="{{route('teams.index')}}" class="nav-link nav-toggle"> <i class="material-icons">share</i>
	                                <span class="title">Teams</span>
	                            </a>
	                        </li>
	                        <li class="nav-item">
	                            <a href="{{route('players.index')}}" class="nav-link nav-toggle"> <i class="material-icons">group</i>
	                                <span class="title">Players</span>
	                            </a>
	                        </li>
	                        <li class="nav-item">
	                            <a href="{{route('fixtures.index')}}" class="nav-link nav-toggle"> <i class="material-icons md-24">assignment</i>
	                                <span class="title">Fixtures</span>
	                            </a>
	                        </li>
	                        <li class="nav-item">
	                            <a href="{{route('tables.index')}}" class="nav-link nav-toggle">
	                                <i class="material-icons">dvr</i>
	                                <span class="title">Tables</span>
	                            </a>

	                        </li>
	                        <li class="nav-item">
	                            <a href="{{route('results.index')}}" class="nav-link nav-toggle">
	                                <i class="material-icons">receipt</i>
	                                <span class="title">Results</span>
	                            </a>
	                        </li>
	                        <li class="nav-item">
	                            <a href="{{route('games.index')}}" class="nav-link nav-toggle">
	                                <i class="material-icons">subtitles</i>
	                                <span class="title">Live Score </span>
	                            </a>

	                        </li>
	                        <li class="nav-item">
	                            <a href="javascript:;" class="nav-link nav-toggle">
	                                <i class="material-icons">list</i>
	                                <span class="title">Data Tables</span>
	                                <span class="arrow"></span>
	                            </a>
	                            <ul class="sub-menu">
	                                <li class="nav-item">
	                                    <a href="basic_table.html" class="nav-link ">
	                                        <span class="title">Basic Tables</span>
	                                    </a>
	                                </li>
	                                <li class="nav-item">
	                                    <a href="advanced_table.html" class="nav-link ">
	                                        <span class="title">Advance Tables</span>
	                                    </a>
	                                </li>
	                                <li class="nav-item">
	                                    <a href="editable_table.html" class="nav-link ">
	                                        <span class="title">Editable Tables</span>
	                                    </a>
	                                </li>
	                                <li class="nav-item">
	                                    <a href="group_table.html" class="nav-link ">
	                                        <span class="title">Grouping</span>
	                                    </a>
	                                </li>
	                                <li class="nav-item">
	                                    <a href="table_data.html" class="nav-link ">
	                                        <span class="title">Tables With Sourced Data</span>
	                                    </a>
	                                </li>
	                            </ul>
	                        </li>
	                        <li class="nav-item">
	                            <a href="javascript:;" class="nav-link nav-toggle">
	                                <i class="material-icons">timeline</i>
	                                <span class="title">Charts</span>
	                                <span class="arrow"></span>
	                            </a>
	                            <ul class="sub-menu">
	                                <li class="nav-item">
	                                    <a href="charts_echarts.html" class="nav-link ">
	                                        <span class="title">eCharts</span>
	                                    </a>
	                                </li>
	                                <li class="nav-item">
	                                    <a href="charts_morris.html" class="nav-link ">
	                                        <span class="title">Morris Charts</span>
	                                    </a>
	                                </li>
	                                <li class="nav-item">
	                                    <a href="charts_chartjs.html" class="nav-link ">
	                                        <span class="title">Chartjs</span>
	                                    </a>
	                                </li>
	                            </ul>
	                        </li>
	                        <li class="nav-item">
	                            <a href="javascript:;" class="nav-link nav-toggle">
	                                <i class="material-icons">map</i>
	                                <span class="title">Maps</span>
	                                <span class="arrow"></span>
	                            </a>
	                            <ul class="sub-menu">
	                                <li class="nav-item">
	                                    <a href="google_maps.html" class="nav-link ">
	                                        <span class="title">Google Maps</span>
	                                    </a>
	                                </li>
	                                <li class="nav-item">
	                                    <a href="vector_maps.html" class="nav-link ">
	                                        <span class="title">Vector Maps</span>
	                                    </a>
	                                </li>
	                            </ul>
	                        </li>
	                        <li class="nav-item">
	                            <a href="#" class="nav-link nav-toggle"> <i class="material-icons">album</i>
	                                <span class="title">Icons</span> <span class="arrow"></span>
	                            </a>
	                            <ul class="sub-menu">
	                                <li class="nav-item">
	                                    <a href="fontawesome_icons.html" class="nav-link "> <span class="title">Font Awesome</span>
	                                    </a>
	                                </li>
	                                <li class="nav-item">
	                                    <a href="simpleline_icons.html" class="nav-link "> <span class="title">Simple Line Icon</span>
	                                    </a>
	                                </li>
	                                <li class="nav-item">
	                                    <a href="material_icons.html" class="nav-link "> <span class="title">Material Icon</span>
	                                    </a>
	                                </li>
	                            </ul>
	                        </li>
	                        <li class="nav-item">
	                            <a href="javascript:;" class="nav-link nav-toggle"> <i class="material-icons">description</i>
	                            <span class="title">Extra pages</span>
	                            <span class="arrow"></span>
	                            </a>
	                            <ul class="sub-menu">
	                            	<li class="nav-item">
	                                    <a href="timeline.html" class="nav-link "> <span class="title">Timeline</span>
	                                    </a>
	                                </li>
	                                <li class="nav-item">
	                                    <a href="login.html" class="nav-link "> <span class="title">Login</span>
	                                    </a>
	                                </li>
	                                <li class="nav-item">
	                                	<a href="user_profile.html" class="nav-link "><span class="title">Profile</span>
										</a>
	                                </li>
	                                <li class="nav-item">
	                                	<a href="pricing.html" class="nav-link "><span class="title">Pricing</span>
										</a>
	                                </li>
	                                <li class="nav-item">
	                                    <a href="contactus.html" class="nav-link "> <span class="title">Contact Us</span>
	                                    </a>
	                                </li>
	                                <li class="nav-item">
	                                	<a href="invoice.html" class="nav-link "><span class="title">Invoice</span>
										</a>
	                                </li>
	                                <li class="nav-item">
	                                	<a href="faq.html" class="nav-link "><span class="title">Faq</span>
										</a>
	                                </li>
	                                <li class="nav-item">
	                                    <a href="lock_screen.html" class="nav-link "> <span class="title">Lock Screen</span>
	                                    </a>
	                                </li>
	                                <li class="nav-item">
	                                    <a href="page-404.html" class="nav-link "> <span class="title">404 Page</span>
	                                    </a>
	                                </li>
	                                <li class="nav-item">
	                                    <a href="page-500.html" class="nav-link "> <span class="title">500 Page</span>
	                                    </a>
	                                </li>
	                                <li class="nav-item">
	                                    <a href="blank_page.html" class="nav-link "> <span class="title">Blank Page</span>
	                                    </a>
	                                </li>
	                            </ul>
	                        </li>
	                        <li class="nav-item">
	                            <a href="javascript:;" class="nav-link nav-toggle">
	                                <i class="material-icons">slideshow</i>
	                                <span class="title">Multi Level Menu</span>
	                                <span class="arrow "></span>
	                            </a>
	                            <ul class="sub-menu">
	                                <li class="nav-item">
	                                    <a href="javascript:;" class="nav-link nav-toggle">
	                                        <i class="fa fa-university"></i> Item 1
	                                        <span class="arrow"></span>
	                                    </a>
	                                    <ul class="sub-menu">
	                                        <li class="nav-item">
	                                            <a href="javascript:;" class="nav-link nav-toggle">
	                                                <i class="fa fa-bell-o"></i> Arrow Toggle
	                                                <span class="arrow "></span>
	                                            </a>
	                                            <ul class="sub-menu">
	                                                <li class="nav-item">
	                                                    <a href="javascript:;" class="nav-link">
	                                                        <i class="fa fa-calculator"></i> Sample Link 1</a>
	                                                </li>
	                                                <li class="nav-item">
	                                                    <a href="#" class="nav-link">
	                                                        <i class="fa fa-clone"></i> Sample Link 2</a>
	                                                </li>
	                                                <li class="nav-item">
	                                                    <a href="#" class="nav-link">
	                                                        <i class="fa fa-cogs"></i> Sample Link 3</a>
	                                                </li>
	                                            </ul>
	                                        </li>
	                                        <li class="nav-item">
	                                            <a href="#" class="nav-link">
	                                                <i class="fa fa-file-pdf-o"></i> Sample Link 1</a>
	                                        </li>
	                                        <li class="nav-item">
	                                            <a href="#" class="nav-link">
	                                                <i class="fa fa-rss"></i> Sample Link 2</a>
	                                        </li>
	                                        <li class="nav-item">
	                                            <a href="#" class="nav-link">
	                                                <i class="fa fa-hdd-o"></i> Sample Link 3</a>
	                                        </li>
	                                    </ul>
	                                </li>
	                                <li class="nav-item">
	                                    <a href="javascript:;" class="nav-link nav-toggle">
	                                        <i class="fa fa-gavel"></i> Arrow Toggle
	                                        <span class="arrow"></span>
	                                    </a>
	                                    <ul class="sub-menu">
	                                        <li class="nav-item">
	                                            <a href="#" class="nav-link">
	                                                <i class="fa fa-paper-plane"></i> Sample Link 1</a>
	                                        </li>
	                                        <li class="nav-item">
	                                            <a href="#" class="nav-link">
	                                                <i class="fa fa-power-off"></i> Sample Link 1</a>
	                                        </li>
	                                        <li class="nav-item">
	                                            <a href="#" class="nav-link">
	                                                <i class="fa fa-recycle"></i> Sample Link 1
	                                             </a>
	                                        </li>
	                                    </ul>
	                                </li>
	                                <li class="nav-item">
	                                    <a href="#" class="nav-link">
	                                        <i class="fa fa-volume-up"></i> Item 3 </a>
	                                </li>
	                            </ul>
	                        </li>
	                    </ul>
	                </div>
                </div>
            </div>
            <!-- end sidebar menu -->
			<!-- start page content -->
            <div class="page-content-wrapper">
                <div class="page-content">
                    <!-- <div class="page-bar">
                        <div class="page-title-breadcrumb">
                            <div class=" pull-left">
                                <div class="page-title">Dashboard</div>
                            </div>
                            <ol class="breadcrumb page-breadcrumb pull-right">
                                <li><i class="fa fa-home"></i>&nbsp;<a class="parent-item" href="admin.blade.php">Home</a>&nbsp;<i class="fa fa-angle-right"></i>
                                </li>
                                <li class="active">Dashboard</li>
                            </ol>
                        </div>
                    </div> -->
                   <!-- start widget -->
					<!--  -->
					<!-- end widget -->
					 <!-- chart start -->
					 @yield('content')





                </div>
            </div>



        </div>
        <!-- end page container -->
        <!-- start footer -->
        <div class="page-footer">
            <div class="page-footer-inner"> {{\Carbon\Carbon::now()->year}} &copy; Powered by
            <a href="" target="_top" class="makerCss">PeekTower</a>
            </div>
            <div class="scroll-to-top">
                <i class="icon-arrow-up"></i>
            </div>
        </div>
        <!-- end footer -->
    </div>
    <!-- start js include path -->
    <script src="{{asset('js/admin.js')}}"></script>
    <!-- end js include path -->
  </body>

</html>
