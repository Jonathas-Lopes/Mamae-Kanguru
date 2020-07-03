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

Route::get('/', function () {
    return view('Login');
});

Route::get('/cadastro', function () {
    return view('Cadastro');
});

Route::get('/eventos', function () {
    return view('Eventos');
});

Route::get('/home', function () {
    return view('Home');
});

Route::get('/espacosReservas', function () {
    return view('espacosReservas');
});

Route::get('/painel', ['uses'=>'PainelController@getcards'] );

Route::post('/painel', ['uses'=>'PainelController@writecard'] );

Route::get('/reservas', function () {
    return view('Reservas');
});

Route::get('/solidariedade', function () {
    return view('Solidariedade');
});
Route::get('/avisos', function () {
    return view('Avisos');
});

Route::get('/file/img/{id}', ['uses'=>'FileController@sendfile'] );


//Route::get('/{id}', ['uses'=>'Rotas@get'] );
//Route::any('/Painel', ['uses'=>'PainelController@painelrouter'] );
//Route::post('/login', ['uses'=>'Login@post'] );

//Route::any('/Avisos', ['uses'=>'AvisoController@avisorouter'] );
