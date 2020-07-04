<?php

namespace App\Http\Controllers;

use App\Model\Solidariedade;
use Illuminate\Http\Request;



class SolidariedadeController extends Controller
{
    public function getcards(Request $request)
    {
        $solidariedade = Solidariedade::all();
        return view('solidariedades', compact('solidariedade'));
    }
    
    public function writecards(Request $request)
    {
        if (($request->titulo) and ($request->descricao)) {
            $upload = $request->foto->store('img');
            $solidariedade = new Solidariedade;
            $solidariedade->titulo = $request->titulo;
            $solidariedade->descricao = $request->descricao;
            $solidariedade->foto = "/file/$upload";
            $solidariedade->usuario_id = 1;
            $solidariedade->save();
            return redirect()->route('/solidariedade');
        }
    }
}

