<?php

namespace App\Http\Controllers;

use App\Model\Evento;
use Illuminate\Http\Request;



class EventoController extends Controller
{
    public function getevents(Request $request)
    {
        $evento = Evento::all();
        return view('Eventos', compact('evento'));
    }
    
    public function createevent(Request $request)
    { //verificar se está logado como admin.
        if (($request->nome) and ($request->descricao_1)) {
            $upload = $request->foto->store('img');
            $evento = new Evento;
            $evento->nome = $request->titulo;
            $evento->descricao_1 = $request->descricao_1;
            $evento->descricao_2 = $request->descricao_2;
            $evento->descricao_3 = $request->descricao_3;
            $evento->foto = "/file/$upload";
            $evento->condominio_id = 1;
            $evento->save();
            return redirect()->route('/evento');
        }
    }
}

