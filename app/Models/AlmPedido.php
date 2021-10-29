<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AlmPedido extends Model
{
    use HasFactory;

    protected $fillable = [        
        'alm_articulo_id',
        'cantidad',
        'devuelto',
        'fecha_devol',
        'alm_solicitudes_id',
     ];

     public function solicitud()
     {
         return $this->belongsTo(AlmSolicitudes::class, 'alm_solicitudes_id');
     }     

     public function articulo()
     {
         return $this->belongsTo(AlmArticulo::class, 'alm_articulo_id');
     }     

}


