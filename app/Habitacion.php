<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Habitacion extends Model
{
   protected $table = "habitaciones";

   protected $fillable = ['valor','estado','tipo_de_habitacion'];

   public function cliente(){
   		return $this->belongsTo('App\Cliente');
   }

   public function admin(){
   	return $this->belongsTo('App\Admin');
   }
}
