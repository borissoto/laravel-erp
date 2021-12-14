<?php

namespace App\Http\Controllers\Helpers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CuadernosController extends Controller
{
    //Listado de Cuadernos
    public function c1(){
        return view('backend.cuaderno.cuaderno_c1');
    }  
    public function c2(){
        return view('backend.cuaderno.cuaderno_c2');
    }  
    public function c3(){
        return view('backend.cuaderno.cuaderno_c3');
    }  
    public function c4(){
        return view('backend.cuaderno.cuaderno_c4');
    }  
    public function c5(){
        return view('backend.cuaderno.cuaderno_c5');
    }  
    public function c6(){
        return view('backend.cuaderno.cuaderno_c6');
    }  
    public function c9(){
        return view('backend.cuaderno.cuaderno_c9');
    }  
    public function c10d(){
        return view('backend.cuaderno.cuaderno_c10d');
    }  
    public function c10f(){
        return view('backend.cuaderno.cuaderno_c10f');
    }  
    public function c11(){
        return view('backend.cuaderno.cuaderno_c11');
    }  
    public function c12(){
        return view('backend.cuaderno.cuaderno_c12');
    }  
}
