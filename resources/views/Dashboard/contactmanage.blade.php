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
<th>Name</th>
<th>Email</th>
<th>Phone</th>
<th>Message</th>
<th>Time</th>



<th class="textright">Action</th>
</tr>
</thead>
<tbody>
    @foreach($contact as $c)
<tr>
<td>{{$c->id}}</td>
<td>{{$c->conatcname}}</td>
<td>{{$c->contactemail}}</td>
<td>{{$c->contactphone}}</td>
<td>{{$c->contactmessage}}</td>
<td>{{$c->created_at}}</td>

<td class="textright">
<div class="dropdown">
<button class="button gray " type="button" >
<a style="color: white;" href="/cdelete/{{$c->id}}">Delete</a>
<i class="fa fa-delete" aria-hidden="true"></i>
</button>

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