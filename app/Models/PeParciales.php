<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PeParciales extends Model
{
    use HasFactory;

    protected $fillable = [
        'pe_curso_id',
        'parent_id',
        'is_children',
        'gestion',
        'nom_parcial',
        'docente_calificador',

    ];

    public function notas(){
        return $this->hasMany(PeNota::class);
    }

    public function curso()
    {
        return $this->belongsTo(PeCurso::class, 'pe_curso_id');
    }
}

