<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Recepcionista extends Model
{
    protected $table = "recepcionistas";

    protected $fillable = ['nombre_recep','rut_recep','usuario_recep','contraseña_recep'];

    public function habitaciones(){
    	return $this->hasMany('App\Habitacion');
    }
}
