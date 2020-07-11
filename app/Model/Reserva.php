<?php

namespace App\Model;
use Illuminate\Support\Facades\DB;

use Illuminate\Database\Eloquent\Model;

class Reserva extends Model
{
    protected $table = 'reservas';

    protected $fillable = ['data','descricao','usuario_id'];

    static function reservasPost(){
        $reserva= DB::table('reserva')
        ->join('usuario', 'usuario.id', '=', 'usuario_id')
        ->select('reserva.*', 'usuario.nome')
        ->get();
        return $reserva;
    }
}
