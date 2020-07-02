<?php

namespace App\Http\Controllers;

use App\Model\Aviso;
use Illuminate\Http\Request;



class ReservaController extends Controller
{
    public function avisorouter(Request $request)
    {
        if ($request->session()->get('Logado') != null) {

            if ($request->isMethod('get')) {
                $Avisos = Aviso::all();
                return view('Avisos', compact('avisos'));
            }
            elseif($request->isMethod('post')){
                if(($request->titulo)and($request->descricao)){
                    $upload = $request->foto->store('img');
                    $aviso = new Aviso;
                    $aviso->titulo = $request->titulo;
                    $aviso->descricao = $request->descricao;
                    $aviso->foto = "/file/$upload";
                    $aviso->usuario_id=1;
                    $aviso->save();
                    
                   

                }
                
                

            }
        }
        return view('Login');
    }

    

}
