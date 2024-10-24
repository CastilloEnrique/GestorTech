<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePreciosHistoricosTable extends Migration
{
    public function up()
    {
        Schema::create('precios_historicos', function (Blueprint $table) {
            $table->id('PrecioHistorico_Id');
            $table->unsignedBigInteger('Producto_Id')->nullable();
            $table->dateTime('PrecioHistorico_FechaCambio')->default(DB::raw('GETDATE()'));
            $table->decimal('PrecioHistorico_PrecioAnterior', 10, 2);
            $table->decimal('PrecioHistorico_PrecioNuevo', 10, 2);
            $table->foreign('Producto_Id')->references('Producto_Id')->on('productos')->onDelete('set null');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('precios_historicos');
    }
}
