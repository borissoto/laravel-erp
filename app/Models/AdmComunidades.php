<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AdmComunidades extends Model
{
    use HasFactory;

    public function establecimiento(){
        return $this->belongsTo(AdmEstablecimiento::class,'adm_establecimiento_id');
    }
}
