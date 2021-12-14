<?php

namespace App\Imports;

use App\Models\C6;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Maatwebsite\Excel\Concerns\WithMappedCells;
use Maatwebsite\Excel\Concerns\WithMultipleSheets;
use Maatwebsite\Excel\Concerns\WithStartRow;

class C6Sheet implements ToModel, WithStartRow
{
    
    private $data;

    public function __construct($data)
    {
        $this->data = $data;
    }

    public function model(array $row)
    {
        return new C6([
            //
            'establecimiento' => $this->data['eess'],
            'medico' => $this->data['user'],
            'fecha' => date_format(date_create_from_format('d/m/Y', $row[1]), 'Y-m-d H:i:s'),
            // 'fecha' => date('Y-m-d H:i:s', strtotime($row[1])),
            'hclin' => $row[2],
            'asegurado' => $row[3],
            'apellidosynombres' => $row[4],            
            'sexo' => $row[5],
            'fechanac' => $row[6],
            // 'nacimiento' => date_format(date_create_from_format('d/m/Y', $row[5]), 'Y-m-d H:i:s'),
            'años' => $row[7],
            'meses' => $row[8],
            'dias' => $row[9],                       
            'ingreso' => $row[10],
            'tratamiento' => $row[11],
            'egreso' => $row[12],
            'sitegreso' => $row[13],
            'fallecimiento' => $row[14],
            'inyectables' => $row[15],
            'sueros' => $row[16],
            'curacionessuturas' => $row[17],
            'referidoa' => $row[18],
           
            
                      
        ]);
    }

    public function startRow(): int
    {
      return 6;
    }
}