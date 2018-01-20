<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BienvenidaUsuarioController extends Controller
{
    
    public function __invoke($name,$nickname=null)
    {

    	$name = ucfirst($name);

    	return view('usuarios.bienvenida', compact('name', 'nickname'));
    }
}
