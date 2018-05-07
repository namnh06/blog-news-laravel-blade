@extends('admin.layouts.app')
@section('title','User Home')
@section('content')
<table class="table table-striped table-hover">
<thead>
<tr>
<th>#</th>
<th>Name</th>
<th>Email</th>
<th>DOB</th>
<th>Action</th>
</tr>
</thead>
<tbody>
@foreach($users as $user)
<tr>
<td>{{$user->id}}</td>
<td>{{$user->name}}</td>
<td>{{$user->email}}</td>
<td>{{$user->dob}}</td>
<td class="d-flex flex-row">
<form action="user/{{$user->id}}" method="GET">
<button type="submit" class="btn btn-sm btn-outline-success">More</button>
</form>
&nbsp;|&nbsp;
<form action="/user/{{$user->id}}/edit" method="GET">
<button type="submit" class="btn btn-sm btn-outline-warning">Edit</button>
</form>
&nbsp;|&nbsp;
<form action="/user/{{$user->id}}" method="POST">
<input type="hidden" name="_method" value="DELETE">
<input type="hidden" name="_token" value="{{csrf_token()}}">
<button type="submit" class="btn btn-sm btn-outline-danger">Delete</button> 
</form></td>
</tr>
@endforeach
</tbody>
</table>
@endsection
