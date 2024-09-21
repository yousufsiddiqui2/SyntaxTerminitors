<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="zxx">

<!-- Mirrored from htmldesigntemplates.com/html/yatra/bootstrap5/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 18 Sep 2024 05:37:30 GMT -->
<head>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1" />
<title>@yield('Title')</title>

<link rel="shortcut icon" type="image/x-icon" href="images/logo1.png" />

<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />

<link href="css/style.css" rel="stylesheet" type="text/css" />

<link href="font/flaticon.css" rel="stylesheet" type="text/css" />

<link href="css/plugin.css" rel="stylesheet" type="text/css" />

<link rel="stylesheet" href="../../../../cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />

<link rel="stylesheet" href="../../../../cdnjs.cloudflare.com/ajax/libs/ion-rangeslider/2.3.1/css/ion.rangeSlider.min.css" />

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />

<script src="../../../../cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<script src="../../../../cdnjs.cloudflare.com/ajax/libs/ion-rangeslider/2.3.1/js/ion.rangeSlider.min.js"></script>
</head>
<body>

<div id="preloader">
<div id="status"></div>
</div>


<header>
<div class="upper-head clearfix">
<div class="container">
{{-- <div class="contact-info">
<p><i class="flaticon-phone-call"></i> Phone: (012)-345-6789</p>
<p><i class="flaticon-mail"></i> Mail: <a href="https://htmldesigntemplates.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="f6829983849882849780939ab6829385829b979f9ad895999b">[email&#160;protected]</a></p>
</div> --}}
@guest
@if (Route::has('register'))
<div class="login-btn pull-right">
<a href="/login"><i class="fa fa-user-plus"></i> Register</a>
@endif
@if (Route::has('login'))
<a href="/login"><i class="fa fa-unlock-alt"></i> Login</a>
@endif
</div>

@else
<a style="color: white;" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                       <i class="fa fa-icon-lock"></i> {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
@endguest
</div>
</div>
</header>


<div class="navigation">
<div class="container">
<div class="navigation-content">
<div class="header_menu">

<nav class="navbar navbar-default navbar-sticky-function navbar-arrow">
<div class="logo pull-left">
<a href="index.html"><img alt="Image" src="images/LOGO.png" /></a>
</div>
<div id="navbar" class="navbar-nav-wrapper">
<ul class="nav navbar-nav" id="responsive-menu">
<li class="active">
<a href="/">Home </a>
</li>

<li>
<a href="/about">About Us </a>
</li>
<li>
<a href="/contact">Contact Us </a>
</li>
<li>
<a href="/gallery">Gallery </a>

</li>
<li>
<a href="/customize">Customize Tour </a>
</li>
<li>

<ul>
<li><a href="#"> </a></li>
</ul>
</li>
</ul> 
</div>

<div id="slicknav-mobile"></div>
</nav>
</div>
</div>
</div>
</div>

@yield('content')


<footer>
    <div class="footer-upper">
    <div class="container">
    <div class="newsletter text-center">
    <div class="section-title section-title-white text-center">
    <h2>Newsletter Signup</h2>
    <div class="section-icon section-icon-white">
    <i class="flaticon-diamond"></i>
    </div>
    <p>Subscribe to our weekly newsletter to get updated on our latest deals</p>
    </div>
    <form>
    <div class="form-group">
    <input type="text" class="form-control" id="search" />
    <a href="#"><span class="search_btn"><i class="fa fa-paper-plane" aria-hidden="true"></i> Sign Up</span></a
                    >
    </div>
    </form>
    </div>
    <div class="footer-links">
    <div class="row">
    <div class="col-lg-3">
    <div class="footer-about footer-margin">
    <div class="about-logo">
    <img src="images/Yatra-white.png" alt="Image" />
    </div>
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.</p>
    <div class="about-location">
    <ul>
    <li><i class="flaticon-maps-and-flags" aria-hidden="true"></i> Location</li>
    <li><i class="flaticon-phone-call"></i> (012)-345-6789</li>
    <li><i class="flaticon-mail"></i> <a href="https://htmldesigntemplates.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="8df9e2f8ffe3f9ffecfbe8e1cdf9e8fef9e0ece4e1a3eee2e0">[email&#160;protected]</a></li>
    </ul>
    </div>
    <div class="footer-social-links">
    <ul>
    <li class="social-icon">
    <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
    </li>
    <li class="social-icon">
    <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
    </li>
    <li class="social-icon">
    <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
    </li>
    <li class="social-icon">
    <a href="#"><i class="fa fa-youtube" aria-hidden="true"></i></a>
    </li>
    <li class="social-icon">
    <a href="#"><i class="fa fa-google" aria-hidden="true"></i></a>
    </li>
    </ul>
    </div>
    </div>
    </div>
    <div class="col-lg-3 col-md-4">
    <div class="footer-links-list footer-margin">
    <h3>Browse Tour</h3>
    <ul>
    <li>
    <a href="#">Cyclades <i class="fa fa-angle-right" aria-hidden="true"></i></a>
    </li>
    <li>
    <a href="#">North Ionian <i class="fa fa-angle-right" aria-hidden="true"></i></a>
    </li>
    <li>
    <a href="#">Sporades <i class="fa fa-angle-right" aria-hidden="true"></i></a>
    </li>
    <li>
    <a href="#">View all Destinations <i class="fa fa-angle-right" aria-hidden="true"></i></a>
    </li>
    <li>
    <a href="#">View all Yatchs <i class="fa fa-angle-right" aria-hidden="true"></i></a>
    </li>
    <li>
    <a href="#">View all Cruises <i class="fa fa-angle-right" aria-hidden="true"></i></a>
    </li>
    </ul>
    </div>
    </div>
    <div class="col-lg-3 col-md-4">
    <div class="footer-recent-post footer-margin">
    <h3>Recent Posts</h3>
    <ul>
    <li>
    <div class="recent-post-item">
    <div class="recent-post-image">
    <img src="images/bucket1.jpg" alt="Image" />
    </div>
    <div class="recent-post-content">
    <h4><a href="#">A trip to heaven</a></h4>
    <p>June 17, 2018</p>
    </div>
    </div>
    </li>
    <li>
    <div class="recent-post-item">
    <div class="recent-post-image">
    <img src="images/bucket2.jpg" alt="Image" />
    </div>
    <div class="recent-post-content">
    <h4><a href="#">Diving in Atlantic</a></h4>
    <p>June 17, 2018</p>
    </div>
    </div>
    </li>
    <li>
    <div class="recent-post-item">
    <div class="recent-post-image">
    <img src="images/bucket3.jpg" alt="Image" />
    </div>
    <div class="recent-post-content">
    <h4><a href="#">Travellers History</a></h4>
    <p>June 17, 2018</p>
    </div>
    </div>
    </li>
    </ul>
    </div>
    </div>
    <div class="col-lg-3 col-md-4">
    <div class="footer-links-list">
    <div class="footer-instagram">
    <h3>Instagram</h3>
    <ul>
    <li><img src="images/insta1.jpg" alt="Image" /></li>
    <li><img src="images/insta2.jpg" alt="Image" /></li>
    <li><img src="images/insta3.jpg" alt="Image" /></li>
    <li><img src="images/insta4.jpg" alt="Image" /></li>
    <li><img src="images/insta5.jpg" alt="Image" /></li>
    <li><img src="images/insta6.jpg" alt="Image" /></li>
    <li><img src="images/insta7.jpg" alt="Image" /></li>
    <li><img src="images/insta8.jpg" alt="Image" /></li>
    <li><img src="images/insta9.jpg" alt="Image" /></li>
    </ul>
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>
    <div class="copyright">
    <div class="container">
    <div class="row">
    <div class="col-lg-6">
    <div class="copyright-content">
    <p>
    2018 <i class="fa fa-copyright" aria-hidden="true"></i> Yatra by <a href="https://www.cyclonethemes.com/" target="_blank">Cyclone Themes</a>
    </p>
    </div>
    </div>
    <div class="col-lg-6">
    <div class="payment-content">
    <ul>
    <li>We Accept</li>
    <li>
    <img src="images/payment1.png" alt="Image" />
    </li>
    <li>
    <img src="images/payment2.png" alt="Image" />
    </li>
    <li>
    <img src="images/payment3.png" alt="Image" />
    </li>
    <li>
    <img src="images/payment4.png" alt="Image" />
    </li>
    </ul>
    </div>
    </div>
    </div>
    </div>
    </div>
    </footer>
    
    
    <div id="back-to-top">
    <a href="#"></a>
    </div>
    
    
    <script data-cfasync="false" src="../../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/plugin.js"></script>
    <script src="js/main.js"></script>
    <script src="js/main-1.js"></script>
    <script src="js/preloader.js"></script>
    <script src="js/custom-swiper2.js"></script>
    <script src="js/custom-countdown.js"></script>
    <script>(function(){function c(){var b=a.contentDocument||a.contentWindow.document;if(b){var d=b.createElement('script');d.innerHTML="window.__CF$cv$params={r:'8c4efbf95d309077',t:'MTcyNjYzNzg0OC4wMDAwMDA='};var a=document.createElement('script');a.nonce='';a.src='../../../cdn-cgi/challenge-platform/h/b/scripts/jsd/388c99dd0998/maind41d.js';document.getElementsByTagName('head')[0].appendChild(a);";b.getElementsByTagName('head')[0].appendChild(d)}}if(document.body){var a=document.createElement('iframe');a.height=1;a.width=1;a.style.position='absolute';a.style.top=0;a.style.left=0;a.style.border='none';a.style.visibility='hidden';document.body.appendChild(a);if('loading'!==document.readyState)c();else if(window.addEventListener)document.addEventListener('DOMContentLoaded',c);else{var e=document.onreadystatechange||function(){};document.onreadystatechange=function(b){e(b);'loading'!==document.readyState&&(document.onreadystatechange=e,c())}}}})();</script><script defer src="https://static.cloudflareinsights.com/beacon.min.js/vcd15cbe7772f49c399c6a5babf22c1241717689176015" integrity="sha512-ZpsOmlRQV6y907TI0dKBHq9Md29nnaEIPlkf84rnaERnq6zvWvPUqr2ft8M1aS28oN72PdrCzSjY4U6VaAw1EQ==" data-cf-beacon='{"rayId":"8c4efbf95d309077","version":"2024.8.0","r":1,"serverTiming":{"name":{"cfExtPri":true,"cfL4":true}},"token":"e2e296138d64407b8469055f5cbf0b42","b":1}' crossorigin="anonymous"></script>
    </body>
    
    <!-- Mirrored from htmldesigntemplates.com/html/yatra/bootstrap5/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 18 Sep 2024 05:38:25 GMT -->
    </html>
    