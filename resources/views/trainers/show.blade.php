
@extends('layouts.app')
 @section('titel','Trainers')
 	 @section('content')
 	<img  src=" /images/{{  $trainer->avatar }} " class="card-img-top rounded-circle mx-auto d-block imagenpokemon2" alt="...">
 	<div class="text-center">
 		<h5 class="card-title"> {{ $trainer->name }} </h5>
 		<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's contentSome quick example text to build on the card title and make up the bulk of the card's content.</p>
 	</div>
 @endsection