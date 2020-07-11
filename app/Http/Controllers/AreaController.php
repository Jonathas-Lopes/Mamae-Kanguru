<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use App\Model\Areas_Reservaveis;
use Illuminate\Http\Request;



class AreaController extends Controller
{
    protected $filable = ['nome', 'descricao_1', 'descricao_2', 'descricao_3', 'foto', 'condominio_id'];

    public function getarea(Request $request)
    {
        $areas = Areas_Reservaveis::all();
        return view('espacosReservas', compact('areas'));
    }
    
    public function createarea(Request $request)
    {   //verificar se está logado como admin.
        if (($request->nome) and ($request->descricao_1) and ($request->foto)) {
            $upload = $request->foto->store('img');
            $areas = new Areas_Reservaveis();
            $areas->nome = $request->nome;
            $areas->data = now();
            $areas->descricao_1 = $request->descricao_1;
            $areas->descricao_2 = $request->descricao_2;
            $areas->descricao_3 = $request->descricao_3;
            $areas->foto = "/file/$upload";
            $areas->condominio_id = Auth::user()->condominio_id;
            $areas->save();

            return redirect('/espacosReservas');
        }
    }

    public function editarea(Request $request, $nome)
    {   //verificar se está logado como admin.
        if (($request->nome) and ($request->descricao_1)) {

            $data['nome'] = $nome;

            Areas_Reservaveis::where('nome', $nome)
                            ->update([
                                'nome'=> $request->nome,
                                'data'=> now(),
                                'descricao_1'=> $request->descricao_1,
                                'descricao_2'=> $request->descricao_2,
                                'descricao_3'=> $request->descricao_3,
                            ]);


            // $areas = Areas_Reservaveis::find($id);
            
            // $areas->nome = $request->nome;
            // $areas->data = now();
            // $areas->descricao_1 = $request->descricao_1;
            // $areas->descricao_2 = $request->descricao_2;
            // $areas->descricao_3 = $request->descricao_3;
            // $areas->condominio_id = Auth::user()->condominio_id;
            // if($request->foto){
            //    $upload = $request->foto->store('img');
            //    $areas->foto = "/file/$upload"; 
            // }
            // $areas->save();

            return redirect('/espacosReservas');
        }
    }

    public function viewEditar($id){
        $data['id'] = $id;
        $area = Areas_Reservaveis::find($id);

        return view('editArea', ['area'=>$area]);
    }

    public function getReservas()
    {
        $areas = Areas_Reservaveis::all();
        return view('Reservas', compact('areas'));
    }

    public function getAreas()
    {
        $areas = Areas_Reservaveis::all();
        return view('areasReservas', compact('areas'));
    }
}

