<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePersonasTable extends Migration
{
    public function up()
    {
        Schema::create('personas', function (Blueprint $table) {
            $table->id('Persona_Id');
            $table->unsignedBigInteger('Direccion_Id')->nullable();
            $table->unsignedBigInteger('Rol_Id')->nullable();
            $table->string('Persona_Usuario', 10)->nullable();
            $table->string('Persona_Pwd', 25)->nullable();
            $table->string('Persona_Nombre1', 25);
            $table->string('Persona_Nombre2', 25)->nullable();
            $table->string('Persona_Apellido1', 25);
            $table->string('Persona_Apellido2', 25)->nullable();
            $table->string('Persona_DPI', 13)->unique();
            $table->string('Persona_Nit', 12)->unique();
            $table->string('Persona_CorreoElectronico', 25)->unique()->nullable();
            $table->string('Persona_Telefono', 15);
            $table->foreign('Direccion_Id')->references('Direccion_Id')->on('direcciones')->onDelete('set null');
            $table->foreign('Rol_Id')->references('Rol_Id')->on('roles')->onDelete('set null');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('personas');
    }
}
