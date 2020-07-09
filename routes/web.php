<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {return view('Login');});
Route::post('/login', ['uses'=>'UsuarioController@login']);

Route::get('/cadastro', function () {return view('Cadastro');});
Route::post('/cadastro', ['uses'=>'UsuarioController@store']);

Route::get('/home', function () {return view('Home');});

Route::get('/reservas', ['uses'=>'ReservasController@getcards'] );
Route::post('/reservas', ['uses'=>'ReservasController@writecards'] );

Route::get('/espacosReservas', ['uses'=>'AvisoController@getcards'] );
Route::post('/espacosReservas', ['uses'=>'AvisoController@writecards'] );

Route::get('/solidariedade', ['uses'=>'SolidariedadeController@getcards'] );
Route::post('/solidariedade', ['uses'=>'SolidariedadeController@writecards'] );

Route::get('/painel', ['uses'=>'PainelController@getcards'] );
Route::post('/painel', ['uses'=>'PainelController@writecards'] );

Route::get('/eventos', ['uses'=>'EventoController@getcards'] );
Route::post('/eventos', ['uses'=>'EventoController@writecards'] );

Route::get('/avisos', ['uses'=>'AvisoController@getcards'] );
Route::post('/avisos', ['uses'=>'AvisoController@writecards'] );

Route::get('/file/img/{id}', ['uses'=>'FileController@sendfile'] );

Route::get('/editarUsuario', function () {return view('editarUsuario');});
Route::post('/editarUsuario', ['uses'=>'UsuarioController@store']);

Route::get('/addEvento', function () {return view('addEvento');});
Route::post('/addEvento', ['uses'=>'EventoController@createevent']);