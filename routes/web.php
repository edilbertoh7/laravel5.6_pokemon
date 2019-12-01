<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
// Route::get('/prueba/{name}','PruebasController@prueba');
Route::resource('trainers','TrainerController');
//Route::post('/trainers','TrainerController@store');
//Route::resource('pokemons','PokemonsController');

Route::get('trainers/{trainer}/pokemons','PokemonsController@index');

Route::post('trainers/{trainer}/pokemons','PokemonsController@store');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
