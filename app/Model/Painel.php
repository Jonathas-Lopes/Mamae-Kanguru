<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Painel extends Model
{
    protected $table = 'painel';

    protected $fillable = ['titulo','foto','descricao', 'usuario_id'];

    public function painelPost(){
        $painel= DB::table('painel')
        ->join('usuario', 'usuario.id', '=', 'usuario_id')
        ->select('painel.*', 'usuario.nome')
        ->get();
        return $painel;
    }
    
}
