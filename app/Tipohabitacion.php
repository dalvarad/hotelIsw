<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tipohabitacion extends Model
{
   protected $table = "tipohabitaciones";

   protected $fillable = ['descripcion','caracteristicas','valor', 'type'];

   public function habitacion(){
   		return $this->hasMany('App\Habitacion');
   }

}
