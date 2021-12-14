<?php

namespace App\Http\Controllers\Helpers;

use App\Http\Controllers\Controller;
use App\Imports\CuadernosImport;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Support\Facades\DB;

class CuadernosImportController extends Controller
{
    //
    public function show()
    {
        $departamentos = DB::table('adm_departamentos')->get();
        return view('backend.cuaderno.import', compact ("departamentos"));
    }
    
    public function getMunicipio($id)
    {
        echo json_encode(DB::table('adm_municipios')->where('adm_departamento_id', $id)->get());
    }

    public function getEstablecimiento($id)
    {
        echo json_encode(DB::table('adm_establecimientos')->where('adm_municipio_id', $id)->get());
    }

    public function getMedico($id)
    {
        echo json_encode(DB::table('users')->where('adm_establecimiento_id', $id)->get());
    }


    public function store(Request $request)
    {
        
        $data = [
            'user' =>  $request->medico,
            'eess' => $request->establecimiento
        ];

        $file = $request->file('file');
        Excel::import(new CuadernosImport($data), $file);

        return back()->withStatus('Archivo excel importado exitosamente!');
    }

}
