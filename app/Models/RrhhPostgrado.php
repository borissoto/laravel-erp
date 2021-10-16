<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RrhhPostgrado extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id' ,
        'tipo_postgrado',
        'nom_postgrado',
        'universidad',
        'fecha_ini', 
        'fecha_fin', 
     
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
              

    ];

    public function usuario()
    {
        return $this->belongsTo(User::class);
    }

    
}
