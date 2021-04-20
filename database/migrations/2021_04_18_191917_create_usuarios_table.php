<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsuariosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('usuarios', function (Blueprint $table) {
            $table->bigIncrements('id_usuario')->comment('ID usuario');
            $table->String('nombre', 30)->comment('Nombre');
            $table->String('app', 30)->comment('Primer Apellido');
            $table->String('apm', 30)->comment('Segundo Apellido');
            $table->String('telefono', 14)->comment('Telefono');
            $table->String('municipio', 30)->comment('Municipio');
            $table->String('email', 30)->comment('Email');
            $table->String('password', 20)->comment('Password');
            $table->integer('perfil')->comment('perfil');
            $table->enum('sexo', ['Masculino', 'Femenino', 'Prefiere no decirlo']);
            $table->boolean('activo')->nullable()->default(true);
            $table->String('cedulas')->nullable()->default(' ');
            $table->String('especialidades')->nullable()->default(' ');
            $table->float('pconsulta', 10, 2)->nullable()->default(00.00);
            $table->float('pconsulta_dom', 10, 2)->nullable()->default(00.00);
            $table->String('ccalle', 40)->nullable()->default(' ');
            $table->String('ccolonia', 40)->nullable()->default(' ');
            $table->String('clocalidad', 40)->nullable()->default(' ');
            $table->String('cmunicipio', 40)->nullable()->default(' ');
            $table->String('foto', 100)->comment('Foto')->nullable()->default('img-prueba.jpg');
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
        Schema::dropIfExists('usuarios');
    }
}
