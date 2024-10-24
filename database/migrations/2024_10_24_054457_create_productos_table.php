<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('productos', function (Blueprint $table) {
            $table->id('Producto_Id');
            $table->foreignId('Categoria_Id')->nullable()->constrained('categorias');
            $table->foreignId('Bodega_Id')->nullable()->constrained('bodegas');
            $table->foreignId('TipoProducto_Id')->nullable()->constrained('tipo_productos');
            $table->foreignId('Proveedor_Id')->nullable()->constrained('proveedores');
            $table->string('Producto_Nombre', 35);
            $table->string('Producto_Descripcion', 50)->nullable();
            $table->string('Producto_SKU', 25)->unique();
            $table->decimal('Producto_CostoUnitario', 10, 2);
            $table->decimal('Producto_PrecioDeVenta', 10, 2);
            $table->string('Producto_UnidadMedida', 10)->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('productos');
    }
};
