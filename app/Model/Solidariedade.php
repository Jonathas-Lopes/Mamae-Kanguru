<?php

namespace App\Model;
use Illuminate\Support\Facades\DB;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Solidariedade extends Model
{
    protected $table = 'solidariedade';

    protected $fillable = ['nome','foto','descricao', 'usuario_id'];

    /*static function solidariedadePost(){
        $solidariedade = DB::table('solidariedade');
        //->join('usuario', 'usuario.id', '=', 'usuario_id')
        ->select('solidariedade.*', 'usuario_id');
        ->get();
        return $solidariedade;
    }*/
}
