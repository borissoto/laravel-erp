<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AdmDepartamento;
use App\Models\AdmEesstipo;
use App\Models\AdmEstablecimiento;
use App\Models\AdmProvincia;
use App\Models\AdmMunicipio;
use App\Models\AdmRedes;



class AdmEstablecimientoController extends Controller
{
    public function EessAdd(){
        $departamentos = AdmDepartamento::latest()->get();        
        $municipios = AdmMunicipio::latest()->get();
        $redes = AdmRedes::latest()->get();
        $eess_tipos = AdmEesstipo::latest()->get();
        
        return view('backend.eess.eess_add', compact('departamentos', 'provincias', 'municipios', 'redes', 'eess_tipos'));
    }


    public function EessEdit($id){
        $eesss = AdmEstablecimiento::findOrFail($id);
        return view('backend.eess.eess_edit', compact('eesss'));
    }

    public function EessList(){
        $establecimientos = AdmEstablecimiento::latest()->paginate(5);
        return view('backend.eess.eess_list', compact('establecimientos'));
    }

    public function EessView($id){
        $establecimiento = AdmEstablecimiento::findOrFail($id);       
        return view('backend.eess.eess_view', compact('establecimiento'));
    } 
}
