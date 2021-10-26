<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AlmComprobante extends Model
{
    use HasFactory;

    protected $fillable = [
        'corte',
        'fecha',
        'nro_factura',
        'numero',
        'obs',
        'proveedor',
        'seccion',
        'modalidad_ingreso',
        'alm_doc_almacenes_id',
        'user_id',
        
     ];

     public function ingresos(){
        return $this->hasMany(AlmIngreso::class);
    }


}
