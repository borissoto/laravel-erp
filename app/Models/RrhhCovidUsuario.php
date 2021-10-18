<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RrhhCovidUsuario extends Model
{
    use HasFactory;

    protected $fillable = [             

        'user_id',            
        'dosis',
        'nom_vacuna',
        'fecha',
            
     
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
        // 'fecha_ini' => 'date:Y-m-d',       
    ];

    public function usuario()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

}
