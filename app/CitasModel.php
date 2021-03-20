<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CitasModel extends Model
{
    protected $table = 'tb_citas';
    protected $primaryKey = 'id_cita';
    protected $fillable = [
        'id_medico',
        'id_usuario',
        'nombre_paciente',
        'apellido_paciente',
        'tipo_cita',
        'costo_cita',
        'fecha_cita',
        'hora_cita',
        'telefono_contacto',
        'direccion_calle',
        'direccion_colonia',
        'direccion_localidad',
        'direccion_municipio',
        'direccion_estado'
    ];
}
