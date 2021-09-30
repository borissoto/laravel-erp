<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\AdmUnidades;

class AdmCargo extends Model
{
    use HasFactory;

    public function usuario()
    {
        return $this->belongsTo(User::class);
    }

    public function unidad()
    {
        return $this->belongsTo(AdmUnidades::class,'adm_unidades_id');
    }

}
