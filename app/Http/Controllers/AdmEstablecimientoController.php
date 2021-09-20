<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AdmDepartamento;
use App\Models\AdmEstablecimiento;
use App\Models\AdmProvincia;
use App\Models\AdmMunicipio;
use App\Models\AdmRed;



class AdmEstablecimientoController extends Controller
{
    public function EessAdd(){
        $departamentos = AdmDepartamento::latest()->get();
        $provincias = AdmProvincia::latest()->get();
        $municipios = AdmMunicipio::latest()->get();
        $redes = AdmRed::latest()->get();
        
        return view('backend.eess.eess_add', compact('departamentos', 'provincias', 'municipios', 'redes'));
    }


    public function EessEdit($id){
        $eesss = AdmEstablecimiento::findOrFail($id);
        return view('backend.eess.eess_edit', compact('eesss'));
    }

    public function EessList(){
        $eesss = AdmEstablecimiento::latest()->get();
        return view('backend.eess.eess_list', compact('eesss'));
    }
}
