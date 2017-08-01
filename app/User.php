<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    protected $fillable = [
        'type','name','rut', 'email', 'password', 
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];

    public function reserva(){
        return $this->hasMany('App\Reserva');
    }

    public function tipo_usuario(){
   	    return $this->belongsTo('App\Tipo');
    }
}
