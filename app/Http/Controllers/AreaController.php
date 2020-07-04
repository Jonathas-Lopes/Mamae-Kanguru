<?php

namespace App\Http\Controllers;

use App\Model\Areas_Reservaveis;
use Illuminate\Http\Request;



class areaController extends Controller
{
    public function getarea(Request $request)
    {
        $areas = Areas_Reservaveis::all();
        return view('espacosReservas', compact('areas'));
    }
    
    public function createevent(Request $request)
    {   //verificar se está logado como admin.
        if (($request->nome) and ($request->descricao_1) and ($request->foto)) {
            $upload = $request->foto->store('img');
            $areas = new Areas_Reservaveis();
            $areas->nome = $request->titulo;
            $areas->descricao_1 = $request->descricao_1;
            $areas->descricao_2 = $request->descricao_2;
            $areas->descricao_3 = $request->descricao_3;
            $areas->foto = "/file/$upload";
            $areas->condominio_id = 1;
            $areas->save();
            return redirect()->route('/espacosReservas');
        }
    }
}

