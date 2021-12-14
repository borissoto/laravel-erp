<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class C2 extends Model
{
    use HasFactory;

    protected $table = 'c2';

    protected $fillable = [    
        'establecimiento',
        'medico',
        'fecha',
        'hclin',
        'noasegurado',
        'apellidosynombre',
        'nacimiento',
        'años',
        'meses',
        'dias',
        'beneficio',
        'peso',
        'talla',
        'fum',
        'nutricion',
        'prenatal',
        '4cpn',
        'pap',
        'pappos',
        'ivaa',
        'ivaapos',
        'mamapos',
        'hemorragia1mit',
        'hemorragiaparto',
        'embsepsis',
        'preeclamsiasevera',
        'eclamsia',
        'atencionparto',
        'tipoparto',
        'anestesia',
        'reciennac',
        'partera',
        'partodom',
        'malformacion',
        'mujer1549con4cpn',
        'lactanciainmediata',
        'rnapegoprecoz',
        'controlpostparto',
        'hierro90',
        'vitap',
        'mortalidadfuera',
        'refcontraref',
        'refde',
        'refa',
    ];
}
