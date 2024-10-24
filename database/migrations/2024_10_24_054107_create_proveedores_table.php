<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('proveedores', function (Blueprint $table) {
            $table->id('Proveedor_Id');
            $table->foreignId('Direccion_Id')->nullable()->constrained('direcciones');
            $table->string('Proveedor_Nit', 12)->nullable();
            $table->string('Proveedor_Nombre', 25);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('proveedores');
    }
};
