<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RrhhRastrillaje extends Model
{
    use HasFactory;

    protected $fillable = [
        'adm_municipio_id',
        'rrhh_brigada_id',
        'atendidos',
        'sospechosos',
        'confirmados',
        'contactos',
        'referidos',
        'fallecidos',
        'fecha',
        'user_id',
    ];

    public function municipio()
    {
        return $this->belongsTo(AdmMunicipio::class, 'adm_municipio_id');
    }

    public function brigada()
    {
        return $this->belongsTo(RrhhBrigada::class, 'rrhh_brigada_id');
    }

    public function usuario()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
