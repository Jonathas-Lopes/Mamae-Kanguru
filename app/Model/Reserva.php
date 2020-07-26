<?php

namespace App\Model;
use Illuminate\Support\Facades\DB;

use Illuminate\Database\Eloquent\Model;

class Reserva extends Model
{
    protected $table = 'reservas';

    protected $fillable = ['data','descricao','usuario_id'];

    static function reservasPost($user_id){
        $reserva= DB::table('reservas')
        ->where('usuario_id', '=', $user_id)
        ->join('areas_reservaveis', 'areas_reservaveis.id', '=', 'area_reservavel_id')
        ->select('reservas.*', 'areas_reservaveis.nome as espaco')
        ->get();
        return $reserva;
    }
}
