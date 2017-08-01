<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTipoHabitacionesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::create('tipohabitaciones',function(Blueprint $table){

            $table->increments('id');
            $table->text('descripcion');
            $table->text('caracteristicas');
            $table->float('valor');
            $table->string('type')->unique();

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
        Schemma::drop('tipohabitaciones');
    }
}
