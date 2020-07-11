<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model;
use App\Model\Usuarios;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class UsuarioController extends Controller
{
    function store(Request $request)
    {
        $user = new Usuarios ();

        $user->nome = $request->nome;
        $user->email = $request->email;
        $user->senha = Hash::make($request->senha);
        $user->genero = $request->genero;
        $user->admin = 0;
        $user->condominio_id = 1;

        $user->save();

        $email = $request->email;
        $senha = $request->senha;

        if(Auth::attempt(['email'=>$email,'password'=>$senha]))
        {
            return redirect('/home');
        } else
        {
            return redirect('/');
        }
    }

    function login(Request $request)
    {
        /*$usuario = DB::table('usuario')
            ->where('nome', 'Manu Guedes')
            ->first();*/

        $email = $request->email;
        $senha = $request->senha;

        /*if (password_verify($senha, $usuario->senha)) {
            echo 'Password is valid!';
        } else {
            echo 'Invalid password.';
        }*/

        if(Auth::attempt(['email'=>$email,'password'=>$senha]))
        {
            return redirect('/home');
        } else
        {
            return redirect('/');
        }
    }
}

