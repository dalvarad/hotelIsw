<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Estadohabitacion extends Model
{
    protected $table = "estadohabitaciones";

   protected $fillable = ['estado'];

   public function habitacion(){
   		return $this->hasMany('App\Habitacion');
   }

}
