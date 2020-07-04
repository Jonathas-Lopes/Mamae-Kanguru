<?php

namespace App\Http\Controllers;

use App\Model\Aviso;
use Illuminate\Http\Request;



class AvisoController extends Controller
{
    public function getcards(Request $request)
    {
        $avisos = Aviso::all();
        return view('Avisos', compact('avisos'));
    }
    
    public function writecards(Request $request)
    {
        if (($request->titulo) and ($request->descricao)) {
            $upload = $request->foto->store('img');
            $aviso = new Aviso;
            $aviso->titulo = $request->titulo;
            $aviso->descricao = $request->descricao;
            $aviso->foto = "/file/$upload";
            $aviso->usuario_id = 1;
            $aviso->save();
            return redirect()->route('/aviso');
        }
    }
}

