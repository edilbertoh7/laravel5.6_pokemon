@extends('layouts.app')

@section('title','Trainers Create')
	{{-- expr --}}
	@section('content')
	<form method="POST" action="/trainers" enctype="multipart/form-data">
		@csrf

	<div class="form-group">
			<label>Nombre</label>
			<input type="text" name="name" class="form-control">
			<label for="" >Avatar</label>
			<input type="file" name="avatar" >
		</div>
		<button type="submit" class="btn btn-primary">GUARDAR</button>
</form>
@endsection
