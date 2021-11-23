<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PeCurso extends Model
{
    use HasFactory;

    protected $fillable = [
        'pe_modulo_id',
        'user_id',
        'instructor',
        'nom_curso',
     ];
 
    public function parciales(){
         return $this->hasMany(PeParciales::class);
     }

    public function modulo()
    {
        return $this->belongsTo(PeModulo::class, 'pe_modulo_id');
    }

    public function usuario()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function docinstructor()
    {
        return $this->belongsTo(User::class, 'instructor');
    }
}

