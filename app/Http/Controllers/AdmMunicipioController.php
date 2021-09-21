<?php

namespace App\Http\Controllers;

use App\Models\AdmMunicipio;
use Illuminate\Http\Request;

class AdmMunicipioController extends Controller
{
    public function MunicipioList(){
        $municipios = AdmMunicipio::latest()->get();
        return view('admin.municipio.municipio_list', compact('municipios'));
    }
}
