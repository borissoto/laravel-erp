<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade as PDF;

class AlmacenController extends Controller
{
    //Administracion
    public function partidas(){
        return view('backend.almacen.alm_adm_partida');
    }   
    public function subgrupos(){
        return view('backend.almacen.alm_adm_subgrupo');
    }   
    public function articulos(){
        return view('backend.almacen.alm_adm_articulo');
    }   
    public function medidas(){
        return view('backend.almacen.alm_adm_medida');
    }   
    //Ingresos
    public function ingresos(){
        return view('backend.almacen.alm_ingresos');
    }   
    public function ingresosAdd(){
        return view('backend.almacen.alm_ingresos_add');
    }   
    // salidas
    public function solicitudes(){
        return view('backend.almacen.alm_sal_solicitudes');
    }   
    public function entregados(){
        return view('backend.almacen.alm_sal_entregados');
    }   
    public function saldos(){
        return view('backend.almacen.alm_sal_saldos');
    } 
      
    //Solicitudes
    public function solicitud(){
        return view('backend.almacen.alm_solic_material');
    }  

    public function sendPrint()       
    {
        $var = [ 
            'Amigos' => 'Amigos',
        ];
        $pdf = PDF::loadView('reportes.almacen_solicitud', $var);
        return $pdf->stream('solicitud.pdf', array('Attachment'=>false));
        
    }


}
