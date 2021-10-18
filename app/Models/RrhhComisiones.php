<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RrhhComisiones extends Model
{
    use HasFactory;

    protected $fillable = [             

        'user_id',                        
        'tipo_comision',
        'descripcion',
        'viaticos',
        'lugar',
        'fecha_ini',
        'fecha_fin',    
     
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
