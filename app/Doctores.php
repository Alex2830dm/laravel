<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Doctores extends Model
{
    public $fillable =['nombre', 'apellido', 'correo', 'cedula', 'telefono'];
    public static function validationRules(){
        return [
            'nombre' => 'requiried| min:5 |max:50',
            'apellido' => 'requiried| min:5 |max:50',                        
            'correo' => 'requiried| min:5 |max:50',
            'cedula' => 'requiried| min:5 |max:50',
            'telefono' => 'requiried| min:5 |max:50'
        ];
    }
}
