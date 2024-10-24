<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductosProveedoresTable extends Migration
{
    public function up()
    {
        Schema::create('productos_proveedores', function (Blueprint $table) {
            $table->id('ProductoProveedor_Id');
            $table->unsignedBigInteger('Producto_Id')->nullable();
            $table->unsignedBigInteger('Proveedor_Id')->nullable();
            $table->foreign('Producto_Id')->references('Producto_Id')->on('productos')->onDelete('set null');
            $table->foreign('Proveedor_Id')->references('Proveedor_Id')->on('proveedores')->onDelete('set null');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('productos_proveedores');
    }
}
