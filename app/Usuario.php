<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\SluggableInterface;
use Cviebrock\EloquentSluggable\SluggableTrait;

class Usuario extends Model implements SluggableInterface
{
	use SluggableTrait;

	protected $sluggable = [
		'build_from' => 'nombre_usuario',
		'save_to' 	 => 'slug'
	];

    protected $table = "usuarios";

    protected $fillable = ['nombre_usuario', 'rut_usuario' , 'usuario', 'pass', 'tipo'];

    protected $hidden = ['pass'];

    public function pivotehabit(){
   		return $this->hasOne('App\PivoteHabit');
   }
}
