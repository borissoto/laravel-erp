<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RrhhEstablecimientoUser extends Model
{
    use HasFactory;

    protected $fillable = [
        'adm_establecimiento_id',               
        'user_id',        
        'estado',
        'fecha_ini',
        'fecha_fin',
    ];

    public function establecimiento(){
        return $this->belongsTo(AdmEstablecimiento::class,'adm_establecimiento_id');
    }

    public function user(){
        return $this->belongsTo(User::class,'user_id');
    }
}
