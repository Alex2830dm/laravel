<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Usuarios extends Model
{
    protected $table = 'usuarios';
    protected $primaryKey = 'id_usuario';
    protected $fillable = [
        'nombre',
        'app',
        'apm',
        'telefono',
        'municipio',
        'email',
        'password',
        'perfil',
        'sexo',        
        'telefono',
        'foto'
    ];
}
