@extends('layouts.app')
@section('content')
<modal-button class="top-space"></modal-button>
<list-of-pokemons></list-of-pokemons>
<add-pokemon-trainer></add-pokemon-trainer>
<style>
	.top-space{
		margin-top:20px
	}
</style>
@endsection