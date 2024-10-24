<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('bodegas', function (Blueprint $table) {
            $table->id('Bodega_Id');
            $table->foreignId('Direccion_Id')->nullable()->constrained('direcciones');
            $table->string('Bodega_Nombre', 25)->unique();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('bodegas');
    }
};
