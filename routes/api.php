<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});


Route::get('/usuarios', 'API\UsuariosController@index');
Route::post('/usuarios/store', 'API\UsuariosController@store');
Route::put('/usuarios/update/{id}', 'API\UsuariosController@update');
Route::put('/usuarios/destroy/{id}', 'API\UsuariosController@destroy');
Route::get('/usuarios/verificaEmail/{token}', 'API\UsuariosController@verify');



Route::get('/livros', 'API\LivrosController@index');
Route::post('/livros/store', 'API\LivrosController@store');
Route::put('/livros/update/{id}', 'API\LivrosController@update');
Route::put('/livros/destroy/{id}', 'API\LivrosController@destroy');

