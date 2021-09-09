<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class AdmProvincia extends Model
{
    // use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'adm_departamento_id',
        'provincia',                
    ];
}
