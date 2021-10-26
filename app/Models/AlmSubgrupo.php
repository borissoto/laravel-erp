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

    public function partida()
    {
        return $this->belongsTo(AlmPartida::class, 'alm_partida_id');
    }

    public function articulos(){
        return $this->hasMany(AlmArticulo::class);
    }
}
