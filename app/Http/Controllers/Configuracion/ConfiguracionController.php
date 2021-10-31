<?php

namespace App\Http\Controllers\Configuracion;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ConfiguracionController extends Controller
{
    //

    public function gestiones()
    {
        //
        return view('backend.configuracion.gestiones_index');
    }

    public function unidades()
    {
        //
        return view('backend.configuracion.unidades_index');
    }

    public function poa()
    {
        //
        return view('backend.configuracion.poa_index');
    }
}
