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

    public function getcards(Request $request, $id)
    {
        $reservas = Areas_Reservaveis::all();
        $agenda = Reserva::reservasPost($id);
        return view('Reservas', compact('reservas', 'agenda'));
    }

    public function schedule(Request $request, $id)
    {
        $reservas = Areas_Reservaveis::all();
        $agenda = Reserva::reservasPost($id);
        return view('Reservas', compact('reservas', 'agenda'));
    }

    public function writeschedule(Request $request)
    {
        //dd($request->usuario_id);
        $area = new Reserva();
        $area->data = $request->data;
        $area->usuario_id = $request->usuario_id;
        $area->area_reservavel_id = $request->area_id;
        $area->save();
        return redirect("/reservas/$request->usuario_id");
    }
}
