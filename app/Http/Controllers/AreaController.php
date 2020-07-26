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

    public function getreservas(Request $request)
    {
        $reserva = Reserva::all();
    }

    public function writeschedule(Request $request){
        //dd($request->usuario_id);
        $area = new Reserva();
        $area->data = $request->data;
        $area->descricao = $request->descricao;
        $area->usuario_id = $request->usuario_id;
        $area->area_reservavel_id = $request->area_id;
        $area->save();
        return redirect('/reservas');
    

    }

    public function getarea(Request $request, $area)
    {
        $Area = Areas_Reservaveis::where('nome', $area)->get();
        $espaco = $Area;
        //$espaco->foto = explode(",", $Area->foto);

        return view('Espacos', compact('espaco'));
    }

    public function createarea(Request $request)
    {   //verificar se está logado como admin.
        if (($request->nome) and ($request->descricao_1) and ($request->foto)) {
            $area = new Areas_Reservaveis();
            $area->nome = $request->nome;
            $area->data = $request->data;
            $area->descricao_1 = $request->descricao_1;
            $area->descricao_2 = $request->descricao_2;
            $area->descricao_3 = $request->descricao_3;
            $area->condominio_id = Auth::user()->condominio_id;
            foreach ($request->foto as $img) {
                $upload[] = $img->store('img');
            }
            $stringToStore = implode(",", $upload);
            $area->foto = $stringToStore;
            $area->save();

            return redirect('/espacos');
        }
    }

    public function editarea(Request $request, $id)
    {   //verificar se está logado como admin.
        if (($request->nome) and ($request->descricao_1)) {

            $area = Areas_Reservaveis::find($request->id);

            if ($request->foto) {
                $upload[] = explode(",", $area->foto);

                foreach ($request->foto as $img) {
                    $upload[] = $img->store('img');
                }
                $stringToStore = implode(",", $upload);
                $area->foto = $stringToStore;
            }

            $area->nome = $request->nome;
            $area->data = $request->data;
            $area->descricao_1 = $request->descricao_1;
            $area->descricao_2 = $request->descricao_2;
            $area->descricao_3 = $request->descricao_3;


            return redirect('/espacos');
        }
    }
}
