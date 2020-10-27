<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Emergencias extends Model
{
    public $fillable =['institucion', 'zona', 'telefono'];
    public static function validationRules(){
        return [
            'institucion' => 'requiried| min:5 |max:50',
            'zona' => 'requiried| min:5 |max:50',                        
            'telefono' => 'requiried| min:5 |max:50',            
        ];
    }
}