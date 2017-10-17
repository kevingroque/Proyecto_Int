<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAnunciosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('anuncios', function (Blueprint $table) {
            $table->increments('id');
            $table->string('imagen_an');
            $table->integer('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users');
            $table->integer('inmueble_id')->unsigned();
            $table->foreign('inmueble_id')->references('id')->on('inmuebles');
            $table->integer('centro_educativo_id')->unsigned();
            $table->foreign('centro_educativo_id')->references('id')->on('centros_educativos');
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
        Schema::drop('anuncios');
    }
}
