<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RrhhEvento extends Model
{
    use HasFactory;
    protected $fillable= ['user_id','titulo','descripcion','inicio','fin','todo_dia','color','text_color'];
}
