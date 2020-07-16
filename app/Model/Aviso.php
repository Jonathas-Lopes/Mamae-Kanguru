<?php

namespace App\Model;
use Illuminate\Support\Facades\DB;

use Illuminate\Database\Eloquent\Model;

class Aviso extends Model
{
    protected $table = 'avisos';

    protected $fillable = ['titulo','foto','descricao', 'condominio_id'];

     // esta funcao tem que puxar 3 tabelas, atraves do inner join,avisos,condominio,usuario
     // verificar a forma certa de fazer isso e mandar para o avisocontroller.php
     // gilvan
    static function avisosPost(){
        $avisos= DB::table('avisos')
        ->join('condominio', 'avisos.id', '=', 'condominio_id')
        ->join->on('usuario', 'condominio_id', '=', 'usuario_id')
        ->select('avisos.*')
        ->get();
        return $avisos;
        
    }

}
