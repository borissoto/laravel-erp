<?php

namespace App\Imports;

use App\Models\C12;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Maatwebsite\Excel\Concerns\WithMappedCells;
use Maatwebsite\Excel\Concerns\WithMultipleSheets;
use Maatwebsite\Excel\Concerns\WithStartRow;

class C12Sheet implements ToModel, WithStartRow
{
    
    private $data;

    public function __construct($data)
    {
        $this->data = $data;
    }

    public function model(array $row)
    {
        return new C12([
            //
            'establecimiento' => $this->data['eess'],
            'medico' => $this->data['user'],
            'fconsulta' => date_format(date_create_from_format('d/m/Y', $row[1]), 'Y-m-d H:i:s'),
            // 'fecha' => date('Y-m-d H:i:s', strtotime($row[1])),
            'hclin' => $row[2],
            'asegurado' => $row[3],
            'apellidosynombres' => $row[4],
            'riada' => $row[5],
            'riadapersonasafectadas' => $row[6],
            'riadafallecidos' => $row[7],
            'heladagranizonevada' => $row[8],
            'heladagranizonevadaafectados' => $row[9],
            'heladagranizonevadafallecidos' => $row[10],
            'incendio' => $row[11],
            'incendioafectados' => $row[12],
            'incendiofallecidos' => $row[13],
            'deslizamientosismoterremoto' => $row[14],
            'deslizamientosismoterremotoafectados' => $row[15],
            'deslizamientosismoterremotofallecidas' => $row[16],
            'inundacion' => $row[17],
            'inundacionafectados' => $row[18],
            'inundacionfallecidos' => $row[19],
            'otros' => $row[20],
            'otrosafectados' => $row[21],
            'otrosfallecidos' => $row[22],
            
        ]);
    }

    public function startRow(): int
    {
      return 6;
    }
}