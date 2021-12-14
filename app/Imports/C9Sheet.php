<?php

namespace App\Imports;

use App\Models\C9;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Maatwebsite\Excel\Concerns\WithMappedCells;
use Maatwebsite\Excel\Concerns\WithMultipleSheets;
use Maatwebsite\Excel\Concerns\WithStartRow;

class C9Sheet implements ToModel, WithStartRow
{
    
    private $data;

    public function __construct($data)
    {
        $this->data = $data;
    }

    public function model(array $row)
    {
        return new C9([
            //
            'establecimiento' => $this->data['eess'],
            'medico' => $this->data['user'],
            'fecha' => ($row[1]=== null || $row[1] === false) ? date('Y-m-d') : date_format(date_create_from_format('d/m/Y', $row[1]), 'Y-m-d H:i:s'),
            // 'fecha' => date('Y-m-d H:i:s', strtotime($row[1])),
            // 'fecha' => $row[1],
            'hclin' => $row[2],
            'asegurado' => $row[3],
            'apellidosynombre' => $row[4],            
            'visitasfamiliares' => $row[5],
            'otros' => $row[6],
            'promotores' => $row[7],
            'dirigentes' => $row[8],
            'adultos' => $row[9],
            'jovenes' => $row[10],
            'escolares' => $row[11],
            'reunioneslugar' => $row[12],
            'temaactividad' => $row[13],
            'actividadeducativa' => $row[14],
            'feria' => $row[15],
            'rals' => $row[16],
            'rclsalud' => $row[17],
            'comunidadescai' => $row[18],
            'otro' => $row[19],
            'odontologo' => $row[20],
            'auxiliar' => $row[21],
            'enfermeras' => $row[22],
            'medicos' => $row[23],
            'duracionsupervision' => $row[24],
            'lugar' => $row[25],
            'capacitacion' => $row[26],
            'supervision1' => $row[27],
            'acomunidad' => $row[28],
            'familiasnuevascarpetizadas' => $row[29],
            'carpetizadasconseguimiento' => $row[30],
            'cai' => $row[31],
            'supervision' => $row[32],
            'auditoriasint' => $row[33],
            'autoevaluaciones' => $row[34],
            'quejasusuarios' => $row[35],
            'sugerenciasagradecimientos' => $row[36],
            'visitasfamiliaresplanificadas' => $row[37],
            'muertematernadentro' => $row[38],
            'muertematernafuera' => $row[39],
            
                      
        ]);
    }

    public function startRow(): int
    {
      return 7;
    }
}