<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AlmIngreso extends Model
{
    use HasFactory;

    protected $fillable = [
        'alm_articulo_id',
        'cantidad',
        'alm_comprobante_id',
        'fecha_venc',
        'user_id',
        'valor_total',
        'precio_unitario',
     ];
}
