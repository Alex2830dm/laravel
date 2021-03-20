<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DoctoresModel extends Model
{
    protected $table = 'tb_emergencias';
    protected $primaryKey = 'id_institucion';
    protected $fillable = [
        'nombre_institucion',
        'zona_institucion',
        'telefono_institucion'        
    ];
}
