<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PlanEstudiosController extends Controller
{
    //Plan estudios
    public function residencias(){
        return view('backend.planestudio.pe_residencia');
    }  
    public function modulos(){
        return view('backend.planestudio.pe_modulo');
    }  
    public function cursos(){
        return view('backend.planestudio.pe_curso');
    } 
    
    public function residentes(){
        return view('backend.planestudio.pe_residente');
    } 

    public function matriculaciones(){
        return view('backend.planestudio.pe_matriculacion');
    }  
}
