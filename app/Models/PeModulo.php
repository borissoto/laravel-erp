<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PeModulo extends Model
{
    use HasFactory;

    protected $fillable = [
        'pe_residencia_id',
        'nom_modulo',
        'porcentaje',
        
     ];
 
    public function cursos(){
         return $this->hasMany(PeCurso::class);
    }

    public function residencia()
    {
        return $this->belongsTo(PeResidencia::class, 'pe_residencia_id');
    }
}
