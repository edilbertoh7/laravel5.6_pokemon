@extends('layouts.app')

@section('title','Trainer edit')
	{{-- expr --}}
	@section('content')
	<img  src=" /images/{{  $trainer->avatar }} " class="card-img-top rounded-circle mx-auto d-block imagenpokemon2" alt="...">

	{!! form::model($trainer,['route'=>['trainers.update',$trainer],'method'=>'PUT','files'=>'true']) !!}
	@include('trainers.form')
	{!! form::submit('ACTUALIZAR',['class'=>'btn btn-primary']) !!}
	{!! form::close() !!}


{{-- formulario usandoohtml
	<form method="POST" action="/trainers/{{$trainer->slug}}" enctype="multipart/form-data">
		@method('PUT')
		@csrf

	<div class="form-group">
		<img  src=" /images/{{  $trainer->avatar }} " class="card-img-top rounded-circle mx-auto d-block imagenpokemon2" alt="...">
			<label>Nombre</label>
			<input type="text" name="name" value=" {{ $trainer->name }} " class="form-control">
			<label for="" >Avatar</label>
			<input type="file" name="avatar" >
		</div>
		<button type="submit" class="btn btn-primary">Actualizar</button>
</form> --}}
@endsection
