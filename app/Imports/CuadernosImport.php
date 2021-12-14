<?php

namespace App\Imports;

use App\Models\C1;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithMappedCells;
use Maatwebsite\Excel\Concerns\WithMultipleSheets;

class CuadernosImport implements WithMultipleSheets
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    private $data;

    public function __construct($data)
    {
        $this->data = $data;
    }

    public function sheets(): array
    {
        return [
            'C1' => new C1Sheet($this->data),
            'C2' => new C2Sheet($this->data),
            'C3' => new C3Sheet($this->data),
            'C4' => new C4Sheet($this->data),
            'C5' => new C5Sheet($this->data),
        ];
    }

    // public function mapping(): array
    // {
    //     return [
    //         'fecha' => 'B6',
    //         'hclin' => 'C6',
    //         'noasegurado' => 'D6',
    //         'apellidosynombre' => 'E6',
    //         'sexo' => 'F6',
    //         'nacimiento' => 'G6',
    //         'años' => 'H6',
    //         'meses' => 'I6',
    //         'dias' => 'J6',
    //         'consulta' => 'K6',
    //         'peso' => 'L6',
    //         'talla' => 'M6',
    //         'temp' => 'N6',
    //         'fcard' => 'O6',
    //         'fresp' => 'P6',
    //         'presart' => 'Q6',
    //         'nutricion' => 'R6',
    //         'motivo' => 'S6',
    //         'exfis' => 'T6',
    //         'inyecta' => 'U6',
    //         'sueros' => 'V6',
    //         'suturas' => 'W6',
    //         'otrasact' => 'X6',
    //         'dxdesc' => 'Y6',
    //         'dxprin' => 'Z6',
    //         'tto' => 'AA6',
    //         'mortalidad' => 'AB6',
    //         'referencias' => 'AC6',
    //         'referido' => 'AD6',
    //         'referidoa' => 'AE6',
    //         'mayor60' => 'AF6',
    //     ];
    // }



    // public function model(array $row)
    // {
    //     return new C1([
    //         //
    //         'establecimiento' => '1',
    //         'medico' => '2',
    //         'fecha' => date('Y-m-d H:i:s', strtotime($row['fecha'])),
    //         'hclin' => $row['hclin'],
    //         'noasegurado' => $row['noasegurado'],
    //         'apellidosynombre' => $row['apellidosynombre'],
    //         'sexo' => $row['sexo'],
    //         'nacimiento' => $row['nacimiento'],
    //         'años' => $row['años'],
    //         'meses' => $row['meses'],
    //         'dias' => $row['dias'],
    //         'consulta' => $row['consulta'],
    //         'peso' => $row['peso'],
    //         'talla' => $row['talla'],
    //         'temp' => $row['temp'],
    //         'fcard' => $row['fcard'],
    //         'fresp' => $row['fresp'],
    //         'presart' => $row['presart'],
    //         'nutricion' => $row['nutricion'],
    //         'motivo' => $row['motivo'],
    //         'exfis' => $row['exfis'],
    //         'inyecta' => $row['inyecta'],
    //         'sueros' => $row['sueros'],
    //         'suturas' => $row['suturas'],
    //         'otrasact' => $row['otrasact'],
    //         'dxdesc' => $row['dxdesc'],
    //         'dxprin' => $row['dxprin'],
    //         'tto' => $row['tto'],
    //         'mortalidad' => $row['mortalidad'],
    //         'referencias' => $row['referencias'],
    //         'referido' => $row['referido'],
    //         'referidoa' => $row['referidoa'],
    //         'mayor60' => $row['mayor60'],
    //     ]);
    // }
}
