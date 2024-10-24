<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('descuentos', function (Blueprint $table) {
            $table->id('Descuento_Id');
            $table->foreignId('Producto_Id')->nullable()->constrained('productos');
            $table->string('Descuento_Tipo', 25)->nullable();
            $table->char('Descuento_Descripcion', 50)->nullable();
            $table->decimal('Descuento_Valor', 4, 2);
            $table->dateTime('Descuento_FechaInicio');
            $table->dateTime('Descuento_FechaFin');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('descuentos');
    }
};
