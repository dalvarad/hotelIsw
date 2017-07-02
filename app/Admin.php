<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    protected $table = "admins";

    protected $fillable = ['user_admin', 'pass_admin' , 'nombre_admin', 'rut_admin'];

    public function habitaciones(){
    	return $this->hasMany('App\Habitacion');
    }
}
