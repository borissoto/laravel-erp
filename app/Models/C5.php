<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class C5 extends Model
{
    use HasFactory;

    protected $table = 'c5';

    protected $fillable = [
        'establecimiento',
        'medico',
        'fecha',
        'hclin',
        'asegurado',
        'apellidosynombres',
        'sexo',
        'fechanac',
        'años',
        'meses',
        'dias',
        'peso',
        'talla',
        'temp',
        'fcar',
        'fresp',
        'pa',
        'ingreso',
        'dxingresodes',
        'dxingreso',
        'cirugiamed',
        'anestesia',
        'dxegresodesc',
        'dxegreso',
        'fegreso',
        'estadia',
        'cama',
        'tipoegreso',
        'mortalidad',
        'refycontraref',
    ];
}
