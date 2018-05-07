@extends('admin.layouts.app')
@if(isset($user))
	@section('title','Update')
@else
	@section('title','Create')
@endif
@section('content')
	<h1>@php
			echo isset($user) ? "Update" : "Create New";
		@endphp
		User</h1>
	<form @php
			  echo isset($user) ? 'action="/user/' . $user->id . '"' :
			  'action="/user"'
		  @endphp
		  method="POST">
		@if(isset($user))
			<input type="hidden" name="_method" value="PUT">
		@endif
		{{csrf_field()}}
		<div class="form-row">
			<div class="form-group col-6 d-flex flex-row">
				<label for="name" class="col-3 col-form-label">Name : </label>
				<div class="col-9">
					<input type="text" id="name" class="form-control"
						   name="name" placeholder="Name"
						   @if(isset($user))
						   value="{{$user->name}}"
							@endif>
				</div>
			</div>
			<div class="form-group col-6 d-flex flex-row">
				<label for="email" class="col-3 col-form-label">Email : </label>
				<div class="col-9">
					<input type="text" id="email"
						   name="email" class="form-control"
						   @if(isset($user))
						   value="{{$user->email}}"
							@endif>
				</div>
			</div>
		</div>
		<div class="form-row">
			<div class="form-group col-6 d-flex flex-row">
				<label for="dob" class="col-3 col-form-label">Day Of Birth :
				</label>
				<div class="col-9">
					<input type="date" id="dob"
						   name="dob" class="form-control"
						   @if(isset($user))
						   value="{{$user->dob}}"
							@endif>
				</div>
			</div>
			<div class="form-group col-6 d-flex flex-row">
				<label for="address" class="col-3 col-form-label">Address :
				</label>
				<div class="col-9">
					<input type="text" id="address"
						   name="address" class="form-control"
						   @if(isset($user))
						   value="{{$user->address}}"
							@endif>
				</div>
			</div>
		</div>
		<div class="form-row">
			<div class="form-group col-6 d-flex flex-row">
				<label for="phone" class="col-3 col-form-label">Phone :
				</label>
				<div class="col-9">
					<input type="text" id="phone"
						   name="phone" class="form-control"
						   @if(isset($user))
						   value="{{$user->phone}}"
							@endif>
				</div>
			</div>
			<div class="form-group col-6 d-flex flex-row">
				<label for="password" class="col-3 col-form-label">Password :
				</label>
				<div class="col-9">
					<input type="password" id="password"
						   name="password" class="form-control">
				</div>
			</div>
		</div>
		<div class="form-row d-flex justify-content-center mb-2">
			<button type="submit" class="btn btn-primary">
				@if(isset($user))
					Update
				@else
					Create
				@endif
			</button>
		</div>
	</form>
@endsection