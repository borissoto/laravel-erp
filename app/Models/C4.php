<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class C4 extends Model
{
    use HasFactory;

    protected $table = 'c4';

    protected $fillable = [
        'establecimiento',
        'medico',
        'fecha',
        'hclin',
        'noasegurado',
        'apellidosynombres',
        'sexo',
        'nacimiento',
        'años',
        'meses',
        'dias',
        'bja',
        'peso',
        'talla',
        'control',
        'pesotalla',
        'tallaedad',
        'hierro',
        'vitaa',
        'zinc',
        'mebendazol',
        'conselact',
        'lactancia',
        'consealimentacion',
        'alcomplementariomenores1',
        'alcomplementario1a',
        'motricidadgruesa',
        'motricidadfina',
        'audicionlenguaje',
        'personalsocial',
        'consultaexterna',
        'diagnostico',
        'cie',
        'tratamiento',
        'responsable',
        'inyectable',
        'sueros',
        'sutcur',
        'otrasactividades',
        'mortalidad',
        'refycontra',
        'refde',
        'refa',

    ];

}
