<?php

namespace App\Imports;

use App\Models\C4;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Maatwebsite\Excel\Concerns\WithMappedCells;
use Maatwebsite\Excel\Concerns\WithMultipleSheets;
use Maatwebsite\Excel\Concerns\WithStartRow;

class C4Sheet implements ToModel, WithStartRow
{
    
    private $data;

    public function __construct($data)
    {
        $this->data = $data;
    }

    public function model(array $row)
    {
        return new C4([
            //
            'establecimiento' => $this->data['eess'],
            'medico' => $this->data['user'],
            'fecha' => date_format(date_create_from_format('d/m/Y', $row[1]), 'Y-m-d H:i:s'),
            // 'fecha' => date('Y-m-d H:i:s', strtotime($row[1])),
            'hclin' => $row[2],
            'noasegurado' => $row[3],
            'apellidosynombres' => $row[4],            
            'sexo' => $row[5],
            'nacimiento' => $row[6],
            // 'nacimiento' => date_format(date_create_from_format('d/m/Y', $row[5]), 'Y-m-d H:i:s'),
            'años' => $row[7],
            'meses' => $row[8],
            'dias' => $row[9],           
            'bja' => $row[10],
            'peso' => $row[11],
            'talla' => $row[12],
            'control' => $row[13],
            'pesotalla' => $row[15],
            'tallaedad' => $row[17],
            'hierro' => $row[18],
            'vitaa' => $row[19],
            'zinc' => $row[20],
            'mebendazol' => $row[21],
            'conselact' => $row[22],
            'lactancia' => $row[23],
            'consealimentacion' => $row[24],
            'alcomplementariomenores1' => $row[25],
            'alcomplementario1a' => $row[26],
            'motricidadgruesa' => $row[27],
            'motricidadfina' => $row[28],
            'audicionlenguaje' => $row[29],
            'personalsocial' => $row[30],
            'consultaexterna' => $row[31],
            'diagnostico' => $row[32],
            'cie' => $row[33],
            'tratamiento' => $row[34],
            'responsable' => $row[35],
            'inyectable' => $row[36],
            'sueros' => $row[37],
            'sutcur' => $row[38],
            'otrasactividades' => $row[39],
            'mortalidad' => $row[40],
            'refycontra' => $row[41],
            'refde' => $row[42],
            'refa' => $row[43],
                      
        ]);
    }

    public function startRow(): int
    {
      return 8;
    }
}