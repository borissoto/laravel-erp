<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AlmSolicitudes extends Model
{
    use HasFactory;

    protected $fillable = [
        
        'area',
        'boleta',
        'cargo',
        'estado',
        'fecha_entrega',
        'fecha_solicitud',
        'impresion',
        'imprimido',
        'justificativo',
        'user_id',
     ];

     public function pedidos(){
        return $this->hasMany(AlmPedido::class);
    }

    public function usuario()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
