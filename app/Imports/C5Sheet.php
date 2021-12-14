<?php

namespace App\Imports;

use App\Models\C5;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Maatwebsite\Excel\Concerns\WithMappedCells;
use Maatwebsite\Excel\Concerns\WithMultipleSheets;
use Maatwebsite\Excel\Concerns\WithStartRow;

class C5Sheet implements ToModel, WithStartRow
{
    
    private $data;

    public function __construct($data)
    {
        $this->data = $data;
    }

    public function model(array $row)
    {
        return new C5([
            //
            'establecimiento' => $this->data['eess'],
            'medico' => $this->data['user'],
            'fecha' => date_format(date_create_from_format('d/m/Y', $row[1]), 'Y-m-d H:i:s'),
            // 'fecha' => date('Y-m-d H:i:s', strtotime($row[1])),
            'hclin' => $row[2],
            'noasegurado' => $row[3],
            'apellidosynombres' => $row[4],            
            'sexo' => $row[5],
            'fechanac' => $row[6],
            // 'nacimiento' => date_format(date_create_from_format('d/m/Y', $row[5]), 'Y-m-d H:i:s'),
            'años' => $row[7],
            'meses' => $row[8],
            'dias' => $row[9],                       
            'peso' => $row[10],
            'talla' => $row[11],
            'temp' => $row[12],
            'fcar' => $row[13],
            'fresp' => $row[14],
            'pa' => $row[15],
            'ingreso' => $row[16],
            'dxingresodes' => $row[17],
            'dxingreso' => $row[18],
            'cirugiamed' => $row[19],
            'anestesia' => $row[20],
            'dxegresodesc' => $row[21],
            'dxegreso' => $row[22],
            'fegreso' => $row[23],
            'estadia' => $row[24],
            'cama' => $row[25],
            'tipoegreso' => $row[26],
            'mortalidad' => $row[27],
            'refycontraref' => $row[28],
            
                      
        ]);
    }

    public function startRow(): int
    {
      return 6;
    }
}