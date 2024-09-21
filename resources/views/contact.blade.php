@extends('Layouts.indexlayout')
@section('Title')
    Contact Us
@endsection

@section('content')
    
<section class="breadcrumb-outer text-center">
    <div class="container">
    <div class="breadcrumb-content">
    <h2>Contact Us Page</h2>
    
    </div>
    </div>
    <div class="section-overlay"></div>
    </section>
    
    <section class="contact">
    <div class="container">
    <div class="row">
    <div class="col-lg-8 col-md-7">
    <div id="contact-form" class="contact-form">
    <div id="contactform-error-msg"></div>
   
    <form action="/insertcon" method="post" name="contactform">
        @csrf
    <div class="row">
    <div class="form-group mb-3 col-lg-12">
    <label>Name:</label>
    <input type="text" name="contactname" class="form-control" id="Name" placeholder="Enter full name" required />
    </div>
    <div class="form-group mb-3 col-lg-6 col-md-6">
    <label>Email:</label>
    <input type="email" name="contactemail" class="form-control" id="email" placeholder="abc@xyz.com" required />
    </div>
    <div class="form-group mb-3 col-lg-6 col-md-6 ps-md-0">
    <label>Phone Number:</label>
    <input type="text" name="contactphone" class="form-control" id="phnumber" placeholder="XXXX-XXXXXX" required />
    </div>
    <div class="textarea mb-3 col-lg-12">
    <label>Message:</label>
    <textarea name="contactmessage" placeholder="Enter a message" required></textarea>
    </div>
    <div class="col-lg-12">
    <div class="comment-btn">
    <input type="submit" class="btn-blue btn-red" id="submit" />
    
    </div>
    </div>
    </div>
    </form>
    </div>
    </div>
    <div class="col-lg-4 col-md-5">
    <div class="contact-about footer-margin">
    <div class="about-logo">
    <img src="images/Yatra-01.png" alt="Image" />
    </div>
    <h4>Travel With Us</h4>
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.</p>
    <div class="contact-location">
    <ul>
    <li><i class="flaticon-maps-and-flags" aria-hidden="true"></i> Location</li>
    <li><i class="flaticon-phone-call"></i> (012)-345-6789</li>
    <li><i class="flaticon-mail"></i> <a href="https://htmldesigntemplates.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="f98d968c8b978d8b988f9c95b98d9c8a8d94989095d79a9694">[email&#160;protected]</a></li>
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
    </div>
    </div>
    </section>
    <div class="map">
    <div id="map" style="height: 350px; width: 100%"></div>
    </div>
@endsection