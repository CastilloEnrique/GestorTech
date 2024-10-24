<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTipoProductosTable extends Migration
{
    public function up()
    {
        Schema::create('tipo_productos', function (Blueprint $table) {
            $table->id('TipoProducto_Id');
            $table->string('TipoProducto_Nombre', 25)->unique();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('tipo_productos');
    }
}
