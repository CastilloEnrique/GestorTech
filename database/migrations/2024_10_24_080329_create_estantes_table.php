<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEstantesTable extends Migration
{
    public function up()
    {
        Schema::create('estantes', function (Blueprint $table) {
            $table->id('Estante_Id');
            $table->unsignedBigInteger('Bodega_Id')->nullable();
            $table->string('Estante_Nombre', 25)->unique();
            $table->string('Estante_Seccion', 25)->unique();
            $table->string('Estante_Descripcion', 50)->nullable();
            $table->foreign('Bodega_Id')->references('Bodega_Id')->on('bodegas')->onDelete('set null');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('estantes');
    }
}
