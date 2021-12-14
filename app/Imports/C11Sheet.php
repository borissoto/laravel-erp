<?php

namespace App\Imports;

use App\Models\C11;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Maatwebsite\Excel\Concerns\WithMappedCells;
use Maatwebsite\Excel\Concerns\WithMultipleSheets;
use Maatwebsite\Excel\Concerns\WithStartRow;

class C11Sheet implements ToModel, WithStartRow
{
    
    private $data;

    public function __construct($data)
    {
        $this->data = $data;
    }

    public function model(array $row)
    {
        return new C11([
            //
            'establecimiento' => $this->data['eess'],
            'medico' => $this->data['user'],
            'fconsulta' => ($row[1]=== null || $row[1] === false) ? date('Y-m-d') : date_format(date_create_from_format('d/m/Y', $row[1]), 'Y-m-d H:i:s'),
            // 'fecha' => date('Y-m-d H:i:s', strtotime($row[1])),
            'hclin' => $row[2],
            'asegurado' => $row[3],
            'apellidosynombres' => $row[4],            
            'sexo' => $row[5],
            'fnacimiento' => $row[6],
            'vihpreconsejeriam' => $row[7],
            'vihpreconsejeriaf' => $row[8],
            'vihprapidaembf' => $row[9],
            'vihprapidam' => $row[10],
            'vihprapidaf' => $row[11],
            'tbsintomaticosrm' => $row[12],
            'tbsintomaticosrf' => $row[13],
            'tbpbaarnuevosposm' => $row[14],
            'tbpbaarnuevosposf' => $row[15],
            'tbpbaarnuevosnegm' => $row[16],
            'tbpbaarnuevosnegf' => $row[17],
            'tbtbextrapnm' => $row[18],
            'tbtbextrapnf' => $row[19],
            'tbesqim' => $row[20],
            'tbesqif' => $row[21],
            'tbesqiim' => $row[22],
            'tbesqiif' => $row[23],
            'tbesqiiim' => $row[24],
            'tbesqiiif' => $row[25],
            'tbquimiprofilaxism5m' => $row[26],
            'tbquimiprofilaxism5f' => $row[27],
            'tbbaarposnuevoscuradosm' => $row[28],
            'tbbaarposnuevoscuradosf' => $row[29],
            'tbttopausibacilarinim' => $row[30],
            'tbttopausibacilarinif' => $row[31],
            'tbttomultibacilarinim' => $row[32],
            'tbttomultibacilarinif' => $row[33],
            'malariamuestrasvivaxm' => $row[34],
            'malariamuestrasvivaxf' => $row[35],
            'malariamuestrasfalciparumm' => $row[36],
            'malariamuestrasfalciparumf' => $row[37],
            'malariaconfirmadosvivaxm' => $row[38],
            'malariaconfirmadosvivaxf' => $row[39],
            'malariaconfirmadosfalciparumm' => $row[40],
            'malariaconfirmadosfalciparumf' => $row[41],
            'malariattovivaxm' => $row[42],
            'malariattovivaxf' => $row[43],
            'malariattofalciparumm' => $row[44],
            'malariattofalciparumf' => $row[45],
            'malariattosospechavivaxm' => $row[46],
            'malariattosospechavivaxf' => $row[47],
            'malariattosospechafalciparumm' => $row[48],
            'malariattosospechafalciparumf' => $row[49],
            'malariattoantes48hrsiniciosintomasvivaxm' => $row[50],
            'malariattoantes48hrsiniciosintomasvivaxf' => $row[51],
            'malariattoantes48hrsiniciosintomasfalciparumm' => $row[52],
            'malariattoantes48hrsiniciosintomasfalciparumf' => $row[53],
            'chagasttornam1ainiciadm' => $row[54],
            'chagasttornam1ainiciadf' => $row[55],
            'chagasttornam1aconcluidom' => $row[56],
            'chagasttornam1aconcluidof' => $row[57],
            'chagastto1am5ainiciadm' => $row[58],
            'chagastto1am5ainiciadf' => $row[59],
            'chagastto1am5aconcluidom' => $row[60],
            'chagastto1am5aconcluidof' => $row[61],
            'chagastto5am15ainiciadm' => $row[62],
            'chagastto5am15ainiciadf' => $row[63],
            'chagastto5am15aconcluidom' => $row[64],
            'chagastto5am15aconcluidof' => $row[65],
            'chagastto15amasiniciadm' => $row[66],
            'chagastto15amasiniciadf' => $row[67],
            'chagastto15amasconcluidom' => $row[68],
            'chagastto15amasconcluidof' => $row[69],
            'chagasttomujeresostpartoinf' => $row[70],
            'chagasttomujeresostpartoconf' => $row[71],
            'chagasviviendaseval' => $row[72],
            'chagasviviendasposi' => $row[73],
            'chagasviviendasroc' => $row[74],
            'vectoresviviendasevalentomol' => $row[75],
            'vectoresviviendasposi' => $row[76],
            'vectoresttoleishiniciadof' => $row[77],
            'vectoresttoleishiniciadom' => $row[78],
            'vectoresttoleishconclm' => $row[79],
            'vectoresttoleishconclf' => $row[80],
            'vectoresttoleishmucoinim' => $row[81],
            'vectoresttoleishmucoinif' => $row[82],
            'vectoresttoleishmucoconm' => $row[83],
            'vectoresttoleishmucoconf' => $row[84],
            'vectoresttoleishmucocutainim' => $row[85],
            'vectoresttoleishmucocutainif' => $row[86],
            'vectoresttoleishmucocutaconm' => $row[87],
            'vectoresttoleishmucocutaconf' => $row[88],
            'vectoresttoleishviscinim' => $row[89],
            'vectoresttoleishviscinif' => $row[90],
            'vectoresttoleishvisconm' => $row[91],
            'vectoresttoleishvisconf' => $row[92],          
            
                      
        ]);
    }

    public function startRow(): int
    {
      return 6;
    }
}