<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AdmViaje extends Model
{
    use HasFactory;

    protected $fillable = [   
        'cite',
        'lugar',
        'adm_departamento_id',
        'adm_poa_id',
        'fecha_salida',
        'fecha_retorno',
        'duracion',
        'transporte',
        'estado',
        'user_id',
        'coordinador_id',
     ];


     public function usuario()
     {
         return $this->belongsTo(User::class, 'user_id');
     }

     public function coordinador()
     {
         return $this->belongsTo(User::class, 'coordinador_id');
     }

     public function poa()
     {
         return $this->belongsTo(AdmPoa::class, 'adm_poa_id');
     }

     public function departamento()
     {
         return $this->belongsTo(AdmDepartamento::class, 'adm_departamento_id');
     }


}
