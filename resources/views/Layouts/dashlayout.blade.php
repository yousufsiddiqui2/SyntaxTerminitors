<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="zxx">

<!-- Mirrored from htmldesigntemplates.com/html/yatra/bootstrap5/dashboard.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 18 Sep 2024 05:39:32 GMT -->
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Dashboard | @yield('dashtitle')</title>

<link rel="shortcut icon" type="image/x-icon" href="images/logo1.png">

<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">

<link href="css/style.css" rel="stylesheet" type="text/css">

<link href="font/flaticon.css" rel="stylesheet" type="text/css">

<link href="css/plugin.css" rel="stylesheet" type="text/css">

<link href="css/dashboard.css" rel="stylesheet" type="text/css">
<link href="css/icons.css" rel="stylesheet" type="text/css">

<link rel="stylesheet" href="../../../../cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>

<div id="preloader">
<div id="status"></div>
</div>


<div id="container-wrapper">

<div id="dashboard">

<a href="#" class="dashboard-responsive-nav-trigger"><i class="fa fa-reorder"></i> Dashboard Navigation</a>
<div class="dashboard-sticky-nav">
<div class="content-left pull-left">
<a href="dashboard.html"><img src="images/LOGO.png" alt="logo"></a>
</div>
<div class="content-right pull-right">
<div class="search-bar">
<form>
<div class="form-group">
<input type="text" class="form-control" id="search" placeholder="Search Now">
<a href="#"><span class="search_btn"><i class="fa fa-search" aria-hidden="true"></i></span></a>
</div>
</form>
</div>
<div class="dropdown dropdown-profile">
<a class="dropdown-toggle" data-toggle="dropdown">
<div class="profile-sec">
<div class="dash-image">
<img src="images/comment.jpg" alt>
</div>
<div class="dash-content">
<h4>{{ Auth::user()->name }}</h4>
<span>{{ Auth::user()->email }}</span>
</div>
</div>
</a>
<ul class="dropdown-menu">
<li><a href="#"><i class="sl sl-icon-settings"></i>Settings</a></li>
<li><a href="#"><i class="sl sl-icon-user"></i>Profile</a></li>
<li><a href="#"><i class="sl sl-icon-lock"></i>Change Password</a></li>
<li><a href="#"><i class="sl sl-icon-power"></i>Logout</a></li>
</ul>
</div>
<div class="dropdown">
<a class="dropdown-toggle" data-toggle="dropdown">
<div class="dropdown-item">
<i class="sl sl-icon-envelope-open"></i>
<span class="notify">3</span>
</div>
</a>
<div class="dropdown-menu notification-menu">
<h4> 23 Messages</h4>
<ul>
<li>
<a href="#">
<div class="notification-item">
<div class="notification-image">
<img src="images/comment.jpg" alt>
</div>
<div class="notification-content">
<p>You have a notification.</p><span class="notification-time">2 hours ago</span>
</div>
</div>
</a>
</li>
<li>
<a href="#">
<div class="notification-item">
<div class="notification-image">
<img src="images/comment.jpg" alt>
</div>
<div class="notification-content">
<p>You have a notification.</p><span class="notification-time">2 hours ago</span>
</div>
</div>
</a>
</li>
<li>
<a href="#">
<div class="notification-item">
<div class="notification-image">
<img src="images/comment.jpg" alt>
</div>
<div class="notification-content">
<p>You have a notification.</p><span class="notification-time">2 hours ago</span>
</div>
</div>
</a>
</li>
</ul>
<p class="all-noti"><a href="#">See all messages</a></p>
</div>
</div>
<div class="dropdown">
<a class="dropdown-toggle" data-toggle="dropdown">
<div class="dropdown-item">
<i class="sl sl-icon-bell"></i>
<span class="notify">3</span>
</div>
</a>
<div class="dropdown-menu notification-menu">
<h4> 599 Notifications</h4>
<ul>
<li>
<a href="#">
<div class="notification-item">
<div class="notification-image">
<img src="images/comment.jpg" alt>
</div>
<div class="notification-content">
<p>You have a notification.</p><span class="notification-time">2 hours ago</span>
</div>
</div>
</a>
</li>
<li>
<a href="#">
<div class="notification-item">
<div class="notification-image">
<img src="images/comment.jpg" alt>
</div>
<div class="notification-content">
<p>You have a notification.</p><span class="notification-time">2 hours ago</span>
</div>
</div>
</a>
</li>
<li>
<a href="#">
<div class="notification-item">
<div class="notification-image">
<img src="images/comment.jpg" alt>
</div>
<div class="notification-content">
<p>You have a notification.</p><span class="notification-time">2 hours ago</span>
</div>
</div>
</a>
</li>
</ul>
<p class="all-noti"><a href="#">See all notifications</a></p>
</div>
</div>
</div>
</div>
<div class="dashboard-nav">
<div class="dashboard-nav-inner">
<ul>
<li class="active"><a href="/dashboard"><i class="sl sl-icon-settings"></i> Dashboard</a></li>
<li><a href="/cusmanage"><i class="sl sl-icon-user"></i> Customize Tour</a></li>
<li><a href="/contactmanage"><i class="sl sl-icon-user"></i> Contact Us</a></li>
<li><a href="/addtour"><i class="sl sl-icon-plus"></i> Add Tour</a></li>
<li>
<a href="/tourlist"><i class="sl sl-icon-layers"></i> Tour List</a>
<!-- <ul>
<li><a href="dashboard-list.html">Active <span class="nav-tag green">6</span></a></li>
<li><a href="dashboard-list.html">Pending <span class="nav-tag yellow">1</span></a></li>
<li><a href="dashboard-list.html">Expired <span class="nav-tag red">2</span></a></li>
</ul> -->
</li>
<li><a href="dashboard-booking.html"><i class="sl sl-icon-list"></i> Booking List</a></li>

<li>
<a href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                       <i class="sl sl-icon-power"></i> {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                    </li>
<!-- <li><a href="index.html"><i class="sl sl-icon-power"></i> Logout</a></li> -->
</ul>
</div>
</div>


@yield('dashcontent')



<div class="copyrights">
    <p>2018 <i class="fa fa-copyright" aria-hidden="true"></i> Yatra by <a href="https://www.cyclonethemes.com/" target="_blank">Cyclone Themes</a></p>
    </div>
    </div>
    
    </div>
    
    
    <div id="back-to-top">
    <a href="#"></a>
    </div>
    

    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/js/all.min.js" integrity="sha512-6sSYJqDreZRZGkJ3b+YfdhB3MzmuP9R7X1QZ6g5aIXhRvR1Y/N/P47jmnkENm7YL3oqsmI6AK+V6AD99uWDnIw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
    
    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="../../../../code.jquery.com/jquery-migrate-1.4.1.min.js"></script>
    <script src="../../../../cdn.jsdelivr.net/npm/bootstrap%404.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/plugin.js"></script>
    <script src="js/preloader.js"></script>
    <script src="js/main.js"></script>
    <script src="../../../../cdn.canvasjs.com/canvasjs.min.js"></script>
    <script src="js/chart.js"></script>
    <script src="js/dashboard-custom.js"></script>
    <script src="js/jpanelmenu.min.js"></script>
    <script src="js/counterup.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/js/all.min.js" integrity="sha512-6sSYJqDreZRZGkJ3b+YfdhB3MzmuP9R7X1QZ6g5aIXhRvR1Y/N/P47jmnkENm7YL3oqsmI6AK+V6AD99uWDnIw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script>(function(){function c(){var b=a.contentDocument||a.contentWindow.document;if(b){var d=b.createElement('script');d.innerHTML="window.__CF$cv$params={r:'8c4efc82fd039077',t:'MTcyNjYzNzg3MC4wMDAwMDA='};var a=document.createElement('script');a.nonce='';a.src='../../../cdn-cgi/challenge-platform/h/b/scripts/jsd/388c99dd0998/maind41d.js';document.getElementsByTagName('head')[0].appendChild(a);";b.getElementsByTagName('head')[0].appendChild(d)}}if(document.body){var a=document.createElement('iframe');a.height=1;a.width=1;a.style.position='absolute';a.style.top=0;a.style.left=0;a.style.border='none';a.style.visibility='hidden';document.body.appendChild(a);if('loading'!==document.readyState)c();else if(window.addEventListener)document.addEventListener('DOMContentLoaded',c);else{var e=document.onreadystatechange||function(){};document.onreadystatechange=function(b){e(b);'loading'!==document.readyState&&(document.onreadystatechange=e,c())}}}})();</script><script defer src="https://static.cloudflareinsights.com/beacon.min.js/vcd15cbe7772f49c399c6a5babf22c1241717689176015" integrity="sha512-ZpsOmlRQV6y907TI0dKBHq9Md29nnaEIPlkf84rnaERnq6zvWvPUqr2ft8M1aS28oN72PdrCzSjY4U6VaAw1EQ==" data-cf-beacon='{"rayId":"8c4efc82fd039077","version":"2024.8.0","r":1,"serverTiming":{"name":{"cfExtPri":true,"cfL4":true}},"token":"e2e296138d64407b8469055f5cbf0b42","b":1}' crossorigin="anonymous"></script>
    </body>
    
    <!-- Mirrored from htmldesigntemplates.com/html/yatra/bootstrap5/dashboard.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 18 Sep 2024 05:39:37 GMT -->
    </html>