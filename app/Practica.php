<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Practica extends Model
{
    public $fillable =['nombre', 'apellido', 'correo', 'edad'];
    public static function validationRules(){
        return [
            'nombre' => 'requiried| min:5 |max:50',
            'apellido' => 'requiried| min:5 |max:50',            
            'edad' => 'requiried|integer| min:5 |max:50',
            'correo' => 'requiried| min:5 |max:50',
        ];
    }
}
