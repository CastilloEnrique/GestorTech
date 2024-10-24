<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductoImagenesTable extends Migration
{
    public function up()
    {
        Schema::create('producto_imagenes', function (Blueprint $table) {
            $table->id('Imagen_Id');
            $table->unsignedBigInteger('Producto_Id')->nullable();
            $table->string('Imagen_Path', 50);
            $table->foreign('Producto_Id')->references('Producto_Id')->on('productos')->onDelete('set null');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('producto_imagenes');
    }
}
