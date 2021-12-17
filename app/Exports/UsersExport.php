<?php

namespace App\Exports;

use App\Models\User;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\FromQuery;

class UsersExport implements FromQuery
{

    public function headings():array
    {
        return [
            'Usuario',
            'Email',            
            'Adm_establecimiento_id',
            'Nombres',
            'Ap_paterno',
            'Ap_materno',
            'Ci',
            'Adm_departamento_id',
            'Sexo',
            'Fecha_nac',
            'Telefono',
            'Domicilio',
            'Item',
            'Incorporacion',
            'Universidad',
            'Grado',
            'Docente',
            'Obsservaciones',
            'Estado',

        ];
    }

    /**
    * @return \Illuminate\Support\Collection
    */
    public function query()
    {
        return User::where('name', 'CDURAN');
    }
}
