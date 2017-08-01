<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHabitacionesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::create('habitaciones',function(Blueprint $table){

            $table->increments('id');
            $table->integer('id_tipo')->unsigned();
            $table->integer('id_estado')->unsigned();
            $table->integer('numero');

            $table->foreign('id_tipo')->references('id')->on('tipohabitaciones')->onDelete('cascade');
            $table->foreign('id_estado')->references('id')->on('estadohabitaciones')->onDelete('cascade');

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
        Schema::drop('habitaciones'); 
    }
}
