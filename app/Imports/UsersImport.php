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
            'foto' => $row[9]
        ]);
    }
}
