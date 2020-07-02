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

//Route::get('/{id}', ['uses'=>'Rotas@get'] );
Route::any('/Painel', ['uses'=>'PainelController@painelrouter'] );
Route::post('/login', ['uses'=>'Login@post'] );
Route::get('/file/img/{id}', ['uses'=>'FileController@sendfile'] );
Route::any('/Avisos', ['uses'=>'AvisoController@avisorouter'] );
