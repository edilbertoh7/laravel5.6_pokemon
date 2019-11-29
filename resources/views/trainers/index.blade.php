
@extends('layouts.app')
 @section('title','Trainers')
 	 @section('content')
 	 <div class="row">
 	 	@foreach ($trainers as $trainer)
 	 	<div class="col-sm">
 	 		<br>
 	 		<div class="card text-center" style="width: 18rem; margin-top: 40px">
 	 				<img  src=" images/{{  $trainer->avatar }} " class="card-img-top rounded-circle mx-auto d-block imagenpokemon" alt="...">
 	 			<div class="card-body">
 	 				<div class="card-body">
 	 					<h5 class="card-title">{{ $trainer->name }}</h5>
 	 					<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
 	 					<a href="/trainers/{{ $trainer->id }}" class="btn btn-primary">Ver más</a>
 	 				</div>
 	 			</div>
 	 		</div>
 	 	</div>
 	 	@endforeach
 	 </div>
 @endsection