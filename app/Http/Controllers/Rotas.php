<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;



class Rotas extends Controller
{
    public function __construct()
    {
    $this->middleware('auth');
    }
    
    public function get(Request $request, $id)
    {
        if ($request->session()->get('Logado')!=null) {
            return view($id);
        }
        return view('Login');
    }
}
