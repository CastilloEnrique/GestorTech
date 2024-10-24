
<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDepartamentosTable extends Migration
{
    public function up()
    {
        Schema::create('departamentos', function (Blueprint $table) {
            $table->id('Depto_Id');
            $table->string('Depto_Nombre', 25)->unique();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('departamentos');
    }
}
