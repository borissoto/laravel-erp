<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RrhhAntigeno extends Model
{
    use HasFactory;


    public function municipio()
    {
        return $this->belongsTo(AdmMunicipio::class, 'adm_municipio_id');
    }
}
