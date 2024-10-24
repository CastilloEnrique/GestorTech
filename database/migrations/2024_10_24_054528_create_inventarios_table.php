<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('inventarios', function (Blueprint $table) {
            $table->id('Inventario_Id');
            $table->foreignId('Producto_Id')->nullable()->constrained('productos');
            $table->foreignId('Bodega_Id')->nullable()->constrained('bodegas');
            $table->integer('Inventario_CantidadDisponible');
            $table->dateTime('Inventario_UltimaActualizacion')->default(DB::raw('GETDATE()'));
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('inventarios');
    }
};
