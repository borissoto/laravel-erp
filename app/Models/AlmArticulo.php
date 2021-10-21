<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AlmArticulo extends Model
{
    use HasFactory;

    protected $fillable = [        
        'alm_clase_id',
        'descrip',
        'existencia_min',
        'alm_subgrupo_id',        
        'ubicacion',
        'unidad',
        'user_id',
    ];
}
