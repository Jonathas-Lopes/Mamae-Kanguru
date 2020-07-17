<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Mensagens;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function __construct()
    {
    $this->middleware('auth');
    }
    
    /**
     * Create a new controller instance.
     *
     * @return void
     */

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function enviarMensagem(Request $request)
    {
        $mensagem = new Mensagens;
        $mensagem->mensagem = $request->mensagem;
        $mensagem->hora_envio = now();
        $mensagem->usuario_id = Auth::user()->id;
        $mensagem->condominio_id = Auth::user()->condominio_id;
        $mensagem->save();

        return redirect('/home');
    }


}
