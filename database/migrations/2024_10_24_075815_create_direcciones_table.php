<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDireccionesTable extends Migration
{
    public function up()
    {
        Schema::create('direcciones', function (Blueprint $table) {
            $table->id('Direccion_Id'); // Clave primaria de la tabla direcciones
            $table->integer('Mpio_Id')->nullable(); // Define Mpio_Id como integer, igual que en municipios
            $table->foreign('Mpio_Id')->references('Mpio_Id')->on('municipios')->onDelete('set null'); // Referencia correcta
            $table->unsignedBigInteger('Depto_Id')->nullable(); // Define Depto_Id como unsigned big integer
            $table->foreign('Depto_Id')->references('Depto_Id')->on('departamentos')->onDelete('set null'); // Referencia correcta
            $table->string('Direccion_Nombre', 35);
            $table->string('Direccion_CodigoPostal', 10)->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('direcciones');
    }
}
