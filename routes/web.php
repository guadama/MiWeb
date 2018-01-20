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

/*
Route::get('/', function () {
    return 'welcome';
});
*/
Route::get('/usuarios', 'UsuarioController@index');

Route::get('/usuarios/{id}', 'UsuarioController@mostrar')
		->where('id','[0-9]+'); //solo numeros
//->where('id','\d+'); //solo numeros
//->where('id','\w+'); // alfanumerico

Route::get('/usuarios/nuevo', 'UsuarioController@crear');

Route::get('/saludo/{name}/{nickname?}', 'BienvenidaUsuarioController');