<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PeResidencia extends Model
{
    use HasFactory;

    protected $fillable = [
        'nom_residencia',
        'nivel',
        'gestion_ini',
        'mes_ini',
        'gestion_fin',
        'mes_fin',
        'estado',
        
     ];
 
     public function modulos(){
         return $this->hasMany(PeModulo::class);
     }

     public function matriculaciones(){
         return $this->hasMany(PeMatriculaciones::class);
     }

     public function tree()
     {
         $residencias = PeResidencia::get();

        foreach($residencias as $residencia){
              $residencia->children = PeModulo::where('pe_residencia_id', $residencia->id);
        }

         return $residencias;
     }
}


