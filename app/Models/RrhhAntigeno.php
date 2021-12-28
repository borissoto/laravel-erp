<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RrhhAntigeno extends Model
{
    use HasFactory;

    protected $fillable = [        
        'adm_municipio_id',
        'rrhh_brigada_id',
        'prueba',
        'tipo',
        'muestras',
        'positivos',
        'negativos',
        'referencias',
        'kits',
        'canastas',
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
