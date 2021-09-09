<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdmMunicipioController extends Controller
{
    public function AllMunicipio(){
        return view('admin.municipio.index');
    }
}
