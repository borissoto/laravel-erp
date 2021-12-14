<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class C1 extends Model
{
    use HasFactory;

    protected $table = 'c1';

    protected $fillable = [

        'establecimiento',
        'medico',
        'fecha',
        'hclin',
        'noasegurado',
        'apellidosynombre',
        'sexo',
        'nacimiento',
        'años',
        'meses',
        'dias',
        'consulta',
        'peso',
        'talla',
        'temp',
        'fcard',
        'fresp',
        'presart',
        'nutricion',
        'motivo',
        'exfis',
        'inyecta',
        'sueros',
        'suturas',
        'otrasact',
        'dxdesc',
        'dxprin',
        'tto',
        'mortalidad',
        'referencias',
        'referido',
        'referidoa',
        'mayor60',
    ];
}
