<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Usuarios extends Model
{
    public $fillable =['nombre', 'apellido', 'correo', 'password', 'telefono'];
    public static function validationRules(){
        return [
            'nombre' => 'requiried| min:5 |max:50',
            'apellido' => 'requiried| min:5 |max:50',                        
            'correo' => 'requiried| min:5 |max:50',
            'password' => 'requiried| min:5 |max:50',
            'telefono' => 'requiried| min:5 |max:50'
        ];
    }
    public function doctores(){                
        return $this->belongsToMany(Doctores::class, 'agenda', 'id_usuario', 'id_doctor');
    } 
}
