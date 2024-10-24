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
        Schema::create('municipios', function (Blueprint $table) {
            $table->integer('Mpio_Id');
            $table->unsignedBigInteger('Depto_Id');  // Debe ser unsignedBigInteger si el id es de tipo BIGINT
            $table->string('Mpio_Nombre', 25)->unique();
            $table->primary(['Mpio_Id', 'Depto_Id']);
            $table->foreign('Depto_Id')->references('Depto_Id')->on('departamentos')->onDelete('cascade');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('municipios');
    }
};
