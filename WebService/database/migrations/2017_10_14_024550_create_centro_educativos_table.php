<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCentroEducativosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('centro_educativos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('tipo_ce');
            $table->string('nombre');
            $table->string('direccion');
            $table->string('imagen_ce');
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
        Schema::drop('centro_educativos');
    }
}
