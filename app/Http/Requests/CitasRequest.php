<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CitasRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'nombre_paciente' => 'required',
            'apellidos_paciente' => 'required',
            'tipo_cita' => 'required',
            'fecha' => 'required',
            'hora' => 'required',
            'telefono_contacto' => 'required',
            'direccion_calle' => 'required',
            'direccion_colonia' => 'required',
            'direccion_localidad' => 'required',
            'direccion_municipio' => 'required',
        ];
    }
}
