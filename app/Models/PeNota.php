<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PeNota extends Model
{
    use HasFactory;

    protected $fillable = [
        'pe_curso_id',
        'user_id',
        'nota',
        'rango_max',
        'docente',
        'fecha',        
    ];

    public function usuario()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function materia()
    {
        return $this->belongsTo(PeCurso::class, 'pe_curso_id');
    }

}
