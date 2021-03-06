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



    public function getarea(Request $request, $area)
    {
        $Area = Areas_Reservaveis::where('nome', $area)->get();
        $espaco = $Area;
        
        

        return view('Espacos', compact('espaco'));
    }

    public function addfotos(Request $request)
    {   //verificar se está logado como admin.
        
        if ($request->foto) {
            $area = Areas_Reservaveis::find($request->id);
            
            $upload = explode(",", $area->foto);
           
            

            foreach ($request->foto as $img) {
                               
                array_push($upload, $img->store('img'));
               
            }
            
            $stringToStore = implode(",", $upload);
            $area->foto = $stringToStore;
            $area->save();

            return redirect("/espacos/area/$area->nome");
        }
    }

    public function createarea(Request $request)
    {   //verificar se está logado como admin.
        if (($request->nome) and ($request->descricao_1) and ($request->foto)) {
            $upload = array();
            $area = new Areas_Reservaveis();
            $area->nome = $request->nome;
            $area->descricao_1 = $request->descricao_1;
            $area->descricao_2 = $request->descricao_2;
            $area->descricao_3 = $request->descricao_3;
            $area->condominio_id = Auth::user()->condominio_id;
            foreach ($request->foto as $img) {
                array_push($upload, $img->store('img'));
            }
            $stringToStore = implode(",", $upload);
            $area->foto = $stringToStore;
            $area->save();

            return redirect("/espacos/area/$area->nome");
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
            $area->save();

            return redirect('/espacos');
        }
    }
}
