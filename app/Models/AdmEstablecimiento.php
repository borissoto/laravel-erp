<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AdmEstablecimiento extends Model
{
    use HasFactory;

    protected $fillable = [             

        'adm_departamento_id',   
        'adm_municipio_id',
        'cod_red',
        'tipo',
        'nom_establecimiento',
        'subsector',
        'ambito',
        'dependencia',
        'nivel',
        'codsnis',
        'lat',
        'long',
        'soaps',
        'estado',
     
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
        // 'fecha_ini' => 'date:Y-m-d',       
    ];

    public function municipio(){
        return $this->hasOne(AdmMunicipio::class,'id','adm_municipio_id');
    }

    public function departamento(){
        return $this->hasOne(AdmDepartamento::class,'id','adm_departamento_id');
    }

    public function comunidades(){
        return $this->hasMany(AdmComunidades::class);
    }

    public function user(){
        return $this->belongsTo(User::class);
    }

    
}
