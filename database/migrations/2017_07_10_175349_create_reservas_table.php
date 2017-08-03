<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReservasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reservas',function(Blueprint $table){

            $table->increments('id');
            $table->integer('id_us')->unsigned();
            $table->integer('id_ha')->unsigned(); 
            $table->integer('id_cl')->unsigned();        
            $table->string('checkin');
            $table->string('checkout');

            $table->foreign('id_us')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('id_ha')->references('id')->on('habitaciones')->onDelete('cascade');
            $table->foreign('id_cl')->references('id')->on('clientes')->onDelete('cascade');
            

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
        Schema::drop('reservas');
    }
}
