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

            $table->increments('id_hab');
            $table->integer('id_cl');
            $table->integer('id_rec');
            $table->integer('valor');
            $table->enum('estado', ['ocupada','desocupada']);
            $table->enum('tipo_de_habitacion', ['single','matrimonial', 'double']);
            $table->date('hora_inicio');
            $table->date('hora_termino');

            $table->foreign('id_cl')->references('id_cliente')->on('clientes');
            $table->foreign('id_rec')->references('id_recep')->on('recepcionistas');

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
        schema::drop('habitaciones'); 
    }
}
