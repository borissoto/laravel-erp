<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WebArticulo extends Model
{
    use HasFactory;

    //Relacion uno a muchos (inversa)
    public function usuario()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function articulo()
    {
        return $this->belongsTo(WebCategoria::class, 'user_id');
    }

    // Relacion uno a uno polimorfica
    public function image()
    {
        return $this->morphOne(WebImage::class, 'imageable');
    }

}
