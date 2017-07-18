<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reserva extends Model
{
    protected $table = "reservas";

    protected $fillable = ['id_us', 'id_ha','id_cl', 'reserva_comienza', 'reserva_termina'];


   public function user(){
   	return $this->belongsTo('App\User');
   }
 
   public function habitacion(){
   	return $this->belongsTo('App\Habitacion');
   }

   public function cliente(){
   	return $this->belongsTo('App\Cliente');
   }
}
