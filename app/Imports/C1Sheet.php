<?php

namespace App\Imports;

use App\Models\C1;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Maatwebsite\Excel\Concerns\WithMappedCells;
use Maatwebsite\Excel\Concerns\WithMultipleSheets;
use Maatwebsite\Excel\Concerns\WithStartRow;

class C1Sheet implements ToModel, WithStartRow
{
    private $data;

    public function __construct($data)
    {
        $this->data = $data;
    }
   
    public function model(array $row)
    {
        return new C1([
            //
            'establecimiento' => $this->data['eess'],
            'medico' => $this->data['user'],
            'fecha' => date_format(date_create_from_format('d/m/Y', $row[1]), 'Y-m-d H:i:s'),
            // 'fecha' => date('Y-m-d H:i:s', strtotime($row[1])),
            'hclin' => $row[2],
            'noasegurado' => $row[3],
            'apellidosynombre' => $row[4],
            'sexo' => $row[5],
            'nacimiento' => $row[6],
            // 'nacimiento' => date_format(date_create_from_format('d/m/Y', $row[6]), 'Y-m-d H:i:s'),
            'años' => $row[7],
            'meses' => $row[8],
            'dias' => $row[9],
            'consulta' => $row[10],
            'peso' => $row[11],
            'talla' => $row[12],
            'temp' => $row[13],
            'fcard' => $row[14],
            'fresp' => $row[15],
            'presart' => $row[16],
            'nutricion' => $row[17],
            'motivo' => $row[18],
            'exfis' => $row[19],
            'inyecta' => $row[20],
            'sueros' => $row[21],
            'suturas' => $row[22],
            'otrasact' => $row[23],
            'dxdesc' => $row[24],
            'dxprin' => $row[25],
            'tto' => $row[26],
            'mortalidad' => $row[27],
            'referencias' => $row[28],
            'referido' => $row[29],
            'referidoa' => $row[30],
            'mayor60' => $row[31],
        ]);
    }

    public function startRow(): int
    {
      return 6;
    }

     // en caso implementar WithMappedCells
    //  public function mapping(): array
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
}