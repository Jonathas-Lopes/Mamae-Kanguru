<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Solidariedade extends Model
{
    protected $table = 'solidariedade';

    protected $fillable = ['nome','foto','descricao', 'usuario_id'];

    /*static function solidariedadePost(){
        $solidariedade = DB::table('solidariedade')
        ->join('usuario', 'usuario.id', '=', 'usuario_id')
        ->select('solidariedade.*', 'usuario.nome')
        ->get();
        return $solidariedade;
    }*/
}
