<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\RrhhBrigada;
use App\Models\RrhhAntigeno;

class AdmMunicipio extends Model
{
    // use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'adm_departamento_id',
        'adm_provincia_id',
        'municipio',
        'codigo_municipal',
    ];

    public function departamento(){
        return $this->belongsTo(AdmDepartamento::class,'adm_departamento_id');
    }

    public function brigadas(){
        return $this->hasMany(RrhhBrigada::class);
    }

    public function antigeno(){
        return $this->hasMany(RrhhAntigeno::class);
    }
   
    public function ratrillajes(){
        return $this->hasMany(RrhhRastrillaje::class);
    }

    public function vacunas(){
        return $this->hasMany(RrhhVacuna::class);
    }
   
}
