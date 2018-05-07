@extends('admin.layouts.app')
@section('content')
<h1>Show User #{{$user->id}}</h1>
<p>Name : {{$user->name}}</p>
<p>Email : {{$user->email}}</p>
<p>DOB : {{$user->dob}}</p>
<p>Address : {{$user->address}}</p>
<p>Phone : {{$user->phone}}</p>
@endsection

@section('script')
var app = @json($user);
console.log(app);
@endsection