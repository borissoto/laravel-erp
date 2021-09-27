<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

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
        return $this->hasOne(AdmDepartamento::class,'id','adm_departamento_id');
    }
}
