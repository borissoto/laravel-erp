<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdmEstablecimientoController extends Controller
{
    public function EessAdd(){
        $departamentos = AdmDepartamento::latest()->get();
        $provincias = AdmProvincia::latest()->get();
        $municipios = AdmMunicipio::latest()->get();
        $redes = AdmRed::latest()->get();
        
        return view('backend.rrhh.Eess_add', compact('departamentos', 'provincias', 'municipios'));
    }


    public function EessEdit($id){
        $Eesss = Eess::findOrFail($id);
        return view('backend.rrhh.Eess_edit', compact('Eesss'));
    }

    public function EessList(){
        $Eesss = Eess::latest()->get ();
        return view('backend.Eess.Eess_list', compact('Eesss'));
    }
}
