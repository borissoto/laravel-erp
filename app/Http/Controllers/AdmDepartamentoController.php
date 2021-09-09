<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdmDepartamentoController extends Controller
{
    public function AllDepartamento(){
        return view('admin.departamento.index');
    }
}
