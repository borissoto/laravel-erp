<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class AdmRed extends Model
{
    // use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'adm_departamento_id',
        'adm_provincia_id',
        'adm_municipo_id',
        'red',        
    ];
}
