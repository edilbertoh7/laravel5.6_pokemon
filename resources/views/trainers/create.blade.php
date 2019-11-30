@extends('layouts.app')

@section('title','Trainers Create')
	@section('content')
	 	@include('trainers.fragments.errors')
		{!! form::open(['route'=>'trainers.store','method'=>'POST','files'=>'true']) !!}

	@include('trainers.form')

	{!! form::submit('GUARDAR',['class'=>'btn btn-primary']) !!}
	{!! form::close() !!}

{{-- 	formulario hecho en html
	<form method="POST" action="/trainers" enctype="multipart/form-data">
		@csrf

	<div class="form-group">
			<label>Nombre</label>
			<input type="text" name="name" class="form-control">
			<label for="" >Avatar</label>
			<input type="file" name="avatar" >
		</div>
		<button type="submit" class="btn btn-primary">GUARDAR</button>
</form> --}}
@endsection
