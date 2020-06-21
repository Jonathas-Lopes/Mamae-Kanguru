<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Condominios extends Model
{
    protected $table = 'condominio';

    protected $fillable = ['nome','endereco',
    ];
}
