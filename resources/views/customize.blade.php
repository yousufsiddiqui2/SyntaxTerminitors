@extends('Layouts.indexlayout')
@section('Title')
    Customize
@endsection

@section('content')

<section class="breadcrumb-outer text-center">
    <div class="container">
    <div class="breadcrumb-content">
    <h2>Customize</h2>
    
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
   
    <form action="/insertcustomize" method="post" name="contactform">
        @csrf
    <div class="row">
    <div class="form-group mb-3 col-lg-6">
    <label>What is your desired destination(s)? </label>
    <input type="text" name="destination" class="form-control" id="Name" placeholder="Enter full name" required />
    </div>
    <div class="form-group mb-3 col-lg-6">
        <label>Total Number of Days: </label>
        <input type="number" name="days" class="form-control" id="Name" placeholder="Enter full name" required />
        </div>
        <div class="form-group mb-3 col-lg-6">
            <label>Starting Date of Trip: </label>
            <input type="date" name="start_date" class="form-control" id="Name" placeholder="Enter full name" required />
            </div>
            <div class="form-group mb-3 col-lg-6">
                <label>Ending Date of Trip: </label>
                <input type="date" name="end_date" class="form-control" id="Name" placeholder="Enter full name" required />
                </div>
                <div class="form-group mb-3 col-lg-6">
                    <label>Total Number of Persons: </label>
                    <input type="number" name="total_persons" class="form-control" id="Name" placeholder="Enter full name" required />
                    </div>
                    <div class="form-group mb-3 col-lg-3">
                        <label>Adults(12+ years): </label>
                        <input type="number" name="adults" class="form-control" id="Name" placeholder="Enter full name" required />
                        </div>
                        <div class="form-group mb-3 col-lg-3">
                            <label>Children(0-12 years): </label>
                            <input type="number" name="children" class="form-control" id="Name" placeholder="Enter full name" required />
                            </div>
                            <div class="form-group mb-3 col-lg-6">
                                <label>Total Number of Rooms required:  </label>
                                <input type="text" name="totalrooms" class="form-control" id="Name" placeholder="Enter full name" required />
                                </div>
                                <div class="form-group mb-3 col-lg-6">
                                    <label>Departure Location:  </label>
                                    <input type="text" name="departure_location" class="form-control" id="Name" placeholder="Enter full name" required />
                                    </div>
<div class="form-group mb-3 col-lg-6 col-md-6">
<label>Travel Mode: </label>
<select class="wide" name="travelmode">
<option value="male">By Air</option>
<option value="female">By Road</option>
<option value="other">Both</option>
</select>
</div>
<div class="form-group mb-3 col-lg-6 col-md-6 ps-md-0">
<label>Which vehicle would you prefer?</label>
<select class="wide" name="vehicle">
<option value="american">American</option>
<option value="opel">Malaysian</option>
<option value="audi">German</option>
</select>
</div>
<div class="form-group mb-3 col-md-4">
    <label>Do you need a Tour Guide? </label>
    <select class="wide" name="tour_guide">
    <option value="male">Yes</option>
    <option value="female">No</option>
    </select>
    </div>
    
    <div class="form-group mb-3 col-md-6">
        <label>What kind of services do you need? (Trip Budget)</label>
        <select class="wide" name="services">
        <option value="american">Standard</option>
        <option value="opel">Deluxe</option>
        <option value="audi">Executive</option>
        </select>
        </div> 
        <div class="form-group mb-3 col-md-2 ps-md-0">
            <label>Group Category:</label>
            <select class="wide" name="group_category">
            <option value="american">Couple</option>
            <option value="opel">Family</option>
            <option value="audi">Corporate</option>
            <option value="audi">Students/Friends</option>
            </select>
            </div>   
    <div class="textarea mb-3 col-lg-12">
    <label>Do you have any specific requirements? If yes, then mention below.</label>
    <textarea name="requirements" placeholder="Enter a message" required></textarea>
    </div>

    <div class="container">
        <div class="breadcrumb-content">
        <h2>Contact Detials:</h2>
        
        </div>
        </div>
        <div class="form-group mb-3 col-lg-12">
            <label>Name:</label>
            <input type="text" name="full_name" class="form-control" id="Name" placeholder="Enter full name" required />
            </div>
            <div class="form-group mb-3 col-lg-12">
            <label>Email:</label>
            <input type="email" name="email_Address" class="form-control" id="email" placeholder="abc@xyz.com" required />
            </div>
            <div class="form-group mb-3 col-lg-12">
            <label>Phone Number:</label>
            <input type="text" name="whatsApp_number" class="form-control" id="phnumber" placeholder="XXXX-XXXXXX" required />
            </div>
            
    <div class="col-lg-12">
    <div class="comment-btn">
    <input type="submit" class="btn-blue btn-red" id="submit" value="Make my trip"/>
    
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