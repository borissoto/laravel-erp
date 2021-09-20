<?php

namespace App\Http\Controllers;

use App\Models\AdmEesstipo;
use Illuminate\Http\Request;

class AdmEesstipoController extends Controller
{
    public function EessAdd(){
                
        return view('backend.eess.eess_tipo_add', compact('eess_tipo'));
    }


    public function EessEdit($id){
        $eess = AdmEesstipo::findOrFail($id);
        return view('backend.eess.eess_tipo_edit', compact('eesss_tipo'));
    }

    public function EesstipoList(){
        //$eess_tipo = AdmEesstipo::latest()->get();
        return view('backend.eess.eess_tipo_list');
    }
}
