@extends('layouts.admin')

@section('content')

	<h1>Create Posts</h1>

	@include('includes.form_error')


	{!! Form::open(['method'=>'post', 'action'=>'AdminPostsController@store', 'files'=>true]) !!}
	
			<div class="form-group">
				{!! Form::label('title', 'Title : ') !!}
				{!! Form::text('title', null, ['class'=>'form-control']) !!}
			</div>
			
			<div class="form-group">
				{!! Form::label('category_id', 'Category : ') !!}
				{!! Form::select('category_id',[''=>'Choose category'] + $categories, null, ['class'=>'form-control']) !!}
			</div>
			
			<div class="form-group">
				{!! Form::label('photo_id', 'Picture : ') !!}
				{!! Form::file('photo_id') !!}
			</div>
			
			<div class="form-group">
				{!! Form::label('body', 'Description : ') !!}
				{!! Form::textarea('body', null, ['class'=>'form-control', 'rows'=>8]) !!}
			</div>
	
			<div class="form-group">
				{!! Form::submit('Create User', ['class'=>'btn btn-primary']) !!}
			</div>
	
		{!! Form::close() !!}
		
@endsection
