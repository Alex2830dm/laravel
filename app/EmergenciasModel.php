<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EmergenciasModel extends Model
{
    protected $table = 'emergencias';
    protected $primaryKey = 'id_institucion';
    protected $fillable = [
        'nombre_institucion',
        'zona_institucion',
        'telefono_institucion'        
    ];
}
