<?php

namespace App\Model;
use Illuminate\Support\Facades\DB;

use Illuminate\Database\Eloquent\Model;

class Mensagens extends Model
{
    protected $table = "mensagem";

    protected $fillable = ['mensagem', 'hora_envio', 'usuario_id'];

    public function usuario()
    {
        return $this->belongsTo('App\Model\Usuarios');
    }

    public function condominio()
    {
        return $this->belongsTo('App\Model\Condominios');
    }
}
