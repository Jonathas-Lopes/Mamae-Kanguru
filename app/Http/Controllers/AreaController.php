<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use App\Model\Areas_Reservaveis;
use App\Model\Reserva;
use Illuminate\Http\Request;




class AreaController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function getreservas(Request $request){
        $reserva = Reserva::all();

    }

    public function getarea(Request $request, $area)
    {
        $espaco = Areas_Reservaveis::where('nome', $area)->get();
        return view('Espacos', compact('espaco'));
    }

    public function createarea(Request $request)
    {   //verificar se está logado como admin.
        if (($request->nome) and ($request->descricao_1) and ($request->foto)) {
            $upload = $request->foto->store('img');
            $area = new Areas_Reservaveis();
            $area->nome = $request->nome;
            $area->data = now();
            $area->descricao_1 = $request->descricao_1;
            $area->descricao_2 = $request->descricao_2;
            $area->descricao_3 = $request->descricao_3;
            $area->foto = "/file/$upload";
            $area->condominio_id = Auth::user()->condominio_id;
            $area->save();

            return redirect('/espacos');
        }
    }

    public function editarea(Request $request, $id)
    {   //verificar se está logado como admin.
        if (($request->nome) and ($request->descricao_1)) {

            $area = Areas_Reservaveis::find($request->id);

            if ($request->foto) {
                $upload = $request->foto->store('img');
                $area->foto = "/file/$upload";
            }



            $area->nome = $request->nome;
            $area->data = now();
            $area->descricao_1 = $request->descricao_1;
            $area->descricao_2 = $request->descricao_2;
            $area->descricao_3 = $request->descricao_3;


            return redirect('/espacos');
        }
    }

    
}
