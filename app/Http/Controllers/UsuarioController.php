<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UsuarioController extends Controller
{
    
    public function index()
    {

        if (request()->has('empty')) {
            $users = [];
        }
        else {
            $users = [
                'Joel',
                'Ellie',
                'Tess',
                'Tommy',
                'Bill'
            ];
        }

        $title = 'Listado de usuarios';
/*
    	return view('usuarios', [
            'users' => $users,
            'title' => $title
        ]);

        return view('usuarios')->with([
            'users' => $users,
            'title' => $title
        ]);

        return view('usuarios')
            ->with('users', $users)
            ->with('title', $title);
*/
        return view('usuarios.index', compact('title', 'users'));           
    }

    public function mostrar($id)
    {

    	return view('usuarios.mostrar', [
            'id' => $id
        ]);

    }

    public function crear()
    {

    	return view('usuarios.nuevo');
    	
    }
}
