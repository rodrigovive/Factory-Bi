<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDimProductosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dim_producto', function (Blueprint $table) {
            $table->increments('id_producto');
            $table->string('nombre_producto',100);
            $table->integer('id_familia')->unsigned()->index()->nullable();
            $table->foreign('id_familia')->references('id_familia')->on('dim_familia');
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
        Schema::dropIfExists('dim_productos');
    }
}
