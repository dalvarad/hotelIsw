<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class tipo extends Model
{
     protected $table = "tipo_usuario";

    protected $fillable = ['nombre'];

    public function user(){
    return $this->hasMany('App\User');
	}

}