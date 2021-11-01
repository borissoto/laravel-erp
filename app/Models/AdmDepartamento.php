<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class AdmDepartamento extends Model
{
    // use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'departamento',
        'abreviatura',        
    ];

    public function municipios(){
        return $this->hasMany(AdmMunicipio::class);
    }

    public function redes(){
        return $this->hasMany(AdmRedes::class);
    }

    public function comisiones(){
        return $this->hasMany(RrhhComisiones::class);
    }
}
