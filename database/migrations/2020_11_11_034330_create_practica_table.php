<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePracticaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        
        Schema::create('practicas', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->String('nombre');
            $table->String('apellido');
            $table->integer('edad');
            $table->String('correo');
            $table->unsignedBigInteger('id_materia');
            $table->String('nombre_materia');
            $table->foreign('id_materia')->references('id')->on('materias');
            $table->timestamps();            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('practicas');
    }
}
