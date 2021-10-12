<?php

namespace App\Http\Controllers;

use App\Models\AdmEesstipo;
use Illuminate\Http\Request;
use Carbon\Carbon;

class AdmEesstipoController extends Controller
{
    public function EesstipoStore(Request $request){
        $request->validate([
            'tipo_eess'=> 'required',
        ],[
            'tipo_eess.required'=> 'Ingrese Tipo de EeSs',            
        ]);

        AdmEesstipo::insert([
            'tipo_eess'=> $request->tipo_eess,
            'abreviatura'=> $request->abreviatura,
            'created_at'=> Carbon::now(),
        ]);

        $notification = array(
            'message' => 'Tipo de EESS guardado!',
            'alert-type' => 'success'
        );
                
        return redirect()->action([AdmEesstipoController::class, 'EesstipoList']);
    }

    public function EesstipoAdd(Request $request){
        return view('backend.eess.eess_tipo_add');
    }


    public function EessEdit($id){
        $eess = AdmEesstipo::findOrFail($id);
        return view('backend.eess.eess_tipo_edit', compact('eess_tipo'));
    }

    public function EesstipoList(){
        $eess_tipos = AdmEesstipo::latest()->get();
        return view('backend.eess.eess_tipo_list', compact('eess_tipos'));
    }
}
