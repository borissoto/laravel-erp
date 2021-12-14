<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class C12 extends Model
{
    use HasFactory;

    protected $table = 'c12';

    protected $fillable = [
        'establecimiento',
        'medico',
        'fconsulta',
        'hclin',
        'asegurado',
        'apellidosynombres',
        'riada',
        'riadapersonasafectadas',
        'riadafallecidos',
        'heladagranizonevada',
        'heladagranizonevadaafectados',
        'heladagranizonevadafallecidos',
        'incendio',
        'incendioafectados',
        'incendiofallecidos',
        'deslizamientosismoterremoto',
        'deslizamientosismoterremotoafectados',
        'deslizamientosismoterremotofallecidas',
        'inundacion',
        'inundacionafectados',
        'inundacionfallecidos',
        'otros',
        'otrosafectados',
        'otrosfallecidos',
    ];
}
