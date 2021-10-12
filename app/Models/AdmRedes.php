<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\AdmDepartamento;

class AdmRedes extends Model
{
    use HasFactory;

    public function departamento(){
        return $this->belongsTo(AdmDepartamento::class, 'adm_departamento_id');
    }
}
