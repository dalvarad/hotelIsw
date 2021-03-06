<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Habitacion extends Model
{
   protected $table = "habitaciones";

   protected $fillable = ['id_tipo', 'id_estado', 'numero'];

   public function estadohabitacion(){
   		return $this->belongsTo('App\Estadohabitacion');
   }

   public function tipohabitacion(){
   		return $this->belongsTo('App\Tipohabitacion');
   }
	
}
