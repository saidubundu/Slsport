<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from www.urbanui.com/hiliteui/template/demo/vertical-default-light/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 29 Jan 2020 17:31:53 GMT -->
<head>
		<!-- Required meta tags -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<title>Admin</title>
		<!-- base:css -->

    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/libs.css') }}" rel="stylesheet">
	</head>
	<body>
		<div class="container-scroller">
			<!-- partial:partials/_navbar.html -->
			<nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
        <div class="text-left navbar-brand-wrapper d-flex align-items-center justify-content-between">
          <a class="navbar-brand brand-logo" href="index.html"><img src="http://www.urbanui.com/hiliteui/template/images/logo.svg" alt="logo"/></a>
          <a class="navbar-brand brand-logo-mini" href="index.html"><img src="http://www.urbanui.com/hiliteui/template/images/logo-mini.svg" alt="logo"/></a>
          <button class="navbar-toggler align-self-center" type="button" data-toggle="minimize">
          <span class="mdi mdi-menu"></span>
          </button>
        </div>
        <div class="navbar-menu-wrapper d-flex align-items-center justify-content-end">
{{--          <ul class="navbar-nav">--}}
{{--            <li class="nav-item  dropdown d-none align-items-center d-lg-flex d-none">--}}
{{--              <a class="dropdown-toggle btn btn-outline-secondary btn-fw"  href="#" data-toggle="dropdown" id="pagesDropdown">--}}
{{--              <span class="nav-profile-name">Pages</span>--}}
{{--              </a>--}}
{{--              <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="pagesDropdown">--}}
{{--                <a class="dropdown-item">--}}
{{--                <i class="mdi mdi-settings text-primary"></i>--}}
{{--                Settings--}}
{{--                </a>--}}
{{--                <a class="dropdown-item">--}}
{{--                <i class="mdi mdi-logout text-primary"></i>--}}
{{--                Logout--}}
{{--                </a>--}}
{{--              </div>--}}
{{--            </li>--}}
{{--            <li class="nav-item dropdown align-items-center d-lg-flex d-none">--}}
{{--              <a class="dropdown-toggle btn btn-outline-secondary btn-fw"  href="#" data-toggle="dropdown" id="appDropdown">--}}
{{--              <span class="nav-profile-name">Apps</span>--}}
{{--              </a>--}}
{{--              <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="appDropdown">--}}
{{--                <a class="dropdown-item">--}}
{{--                <i class="mdi mdi-settings text-primary"></i>--}}
{{--                Settings--}}
{{--                </a>--}}
{{--                <a class="dropdown-item">--}}
{{--                <i class="mdi mdi-logout text-primary"></i>--}}
{{--                Logout--}}
{{--                </a>--}}
{{--              </div>--}}
{{--            </li>--}}
{{--          </ul>--}}
          <ul class="navbar-nav navbar-nav-right">
            <li class="nav-item nav-search d-none d-lg-flex">
              <div class="input-group">
                <div class="input-group-prepend">
                  <span class="input-group-text" id="search">
                  <i class="mdi mdi-magnify"></i>
                  </span>
                </div>
                <input type="text" class="form-control" placeholder="Type to search..." aria-label="search" aria-describedby="search">
              </div>
            </li>
{{--            <li class="nav-item dropdown">--}}
{{--              <a class="nav-link count-indicator dropdown-toggle d-flex align-items-center justify-content-center" id="notificationDropdown" href="#" data-toggle="dropdown">--}}
{{--              <i class="mdi mdi-bell-outline mx-0"></i>--}}
{{--              </a>--}}
{{--              <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="notificationDropdown">--}}
{{--                <p class="mb-0 font-weight-normal float-left dropdown-header">Notifications</p>--}}
{{--                <a class="dropdown-item preview-item">--}}
{{--                  <div class="preview-thumbnail">--}}
{{--                    <div class="preview-icon bg-success">--}}
{{--                      <i class="mdi mdi-information mx-0"></i>--}}
{{--                    </div>--}}
{{--                  </div>--}}
{{--                  <div class="preview-item-content">--}}
{{--                    <h6 class="preview-subject font-weight-normal">Application Error</h6>--}}
{{--                    <p class="font-weight-light small-text mb-0 text-muted">--}}
{{--                      Just now--}}
{{--                    </p>--}}
{{--                  </div>--}}
{{--                </a>--}}
{{--                <a class="dropdown-item preview-item">--}}
{{--                  <div class="preview-thumbnail">--}}
{{--                    <div class="preview-icon bg-warning">--}}
{{--                      <i class="mdi mdi-settings mx-0"></i>--}}
{{--                    </div>--}}
{{--                  </div>--}}
{{--                  <div class="preview-item-content">--}}
{{--                    <h6 class="preview-subject font-weight-normal">Settings</h6>--}}
{{--                    <p class="font-weight-light small-text mb-0 text-muted">--}}
{{--                      Private message--}}
{{--                    </p>--}}
{{--                  </div>--}}
{{--                </a>--}}
{{--                <a class="dropdown-item preview-item">--}}
{{--                  <div class="preview-thumbnail">--}}
{{--                    <div class="preview-icon bg-info">--}}
{{--                      <i class="mdi mdi-account-box mx-0"></i>--}}
{{--                    </div>--}}
{{--                  </div>--}}
{{--                  <div class="preview-item-content">--}}
{{--                    <h6 class="preview-subject font-weight-normal">New user registration</h6>--}}
{{--                    <p class="font-weight-light small-text mb-0 text-muted">--}}
{{--                      2 days ago--}}
{{--                    </p>--}}
{{--                  </div>--}}
{{--                </a>--}}
{{--              </div>--}}
{{--            </li>--}}
{{--            <li class="nav-item dropdown">--}}
{{--              <a class="nav-link count-indicator dropdown-toggle d-flex justify-content-center align-items-center" id="messageDropdown" href="#" data-toggle="dropdown">--}}
{{--                <i class="mdi mdi-email-outline mx-0"></i>--}}
{{--                <p class="notification-ripple notification-ripple-bg">--}}
{{--                  <span class="ripple notification-ripple-bg"></span>--}}
{{--                  <span class="ripple notification-ripple-bg"></span>--}}
{{--                  <span class="ripple notification-ripple-bg"></span>--}}
{{--                </p>--}}
{{--              </a>--}}
{{--              <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="messageDropdown">--}}
{{--                <p class="mb-0 font-weight-normal float-left dropdown-header">Messages</p>--}}
{{--                <a class="dropdown-item preview-item">--}}
{{--                  <div class="preview-thumbnail">--}}
{{--                    <img src="../../images/faces/face4.jpg" alt="image" class="profile-pic">--}}
{{--                  </div>--}}
{{--                  <div class="preview-item-content flex-grow">--}}
{{--                    <h6 class="preview-subject ellipsis font-weight-normal">David Grey--}}
{{--                    </h6>--}}
{{--                    <p class="font-weight-light small-text text-muted mb-0">--}}
{{--                      The meeting is cancelled--}}
{{--                    </p>--}}
{{--                  </div>--}}
{{--                </a>--}}
{{--                <a class="dropdown-item preview-item">--}}
{{--                  <div class="preview-thumbnail">--}}
{{--                    <img src="../../images/faces/face2.jpg" alt="image" class="profile-pic">--}}
{{--                  </div>--}}
{{--                  <div class="preview-item-content flex-grow">--}}
{{--                    <h6 class="preview-subject ellipsis font-weight-normal">Tim Cook--}}
{{--                    </h6>--}}
{{--                    <p class="font-weight-light small-text text-muted mb-0">--}}
{{--                      New product launch--}}
{{--                    </p>--}}
{{--                  </div>--}}
{{--                </a>--}}
{{--                <a class="dropdown-item preview-item">--}}
{{--                  <div class="preview-thumbnail">--}}
{{--                    <img src="../../images/faces/face3.jpg" alt="image" class="profile-pic">--}}
{{--                  </div>--}}
{{--                  <div class="preview-item-content flex-grow">--}}
{{--                    <h6 class="preview-subject ellipsis font-weight-normal"> Johnson--}}
{{--                    </h6>--}}
{{--                    <p class="font-weight-light small-text text-muted mb-0">--}}
{{--                      Upcoming board meeting--}}
{{--                    </p>--}}
{{--                  </div>--}}
{{--                </a>--}}
{{--              </div>--}}
{{--            </li>--}}
            <li class="nav-item nav-user-icon">
              <a class="nav-link" href="#">
              <img src="../../images/faces/face28.jpg" alt="profile"/>
              </a>
            </li>
            <li class="nav-item nav-settings d-none d-lg-flex">
              <a class="nav-link" href="#">
              <i class="mdi mdi-dots-horizontal"></i>
              </a>
            </li>
          </ul>
          <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
          <span class="mdi mdi-menu">Menu</span>
          </button>
        </div>
      </nav>
			<!-- partial -->
			<div class="container-fluid page-body-wrapper">
				<!-- partial:partials/_settings-panel.html -->
{{--        <div class="theme-setting-wrapper">--}}
{{--          <div id="settings-trigger"><i class="mdi mdi-settings"></i></div>--}}
{{--          <div id="theme-settings" class="settings-panel">--}}
{{--            <i class="settings-close mdi mdi-close"></i>--}}
{{--            <p class="settings-heading">SIDEBAR SKINS</p>--}}
{{--            <div class="sidebar-bg-options" id="sidebar-light-theme">--}}
{{--              <div class="img-ss rounded-circle bg-light border mr-3"></div>--}}
{{--              Light--}}
{{--            </div>--}}
{{--            <div class="sidebar-bg-options selected" id="sidebar-dark-theme">--}}
{{--              <div class="img-ss rounded-circle bg-dark border mr-3"></div>--}}
{{--              Dark--}}
{{--            </div>--}}
{{--            <p class="settings-heading mt-2">HEADER SKINS</p>--}}
{{--            <div class="color-tiles mx-0 px-4">--}}
{{--              <div class="tiles success"></div>--}}
{{--              <div class="tiles warning"></div>--}}
{{--              <div class="tiles danger"></div>--}}
{{--              <div class="tiles primary"></div>--}}
{{--              <div class="tiles info"></div>--}}
{{--              <div class="tiles dark"></div>--}}
{{--              <div class="tiles default"></div>--}}
{{--            </div>--}}
{{--          </div>--}}
{{--        </div>--}}
{{--        <div id="right-sidebar" class="settings-panel">--}}
{{--          <i class="settings-close mdi mdi-close"></i>--}}
{{--          <ul class="nav nav-tabs" id="setting-panel" role="tablist">--}}
{{--            <li class="nav-item">--}}
{{--              <a class="nav-link active" id="todo-tab" data-toggle="tab" href="#todo-section" role="tab" aria-controls="todo-section" aria-expanded="true">TO DO LIST</a>--}}
{{--            </li>--}}
{{--            <li class="nav-item">--}}
{{--              <a class="nav-link" id="chats-tab" data-toggle="tab" href="#chats-section" role="tab" aria-controls="chats-section">CHATS</a>--}}
{{--            </li>--}}
{{--          </ul>--}}
{{--          <div class="tab-content" id="setting-content">--}}
{{--            <div class="tab-pane fade show active scroll-wrapper" id="todo-section" role="tabpanel" aria-labelledby="todo-section">--}}
{{--              <div class="add-items d-flex px-3 mb-0">--}}
{{--                <form class="form w-100">--}}
{{--                  <div class="form-group d-flex">--}}
{{--                    <input type="text" class="form-control todo-list-input" placeholder="Add To-do">--}}
{{--                    <button type="submit" class="add btn btn-primary todo-list-add-btn" id="add-task">Add</button>--}}
{{--                  </div>--}}
{{--                </form>--}}
{{--              </div>--}}
{{--              <div class="list-wrapper px-3">--}}
{{--                <ul class="d-flex flex-column-reverse todo-list">--}}
{{--                  <li>--}}
{{--                    <div class="form-check">--}}
{{--                      <label class="form-check-label">--}}
{{--                      <input class="checkbox" type="checkbox">--}}
{{--                      Team review meeting at 3.00 PM--}}
{{--                      </label>--}}
{{--                    </div>--}}
{{--                    <i class="remove mdi mdi-delete"></i>--}}
{{--                  </li>--}}
{{--                  <li>--}}
{{--                    <div class="form-check">--}}
{{--                      <label class="form-check-label">--}}
{{--                      <input class="checkbox" type="checkbox">--}}
{{--                      Prepare for presentation--}}
{{--                      </label>--}}
{{--                    </div>--}}
{{--                    <i class="remove mdi mdi-delete"></i>--}}
{{--                  </li>--}}
{{--                  <li>--}}
{{--                    <div class="form-check">--}}
{{--                      <label class="form-check-label">--}}
{{--                      <input class="checkbox" type="checkbox">--}}
{{--                      Resolve all the low priority tickets due today--}}
{{--                      </label>--}}
{{--                    </div>--}}
{{--                    <i class="remove mdi mdi-delete"></i>--}}
{{--                  </li>--}}
{{--                  <li class="completed">--}}
{{--                    <div class="form-check">--}}
{{--                      <label class="form-check-label">--}}
{{--                      <input class="checkbox" type="checkbox" checked>--}}
{{--                      Schedule meeting for next week--}}
{{--                      </label>--}}
{{--                    </div>--}}
{{--                    <i class="remove mdi mdi-delete"></i>--}}
{{--                  </li>--}}
{{--                  <li class="completed">--}}
{{--                    <div class="form-check">--}}
{{--                      <label class="form-check-label">--}}
{{--                      <input class="checkbox" type="checkbox" checked>--}}
{{--                      Project review--}}
{{--                      </label>--}}
{{--                    </div>--}}
{{--                    <i class="remove mdi mdi-delete"></i>--}}
{{--                  </li>--}}
{{--                </ul>--}}
{{--              </div>--}}
{{--              <div class="events py-4 border-bottom px-3">--}}
{{--                <div class="wrapper d-flex mb-2">--}}
{{--                  <i class="mdi mdi-circle-outline text-primary mr-2"></i>--}}
{{--                  <span>Feb 11 2018</span>--}}
{{--                </div>--}}
{{--                <p class="mb-0 font-weight-thin text-gray">Creating component page</p>--}}
{{--                <p class="text-gray mb-0">build a js based app</p>--}}
{{--              </div>--}}
{{--              <div class="events pt-4 px-3">--}}
{{--                <div class="wrapper d-flex mb-2">--}}
{{--                  <i class="mdi mdi-circle-outline text-primary mr-2"></i>--}}
{{--                  <span>Feb 7 2018</span>--}}
{{--                </div>--}}
{{--                <p class="mb-0 font-weight-thin text-gray">Meeting with Alisa</p>--}}
{{--                <p class="text-gray mb-0 ">Call Sarah Graves</p>--}}
{{--              </div>--}}
{{--            </div>--}}
{{--            <!-- To do section tab ends -->--}}
{{--            <div class="tab-pane fade" id="chats-section" role="tabpanel" aria-labelledby="chats-section">--}}
{{--              <div class="d-flex align-items-center justify-content-between border-bottom">--}}
{{--                <p class="settings-heading border-top-0 mb-3 pl-3 pt-0 border-bottom-0 pb-0">Friends</p>--}}
{{--                <small class="settings-heading border-top-0 mb-3 pt-0 border-bottom-0 pb-0 pr-3 font-weight-normal">See All</small>--}}
{{--              </div>--}}
{{--              <ul class="chat-list">--}}
{{--                <li class="list active">--}}
{{--                  <div class="profile"><img src="../../images/faces/face1.jpg" alt="image"><span class="online"></span></div>--}}
{{--                  <div class="info">--}}
{{--                    <p>Thomas Douglas</p>--}}
{{--                    <p>Available</p>--}}
{{--                  </div>--}}
{{--                  <small class="text-muted my-auto">19 min</small>--}}
{{--                </li>--}}
{{--                <li class="list">--}}
{{--                  <div class="profile"><img src="../../images/faces/face2.jpg" alt="image"><span class="offline"></span></div>--}}
{{--                  <div class="info">--}}
{{--                    <div class="wrapper d-flex">--}}
{{--                      <p>Catherine</p>--}}
{{--                    </div>--}}
{{--                    <p>Away</p>--}}
{{--                  </div>--}}
{{--                  <div class="badge badge-success badge-pill my-auto mx-2">4</div>--}}
{{--                  <small class="text-muted my-auto">23 min</small>--}}
{{--                </li>--}}
{{--                <li class="list">--}}
{{--                  <div class="profile"><img src="../../images/faces/face3.jpg" alt="image"><span class="online"></span></div>--}}
{{--                  <div class="info">--}}
{{--                    <p>Daniel Russell</p>--}}
{{--                    <p>Available</p>--}}
{{--                  </div>--}}
{{--                  <small class="text-muted my-auto">14 min</small>--}}
{{--                </li>--}}
{{--                <li class="list">--}}
{{--                  <div class="profile"><img src="../../images/faces/face4.jpg" alt="image"><span class="offline"></span></div>--}}
{{--                  <div class="info">--}}
{{--                    <p>James Richardson</p>--}}
{{--                    <p>Away</p>--}}
{{--                  </div>--}}
{{--                  <small class="text-muted my-auto">2 min</small>--}}
{{--                </li>--}}
{{--                <li class="list">--}}
{{--                  <div class="profile"><img src="../../images/faces/face5.jpg" alt="image"><span class="online"></span></div>--}}
{{--                  <div class="info">--}}
{{--                    <p>Madeline Kennedy</p>--}}
{{--                    <p>Available</p>--}}
{{--                  </div>--}}
{{--                  <small class="text-muted my-auto">5 min</small>--}}
{{--                </li>--}}
{{--                <li class="list">--}}
{{--                  <div class="profile"><img src="../../images/faces/face6.jpg" alt="image"><span class="online"></span></div>--}}
{{--                  <div class="info">--}}
{{--                    <p>Sarah Graves</p>--}}
{{--                    <p>Available</p>--}}
{{--                  </div>--}}
{{--                  <small class="text-muted my-auto">47 min</small>--}}
{{--                </li>--}}
{{--              </ul>--}}
{{--            </div>--}}
{{--            <!-- chat tab ends -->--}}
{{--          </div>--}}
{{--        </div>--}}
        <!-- partial -->
				<!-- partial:partials/_sidebar.html -->
				<nav class="sidebar sidebar-offcanvas" id="sidebar">
        <ul class="nav">
          <li class="nav-item nav-profile">
            <div class="nav-link d-flex">
              <div class="profile-image">
                <img src="{{ Auth::user()->photo ? Auth::user()->photo->file : 'No user photo'}}" alt="image">
              </div>
              <div class="profile-name">
                <p class="name">
                    {{ Auth::user()->name }}
                </p>
                <p class="designation">
                    {{ Auth::user()->role->name }}
                </p>
              </div>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/admin">
            <i class="mdi mdi-shield-check menu-icon"></i>
            <span class="menu-title">Dashboard</span>
            </a>
          </li>
{{--          <li class="nav-item">--}}
{{--            <a class="nav-link" href="pages/widgets/widgets.html">--}}
{{--            <i class="mdi mdi-puzzle menu-icon"></i>--}}
{{--            <span class="menu-title">Widgets<span class="badge badge-danger">New</span></span>--}}
{{--            </a>--}}
{{--          </li>--}}
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
            <i class="fas fa-camera"></i>
            <span class="menu-title">Users</span>
            <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-basic">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="{{route('users.index')}}">All user</a></li>
                <li class="nav-item"> <a class="nav-link" href="{{route('users.create')}}">Create user</a></li>
              </ul>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#ui-advanced" aria-expanded="false" aria-controls="ui-advanced">
            <i class="mdi mdi-palette menu-icon"></i>
            <span class="menu-title">Posts</span>
            <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-advanced">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="{{route('posts.index')}}">All posts</a></li>
                <li class="nav-item"> <a class="nav-link" href="{{route('posts.create')}}">Create post</a></li>
              </ul>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#form-elements" aria-expanded="false" aria-controls="form-elements">
            <i class="mdi mdi-view-headline menu-icon"></i>
            <span class="menu-title">Teams </span>
            <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="form-elements">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"><a class="nav-link" href="pages/forms/basic_elements.html">All teams</a></li>
                <li class="nav-item"><a class="nav-link" href="pages/forms/advanced_elements.html">Create team</a></li>
              </ul>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#editors" aria-expanded="false" aria-controls="editors">
            <i class="mdi mdi-pencil menu-icon"></i>
            <span class="menu-title">Players</span>
            <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="editors">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"><a class="nav-link" href="pages/forms/text_editor.html">All players</a></li>
                <li class="nav-item"><a class="nav-link" href="pages/forms/code_editor.html">Create player</a></li>
              </ul>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#charts" aria-expanded="false" aria-controls="charts">
            <i class="mdi mdi-signal menu-icon"></i>
            <span class="menu-title">Charts</span>
            <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="charts">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="pages/charts/chartjs.html">ChartJs</a></li>
                <li class="nav-item"> <a class="nav-link" href="pages/charts/morris.html">Morris</a></li>
                <li class="nav-item"> <a class="nav-link" href="pages/charts/flot-chart.html">Flot</a></li>
                <li class="nav-item"> <a class="nav-link" href="pages/charts/google-charts.html">Google charts</a></li>
                <li class="nav-item"> <a class="nav-link" href="pages/charts/sparkline.html">Sparkline js</a></li>
                <li class="nav-item"> <a class="nav-link" href="pages/charts/c3.html">C3 charts</a></li>
                <li class="nav-item"> <a class="nav-link" href="pages/charts/chartist.html">Chartists</a></li>
                <li class="nav-item"> <a class="nav-link" href="pages/charts/justGage.html">JustGage</a></li>
              </ul>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#tables" aria-expanded="false" aria-controls="tables">
            <i class="mdi mdi-format-list-bulleted-square menu-icon"></i>
            <span class="menu-title">Tables</span>
            <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="tables">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="pages/tables/basic-table.html">Basic table</a></li>
                <li class="nav-item"> <a class="nav-link" href="pages/tables/data-table.html">Data table</a></li>
                <li class="nav-item"> <a class="nav-link" href="pages/tables/js-grid.html">Js-grid</a></li>
                <li class="nav-item"> <a class="nav-link" href="pages/tables/sortable-table.html">Sortable table</a></li>
              </ul>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="pages/ui-features/popups.html">
            <i class="mdi mdi-drawing-box menu-icon"></i>
            <span class="menu-title">Popups</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="pages/ui-features/notifications.html">
            <i class="mdi mdi-bell menu-icon"></i>
            <span class="menu-title">Notifications</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#icons" aria-expanded="false" aria-controls="icons">
            <i class="mdi mdi-emoticon-excited-outline menu-icon"></i>
            <span class="menu-title">Icons</span>
            <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="icons">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="pages/icons/flag-icons.html">Flag icons</a></li>
                <li class="nav-item"> <a class="nav-link" href="pages/icons/mdi.html">Mdi icons</a></li>
                <li class="nav-item"> <a class="nav-link" href="pages/icons/font-awesome.html">Font Awesome</a></li>
                <li class="nav-item"> <a class="nav-link" href="pages/icons/simple-line-icon.html">Simple line icons</a></li>
                <li class="nav-item"> <a class="nav-link" href="pages/icons/themify.html">Themify icons</a></li>
              </ul>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#maps" aria-expanded="false" aria-controls="maps">
            <i class="mdi mdi-map menu-icon"></i>
            <span class="menu-title">Maps</span>
            <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="maps">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="pages/maps/mapael.html">Mapael</a></li>
                <li class="nav-item"> <a class="nav-link" href="pages/maps/vector-map.html">Vector Map</a></li>
                <li class="nav-item"> <a class="nav-link" href="pages/maps/google-maps.html">Google Map</a></li>
              </ul>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#auth" aria-expanded="false" aria-controls="auth">
            <i class="mdi mdi-account-circle menu-icon"></i>
            <span class="menu-title">User Pages</span>
            <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="auth">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="pages/samples/login.html"> Login </a></li>
                <li class="nav-item"> <a class="nav-link" href="pages/samples/login-2.html"> Login 2 </a></li>
                <li class="nav-item"> <a class="nav-link" href="pages/samples/register.html"> Register </a></li>
                <li class="nav-item"> <a class="nav-link" href="pages/samples/register-2.html"> Register 2 </a></li>
                <li class="nav-item"> <a class="nav-link" href="pages/samples/lock-screen.html"> Lockscreen </a></li>
              </ul>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#error" aria-expanded="false" aria-controls="error">
            <i class="mdi mdi-alert-circle menu-icon"></i>
            <span class="menu-title">Error pages</span>
            <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="error">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="pages/samples/error-404.html"> 404 </a></li>
                <li class="nav-item"> <a class="nav-link" href="pages/samples/error-500.html"> 500 </a></li>
              </ul>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#general-pages" aria-expanded="false" aria-controls="general-pages">
            <i class="mdi mdi-view-quilt menu-icon"></i>
            <span class="menu-title">General Pages</span>
            <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="general-pages">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="pages/samples/blank-page.html"> Blank Page </a></li>
                <li class="nav-item"> <a class="nav-link" href="pages/samples/profile.html"> Profile </a></li>
                <li class="nav-item"> <a class="nav-link" href="pages/samples/faq.html"> FAQ </a></li>
                <li class="nav-item"> <a class="nav-link" href="pages/samples/faq-2.html"> FAQ 2 </a></li>
                <li class="nav-item"> <a class="nav-link" href="pages/samples/news-grid.html"> News grid </a></li>
                <li class="nav-item"> <a class="nav-link" href="pages/samples/timeline.html"> Timeline </a></li>
                <li class="nav-item"> <a class="nav-link" href="pages/samples/search-results.html"> Search Results </a></li>
                <li class="nav-item"> <a class="nav-link" href="pages/samples/portfolio.html"> Portfolio </a></li>
              </ul>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#e-commerce" aria-expanded="false" aria-controls="e-commerce">
            <i class="mdi mdi-cart-outline menu-icon"></i>
            <span class="menu-title">E-commerce</span>
            <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="e-commerce">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="pages/samples/invoice.html"> Invoice </a></li>
                <li class="nav-item"> <a class="nav-link" href="pages/samples/pricing-table.html"> Pricing Table </a></li>
                <li class="nav-item"> <a class="nav-link" href="pages/samples/orders.html"> Orders </a></li>
              </ul>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="pages/apps/email.html">
            <i class="mdi mdi-email-outline menu-icon"></i>
            <span class="menu-title">E-mail</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="pages/apps/calendar.html">
            <i class="mdi mdi-calendar-blank menu-icon"></i>
            <span class="menu-title">Calendar</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="pages/apps/todo.html">
            <i class="mdi mdi-checkbox-marked-outline menu-icon"></i>
            <span class="menu-title">Todo List</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="pages/apps/gallery.html">
            <i class="mdi mdi-image-filter menu-icon"></i>
            <span class="menu-title">Gallery</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="pages/documentation/documentation.html">
            <i class="mdi mdi-file-document menu-icon"></i>
            <span class="menu-title">Documentation</span>
            </a>
          </li>
        </ul>
      </nav>
				<!-- partial -->
				 <div class="main-panel">
					<div class="content-wrapper">
						<div class="row">
							<div class="col-md-12">
                                @yield('content')

								</div>
							</div>
						</div>
					</div>



{{--          <div class="footer-wrapper">--}}
{{--            <footer class="footer">--}}
{{--              <div class="d-sm-flex justify-content-center justify-content-sm-between">--}}
{{--                <span class="text-center text-sm-left d-block d-sm-inline-block">Copyright &copy; 2019. All rights reserved. </span>--}}
{{--                <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">Designed by: <a href="https://www.urbanui.com/" target="_blank">UrbanUI</a>. </span>--}}
{{--              </div>--}}
{{--            </footer>--}}
{{--          </div>--}}
          <!-- partial -->
				<!-- main-panel ends -->
				</div>
			<!-- page-body-wrapper ends -->
			</div>

		<!-- container-scroller -->
		<!-- base:js -->
        <script src="{{asset('js/libs.js')}}"></script>
	</body>

<!-- Mirrored from www.urbanui.com/hiliteui/template/demo/vertical-default-light/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 29 Jan 2020 17:32:42 GMT -->
</html>