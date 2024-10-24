<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductosTable extends Migration
{
    public function up()
    {
        Schema::create('productos', function (Blueprint $table) {
            $table->id('Producto_Id');
            $table->unsignedBigInteger('Categoria_Id')->nullable();
            $table->unsignedBigInteger('Bodega_Id')->nullable();
            $table->unsignedBigInteger('TipoProducto_Id')->nullable();
            $table->unsignedBigInteger('Proveedor_Id')->nullable();
            $table->string('Producto_Nombre', 35);
            $table->string('Producto_Descripcion', 50)->nullable();
            $table->string('Producto_SKU', 25)->unique();
            $table->decimal('Producto_CostoUnitario', 10, 2);
            $table->decimal('Producto_PrecioDeVenta', 10, 2);
            $table->string('Producto_UnidadMedida', 10)->nullable();
            $table->foreign('Categoria_Id')->references('Categoria_Id')->on('categorias')->onDelete('set null');
            $table->foreign('Bodega_Id')->references('Bodega_Id')->on('bodegas')->onDelete('set null');
            $table->foreign('TipoProducto_Id')->references('TipoProducto_Id')->on('tipo_productos')->onDelete('set null');
            $table->foreign('Proveedor_Id')->references('Proveedor_Id')->on('proveedores')->onDelete('set null');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('productos');
    }
}
