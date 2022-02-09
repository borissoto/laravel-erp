<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gestiones extends Model
{
    use HasFactory;

    
    protected $fillable = [
        'gestion',
        'is_active',        
     ];

    public function poas()
    {
        return $this->hasMany(AdmPoa::class);
    }
}
