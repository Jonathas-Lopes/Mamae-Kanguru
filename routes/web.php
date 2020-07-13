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

Route::get('/reservas', ['uses'=>'AreaController@getreservacards'] );

Route::post('/espacos', ['uses'=>'AreaController@writearea'] );
Route::get('/espacos/area/{area}', ['uses'=>'AreaController@getarea'] );
Route::get('/espacos/agenda/{area}', ['uses'=>'AreaController@schedule'] );
Route::post('/espacos/agenda', ['uses'=>'AreaController@writeschedule'] );
// Route::get('/espacos', function () {return view('areasReservas');} );

Route::get('/solidariedade', ['uses'=>'SolidariedadeController@getcards'] );
Route::post('/solidariedade', ['uses'=>'SolidariedadeController@writecards'] );

Route::get('/painel', ['uses'=>'PainelController@getcards'] );
Route::post('/painel', ['uses'=>'PainelController@writecards'] );
Route::post('/painel/edit', ['uses'=>'PainelController@editcards'] );
Route::post('/painel/delete', ['uses'=>'PainelController@deletecards'] );

Route::get('/eventos', ['uses'=>'EventoController@getcards'] );
Route::post('/eventos', ['uses'=>'EventoController@writecards'] );

Route::get('/avisos', ['uses'=>'AvisoController@getcards'] );
Route::post('/avisos', ['uses'=>'AvisoController@writecards'] );

Route::get('/file/img/{id}', ['uses'=>'FileController@sendfile'] );

Route::get('/editarusuario', function () {return view('editarUsuario');});
Route::post('/editarusuario', ['uses'=>'UsuarioController@store']);

Route::get('/addevento', function () {return view('addEvento');});
Route::post('/addevento', ['uses'=>'EventoController@createevent']);

Route::get('/editevento', function () {return view('editEvento');});
Route::post('/editevento', ['uses'=>'EventoController@createevent']); // rota para salvar as alterações
//precisa de uma rota para pegar o evento que se quer editar

Route::get('/espacos/editarea/{id}', ['uses'=>'AreaController@viewEditar']);
Route::post('/espacos/editarea/{id}', ['uses'=>'AreaController@editarea']); // rota para salvar as alterações
//precisa de uma rota para pegar o evento que se quer editar

Route::get('/espacos/addarea', function () {return view('addArea');});
Route::post('/espacos/addarea', ['uses'=>'AreaController@createarea']);

Route::get('/editaviso', function () {return view('editAviso');});
Route::post('/editaviso', ['uses'=>'AvisoController@writecards']); // rota para salvar as alterações
//precisa de uma rota para pegar o aviso que se quer editar