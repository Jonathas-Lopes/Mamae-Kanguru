<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model;
use App\Model\Usuarios;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

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

        return redirect('/home');
    }

    function login(Request $request)
    {
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
}
