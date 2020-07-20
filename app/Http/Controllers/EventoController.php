<?php

namespace App\Http\Controllers;

use App\Model\Evento;
use Illuminate\Http\Request;



class EventoController extends Controller
{
    public function __construct()
    {
    $this->middleware('auth');
    }
    
    public function getcards(Request $request)
    {
        $evento = Evento::all();
        return view('Eventos', compact('evento'));
    }
    
    public function createevent(Request $request)
    { //verificar se está logado como admin
        if (($request->nome) and ($request->descricao_1)) {
            $upload = $request->foto->store('img');
            $evento = new Evento;
            $evento->nome = $request->nome;
            $evento->descricao_1 = $request->descricao_1;
            $evento->descricao_2 = $request->descricao_2;
            $evento->descricao_3 = $request->descricao_3;
            $evento->foto = "/file/$upload";
            $evento->condominio_id = 1;
            $evento->save();
            return redirect()->route('/eventos');
        }
    }
    public function editevent(Request $request)
    {   dd($request);
        $evento = Evento::find($request->id);
        $evento->nome = $request->nome;
        $evento->data = $request->data;
        $evento->descricao_1 = $request->descricao_1;
        $evento->descricao_2 = $request->descricao_2;
        $evento->descricao_3 = $request->descricao_3;
        $evento->save();
        return redirect('/eventos');
    }

    public function deleteevent(Request $request)
    {
        $evento = Evento::find($request->id);
         $evento->delete();
    }
}

