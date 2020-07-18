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
        $user->genero = 'outro';
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

    public function editarUsuario(Request $request){
        $id = Auth::user()->id;
        $usuario = Usuarios::find($id);

        if($request->foto){
            $upload = $request->foto->store('img');
            $usuario->foto = "/file/$upload";
        }

        if($request->senha){
            $usuario->senha = Hash::make($request->senha);
        }

        $usuario->nome = $request->nome;
        $usuario->email = $request->email;
        $usuario->genero = $request->genero;
        // $usuario->telefone = $request->telefone;

        $usuario->save();
        
        return redirect('/home');

    }

    public function getPerfil(Request $request)
    {
        $perfil = Usuarios::find(Auth::user()->id);
        return view('Home', compact('perfil'));
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

    function logout(Request $request)
    {
        Auth::logout();
        return redirect('/');
    }
}

