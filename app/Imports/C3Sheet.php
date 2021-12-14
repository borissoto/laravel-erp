<?php

namespace App\Imports;

use App\Models\C3;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Maatwebsite\Excel\Concerns\WithMappedCells;
use Maatwebsite\Excel\Concerns\WithMultipleSheets;
use Maatwebsite\Excel\Concerns\WithStartRow;

class C3Sheet implements ToModel, WithStartRow
{
    
    private $data;

    public function __construct($data)
    {
        $this->data = $data;
    }

    public function model(array $row)
    {
        // dd($row[1]);
        return new C3([
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
            // 'nacimiento' => date_format(date_create_from_format('d/m/Y', $row[5]), 'Y-m-d H:i:s'),
            'años' => $row[7],
            'meses' => $row[8],
            'dias' => $row[9],           
            'orientacion' => $row[10],
            'anticonceptivos' => $row[11],
            'insumos' => $row[12],
            'naturales' => $row[13],
            'pap' => $row[14],            
        ]);
    }

    public function startRow(): int
    {
      return 6;
    }
}