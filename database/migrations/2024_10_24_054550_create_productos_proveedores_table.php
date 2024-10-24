<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('productos_proveedores', function (Blueprint $table) {
            $table->id('ProductoProveedor_Id');
            $table->foreignId('Producto_Id')->nullable()->constrained('productos');
            $table->foreignId('Proveedor_Id')->nullable()->constrained('proveedores');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('productos_proveedores');
    }
};
