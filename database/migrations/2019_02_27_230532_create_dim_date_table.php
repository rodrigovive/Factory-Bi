<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDimDateTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dim_date', function (Blueprint $table) {
            $table->increments('id_date');
            $table->date('fecha');
            $table->string('diaSemana',100);
            $table->integer('anio');
            $table->integer('dia');
            $table->string('nombreMes',100);
            $table->integer('mes');
            $table->integer('num_trimestre');
            $table->string('trimestre', 100);
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
        Schema::dropIfExists('dim_datas');
    }
}
