<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProveedoresTable extends Migration
{
    public function up()
    {
        Schema::create('proveedores', function (Blueprint $table) {
            $table->id('Proveedor_Id');
            $table->unsignedBigInteger('Direccion_Id')->nullable();
            $table->string('Proveedor_Nit', 12)->nullable();
            $table->string('Proveedor_Nombre', 25);
            $table->foreign('Direccion_Id')->references('Direccion_Id')->on('direcciones')->onDelete('set null');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('proveedores');
    }
}
