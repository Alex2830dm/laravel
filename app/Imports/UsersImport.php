<?php

namespace App\Imports;

use App\Usuarios;
use Maatwebsite\Excel\Concerns\ToModel;

class UsersImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Usuarios([            
            'nombre' => $row[0],
            'app' => $row[1],
            'apm' => $row[2],
            'telefono' => $row[3],
            'municipio' => $row[4],
            'email' => $row[5],
            'password' => $row[6],
            'perfil' => $row[7],
            'sexo' => $row[8],  
            'cedulas' => $row[9],
            'especialidades' => $row[10],
            'pconsulta' => $row[11],
            'pconsulta_dom' => $row[12],
            'ccalle' => $row[13],
            'ccolonia' => $row[14],
            'clocalidad' => $row[15],
            'cmunicipio' => $row[16],            
            'foto' => $row[17]
        ]);
    }
}
