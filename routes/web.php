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

Route::get('/avisos', function () {
    return view('Avisos');
});

Route::get('/cadastro', function () {
    return view('Cadastro');
});

Route::get('/espacosReservas', function () {
    return view('espacosReservas');
});

Route::get('/eventos', function () {
    return view('Eventos');
});

Route::get('/home', function () {
    return view('Home');
});

Route::get('/painel', function () {
    return view('Painel');
});

Route::get('/reservas', function () {
    return view('Reservas');
});

Route::get('/solidariedade', function () {
    return view('Solidariedade');
});

