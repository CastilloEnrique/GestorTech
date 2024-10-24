<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMunicipiosTable extends Migration
{

    public function up()
    {
        Schema::create('municipios', function (Blueprint $table) {
            $table->integer('Mpio_Id')->primary(); // Define Mpio_Id como clave primaria
            $table->unsignedBigInteger('Depto_Id'); // Llave foránea hacia departamentos
            $table->foreign('Depto_Id')->references('Depto_Id')->on('departamentos');
            $table->string('Mpio_Nombre', 25)->unique();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('municipios');
    }
}
