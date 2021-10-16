<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class RrhhSupervisiones extends Model
{
    use HasFactory;

    protected $fillable = [      
        'user_id',
        'supervisor_id',
        'fecha',
        'puntaje',
        'recomendacion',
        'financiamiento',
        'justificacion',
        'obs',  
     
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
        'fecha' => 'date:Y-m-d',       
    ];

    public function usuario()
    {
        return $this->belongsTo(User::class, 'supervisor_id');
    }

        
}
