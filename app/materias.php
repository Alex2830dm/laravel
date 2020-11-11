<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class materias extends Model
{
    public $fillable =['nombre'];
    public static function validationRules(){
        return [
            'nombre' => 'requiried| min:5 |max:50',        
        ];
    }  
}
