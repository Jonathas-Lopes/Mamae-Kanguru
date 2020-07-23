<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Mensagens;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

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
        $mensagem->hashtag = $request->hashtag;
        $mensagem->save();

        return redirect('/home');
    }

    public function exibirMensagens()
    {
        $condominioId = Auth::user()->condominio_id;
        $mensagens = DB::table('mensagem')
                    ->join('usuario', 'usuario.id', '=', 'mensagem.usuario_id')
                    ->select('mensagem.id', 'mensagem.mensagem', 'mensagem.hora_envio', 'mensagem.hashtag',
                            'mensagem.usuario_id', 'usuario.nome', 'usuario.foto', 'usuario.genero', 'usuario.telefone')
                            
                    ->where('mensagem.condominio_id', $condominioId)
                    ->orderBy('mensagem.id', 'desc')
                    ->get();

        return $mensagens;
    }

}
