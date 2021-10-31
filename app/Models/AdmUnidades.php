<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\AdmCargo;

class AdmUnidades extends Model
{
    use HasFactory;

    protected $fillable = [        
        'nom_unidad',
        'sigla',
     ];

    public function cargos(){
        return $this->hasMany(AdmCargo::class);
    }
}
