<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Paineis extends Model
{
    protected $table = 'painel';

    protected $fillable = ['titulo','foto','descricao', 'usuario_id'
    ];
}
