<?php

namespace edy\Http\Controllers;

use Illuminate\Http\Request;
use edy\Pokemon;
use edy\Trainer;
class PokemonsController extends Controller
{
  public function index(Trainer $trainer, Request $request)
  {
  	/*si el $request esta siendo enviado por ajaX
  	 enviamos los datos por un json para recibirlos por axios*/
  	if ($request->ajax()) {
  	//	$pokemon =Pokemon::all();
  		return response()->json($trainer->pokemons,200);
  	}
  	return view('pokemons.index');
  }


  public function store(Trainer $trainer, Request $request)
  {
  	if ($request->ajax()) {
  		$pokemon = new Pokemon();
  		$pokemon->name = $request->input('name');
  		$pokemon->picture = $request->input('picture');
      /*la siguiente linea trae los trainers asociados a un pokemon*/
      $pokemon->trainer()->associate($trainer)->save();
  		// $pokemon->save();
  		return response()->json([
  			"message"=>"Pokemon creado correctamente",
  			//ahora se envia la informacion del nuevo poquemon
  			"pokemon"=>$pokemon
  		],200);
  	}
  }
}
