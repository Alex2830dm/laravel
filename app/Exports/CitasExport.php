<?php

namespace App\Exports;

use App\CitasModel;
use Auth;
use Maatwebsite\Excel\Concerns\FromCollection;

class CitasExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        $id_medico = session('session_id');
        return CitasModel::where('id_medico', '=', $id_medico)->get();
    }
}
