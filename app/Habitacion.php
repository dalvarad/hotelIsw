<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Habitacion extends Model
{
   protected $table = "habitaciones";

   protected $fillable = ['valor','estado','tipo_de_habitacion'];

   public function pivoteHabit(){
   		return $this->hasOne('App\Reserva');
   }

   public function scopeSearch($query, $tipo_de_habitacion){

		return $query->where('tipo_de_habitacion', 'LIKE', "%$tipo_de_habitacion%");
	}
}
