<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Dashboard</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico">
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,700,900" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('admin/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/css/nalika-icon.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/css/owl.carousel.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/css/owl.theme.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/css/owl.transitions.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/css/animate.css') }}">
    <!-- <link rel="stylesheet" href="{{ asset('admin/css/normalize.css') }}"> -->
    <link rel="stylesheet" href="{{ asset('admin/css/meanmenu.min.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/css/main.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/css/morrisjs/morris.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/css/scrollbar/jquery.mCustomScrollbar.min.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/css/metisMenu/metisMenu.min.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/css/metisMenu/metisMenu-vertical.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/css/calendar/fullcalendar.min.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/css/calendar/fullcalendar.print.min.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/style.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/css/responsive.css') }}">
    <script src=" {{ asset('admin/js/vendor/modernizr-2.8.3.min.js') }}"></script>
</head>

<body>

<div class="left-sidebar-pro">
    <nav id="sidebar" class="">
        <div class="sidebar-header">
            <a href="index.html"><img class="main-logo" src="{{ asset('admin/img/logo/logo.png')}}" alt="" /></a>
            <strong><img src="{{ asset('admin/img/logo/logosn.png')}}" alt="" /></strong>
        </div>
        <div class="nalika-profile">
            <div class="profile-dtl">
                <a href="#"><img src="{{ asset('admin/img/notification/4.jpg')}}" alt="" /></a>
                <h2>Lakian <span class="min-dtn">Das</span></h2>
            </div>
            <div class="profile-social-dtl">
                <ul class="dtl-social">
                    <li><a href="#"><i class="icon nalika-facebook"></i></a></li>
                    <li><a href="#"><i class="icon nalika-twitter"></i></a></li>
                    <li><a href="#"><i class="icon nalika-linkedin"></i></a></li>
                </ul>
            </div>
        </div>
        <div class="left-custom-menu-adp-wrap comment-scrollbar">
            <nav class="sidebar-nav left-sidebar-menu-pro">
                <ul class="metismenu" id="menu1">
                    <li class="">
                        <a class="has-arrow" href="index.html">
                            <i class="icon nalika-home icon-wrap"></i>
                            <span class="mini-click-non">Ecommerce</span>
                        </a>
                        <ul class="submenu-angle" aria-expanded="true">
                            <li><a title="Dashboard v.1" href="{{ route('dashboard') }}"><span class="mini-sub-pro">Dashboard</span></a></li>
                            <li><a title="Product List" href="{{ route('product.list') }}"><span class="mini-sub-pro">Product List</span></a></li>
                            <li><a title="Product Edit" href="{{ route('product.create') }}"><span class="mini-sub-pro">Product add</span></a></li></ul>
                    </li>
                    <li>
                        <a class="has-arrow" href="mailbox.html" aria-expanded="false"><i class="icon nalika-diamond icon-wrap"></i> <span class="mini-click-non">Interface</span></a>
                        <ul class="submenu-angle" aria-expanded="false">
                            <li><a title="Google Map" href="google-map.html"><span class="mini-sub-pro">Google Map</span></a></li>
                        </ul>
                    </li>
                    <li>
                        <a class="has-arrow" href="mailbox.html" aria-expanded="false"><i class="icon nalika-pie-chart icon-wrap"></i> <span class="mini-click-non">Miscellaneous</span></a>
                        <ul class="submenu-angle" aria-expanded="false">
                            <li><a title="File Manager" href="file-manager.html"><span class="mini-sub-pro">File Manager</span></a></li>
                        </ul>
                    </li>
                    <li>
                        <a class="has-arrow" href="mailbox.html" aria-expanded="false"><i class="icon nalika-bar-chart icon-wrap"></i> <span class="mini-click-non">Charts</span></a>
                        <ul class="submenu-angle" aria-expanded="false">
                            <li><a title="Bar Charts" href="bar-charts.html"><span class="mini-sub-pro">Bar Charts</span></a></li>
                        </ul>
                    </li>
                    <li>
                        <a class="has-arrow" href="mailbox.html" aria-expanded="false"><i class="icon nalika-forms icon-wrap"></i> <span class="mini-click-non">Forms Elements</span></a>
                        <ul class="submenu-angle" aria-expanded="false">
                            <li><a title="Basic Form Elements" href="basic-form-element.html"><span class="mini-sub-pro">Bc Form Elements</span></a></li>
                        </ul>
                    </li>
                    <li>
                        <a class="has-arrow" href="mailbox.html" aria-expanded="false"><i class="icon nalika-smartphone-call icon-wrap"></i> <span class="mini-click-non">App views</span></a>
                        <ul class="submenu-angle" aria-expanded="false">
                            <li><a title="Notifications" href="notifications.html"><span class="mini-sub-pro">Notifications</span></a></li>
                        </ul>
                    </li>
                    <li id="removable">
                        <a class="has-arrow" href="#" aria-expanded="false"><i class="icon nalika-new-file icon-wrap"></i> <span class="mini-click-non">Pages</span></a>
                        <ul class="submenu-angle" aria-expanded="false">
                            <li><a title="Login" href="login.html"><span class="mini-sub-pro">Login</span></a></li>
                            <li><a title="Register" href="register.html"><span class="mini-sub-pro">Register</span></a></li>
                            <li><a title="Lock" href="lock.html"><span class="mini-sub-pro">Lock</span></a></li>
                            <li><a title="Password Recovery" href="password-recovery.html"><span class="mini-sub-pro">Password Recovery</span></a></li>
                        </ul>
                    </li>
                </ul>
            </nav>
        </div>
    </nav>
</div>
<!-- Start Welcome area -->
<div class="all-content-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="logo-pro">
                    <a href="{{ route('dashboard') }}"><img class="main-logo" src="{{ asset('admin/img/logo/logo.png')}}" alt="" /></a>
                </div>
            </div>
        </div>
    </div>
    @yield('breadcome')
    @yield('some')
    
    @yield('content')
    <div class="footer-copyright-area">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="footer-copy-right">
                        <p>Copyright © 2018 <a href="https://colorlib.com/wp/templates/">Colorlib</a> All rights reserved.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script src=" {{ asset('admin/js/vendor/jquery-1.12.4.min.js') }}"></script>
<script src=" {{ asset('admin/js/bootstrap.min.js') }}"></script>
<script src=" {{ asset('admin/js/wow.min.js') }}"></script>
<script src=" {{ asset('admin/js/jquery-price-slider.js') }}"></script>
<script src=" {{ asset('admin/js/jquery.meanmenu.js') }}"></script>
<script src=" {{ asset('admin/js/owl.carousel.min.js') }}"></script>
<script src=" {{ asset('admin/js/jquery.sticky.js') }}"></script>
<script src=" {{ asset('admin/js/jquery.scrollUp.min.js') }}"></script>
<script src=" {{ asset('admin/js/scrollbar/jquery.mCustomScrollbar.concat.min.js') }}"></script>
<script src=" {{ asset('admin/js/scrollbar/mCustomScrollbar-active.js') }}"></script>
<script src=" {{ asset('admin/js/metisMenu/metisMenu.min.js') }}"></script>
<script src=" {{ asset('admin/js/metisMenu/metisMenu-active.js') }}"></script>
<script src=" {{ asset('admin/js/sparkline/jquery.sparkline.min.js') }}"></script>
<script src=" {{ asset('admin/js/sparkline/jquery.charts-sparkline.js') }}"></script>
<script src=" {{ asset('admin/js/calendar/moment.min.js') }}"></script>
<script src=" {{ asset('admin/js/calendar/fullcalendar.min.js') }}"></script>
<script src=" {{ asset('admin/js/calendar/fullcalendar-active.js') }}"></script>
<script src=" {{ asset('admin/js/flot/jquery.flot.js') }}"></script>
<script src=" {{ asset('admin/js/flot/jquery.flot.resize.js') }}"></script>
<script src=" {{ asset('admin/js/flot/curvedLines.js') }}"></script>
<script src=" {{ asset('admin/js/flot/flot-active.js') }}"></script>
<script src=" {{ asset('admin/js/plugins.js') }}"></script>
<script src=" {{ asset('admin/js/main.js') }}"></script>
</body>

</html>
