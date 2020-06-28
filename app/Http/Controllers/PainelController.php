<?php

namespace App\Http\Controllers;

use App\Model\Paineis;
use Illuminate\Http\Request;



class PainelController extends Controller
{
    public function show(Request $request)
    {
        $paineis = Paineis::all();
        if ($request->session()->get('Logado')!=null) {
            return view('Painel',compact('paineis'));
        }
        return view('Login');
    }
}
