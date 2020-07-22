<?php

namespace App\Http\Controllers;
use App\Model\Areas_Reservaveis;
use App\Model\Reserva;
use Illuminate\Http\Request;



class ReservasController extends Controller
{
    public function __construct()
    {
    $this->middleware('auth');
    }
    
    public function getcards(Request $request)
    {
        $reservas = Areas_Reservaveis::all();
        return view('Reservas', compact('reservas'));
    }
    
    
}

