<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class C3 extends Model
{
    use HasFactory;

    protected $table = 'c3';

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
        'orientacion',
        'anticonceptivos',
        'insumos',
        'naturales',
        'pap', 
    ];

}
