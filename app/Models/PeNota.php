<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PeNota extends Model
{
    use HasFactory;

    protected $fillable = [
        
        'pe_parcial_id',
        'pe_residente_id',
        'nota',
        'fecha',
        'docente_calificador',

    ];

    public function parcial()
    {
        return $this->belongsTo(PeParciales::class, 'pe_parcial_id');
    }

    public function estudiante()
    {
        return $this->belongsTo(PeResidente::class, 'pe_residente_id');
    }

}
