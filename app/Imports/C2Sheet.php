<?php

namespace App\Imports;

use App\Models\C2;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Maatwebsite\Excel\Concerns\WithMappedCells;
use Maatwebsite\Excel\Concerns\WithMultipleSheets;
use Maatwebsite\Excel\Concerns\WithStartRow;

class C2Sheet implements ToModel, WithStartRow
{
    private $data;

    public function __construct($data)
    {
        $this->data = $data;
    }
    
    public function model(array $row)
    {
        return new C2([
            //
            'establecimiento' => $this->data['eess'],
            'medico' => $this->data['user'],
            'fecha' => date_format(date_create_from_format('d/m/Y', $row[1]), 'Y-m-d H:i:s'),
            // 'fecha' => date('Y-m-d H:i:s', strtotime($row[1])),
            'hclin' => $row[2],
            'noasegurado' => $row[3],
            'apellidosynombre' => $row[4],            
            'nacimiento' => $row[5],
            // 'nacimiento' => date_format(date_create_from_format('d/m/Y', $row[5]), 'Y-m-d H:i:s'),
            'años' => $row[6],
            'meses' => $row[7],
            'dias' => $row[8],           

            'beneficio' => $row[9],
            'peso' => $row[10],
            'talla' => $row[11],
            'fum' => $row[12],
            'nutricion' => $row[13],
            'prenatal' => $row[14],
            '4cpn' => $row[15],
            'pap' => $row[16],
            'pappos' => $row[17],
            'ivaa' => $row[18],
            'ivaapos' => $row[19],
            'mamapos' => $row[20],
            'hemorragia1mit' => $row[21],
            'hemorragiaparto' => $row[22],
            'embsepsis' => $row[23],
            'preeclamsiasevera' => $row[24],
            'eclamsia' => $row[25],
            'atencionparto' => $row[26],
            'tipoparto' => $row[27],
            'anestesia' => $row[28],
            'reciennac' => $row[29],
            'partera' => $row[30],
            'partodom' => $row[31],
            'malformacion' => $row[32],
            'mujer1549con4cpn' => $row[33],
            'lactanciainmediata' => $row[34],
            'rnapegoprecoz' => $row[35],
            'controlpostparto' => $row[36],
            'hierro90' => $row[37],
            'vitap' => $row[38],
            'mortalidadfuera' => $row[39],
            'refcontraref' => $row[40],
            'refde' => $row[41],
            'refa' => $row[42],
        ]);
    }

    public function startRow(): int
    {
      return 8;
    }
}