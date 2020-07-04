<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Routing\Controller;



class LoginController extends Controller
{

    public function authenticate()
    {
        if(Auth::attempt(['email' => $email, 'password' => $password]))
        
    }
    
}
