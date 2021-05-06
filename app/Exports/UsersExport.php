<?php

namespace App\Exports;

use App\Usuarios;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\FromView;
use Illuminate\Contracts\View\View;

//class UsersExport implements FromCollection
//{
    /**
    * @return \Illuminate\Support\Collection
    */
//    public function collection()
//    {
//        return Usuarios::all();
//    }
//}

class UsersExport implements FromView {
    public function view(): View {
        return view('Admin.Excel', [
            'usuarios' => Usuarios::all()
        ]);
    }
}
