<!DOCTYPE html>
<html lang="en" dir="ltr">

<!-- Mirrored from laravel.spruko.com/volgh/ltr/index by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 07 May 2021 05:04:42 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>

        <!-- META DATA -->
        <meta charset="UTF-8">
        <meta name='viewport' content='width=device-width, initial-scale=1.0, user-scalable=0'>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="description" content="Volgh –  Bootstrap 4 Responsive Application Admin panel Theme Ui Kit & Premium Dashboard Design Modern Flat Laravel Template">
        <meta name="author" content="Spruko Technologies Private Limited">
        <meta name="keywords" content="dashboard, admin, dashboard template, admin template, laravel, php laravel, laravel bootstrap, laravel admin template, bootstrap laravel, bootstrap in laravel, laravel dashboard template, laravel admin, laravel dashboard, laravel blade template, php admin">

        <!-- FAVICON -->
		<link rel="shortcut icon" type="image/x-icon" href="assets/images/brand/favicon.ico" />

		<!-- TITLE -->
		<title>Volgh –  Bootstrap 4 Responsive Application Admin panel Theme Ui Kit & Premium Dashboard Design Modern Flat HTML Template</title>

		<!-- BOOTSTRAP CSS -->
		<link href="assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" />

		<!-- STYLE CSS -->
		<link href="{{ asset('dashboard_assets') }}/assets/css/style.css" rel="stylesheet"/>
		<link href="{{ asset('dashboard_assets') }}/assets/css/skin-modes.css" rel="stylesheet"/>
		<link href="{{ asset('dashboard_assets') }}/assets/css/dark-style.css" rel="stylesheet"/>

		<!--C3 CHARTS CSS -->
		<link href="{{ asset('dashboard_assets') }}/assets/plugins/charts-c3/c3-chart.css" rel="stylesheet"/>

		<!-- P-scroll bar css-->
		<link href="{{ asset('dashboard_assets') }}/assets/plugins/p-scroll/perfect-scrollbar.css" rel="stylesheet" />

		<!--- FONT-ICONS CSS -->
		<link href="{{ asset('dashboard_assets') }}/assets/plugins/icons/icons.css" rel="stylesheet"/>


        <!-- SIDE-MENU CSS -->
        <link href="{{ asset('dashboard_assets') }}/assets/css/sidemenu.css" rel="stylesheet"/>

		<!-- SIDEBAR CSS -->
		<link href="{{ asset('dashboard_assets') }}/assets/plugins/sidebar/sidebar.css" rel="stylesheet"/>

		<!-- COLOR SKIN CSS -->
		<link id="theme" rel="stylesheet" type="text/css" media="all" href="{{ asset('dashboard_assets') }}/assets/colors/color1.css" />

        <!-- SWITCHER SKIN CSS -->
		<link href="{{ asset('dashboard_assets') }}/assets/switcher/css/switcher.css" rel="stylesheet">
		<link href="{{ asset('dashboard_assets') }}/assets/switcher/demo.css" rel="stylesheet">



    </head>

    {{-- <body class="app sidebar-mini">
      <div class="page"> --}}
          <div class="page-main">

               <!--APP-SIDEBAR-->
              <div class="app-sidebar__overlay" data-toggle="sidebar"></div>
              <aside class="app-sidebar">
                  <div class="side-header">
                      <a class="header-brand1" href="index.html">
                          <img src="{{ asset('dashboard_assets') }}/assets/images/brand/logo.png" class="header-brand-img desktop-logo" alt="logo">
                          <img src="{{ asset('dashboard_assets') }}/assets/images/brand/logo-1.png"  class="header-brand-img toggle-logo" alt="logo">
                          <img src="{{ asset('dashboard_assets') }}/assets/images/brand/logo-2.png" class="header-brand-img light-logo" alt="logo">
                          <img src="{{ asset('dashboard_assets') }}/assets/images/brand/logo-3.png" class="header-brand-img light-logo1" alt="logo">
                      </a><!-- LOGO -->
                      <a aria-label="Hide Sidebar" class="app-sidebar__toggle ml-auto" data-toggle="sidebar" href="#"></a><!-- sidebar-toggle-->
                  </div>
                  <div class="app-sidebar__user">
                      <div class="dropdown user-pro-body text-center">
                          <div class="user-pic">
                              <img src="{{ asset('dashboard_assets') }}/assets/images/users/10.jpg" alt="user-img" class="avatar-xl rounded-circle">
                          </div>
                          <div class="user-info">
                              <h6 class=" mb-0 text-dark">{{ Auth::user()->name }}</h6>
                              <span class="text-muted app-sidebar__user-name text-sm">{{ Auth::user()->email }}</span>
                          </div>
                      </div>
                  </div>
                  <div class="sidebar-navs">
                      <ul class="nav  nav-pills-circle">
                          <li class="nav-item" data-toggle="tooltip" data-placement="top" title="Settings">
                              <a class="nav-link text-center m-2">
                                  <i class="fe fe-settings"></i>
                              </a>
                          </li>
                          <li class="nav-item" data-toggle="tooltip" data-placement="top" title="Chat">
                              <a class="nav-link text-center m-2">
                                  <i class="fe fe-mail"></i>
                              </a>
                          </li>
                          <li class="nav-item" data-toggle="tooltip" data-placement="top" title="Followers">
                              <a class="nav-link text-center m-2">
                                  <i class="fe fe-user"></i>
                              </a>
                          </li>
                          <li class="nav-item" data-toggle="tooltip" data-placement="top" title="Logout">
                              <a class="nav-link text-center m-2" href="{{ route('logout') }}"
                                 onclick="event.preventDefault();
                                               document.getElementById('logout-form').submit();">
                                  <i class="fe fe-power"></i>
                              </a>
                              <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                  @csrf
                              </form>
                          </li>
                      </ul>
                  </div>

                  <ul class="side-menu">
                      <li><h3>Main</h3></li>
                    <li class="slide">
                        <a  href="{{ url('home') }}" class="active">
                        <i class="side-menu__icon ti-home"></i>Dashboard
                        </a>
                      <li class="slide">
                        <a  href="{{ url('addCategory') }}">
                        <i class="side-menu__icon ti-layout-accordion-separated"></i>Category
                        </a>

                      </li>
                      <li class="slide">
                        <a  href="{{ url('product') }}"><i class="side-menu__icon ti-layers"></i>Product</a>
                      </li>
                      <li class="slide">
                        <a  href="#"><i class="side-menu__icon ti-layers"></i>Banner</a>
                      </li>
                      <li class="slide">
                        <a  href="{{ url('coupon') }}"><i class="side-menu__icon ti-layers"></i>Coupon</a>
                      </li>
                      <li class="slide">
                        <a  href="#"><i class="side-menu__icon ti-layers"></i>Order</a>
                      </li>
                      <li class="slide">
                        <a  href="#"><i class="side-menu__icon ti-layers"></i>Order Information</a>
                      </li>
                      <li class="slide">
                        <a  href="#"><i class="side-menu__icon ti-layers"></i>Message</a>
                      </li>
                      <li class="slide">
                        <a  href="{{ url('/') }}" target="_blank"><i class="side-menu__icon ti-layers"></i>View Website</a>
                      </li>
                    </ul>
                </aside>
                <div class="app-content">
                    <div class="side-app">
                      <div class="page-header">

                                                  <!-- PAGE-HEADER -->
                  <div>
                                                      <h1 class="page-title">Dashboard</h1>
                                                      <ol class="breadcrumb">
                                                          <li class="breadcrumb-item"><a href="#">Home</a></li>
                                                          <li class="breadcrumb-item active" aria-current="page">@yield('page_name')</li>
                                                      </ol>
                  </div>
                                        <!-- PAGE-HEADER END -->
                  <div class="d-flex  ml-auto header-right-icons header-search-icon">

                                          <div class="dropdown profile-1">
                                            <a href="#" data-toggle="dropdown" class="nav-link pr-2 leading-none d-flex">
                                              <span>
                                                <img src="{{ asset('dashboard_assets') }}/assets/images/users/10.jpg" alt="profile-user" class="avatar  profile-user brround cover-image">
                                              </span>
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                                              <div class="drop-heading">
                                                <div class="text-center">
                                                  <h5 class="text-dark mb-0">{{ Auth::user()->name }}</h5>
                                                  <small class="text-muted">{{ Auth::user()->email }}</small>
                                                </div>
                                              </div>
                                              <div class="dropdown-divider m-0"></div>
                                              <a class="dropdown-item" href="{{url('profile')}}">
                                                <i class="dropdown-icon mdi mdi-account-outline"></i> Profile
                                              </a>
                                              <a class="dropdown-item" href="#">
                                                <i class="dropdown-icon  mdi mdi-settings"></i> Settings
                                              </a>
                                              <a class="dropdown-item" href="#">
                                                <span class="float-right"></span>
                                                <i class="dropdown-icon mdi  mdi-message-outline"></i> Inbox
                                              </a>
                                              <a class="dropdown-item" href="#">
                                                <i class="dropdown-icon mdi mdi-comment-check-outline"></i> Message
                                              </a>
                                              <div class="dropdown-divider mt-0"></div>
                                              <a class="dropdown-item" href="#">
                                                <i class="dropdown-icon mdi mdi-compass-outline"></i> Need help?
                                              </a>
                                              <a class="dropdown-item" href="{{ route('logout') }}"
                                                 onclick="event.preventDefault();
                                                               document.getElementById('logout-form').submit();">
                                                  {{ __('Logout') }}
                                              </a>

                                              <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                                  @csrf
                                              </form>
                                            </div>
                                          </div>

                                        </div>
                                        </div>





  @yield('dashboard_content')





                {{-- <footer class="footer">

                  <div class="row align-items-center flex-row-reverse">
                    <div class="col-md-12 col-sm-12 text-center">
                      Copyright © 2021 <a href="#">Volgh</a>. Designed by <a href="#"> Spruko Technologies Pvt.Ltd </a> All rights reserved.
                    </div>
                  </div>


              </footer> --}}



                <!-- BACK-TO-TOP -->
            <a href="#top" id="back-to-top"><i class="fa fa-angle-up"></i></a>

            <!-- JQUERY JS -->
            <script src="{{ asset('dashboard_assets') }}/assets/plugins/jquery/jquery.min.js"></script>

            <!-- BOOTSTRAP JS -->
            <script src="{{ asset('dashboard_assets') }}/assets/plugins/bootstrap/js/popper.min.js"></script>
            <script src="{{ asset('dashboard_assets') }}/assets/plugins/bootstrap/js/bootstrap.min.js"></script>

            <!-- SPARKLINE JS-->
            <script src="{{ asset('dashboard_assets') }}/assets/plugins/jquery-sparkline/jquery.sparkline.min.js"></script>

            <!-- CHART-CIRCLE JS -->
            <script src="{{ asset('dashboard_assets') }}/assets/plugins/circle-progress/circle-progress.min.js"></script>

            <!-- C3.JS CHART JS -->
            <script src="{{ asset('dashboard_assets') }}/assets/plugins/charts-c3/d3.v5.min.js"></script>
            <script src="{{ asset('dashboard_assets') }}/assets/plugins/charts-c3/c3-chart.js"></script>

            <!-- INPUT MASK JS-->
            <script src="{{ asset('dashboard_assets') }}/assets/plugins/input-mask/jquery.mask.min.js"></script>

            <!-- SIDE-MENU JS-->
            <script src="{{ asset('dashboard_assets') }}/assets/plugins/sidemenu/sidemenu.js"></script>

            <!-- SIDEBAR JS -->
            <script src="{{ asset('dashboard_assets') }}/assets/plugins/sidebar/sidebar.js"></script>

            <!-- Perfect SCROLLBAR JS-->
            <script src="{{ asset('dashboard_assets') }}/assets/plugins/p-scroll/perfect-scrollbar.js"></script>
            <script src="{{ asset('dashboard_assets') }}/assets/plugins/p-scroll/pscroll.js"></script>

                <script src="{{ asset('dashboard_assets') }}/assets/plugins/chart/Chart.bundle.js"></script>
        <script src="{{ asset('dashboard_assets') }}/assets/plugins/chart/utils.js"></script>
        <script src="{{ asset('dashboard_assets') }}/assets/plugins/echarts/echarts.js"></script>
        <script src="{{ asset('dashboard_assets') }}/assets/plugins/apexcharts/apexcharts.js"></script>
        <script src="{{ asset('dashboard_assets') }}/assets/plugins/peitychart/jquery.peity.min.js"></script>
        <script src="{{ asset('dashboard_assets') }}/assets/plugins/peitychart/peitychart.init.js"></script>
        <script src="{{ asset('dashboard_assets') }}/assets/js/index1.js"></script>

            <!--CUSTOM JS -->
            <script src="assets/js/custom.js"></script>

                <!-- Color Change JS -->
                <script src="assets/js/color-change.js"></script>

                <!-- SWITCHER JS -->
            <script src="assets/switcher/js/switcher.js"></script>





            </body>

        <!-- Mirrored from laravel.spruko.com/volgh/ltr/index by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 07 May 2021 05:06:26 GMT -->
        </html>
