<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class C6 extends Model
{
    use HasFactory;

    protected $table = 'c6';

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
        'ingreso',
        'tratamiento',
        'egreso',
        'sitegreso',
        'fallecimiento',
        'inyectables',
        'sueros',
        'curacionessuturas',
        'referidoa',
    ];
}
