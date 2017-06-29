<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRecepcionistasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('recepcionistas',function(Blueprint $table){

            $table->increments('id_recep');
            $table->string('nombre_recep');
            $table->string('rut_recep');
            $table->string('usuario_recep')->unique();
            $table->string('contraseña_recep');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        schema::drop('recepcionistas'); 
    }
}
