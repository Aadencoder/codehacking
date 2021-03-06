@extends('layouts.admin')

@section('content')

	<h1>Create users</h1>

	@include('includes.form_error')

		{!! Form::open(['method'=>'post', 'action'=>'AdminUsersController@store', 'files'=>true]) !!}
	
			<div class="form-group">
				{!! Form::label('name', 'Name : ') !!}
				{!! Form::text('name', null, ['class'=>'form-control']) !!}
			</div>

			<div class="form-group">
				{!! Form::label('email', 'Email : ') !!}
				{!! Form::email('email', null, ['class'=>'form-control']) !!}
			</div>

			<div class="form-group">
				{!! Form::label('role_id', 'Role : ') !!}
				{!! Form::select('role_id', $roles, null, ['class'=>'form-control']) !!}
			</div>

			<div class="form-group">
				{!! Form::label('is_active', 'Status : ') !!}
				{!! Form::select('is_active', array(1=>'Active', 0=>'Not Active'), 0, ['class'=>'form-control']) !!}
			</div>
			
			<div class="form-group">
				{!! Form::label('file', 'File :') !!}
				{!! Form::file('photo_id', null, ['class'=>'form-control']) !!}
			</div>

			<div class="form-group">
				{!! Form::label('passowrd', 'Password') !!}
				{!! Form::password('password', ['class'=>'form-control']) !!}
			</div>

	
			<div class="form-group">
				{!! Form::submit('Create User', ['class'=>'btn btn-primary']) !!}
			</div>
	
		{!! Form::close() !!}
	
	


@endsection