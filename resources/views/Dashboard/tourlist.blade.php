@extends('Layouts.dashlayout')
@section('dashtitle')

List
    
@endsection

@section('dashcontent')

<div class="dashboard-content">
<div class="row">
<div class="col-lg-12 col-sm-12">
<div class="dashboard-list-box dash-list margin-top-0">
<div class="row">

@foreach($list as $l)
<div class="col-sm-4">
<div class="list-box-listing">
<div class="list-box-listing-img">
<a href="#"><img src="images/blog1.jpg" alt></a>
</div>
<div class="list-box-listing-content">
<div class="inner">
<a href="dashboard-listdetail.html"><h3>{{$l->Listing_title}}</h3></a>
<span>{{$l->City}}</span>
<div class="star-rating" data-rating="5.0">
<div class="rating-counter">{{$l->Email}}</div>


</div>
<p>{{$l->Description}}</p>
</div>
<a href="#" class="button gray"><i class="sl sl-icon-pencil"></i> Edit</a>
<a href="#" class="button gray"><i class="sl sl-icon-close"></i> Delete</a>
</div>
</div>
</div>

@endforeach


<div class="clearfix"></div>
<div class="col-sm-12 pagination-container">
<nav class="pagination">
<ul>
<li><a href="#"><i class="sl sl-icon-arrow-left"></i></a></li>
<li><a href="#" class="current-page">1</a></li>
<li><a href="#">2</a></li>
<li><a href="#"><i class="sl sl-icon-arrow-right"></i></a></li>
</ul>
</nav>
</div>

</div>
</div>
</div>
</div>
</div>

@endsection