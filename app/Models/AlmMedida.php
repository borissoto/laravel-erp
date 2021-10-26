<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AlmMedida extends Model
{
    use HasFactory;

    protected $fillable = [
       'unidad',
       'abrev',
       
    ];

    public function articulos(){
        return $this->hasMany(AlmArticulo::class);
    }

}
