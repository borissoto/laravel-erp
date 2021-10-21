<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AlmPartida extends Model
{
    use HasFactory;

    protected $fillable = [
        'descrip',
        'detalle',
        'numero',
        'partida',
        'tipo',
        'vigente',
    ];
}
