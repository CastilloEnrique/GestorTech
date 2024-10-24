<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInventariosTable extends Migration
{
    public function up()
    {
        Schema::create('inventarios', function (Blueprint $table) {
            $table->id('Inventario_Id');
            $table->unsignedBigInteger('Producto_Id')->nullable();
            $table->unsignedBigInteger('Bodega_Id')->nullable();
            $table->integer('Inventario_CantidadDisponible');
            $table->dateTime('Inventario_UltimaActualizacion')->default(DB::raw('GETDATE()'));
            $table->foreign('Producto_Id')->references('Producto_Id')->on('productos')->onDelete('set null');
            $table->foreign('Bodega_Id')->references('Bodega_Id')->on('bodegas')->onDelete('set null');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('inventarios');
    }
}
