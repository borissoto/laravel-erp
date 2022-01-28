<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\PeCurso;
use App\Models\PeMatriculaciones;
use App\Models\PeResidente;
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
    public function evaluaciones(){
        return view('backend.planestudio.pe_parcial');
    } 
    
    public function residentes(){
        return view('backend.planestudio.pe_residente');
    } 

    public function matriculaciones(){
        return view('backend.planestudio.pe_matriculacion');
    }

    public function materias(){
        return view('backend.planestudio.pe_materia');
    }  

    // public function matestudiantes($id){
    //     // dd($id);
    //     // $user = User::findOrFail($id);
    //     $users = PeMatriculaciones::where('pe_residencia_id', $id)->get();
    //     // dd($users);
    //     // $curso = AdmCargo::where('estado',1)->get();
    //     return view('backend.planestudio.pe_mat_estudiantes', compact('users'));
    // }  

    public function matestudiantes($id){
        $curso = PeCurso::findOrFail($id);
        return view('backend.planestudio.pe_materia_estudiantes', compact('curso'));
    }  
}
