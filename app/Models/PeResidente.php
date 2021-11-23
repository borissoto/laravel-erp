<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PeResidente extends Model
{
    use HasFactory;

    protected $fillable = [
        'nombres',
        'ap_paterno',
        'ap_materno',
        'ci',
        'adm_departamento_id',
        'sexo',
        'fecha_nac',
        'telefono',
        'domicilio',
        'universidad',
        'grado',
        'obs',
        'estado',     
    ];

    public function matriculaciones(){
        return $this->hasMany(PeMatriculaciones::class);
    }  
}