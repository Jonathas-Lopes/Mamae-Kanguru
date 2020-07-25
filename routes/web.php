<?php

use App\Mail\EmailsAdmin;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Route;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
*/

Route::get('/', function () {return view('Login');})->name('login');
Route::post('/login', ['uses'=>'UsuarioController@login']);
Route::get('/login/logout', ['uses'=>'UsuarioController@logout']);

Route::get('/cadastro', function () {return view('Cadastro');});
Route::post('/cadastro', ['uses'=>'UsuarioController@store']);

Route::get('/home', ['uses'=>'UsuarioController@getPerfil']);
Route::post('/home/mensagem', ['uses'=>'HomeController@enviarMensagem']);
Route::get('/home/mensagens', ['uses'=>'HomeController@exibirMensagens']);
Route::get('/home/mensagens/{hashtag}', ['uses'=>'HomeController@filtrarMensagens']);
Route::get('/home/mensagem/{id}', ['uses'=>'HomeController@excluirMensagem']);

Route::get('/reservas', ['uses'=>'ReservasController@getcards']);

Route::post('/espacos', ['uses'=>'AreaController@writearea']);
Route::get('/espacos/area/{area}', ['uses'=>'AreaController@getarea']);
Route::get('/espacos/agenda/{area}', ['uses'=>'AreaController@schedule']);
Route::post('/espacos/agenda', ['uses'=>'AreaController@writeschedule']);
Route::get('/espacos', ['uses'=>'AreaController@getarea']);

Route::get('/solidariedade', ['uses'=>'SolidariedadeController@getcards']);
Route::post('/solidariedade', ['uses'=>'SolidariedadeController@writecards']);
Route::post('/solidariedade/edit', ['uses'=>'SolidariedadeController@editcards'] );
Route::post('/solidariedade/delete', ['uses'=>'SolidariedadeController@deletecards'] );

Route::get('/painel', ['uses'=>'PainelController@getcards']);
Route::post('/painel', ['uses'=>'PainelController@writecards']);
Route::post('/painel/edit', ['uses'=>'PainelController@editcards']);
Route::post('/painel/delete', ['uses'=>'PainelController@deletecards']);

Route::get('/eventos', ['uses'=>'EventoController@getcards'] );
Route::post('/eventos', ['uses'=>'EventoController@createevent'] );
Route::post('/eventos/edit', ['uses'=>'EventoController@editevent']);
Route::post('/eventos/delete', ['uses'=>'EventoController@deleteevent']);

Route::get('/avisos', ['uses'=>'AvisoController@getcards']);
Route::post('/avisos', ['uses'=>'AvisoController@writecards']);
Route::post('/avisos/edit', ['uses'=>'AvisoController@editcards']);
Route::post('/avisos/delete', ['uses'=>'AvisoController@deletecards']);

Route::get('/file/img/{id}', ['uses'=>'FileController@sendfile'] );

Route::get('/editarusuario', function () {return view('editarUsuario');});
Route::post('/editarUsuario', ['uses'=>'UsuarioController@editarUsuario']);

Route::get('/eventos/addevento', function () {return view('addEvento');});
Route::post('/eventos/addevento', ['uses'=>'EventoController@createevent']);

Route::get('/eventos/editevento', function () {return view('editEvento');});
Route::post('/eventos/editevento', ['uses'=>'EventoController@createevent']); 

Route::get('/aviso/editaviso', function () {return view('editAviso');});
Route::post('/aviso/editaviso', ['uses'=>'AvisoController@writecards']); 

/* ===== DISPARO DE EMAILS PELO LARAVEL ===== */

Route::get('/mail/email-cadastro', function(){

    // usuario criado para parametrizar o processo do envio do email
    // stdClass é uma classe vazia, mas seria o nosso modelo de usuario (eu acho)
    $user = new stdClass();
    $user->name = "Manuela Amorim";
    $user->email = "manungamorim@gmail.com";

    // usado somente para testar a view
    // return new EmailsAdmin($user);

    // para efetuar o disparo: 
    Mail::send(new EmailsAdmin($user));
});