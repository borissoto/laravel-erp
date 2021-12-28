<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class RrhhBrigada extends Model
{
    use HasFactory;

    protected $fillable = [
        'adm_municipio_id',
        'nom_brigada',
        'tipo',
        'user_id',        
        'integrantes',
    ];

    //Relacion uno a muchos (inversa)
    public function usuario()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function municipio()
    {
        return $this->belongsTo(AdmMunicipio::class, 'adm_municipio_id');
    }

    public function antigenos(){
        return $this->hasMany(RrhhAntigeno::class);
    }

    public function rastrillajes(){
        return $this->hasMany(RrhhRastrillaje::class);
    }

    public function vacunas(){
        return $this->hasMany(RrhhVacuna::class);
    }
}
