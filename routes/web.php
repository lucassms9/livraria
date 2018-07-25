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


Route::get('/', 'Auth\LoginController@login')->name('login');


Route::group([] , function () {
// Route::group(['middleware' => 'auth'], function () {

Route::post('/livros/store', 'LivrosController@store');
Route::get('/livros/edit/{id}', 'LivrosController@edit');
Route::put('/livros/update/{id}', 'LivrosController@update');
Route::get('/livros/destroy/{id}', 'LivrosController@destroy');

Route::resource('livros', 'LivrosController');
Route::get('usuarios/emailConfirmacao/{id}', 'UsuariosController@emailConfirmacao');
Route::get('usuarios/ativarConta/{id}', 'UsuariosController@ativarConta');

Route::resource('usuarios', 'UsuariosController');
});

Route::get('login', 'Auth\LoginController@login')->name('login');
Route::post('login/credenciais', 'Auth\LoginController@credenciais')->name('credenciais');

Route::get('/home', 'HomeController@index')->name('home');
