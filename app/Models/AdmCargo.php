<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AdmCargo extends Model
{
    use HasFactory;

    public function usuariocargo()
    {
        return $this->belongsTo('App\User', 'users_id');
    }

    public function unidad()
    {
        return $this->hasOne(AdmUnidades::class,'id','adm_unidades_id');
    }

}
