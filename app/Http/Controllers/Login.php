<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;



class Login extends Controller
{

    public function post(Request $request)
    {
        if (request('email') == 'jonathaslopes20@gmail.com') {
            $request->session()->put('Logado', ['email' => 'funcionou!']);
        }
        
    }

    
}
