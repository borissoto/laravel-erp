<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AlmArticulo extends Model
{
    use HasFactory;

    protected $fillable = [        
        'codigo',        
        'descrip',
        'alm_unidad_id',
        'marca',
        'existencia_min',
        'clase',
        'alm_subgrupo_id',                
        'user_id',
    ];

    public function ingresos(){
        return $this->hasMany(AlmIngreso::class);
    }

    public function subgrupo()
    {
        return $this->belongsTo(AlmSubgrupo::class, 'alm_subgrupo_id');
    }

    public function unidad()
    {
        return $this->belongsTo(AlmMedida::class, 'alm_unidad_id');
    }

    public function pedidos(){
        return $this->hasMany(AlmPedido::class);
    }

}
