<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInmueblesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('inmuebles', function (Blueprint $table) {
            $table->increments('id');
            $table->string('tipo_imb');
            $table->string('ubicacion');
            $table->float('precio');
            $table->integer('num_dormitorios');
            $table->string('num_banios');
            $table->float('area_total');
            $table->string('estado');
            $table->string('imagen_imb');
            $table->integer('anuncio_id')->unsigned();
            $table->foreign('anuncio_id')->references('id')->on('anuncios');
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
        Schema::drop('inmuebles');
    }
}
