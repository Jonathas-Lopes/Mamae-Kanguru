<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use App\Model\Aviso;
use Illuminate\Http\Request;



class AvisoController extends Controller
{
    public function __construct()
    {
    $this->middleware('auth');
    }
    
    public function getcards(Request $request)
    {
        //aqui eu puxei a funcao avisosPost do Model gilvan
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
            $aviso->condominio_id = Auth::user()->condominio_id;
            $aviso->save();
            return redirect('/avisos');
        }
    }

    public function editcards(Request $request)
    {
        $aviso = Aviso::find($request->id);

        $aviso->titulo = $request->titulo;
        $aviso->descricao = $request->descricao;

        $aviso->save();
        return redirect('/avisos');
    }

    public function deletecards(Request $request)
    {
        $aviso = Aviso::find($request->id);

        $aviso->delete();
        
    }

}

