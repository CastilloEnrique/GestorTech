<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDescuentosTable extends Migration
{
    public function up()
    {
        Schema::create('descuentos', function (Blueprint $table) {
            $table->id('Descuento_Id');
            $table->unsignedBigInteger('Producto_Id')->nullable();
            $table->string('Descuento_Tipo', 25)->nullable();
            $table->char('Descuento_Descripcion', 50)->nullable();
            $table->decimal('Descuento_Valor', 4, 2);
            $table->dateTime('Descuento_FechaInicio');
            $table->dateTime('Descuento_FechaFin');
            $table->foreign('Producto_Id')->references('Producto_Id')->on('productos')->onDelete('set null');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('descuentos');
    }
}
