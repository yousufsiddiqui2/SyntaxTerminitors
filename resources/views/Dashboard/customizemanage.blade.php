@extends('Layouts.dashlayout')
@section('dashtitle')

Customize Manage
    
@endsection

@section('dashcontent')
<div class="dashboard-content">
<div class="row">

<div class="col-lg-12 col-md-12">
<div class="dashboard-list-box">
<h4 class="gray">History</h4>
<div class="table-box">
<table class="basic-table booking-table">
<thead>
<tr>
<th>Id</th>
<th>Destination</th>
<th>Days</th>
<th>Start Date</th>
<th>End Date</th>
<th>Travel Mode</th>
<th>Vehicle</th>
<th>Total Persons</th>
<th>Adults</th>
<th>Children</th>
<th>Totalrooms</th>
<th>Departure Location</th>
<th>Tour Guide</th>
<th>Group Category</th>
<th>Services</th>
<th>Requirements</th>
<th>Full Name</th>
<th>Email Address</th>
<th>WhatsApp Number</th>
<th>Created at</th>

<th class="textright">Action</th>
</tr>
</thead>
<tbody>
    @foreach($customizefetch as $cf)
<tr>
<td>{{$cf->id}}</td>
<td>{{$cf->Destination}}</td>
<td>{{$cf->Days}}</td>
<td>{{$cf->Start_date}}</td>
<td>{{$cf->End_date}}</td>
<td>{{$cf->Travelmode}}</td>
<td>{{$cf->Vehicle}}</td>
<td>{{$cf->Total_persons}}</td>
<td>{{$cf->Adults}}</td>
<td>{{$cf->Children}}</td>
<td>{{$cf->Totalrooms}}</td>
<td>{{$cf->Departure_location}}</td>
<td>{{$cf->Tour_guide}}</td>
<td>{{$cf->Group_category}}</td>
<td>{{$cf->Services}}</td>
<td>{{$cf->Requirements}}</td>
<td>{{$cf->Full_name}}</td>
<td>{{$cf->Email_address}}</td>
<td>{{$cf->WhatsApp_number}}</td>
<td>{{$cf->created_at}}</td>
<td class="textright">
<div class="dropdown">
<button class="button gray dropdown-toggle" type="button" id data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
<i class="fa fa-plus" aria-hidden="true"></i>
</button>
<div class="dropdown-menu" aria-labelledby>
<a class="dropdown-item" href="#">Send Email</a>
<a class="dropdown-item" href="{{url('print_pdf',$cf->id)}}">Print PDF</a>
<a class="dropdown-item del" href="/delete/{{$cf->id}}">Delete</a>
</div>
</div>
</td>
</tr>
@endforeach

</tbody>
</table>
</div>
</div>
<div class="pagination-container">
<nav class="pagination">
<ul>
<li><a href="#" class="current-page">1</a></li>
<li><a href="#">2</a></li>
<li>
<a href="#"><i class="sl sl-icon-arrow-right"></i></a>
</li>
</ul>
</nav>
</div>
</div>
</div>
</div>

@endsection