<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use App\Model\Painel;
use Illuminate\Http\Request;



class PainelController extends Controller
{
    public function getcards()
    {
        $paineis = Painel::painelPost();
        return view('Painel', compact('paineis'));
    }
    
    public function writecards(Request $request)
    {
        if (($request->titulo) and ($request->descricao)) {
            $upload = $request->foto->store('img');
            $painel = new Painel();
            $painel->titulo = $request->titulo;
            $painel->descricao = $request->descricao;
            $painel->foto = "/file/$upload";
            $painel->usuario_id = Auth::user()->id;
            $painel->save();
            return redirect('/painel');
        }
    }
}
