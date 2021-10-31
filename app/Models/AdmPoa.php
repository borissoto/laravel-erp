<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AdmPoa extends Model
{
    use HasFactory;

    protected $fillable = [
        'gestiones_id',
        'codigo',
        'operacion',
        'producto',
     ];

    public function viajes()
    {
        return $this->hasMany(AdmViaje::class);
    }
}
