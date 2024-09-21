@extends('Layouts.indexlayout')
@section('Title')
    Home
@endsection


@section('content')

<section class="swiper-banner">
    <div class="slider">
    <div class="swiper-container">
    <div class="swiper-wrapper">
    <div class="swiper-slide" style="background-image: url(images/slider/slider7.jpg)">
    <div class="swiper-content" data-animation="animated fadeInDown">
    <h2>Book a ticket & Just Leave</h2>
    <h1>Search your next destination</h1>
    <a href="tour-detail.html" class="btn-blue btn-red">View Our Tour</a>
    </div>
    </div>
    <div class="swiper-slide" style="background-image: url(images/slider/slider2.jpg)">
    <div class="swiper-content" data-animation="animated fadeInRight">
    <h2>Cost friendly packages on your way</h2>
    <h1>We offer you better deals</h1>
    <a href="tour-detail.html" class="btn-blue btn-red">View Our Tour</a>
    </div>
    </div>
    <div class="swiper-slide" style="background-image: url(images/slider/slider3.jpg)">
    <div class="swiper-content" data-animation="animated fadeInUp">
    <h2>exciting schemes just a click away</h2>
    <h1>Amazing Santorini 7 days tour</h1>
    <a href="tour-detail.html" class="btn-blue btn-red">View Our Tour</a>
    </div>
    </div>
    </div>
    </div>
    
    <div class="swiper-button-next"></div>
    <div class="swiper-button-prev"></div>
    <div class="overlay"></div>
    </div>
    </section>
    
    
    <div class="search-box clearfix">
    <div class="container">
    <div class="search-outer">
    <div class="search-content">
    <form>
    <div class="row align-items-center">
    <div class="col-lg-3 col-md-12">
    <div class="search-title d-flex align-items-center justify-content-between">
    <p>Find Your <span>Holiday</span></p>
    <i class="flaticon-sun-umbrella"></i>
    </div>
    </div>
    <div class="col-lg-3 col-md-6">
    <div class="row table_item">
    <div class="col-lg-12 mb-3">
    <div class="form-group">
    <select class="wide">
    <option value="0">Destination</option>
    <option value="1">0</option>
    <option value="2">1</option>
    <option value="3">2</option>
    <option value="4">3</option>
    <option value="5">4</option>
    </select>
    <i class="flaticon-maps-and-flags"></i>
    </div>
    </div>
    <div class="col-lg-12">
    <div class="form-group form-icon">
    <select class="wide">
    <option value="0">Type</option>
    <option value="1">0</option>
    <option value="2">1</option>
    <option value="3">2</option>
    <option value="4">3</option>
    <option value="5">4</option>
    </select>
    <i class="flaticon-box"></i>
    </div>
    </div>
    </div>
    </div>
    <div class="col-lg-3 col-md-6">
    <div class="table_item">
    <div class="form-group mb-3">
    <div class="input-group date" id="datetimepicker1">
    <input type="text" class="form-control" value="dd-mm-yyyy" />
    <i class="flaticon-calendar"></i>
    <span class="input-group-addon">
    <i class="fa fa-calendar" aria-hidden="true"></i>
    </span>
    </div>
    </div>
    <div class="form-group form-icon">
    <div class="input-group date" id="datetimepicker2">
    <input type="text" class="form-control" value="dd-mm-yyyy" />
    <i class="flaticon-calendar"></i>
    <span class="input-group-addon">
    <i class="fa fa-calendar" aria-hidden="true"></i>
    </span>
    </div>
    </div>
    </div>
    </div>
    <div class="col-lg-3 col-md-12">
    <div class="table_item table-item-slider">
    <div class="range-slider mt-0">
    <p class="text-start mb-2">Price Range</p>
    <div data-min="0" data-max="2000" data-unit="$" data-min-name="min_price" data-max-name="max_price" class="range-slider-ui ui-slider ui-slider-horizontal ui-widget ui-widget-content ui-corner-all" aria-disabled="false">
    <span class="min-value">0 $</span>
    <span class="max-value">20000 $</span>
    <div class="ui-slider-range ui-widget-header ui-corner-all full" style="left: 0%; width: 100%"></div>
    </div>
    <div class="clearfix"></div>
    </div>
    <div class="search">
    <a href="#" class="btn-blue btn-red">SEARCH</a>
    </div>
    </div>
    </div>
    </div>
    </form>
    </div>
    </div>
    </div>
    </div>
    
    
    <section class="popular-packages">
    <div class="container">
    <div class="section-title text-center">
    <h2>Popular Packages</h2>
    <div class="section-icon">
    <i class="flaticon-diamond"></i>
    </div>
    <p>
    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.Duis aute irure dolor in
    reprehenderit..
    </p>
    </div>
    <div class="row package-slider slider-button">
    <div class="col-lg-4">
    <div class="package-item">
    <div class="package-image">
    <img src="images/package1.jpg" alt="Image" />
    <div class="package-price">
    <div class="deal-rating">
    <span class="fa fa-star checked"></span>
    <span class="fa fa-star checked"></span>
    <span class="fa fa-star checked"></span>
    <span class="fa fa-star-o"></span>
    <span class="fa fa-star-o"></span>
    </div>
    <p><span>$659</span> / PER</p>
    </div>
    </div>
    <div class="package-content">
    <h3>Surfing at Goa, India</h3>
    <p class="package-days"><i class="flaticon-time"></i> 5 days</p>
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod.</p>
    <div class="package-info">
    <a href="tour-detail.html" class="btn-blue btn-red">View more details</a>
    </div>
    </div>
    </div>
    </div>
    <div class="col-lg-4">
    <div class="package-item">
    <div class="package-image">
    <img src="images/package2.jpg" alt="Image" />
    <div class="package-price">
    <div class="deal-rating">
    <span class="fa fa-star checked"></span>
    <span class="fa fa-star checked"></span>
    <span class="fa fa-star checked"></span>
    <span class="fa fa-star-o"></span>
    <span class="fa fa-star-o"></span>
    </div>
    <p><span>$659</span> / PER</p>
    </div>
    </div>
    <div class="package-content">
    <h3>Hot Air Ballooning</h3>
    <p class="package-days"><i class="flaticon-time"></i> 5 days</p>
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod.</p>
    <div class="package-info">
    <a href="tour-detail.html" class="btn-blue btn-red">View more details</a>
    </div>
    </div>
    </div>
    </div>
    <div class="col-lg-4">
    <div class="package-item">
    <div class="package-image">
    <img src="images/package3.jpg" alt="Image" />
    <div class="package-price">
    <div class="deal-rating">
    <span class="fa fa-star checked"></span>
    <span class="fa fa-star checked"></span>
    <span class="fa fa-star checked"></span>
    <span class="fa fa-star-o"></span>
    <span class="fa fa-star-o"></span>
    </div>
    <p><span>$659</span> / PER</p>
    </div>
    </div>
    <div class="package-content">
    <h3>Lake Tohoe Advanture</h3>
    <p class="package-days"><i class="flaticon-time"></i> 5 days</p>
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod.</p>
    <div class="package-info">
    <a href="tour-detail.html" class="btn-blue btn-red">View more details</a>
    </div>
    </div>
    </div>
    </div>
    <div class="col-lg-4">
    <div class="package-item">
    <div class="package-image">
    <img src="images/package1.jpg" alt="Image" />
    <div class="package-price">
    <div class="deal-rating">
    <span class="fa fa-star checked"></span>
    <span class="fa fa-star checked"></span>
    <span class="fa fa-star checked"></span>
    <span class="fa fa-star-o"></span>
    <span class="fa fa-star-o"></span>
    </div>
    <p><span>$659</span> / PER</p>
    </div>
    </div>
    <div class="package-content">
    <h3>Surfing at Goa, India</h3>
    <p class="package-days"><i class="flaticon-time"></i> 5 days</p>
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod.</p>
    <div class="package-info">
    <a href="tour-detail.html" class="btn-blue btn-red">View more details</a>
    </div>
    </div>
    </div>
    </div>
    <div class="col-lg-4">
    <div class="package-item">
    <div class="package-image">
    <img src="images/package2.jpg" alt="Image" />
    <div class="package-price">
    <div class="deal-rating">
    <span class="fa fa-star checked"></span>
    <span class="fa fa-star checked"></span>
    <span class="fa fa-star checked"></span>
    <span class="fa fa-star-o"></span>
    <span class="fa fa-star-o"></span>
    </div>
    <p><span>$659</span> / PER</p>
    </div>
    </div>
    <div class="package-content">
    <h3>Hot Air Ballooning</h3>
    <p class="package-days"><i class="flaticon-time"></i> 5 days</p>
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod.</p>
    <div class="package-info">
    <a href="tour-detail.html" class="btn-blue btn-red">View more details</a>
    </div>
    </div>
    </div>
    </div>
    <div class="col-lg-4">
    <div class="package-item">
    <div class="package-image">
    <img src="images/package3.jpg" alt="Image" />
    <div class="package-price">
    <div class="deal-rating">
    <span class="fa fa-star checked"></span>
    <span class="fa fa-star checked"></span>
    <span class="fa fa-star checked"></span>
    <span class="fa fa-star-o"></span>
    <span class="fa fa-star-o"></span>
    </div>
    <p><span>$659</span> / PER</p>
    </div>
    </div>
    <div class="package-content">
    <h3>Lake Tohoe Adventure</h3>
    <p class="package-days"><i class="flaticon-time"></i> 5 days</p>
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod.</p>
    <div class="package-info">
    <a href="tour-detail.html" class="btn-blue btn-red">View more details</a>
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>
    </section>
    
    
    <section class="deals">
    <div class="container">
    <div class="section-title section-title-white text-center">
    <h2>Last Minute Deals</h2>
    <div class="section-icon">
    <i class="flaticon-diamond"></i>
    </div>
    <p>
    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.Duis aute irure dolor in
    reprehenderit..
    </p>
    </div>
    <div class="deals-outer">
    <div class="row deals-slider slider-button">
    <div class="col-lg-3">
    <div class="deals-item">
    <div class="deals-item-outer">
    <div class="deals-image">
    <img src="images/deal1.jpg" alt="Image" />
    <span class="deal-price">$8600</span>
    </div>
    <div class="deal-content">
    <div class="deal-rating">
    <span class="fa fa-star checked"></span>
    <span class="fa fa-star checked"></span>
    <span class="fa fa-star checked"></span>
    <span class="fa fa-star-o"></span>
    <span class="fa fa-star-o"></span>
    </div>
    <h3>Paris and Bordeaus</h3>
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod.</p>
    <a href="tour-detail.html" class="btn-blue btn-red">More Details</a>
    </div>
    </div>
    </div>
    </div>
    <div class="col-lg-3">
    <div class="deals-item">
    <div class="deals-item-outer">
    <div class="deals-image">
    <img src="images/deal2.jpg" alt="Image" />
    <span class="deal-price">$8600</span>
    </div>
    <div class="deal-content">
    <div class="deal-rating">
    <span class="fa fa-star checked"></span>
    <span class="fa fa-star checked"></span>
    <span class="fa fa-star checked"></span>
    <span class="fa fa-star-o"></span>
    <span class="fa fa-star-o"></span>
    </div>
    <h3>Paris and Bordeaus</h3>
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod.</p>
    <a href="tour-detail.html" class="btn-blue btn-red">More Details</a>
    </div>
    </div>
    </div>
    </div>
    <div class="col-lg-3">
    <div class="deals-item">
    <div class="deals-item-outer">
    <div class="deals-image">
    <img src="images/deal3.jpg" alt="Image" />
    <span class="deal-price">$8600</span>
    </div>
    <div class="deal-content">
    <div class="deal-rating">
    <span class="fa fa-star checked"></span>
    <span class="fa fa-star checked"></span>
    <span class="fa fa-star checked"></span>
    <span class="fa fa-star-o"></span>
    <span class="fa fa-star-o"></span>
    </div>
    <h3>Paris and Bordeaus</h3>
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod.</p>
    <a href="tour-detail.html" class="btn-blue btn-red">More Details</a>
    </div>
    </div>
    </div>
    </div>
    <div class="col-lg-3">
    <div class="deals-item">
    <div class="deals-item-outer">
    <div class="deals-image">
    <img src="images/deal4.jpg" alt="Image" />
    <span class="deal-price">$8600</span>
    </div>
    <div class="deal-content">
    <div class="deal-rating">
    <span class="fa fa-star checked"></span>
    <span class="fa fa-star checked"></span>
    <span class="fa fa-star checked"></span>
    <span class="fa fa-star-o"></span>
    <span class="fa fa-star-o"></span>
    </div>
    <h3>Paris and Bordeaus</h3>
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod.</p>
    <a href="tour-detail.html" class="btn-blue btn-red">More Details</a>
    </div>
    </div>
    </div>
    </div>
    <div class="col-lg-3">
    <div class="deals-item">
    <div class="deals-item-outer">
    <div class="deals-image">
    <img src="images/deal2.jpg" alt="Image" />
    <span class="deal-price">$8600</span>
    </div>
    <div class="deal-content">
    <div class="deal-rating">
    <span class="fa fa-star checked"></span>
    <span class="fa fa-star checked"></span>
    <span class="fa fa-star checked"></span>
    <span class="fa fa-star-o"></span>
    <span class="fa fa-star-o"></span>
    </div>
    <h3>Paris and Bordeaus</h3>
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod.</p>
    <a href="tour-detail.html" class="btn-blue btn-red">More Details</a>
    </div>
    </div>
    </div>
    </div>
    <div class="col-lg-3">
    <div class="deals-item">
    <div class="deals-item-outer">
    <div class="deals-image">
    <img src="images/deal1.jpg" alt="Image" />
    <span class="deal-price">$8600</span>
    </div>
    <div class="deal-content">
    <div class="deal-rating">
    <span class="fa fa-star checked"></span>
    <span class="fa fa-star checked"></span>
    <span class="fa fa-star checked"></span>
    <span class="fa fa-star-o"></span>
    <span class="fa fa-star-o"></span>
    </div>
    <h3>Paris and Bordeaus</h3>
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod.</p>
    <a href="tour-detail.html" class="btn-blue btn-red">More Details</a>
    </div>
    </div>
    </div>
    </div>
    <div class="col-lg-3">
    <div class="deals-item">
    <div class="deals-item-outer">
    <div class="deals-image">
    <img src="images/deal4.jpg" alt="Image" />
    <span class="deal-price">$8600</span>
    </div>
    <div class="deal-content">
    <div class="deal-rating">
    <span class="fa fa-star checked"></span>
    <span class="fa fa-star checked"></span>
    <span class="fa fa-star checked"></span>
    <span class="fa fa-star-o"></span>
    <span class="fa fa-star-o"></span>
    </div>
    <h3>Paris and Bordeaus</h3>
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod.</p>
    <a href="tour-detail.html" class="btn-blue btn-red">More Details</a>
    </div>
    </div>
    </div>
    </div>
    <div class="col-lg-3">
    <div class="deals-item">
    <div class="deals-item-outer">
    <div class="deals-image">
    <img src="images/deal3.jpg" alt="Image" />
    <span class="deal-price">$8600</span>
    </div>
    <div class="deal-content">
    <div class="deal-rating">
    <span class="fa fa-star checked"></span>
    <span class="fa fa-star checked"></span>
    <span class="fa fa-star checked"></span>
    <span class="fa fa-star-o"></span>
    <span class="fa fa-star-o"></span>
    </div>
    <h3>Paris and Bordeaus</h3>
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod.</p>
    <a href="tour-detail.html" class="btn-blue btn-red">More Details</a>
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>
    <div class="section-overlay"></div>
    </section>
    
    
    
    <section class="top-destinations">
    <div class="container">
    <div class="section-title text-center">
    <h2>Top Destinations</h2>
    <div class="section-icon">
    <i class="flaticon-diamond"></i>
    </div>
    <p>
    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.Duis aute irure dolor in
    reprehenderit..
    </p>
    </div>
    <div class="row">
    <div class="col-lg-4 col-md-4">
    <div class="top-destination-item">
    <img class="img-responsive" src="images/deal1.jpg" alt="Image" />
    <div class="overlay">
    <h2><a href="tour-detail.html">Bahamas</a></h2>
    <p>Plan Your Tour to Bahamas With Us.</p>
    </div>
    </div>
    <div class="top-destination-item">
    <img class="img-responsive" src="images/deal2.jpg" alt="Image" />
    <div class="overlay">
    <h2><a href="tour-detail.html">Italy</a></h2>
    <p>Plan Your Tour to Bahamas With Us.</p>
    </div>
    </div>
    </div>
    <div class="col-lg-4 col-md-4">
    <div class="top-destination-item destination-margin">
    <img class="img-responsive" src="images/deal5.jpg" alt="Image" />
    <div class="overlay overlay-full">
    <h2><a href="tour-detail.html">Egypt</a></h2>
    <p>Plan Your Tour to Bahamas With Us.</p>
    </div>
    </div>
    </div>
    <div class="col-lg-4 col-md-4">
    <div class="top-destination-item">
    <img class="img-responsive" src="images/deal3.jpg" alt="Image" />
    <div class="overlay">
    <h2><a href="tour-detail.html">Nepal</a></h2>
    <p>Plan Your Tour to Bahamas With Us.</p>
    </div>
    </div>
    <div class="top-destination-item">
    <img class="img-responsive" src="images/deal4.jpg" alt="Image" />
    <div class="overlay">
    <h2><a href="tour-detail.html">Thailand</a></h2>
    <p>Plan Your Tour to Bahamas With Us.</p>
    </div>
    </div>
    </div>
    </div>
    </div>
    </section>
    
    
    <section class="trip-ad">
    <div class="container">
    <div class="row">
    <div class="col-lg-6">
    <div class="trip-ad-content">
    <div class="ad-title">
    <h2>Explore The <span>Thailand Trip</span></h2>
    </div>
    <p>
    Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismody tincidunt ut laoreet dolore magna aliquam erat
    volutpat. Ut wisi enim adi minim veniam, qu nostrud exerci tation dolore magna aliquam erat volutpat.
    </p>
    <p>
    Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismody tincidunt ut laoreet dolore magna aliquam erat
    volutpat. Ut wisi enim adi minim veniam, qu nostrud exerci tation dolore magna aliquam erat volutpat.
    </p>
    <div class="trip-ad-btn">
    <a href="tour-detail.html" class="btn-blue btn-red">BOOK NOW</a>
    </div>
    </div>
    </div>
    <div class="col-lg-6">
    <div class="ad-price">
    <div class="ad-price-inner">
    <span>Starting at <span class="rate">$300</span></span>
    </div>
    </div>
    </div>
    </div>
    </div>
    </section>
    
    
    
    

    
    <section class="countdown-section">
    <div class="container">
    <div class="countdown-title">
    <h2>Special Tour in May, Discover <span>Thailand</span> for 50 Customers with <span>Discount 30%</span></h2>
    <p>It’s limited seating! Hurry up</p>
    </div>
    <div class="countdown countdown-container">
    <p id="demo"></p>
    </div>
    
    </div>
    <div class="testimonial-overlay"></div>
    </section>
    
    
   
    
    <section class="trusted-partners">
    <div class="container">
    <div class="row">
    <div class="col-lg-3 col-md-4">
    <div class="partners-title">
    <h3>Our <span>Partners</span></h3>
    </div>
    </div>
    <div class="col-lg-9 col-md-8">
    <ul class="partners-logo partners-slider">
    <li>
    <a href="#"><img src="images/partner1.png" alt="Image" /></a>
    </li>
    <li>
    <a href="#"><img src="images/partner2.png" alt="Image" /></a>
    </li>
    <li>
    <a href="#"><img src="images/partner3.png" alt="Image" /></a>
    </li>
    <li>
    <a href="#"><img src="images/partner4.png" alt="Image" /></a>
    </li>
    <li>
    <a href="#"><img src="images/partner5.png" alt="Image" /></a>
    </li>
    <li>
    <a href="#"><img src="images/partner6.png" alt="Image" /></a>
    </li>
    <li>
    <a href="#"><img src="images/partner1.png" alt="Image" /></a>
    </li>
    <li>
    <a href="#"><img src="images/partner2.png" alt="Image" /></a>
    </li>
    <li>
    <a href="#"><img src="images/partner3.png" alt="Image" /></a>
    </li>
    <li>
    <a href="#"><img src="images/partner4.png" alt="Image" /></a>
    </li>
    <li>
    <a href="#"><img src="images/partner5.png" alt="Image" /></a>
    </li>
    <li>
    <a href="#"><img src="images/partner6.png" alt="Image" /></a>
    </li>
    </ul>
    </div>
    </div>
    </div>
    </section>
    
@endsection