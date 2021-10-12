<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AdmEstablecimiento extends Model
{
    use HasFactory;

    public function municipio(){
        return $this->hasOne(AdmMunicipio::class,'id','adm_municipio_id');
    }

    public function departamento(){
        return $this->hasOne(AdmDepartamento::class,'id','adm_departamento_id');
    }

    public function comunidades(){
        return $this->hasMany(AdmComunidades::class);
    }
}
