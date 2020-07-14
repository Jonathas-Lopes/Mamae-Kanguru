<?php

namespace App\Http\Controllers;

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
        $reservas = Reserva::all();
        return view('Reservas', compact('reservas'));
    }
    
    public function writecards(Request $request)
    {
        if (($request->titulo) and ($request->descricao)) {
            $reserva = new reserva;
            $reserva->data = $request->data;
            $reserva->descricao = $request->descricao;
            $reserva->usuario_id = 1;
            $reserva->area_reservavel_id = 1;
            $reserva->save();
            return redirect()->route('/reservas');
        }
    }
}

