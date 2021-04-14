<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTbUsuariosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_usuarios', function (Blueprint $table) {
            $table->id()->comment('ID');
            $table->String('nombre', 50)->comment('Nombre');
            $table->String('apellido_paterno', 50)->comment('Apellido Paterno');
            $table->String('apellido_materno', 50)->comment('Apellido Materno');
            $table->String('telefono', 14)->comment('Telefono');
            $table->String('zona', 30)->comment('Zona');
            $table->String('email', 30)->comment('Email');
            $table->String('password', 20)->comment('Password');
            $table->integer('perfil')->comment('Perfil');            
            $table->boolean('activo')->nullable()->default(true);
            $table->String('cedulas')->nullable()->default(' ');
            $table->text('especialidades')->nullable()->default(' ');
            $table->float('precio_consulta', 10, 2)->nullable()->default(00.00);
            $table->float('precio_consulta_dom', 10, 2)->nullable()->default(00.00);
            $table->String('consultorio_calle', 40)->nullable()->default(' ');
            $table->String('consultorio_colonia', 40)->nullable()->default(' ');
            $table->String('consultorio_localidad', 40)->nullable()->default(' ');
            $table->String('consultorio_municipio', 40)->nullable()->default(' ');
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
        Schema::dropIfExists('tb_usuarios');
    }
}
