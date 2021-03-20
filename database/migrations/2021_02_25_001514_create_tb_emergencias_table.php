<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTbEmergenciasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_emergencias', function (Blueprint $table) {
            $table->bigIncrements('id_institucion')->comment('ID Institución');
            $table->String('nombre_institucion', 50)->comment('Nombre Institución');
            $table->String('zona_institucion', 30)->comment('Zona Institución');
            $table->String('telefono_institucion', 15)->comment('Telefono Institución');
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
        Schema::dropIfExists('tb_emergencias');
    }
}
