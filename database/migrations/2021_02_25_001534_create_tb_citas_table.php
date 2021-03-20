<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTbCitasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_citas', function (Blueprint $table) {
            $table->bigIncrements('id_cita')->commit('ID Cita');
            $table->integer('id_medico')->comment('ID Medico')->nullable();
            $table->integer('id_usuario')->comment('ID Usuario')->nullable();
            $table->string('nombre_paciente', 50)->comment('Nombre Paciente');
            $table->string('apellido_paciente', 50)->comment('Apellido Paciente');
            $table->enum('tipo_cita', ['consultorio', 'domicilio'])->comment('Tipo Cita');
            $table->float('costo_cita', 10,2)->comment('Costo Cita');
            $table->date('fecha_cita')->comment('Fecha Cita');
            $table->time('hora_cita')->comment('Hora Cita');
            $table->String('estatatus', 20)->comment('Estatus Cita');
            $table->string('telefono_contacto', 15)->comment('Telefono Contacto');
            $table->string('direccion_calle', 60)->comment('Direccion Calle');
            $table->string('direccion_colonia', 60)->comment('Direccion Colonia');
            $table->string('direccion_localidad', 60)->comment('Direccion Localidad');
            $table->string('direccion_municipio', 60)->comment('Direccion Municipio');            
            $table->text('observaciones')->nullable()->default('');
            $table->text('medicamentos')->nullablle()->default('');
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
        Schema::dropIfExists('tb_citas');
    }
}
