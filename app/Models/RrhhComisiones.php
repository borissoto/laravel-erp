<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RrhhComisiones extends Model
{
    use HasFactory;

    protected $fillable = [             

       
    'user_id',
    'adm_departamento_id',
    'cite',
    'descripcion',
    'nota_interna',
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

    public function comisionuser(){
        return $this->hasMany(RrhhComisionUser::class);
    }  

    public function departamento()
    {
        return $this->belongsTo(AdmDepartamento::class, 'adm_departamento_id');
    }
}
