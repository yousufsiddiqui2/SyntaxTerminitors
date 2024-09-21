@extends('Layouts.dashlayout')
@section('dashtitle')

Customize Manage
    
@endsection

@section('dashcontent')
<div class="dashboard-content">
<div class="row">

<div class="col-lg-12 col-sm-12">
<div id="add-listing">

<div class="add-listing-section">

<div class="add-listing-headline">
    <form action="/adtour" method="post"  enctype="multipart/form-data">
        @csrf
<h3><i class="sl sl-icon-doc"></i> Basic Informations</h3>
</div>

<div class="row with-forms">
<div class="col-md-12">
<label>Listing Title <i class="tip" data-tip-content="Name of your business"></i></label>
<input class="search-field" type="text" name="list_title">
</div>
</div>

<div class="row with-forms">

<div class="col-md-6">
<label>Category</label>
<select class="wide" name="category">
<option label="blank">Select Category</option>
<option>Eat & Drink</option>
<option>Shops</option>
<option>Hotels</option>
<option>Restaurants</option>
<option>Fitness</option>
<option>Events</option>
</select>
</div>

<div class="col-md-6">
<label>Keywords <i class="tip" data-tip-content="Maximum of 15 keywords related with your business"></i></label>
<input type="text" placeholder="Keywords should be separated by commas" name="?">
</div>
</div>

</div>


<div class="add-listing-section">

<div class="add-listing-headline">
<h3><i class="sl sl-icon-map"></i> Location</h3>
</div>
<div class="submit-section">

<div class="row with-forms">

<div class="col-md-6">
<label>City</label>
<select class="wide" name="city">
<option label="blank">Select City</option>
<option>New York</option>
<option>Los Angeles</option>
<option>Chicago</option>
<option>Houston</option>
<option>Phoenix</option>
<option>San Diego</option>
<option>Austin</option>
</select>
</div>

<div class="col-md-6">
<label>Address</label>
<input type="text" placeholder="e.g. 964 School Street"  name="address">
</div>

<div class="col-md-6">
<label>State</label>
<input type="text" name="state">
</div>

<div class="col-md-6">
<label>Zip-Code</label>
<input type="text"name="zipcode">
</div>
</div>

</div>
</div>


<div class="add-listing-section">

<div class="add-listing-headline">
<h3><i class="sl sl-icon-picture"></i> Gallery</h3>
</div>

<div class="submit-section">
<input type="file" name="gallery">
</div>
</div>


<div class="add-listing-section">

<div class="add-listing-headline">
<h3><i class="sl sl-icon-docs"></i> Details</h3>
</div>

<div class="form">
<label>Description</label>
<textarea class="WYSIWYG" name="description" cols="40" rows="3" id="summary" spellcheck="true" name="description"></textarea>


</div>

<div class="row with-forms">

<div class="col-md-4">
<label>Phone <span>(optional)</span></label>
<input type="text" name="phone">
</div>

<div class="col-md-4">
<label>Website <span>(optional)</span></label>
<input type="text" name="website">
</div>

<div class="col-md-4">
<label>E-mail <span>(optional)</span></label>
<input type="text"name="email">
</div>
</div>
<div class="add-listing-section">

<div class="add-listing-headline">
<h3><i class="sl sl-icon-book-open"></i> Pricing</h3>

<label class="switch"><input type="checkbox" checked /><span class="slider round"></span></label>
</div>

<div class="switcher-content">
<div class="row">
<div class="col-md-12">
<table id="pricing-list-container">
<tr class="pricing-list-item pattern">
<td>
<div class="fm-move"><i class="sl sl-icon-cursor-move"></i></div>
<div class="fm-input pricing-name">
    <input type="text" placeholder="Title" name="title_price"></div>
<div class="fm-input pricing-ingredients">
    <input type="text" placeholder="Description"name="title_description"></div>
    <div class="fm-input pricing-price">
    <input type="text" placeholder="Price" data-unit="USD"name="price"></div>
<div class="fm-close">
<a class="delete" href="#"><i class="fa fa-remove"></i></a>
</div>
</td>
</tr>
</table>
<button class="btn-blue btn-red mt-5 " id="submit" type="submit">Add Item</a></button>
</div>
</div>
</div>

</div>

</div>
</div>
</div>
</div>
</form>

@endsection