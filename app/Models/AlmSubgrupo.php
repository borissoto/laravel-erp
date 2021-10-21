<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AlmSubgrupo extends Model
{
    use HasFactory;

    protected $fillable = [       
        'descrip',
        'alm_partida_id',
    ];
}
