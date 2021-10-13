<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AdmComunidades extends Model
{
    use HasFactory;

    protected $fillable = [
        'adm_establecimiento_id',
        'nom_comunidad', 
        'pioc', 
        'nacion', 
        'habitantes',
        'familias',
        'carpetizacion',
        'tiempo_viaje', 
        'lat', 
        'long',
        'user_id',
    ];

    public function establecimiento(){
        return $this->belongsTo(AdmEstablecimiento::class,'adm_establecimiento_id');
    }
}
