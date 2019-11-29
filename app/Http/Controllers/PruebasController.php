<?php

namespace edy\Http\Controllers;

use Illuminate\Http\Request;
use edy\Http\Controllers\Controller;

class PruebasController extends Controller
{
    public function prueba($param)
    {
    	return 'estoy en el controlador y recibi este parametro '.$param ;
    }
}
