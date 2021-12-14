<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class C9 extends Model
{
    use HasFactory;

    protected $table = 'c9';

    protected $fillable = [
        'establecimiento',
        'medico',
        'fecha',
        'hclin',
        'asegurado',
        'apellidosynombre',
        'visitasfamiliares',
        'otros',
        'promotores',
        'dirigentes',
        'adultos',
        'jovenes',
        'escolares',
        'reunioneslugar',
        'temaactividad',
        'actividadeducativa',
        'feria',
        'rals',
        'rclsalud',
        'comunidadescai',
        'otro',
        'odontologo',
        'auxiliar',
        'enfermeras',
        'medicos',
        'duracionsupervision',
        'lugar',
        'capacitacion',
        'supervision1',
        'acomunidad',
        'familiasnuevascarpetizadas',
        'carpetizadasconseguimiento',
        'cai',
        'supervision',
        'auditoriasint',
        'autoevaluaciones',
        'quejasusuarios',
        'sugerenciasagradecimientos',
        'visitasfamiliaresplanificadas',
        'muertematernadentro',
        'muertematernafuera',
    ];
}
