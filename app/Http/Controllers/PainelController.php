<?php

namespace App\Http\Controllers;

use App\Model\Painel;
use Illuminate\Http\Request;



class PainelController extends Controller
{
    public function getcards(Request $request)
    {
        $paineis = Painel::all();
        return view('Painel', compact('paineis'));
    }
    
    public function writecards(Request $request)
    {
        if (($request->titulo) and ($request->descricao)) {
            $upload = $request->foto->store('img');
            $painel = new Painel;
            $painel->titulo = $request->titulo;
            $painel->descricao = $request->descricao;
            $painel->foto = "/file/$upload";
            $painel->usuario_id = 1;
            $painel->save();
            return redirect()->route('/Painel');
        }
    }
}
