<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBodegasTable extends Migration
{
    public function up()
    {
        Schema::create('bodegas', function (Blueprint $table) {
            $table->id('Bodega_Id');
            $table->unsignedBigInteger('Direccion_Id')->nullable();
            $table->string('Bodega_Nombre', 25)->unique();
            $table->foreign('Direccion_Id')->references('Direccion_Id')->on('direcciones')->onDelete('set null');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('bodegas');
    }
}
