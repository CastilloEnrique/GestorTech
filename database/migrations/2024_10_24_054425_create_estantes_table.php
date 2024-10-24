<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('estantes', function (Blueprint $table) {
            $table->id('Estante_Id');
            $table->foreignId('Bodega_Id')->nullable()->constrained('bodegas');
            $table->string('Estante_Nombre', 25)->unique();
            $table->string('Estante_Seccion', 25)->unique();
            $table->string('Estante_Descripcion', 50)->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('estantes');
    }
};
