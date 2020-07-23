<?php

namespace App\Model;
use Illuminate\Support\Facades\DB;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Usuarios extends Authenticatable
{
    use Notifiable;
    protected $table = 'usuario';

    protected $fillable = ['nome','email','senha','foto','genero', 'telefone', 'admin', 'condominio_id'];
    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    
   protected $hidden = [
       'senha', 
       //'remember_token',
   ];

   /**
    * The attributes that should be cast to native types.
    *
    * @var array
    */
   protected $casts = [
       'email_verified_at' => 'datetime',
   ];

   public function getPasswordAttribute()
    {
        return $this->senha;
    }

    public function mensagens()
    {
        return $this->hasMany('App\Model\Mensagens');
    }
}
