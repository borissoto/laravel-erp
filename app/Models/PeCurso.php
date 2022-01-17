<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PeCurso extends Model
{
    use HasFactory;

    protected $fillable = [
        'pe_residencia_id',
        'modulo',
        'nom_materia',
        'cod_materia',
        'nota_max',
        'user_id',
     ];
 
    public function parciales(){
         return $this->hasMany(PeParciales::class);
     }

    // public function modulo()
    // {
    //     return $this->belongsTo(PeModulo::class, 'pe_modulo_id');
    // }

    public function usuario()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function docinstructor()
    {
        return $this->belongsTo(User::class, 'instructor');
    }

    public function residencia()
    {
        return $this->belongsTo(PeResidencia::class, 'pe_residencia_id');
    }
}

