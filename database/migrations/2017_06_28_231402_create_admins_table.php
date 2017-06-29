<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAdminsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('admins',function(Blueprint $table){

            $table->increments('id_admin');
            $table->string('user_admin')->unique();
            $table->string('pass_admin');
            $table->string('nombre_admin');
            $table->string('rut_admin');
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
        schema::drop('admins'); 
    }
}
