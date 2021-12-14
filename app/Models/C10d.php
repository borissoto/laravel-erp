<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class C10d extends Model
{
    use HasFactory;
    
    protected $table = 'c10d';

    protected $fillable = [
        'establecimiento',
        'medico',
        'fconsulta',
        'hclin',
        'asegurado',
        'apellidosynombres',
        'sexo',
        'fnacimiento',
        'años',
        'meses',
        'dias',
        'bcgm1',
        'penta1m1',
        'penta2m1',
        'penta3m1',
        'polio1m1',
        'polio2m1',
        'polio3m1',
        'antirotavir1m1',
        'antirotavir2m1',
        'antineumococo1m1',
        'antineumococo2m1',
        'antineumococo3m1',
        'influenza1m1',
        'influenza2m1',
        'srp11223m',
        'srp21223m',
        'antiamarilica1223m',
        'penta11223m',
        'penta21223m',
        'penta31223m',
        'penta41223m',
        'polio11223m',
        'polio21223m',
        'polio31223m',
        'polio41223m',
        'influenzau1223m',
        'penta12a3',
        'penta22a4',
        'penta32a5',
        'penta42a6',
        'polio12a7',
        'polio22a8',
        'polio32a9',
        'polio42a10',
        'srp12a11',
        'srp22a12',
        'antiamarilica2a13',
        'penta54',
        'polio54',
        'srp14',
        'srp24',
        'antiamarilica4',
        'dt1',
        'dt2',
        'dt3',
        'dt4',
        'dt5',
        'hepb1tsalud',
        'hepb2tsalud',
        'hepb3tsalud',
        'hepb1tvih',
        'hepb2tvih',
        'hepb3tvih',
        'influenzam60',
        'influenzaenfcron',
        'influenzaembarazadas',
        'influenzatsalud',
        'vph1',
        'vph2',

    ];
}
