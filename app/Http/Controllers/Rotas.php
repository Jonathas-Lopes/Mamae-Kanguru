<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;



class Rotas extends Controller
{
    public function get(Request $request, $id)
    {
        if ($request->session()->get('Logado')!=null) {
            return view($id);
        }
        return view('Login');
    }
}
