<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RrhhComisionUser extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'rrhh_comisiones_id',        
    ];

    public function usuario()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function comision()
    {
        return $this->belongsTo(RrhhComisiones::class,'rrhh_comisiones_id');
    }

}
