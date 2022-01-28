<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PeMatriculaciones extends Model
{
    use HasFactory;

    protected $fillable = [
        'pe_residente_id',
        'pe_residencia_id',        
    ];

    public function residente()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function residencia()
    {
        return $this->belongsTo(PeResidencia::class, 'pe_residencia_id');
    }
}
