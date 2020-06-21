<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Solidariedade extends Model
{
    protected $table = 'solidariedade';

    protected $fillable = ['nome','foto','descricao', 'usuario_id'
    ];
}
