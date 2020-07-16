<?php

namespace App\Http\Controllers;

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
        $avisos = Aviso::avisosPost();
        return view('Avisos', compact('avisos'));
    }
    
    public function writecards(Request $request)
    {
        if (($request->titulo) and ($request->descricao)) {
            $upload = $request->foto->store('img');
            $aviso = new Aviso;
            $aviso->titulo = $request->titulo;
            $aviso->foto = "/file/$upload";
            $aviso->descricao = $request->descricao;
            $aviso->usuario_id = 1;
            $aviso->save();
            return redirect()->route('/avisos');
        }
    }
}

