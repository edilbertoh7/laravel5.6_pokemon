
@extends('layouts.app')
 @section('titel','Trainers')
 	 @section('content')
 	 	@include('trainers.fragments.info')
 	<img  src=" /images/{{  $trainer->avatar }} " class="card-img-top rounded-circle mx-auto d-block imagenpokemon2" alt="...">
 	<div class="text-center">
 		<h5 class="card-title"> {{ $trainer->name }} </h5>
 		<h3> {{ $trainer->slug }} </h3>
 		<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's contentSome quick example text to build on the card title and make up the bulk of the card's content.</p>
 	 {!! form::open(['route'=>['trainers.destroy',$trainer->slug],'method'=>'DELETE']) !!}
 	<a href="/trainers/{{ $trainer->slug }}/edit" class="btn btn-primary">Editar</a>
 	 {!! form::submit('Eliminar',['class'=> 'btn btn-danger']) !!}
 	<modal-button></modal-button>
   <add-pokemon-trainer></add-pokemon-trainer>
   <list-of-pokemons></list-of-pokemons>
 	 {!! form::close() !!}
 	</div>
 @endsection