<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use App\Model\Solidariedade;
use Illuminate\Http\Request;



class SolidariedadeController extends Controller
{
    public function __construct()
    {
    $this->middleware('auth');
    }
    
    public function getcards(Request $request)
    {
        $solidariedade = Solidariedade::solidariedadePost();
        return view('Solidariedade', compact('solidariedade'));
    }
    
    public function writecards(Request $request)
    { 
        if (($request->titulo) and ($request->descricao)) {
            $upload = $request->foto->store('img');
            $solidariedade = new Solidariedade;
            $solidariedade->titulo = $request->titulo;
            $solidariedade->descricao = $request->descricao;
            $solidariedade->link = $request->link;
            $solidariedade->foto = "/file/$upload";
            $solidariedade->usuario_id = Auth::user()->id;
            $solidariedade->save();
            return redirect('/solidariedade');
        }
    }

    public function editcards(Request $request)
    {
        $solidariedade = Solidariedade::find($request->id);

        $solidariedade->titulo = $request->titulo;
        $solidariedade->descricao = $request->descricao;

        $solidariedade->save();
        return redirect('/solidariedade');
    }

    public function deletecards(Request $request)
    {
        $solidariedade = Solidariedade::find($request->id);

         $solidariedade->delete();
        
    }
}

