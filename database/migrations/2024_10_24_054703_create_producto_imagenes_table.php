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
        Schema::create('producto_imagenes', function (Blueprint $table) {
            $table->id('Imagen_Id');
            $table->foreignId('Producto_Id')->nullable()->constrained('productos');
            $table->string('Imagen_Path', 50);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('producto_imagenes');
}
};
