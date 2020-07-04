<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Aviso extends Model
{
    protected $table = 'avisos';

    protected $fillable = ['titulo','foto','descricao', 'condominio_id'];
}
