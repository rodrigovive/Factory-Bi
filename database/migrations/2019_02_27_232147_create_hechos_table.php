<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHechosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hechos', function (Blueprint $table) {

            $table->increments('id_hechos');

            $table->integer('num_clicks');

            $table->integer('num_prints');

            $table->integer('id_redSocial')->unsigned()->index()->nullable();
            $table->foreign('id_redSocial')->references('id_redSocial')->on('dim_redSocial');

            $table->integer('id_producto')->unsigned()->index()->nullable();
            $table->foreign('id_producto')->references('id_producto')->on('dim_producto');

            $table->integer('id_familia')->unsigned()->index()->nullable();
            $table->foreign('id_familia')->references('id_familia')->on('dim_familia');

            $table->integer('id_date')->unsigned()->index()->nullable();
            $table->foreign('id_date')->references('id_date')->on('dim_date');

            $table->integer('id_ciudad')->unsigned()->index()->nullable();
            $table->foreign('id_ciudad')->references('id_ciudad')->on('dim_ciudad');

            $table->integer('id_zona')->unsigned()->index()->nullable();
            $table->foreign('id_zona')->references('id_zona')->on('dim_zona');

            $table->integer('id_gustos')->unsigned()->index()->nullable();
            $table->foreign('id_gustos')->references('id_gustos')->on('dim_gustos');

            $table->integer('id_rangoEdad')->unsigned()->index()->nullable();
            $table->foreign('id_rangoEdad')->references('id_rangoEdad')->on('dim_rangoEdad');

            $table->string('sexo',100);

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
        Schema::dropIfExists('hechos');
    }
}
