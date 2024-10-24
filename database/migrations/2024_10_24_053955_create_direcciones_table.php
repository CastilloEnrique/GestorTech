<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
//        Schema::create('direcciones', function (Blueprint $table) {
//            $table->id('Direccion_Id');
//            $table->foreignId('Mpio_Id')->nullable()->constrained('municipios');
//            $table->foreignId('Depto_Id')->nullable()->constrained('departamentos');
//            $table->string('Direccion_Nombre', 35);
//            $table->string('Direccion_CodigoPostal', 10)->nullable();
//            $table->timestamps();
//        });
    }

    public function down()
    {
        Schema::dropIfExists('direcciones');
    }
};
