<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDimCiudadsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dim_ciudad', function (Blueprint $table) {
            $table->increments('id_ciudad');
            $table->string('nombre_ciudad',100);
            $table->string('zipCode_ciudad',100);
            $table->integer('id_zona')->unsigned()->index()->nullable();
            $table->foreign('id_zona')->references('id_zona')->on('dim_zona');
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
        Schema::dropIfExists('dim_ciudads');
    }
}
