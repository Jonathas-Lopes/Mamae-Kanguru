<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use App\Model\Areas_Reservaveis;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;



class AreaController extends Controller
{
    public function __construct()
    {
    $this->middleware('auth');
    }
    
    protected $filable = ['nome', 'descricao_1', 'descricao_2', 'descricao_3', 'foto', 'condominio_id'];

    public function getarea(Request $request)
    {
        $areas = Areas_Reservaveis::all();
        return view('Espacos', compact('area'));
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
            $data['id'] = $id;

            if($request->foto){
                $upload = $request->foto->store('img');
                Areas_Reservaveis::where('id', $id)->update(['foto'=> "/file/$upload"]);
            }

            Areas_Reservaveis::where('id', $id)
                            ->update([
                                'nome'=> $request->nome,
                                'data'=> now(),
                                'descricao_1'=> $request->descricao_1,
                                'descricao_2'=> $request->descricao_2,
                                'descricao_3'=> $request->descricao_3,
                            ]);

            return redirect('/espacos');
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
        return view('Espacos', compact('areas'));
    }
}

