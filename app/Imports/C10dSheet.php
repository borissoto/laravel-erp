<?php

namespace App\Imports;

use App\Models\C10d;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Maatwebsite\Excel\Concerns\WithMappedCells;
use Maatwebsite\Excel\Concerns\WithMultipleSheets;
use Maatwebsite\Excel\Concerns\WithStartRow;

class C10dSheet implements ToModel, WithStartRow
{
    
    private $data;

    public function __construct($data)
    {
        $this->data = $data;
    }

    public function model(array $row)
    {
        return new C10d([
            //
            'establecimiento' => $this->data['eess'],
            'medico' => $this->data['user'],
            'fconsulta' => date_format(date_create_from_format('d/m/Y', $row[1]), 'Y-m-d H:i:s'),
            // 'fecha' => date('Y-m-d H:i:s', strtotime($row[1])),
            'hclin' => $row[2],
            'asegurado' => $row[3],
            'apellidosynombres' => $row[4],            
            'sexo' => $row[5],
            'fnacimiento' => $row[6],
            'años' => $row[7],
            'meses' => $row[8],
            'dias' => $row[9],
            'bcgm1' => $row[10],
            'penta1m1' => $row[11],
            'penta2m1' => $row[12],
            'penta3m1' => $row[13],
            'polio1m1' => $row[14],
            'polio2m1' => $row[15],
            'polio3m1' => $row[16],
            'antirotavir1m1' => $row[17],
            'antirotavir2m1' => $row[18],
            'antineumococo1m1' => $row[19],
            'antineumococo2m1' => $row[20],
            'antineumococo3m1' => $row[21],
            'influenza1m1' => $row[22],
            'influenza2m1' => $row[23],
            'srp11223m' => $row[24],
            'srp21223m' => $row[25],
            'antiamarilica1223m' => $row[26],
            'penta11223m' => $row[27],
            'penta21223m' => $row[28],
            'penta31223m' => $row[29],
            'penta41223m' => $row[30],
            'polio11223m' => $row[31],
            'polio21223m' => $row[32],
            'polio31223m' => $row[33],
            'polio41223m' => $row[34],
            'influenzau1223m' => $row[35],
            'penta12a3' => $row[36],
            'penta22a4' => $row[37],
            'penta32a5' => $row[38],
            'penta42a6' => $row[39],
            'polio12a7' => $row[40],
            'polio22a8' => $row[41],
            'polio32a9' => $row[42],
            'polio42a10' => $row[43],
            'srp12a11' => $row[44],
            'srp22a12' => $row[45],
            'antiamarilica2a13' => $row[46],
            'penta54' => $row[47],
            'polio54' => $row[48],
            'srp14' => $row[49],
            'srp24' => $row[50],
            'antiamarilica4' => $row[51],
            'dt1' => $row[52],
            'dt2' => $row[53],
            'dt3' => $row[54],
            'dt4' => $row[55],
            'dt5' => $row[56],
            'hepb1tsalud' => $row[57],
            'hepb2tsalud' => $row[58],
            'hepb3tsalud' => $row[59],
            'hepb1tvih' => $row[60],
            'hepb2tvih' => $row[61],
            'hepb3tvih' => $row[62],
            'influenzam60' => $row[63],
            'influenzaenfcron' => $row[64],
            'influenzaembarazadas' => $row[65],
            'influenzatsalud' => $row[66],
            'vph1' => $row[67],
            'vph2' => $row[68],
            
                      
        ]);
    }

    public function startRow(): int
    {
      return 7;
    }
}