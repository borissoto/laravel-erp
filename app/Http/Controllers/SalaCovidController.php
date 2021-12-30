<?php

namespace App\Http\Controllers;

use App\Models\RrhhRastrillaje;
use App\Models\RrhhVacuna;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SalaCovidController extends Controller
{
    //
    public function covid()
    {
        // $positivos = DB::table('rrhh_rastrillajes')
        // ->select(DB::raw("DATE(fecha) as name"), DB::raw('count(*) as data')) 
        // ->groupBy('name')
        // ->get();

        // $vacunas = DB::table('rrhh_vacunas')
        // ->select(DB::raw("MONTH(fecha) as name"), DB::raw('sum(dosis1) as data')) 
        // ->groupBy('name')
        // ->get();

        // $vacunas = DB::table('rrhh_antigenos')
        // ->select(DB::raw("MONTH(fecha) as name"), DB::raw('count(*) as data')) 
        // ->groupBy('name')
        // ->get();

        // $antigenos = DB::table('rrhh_antigenos')
        // ->select(DB::raw("MONTH(fecha) as name"), DB::raw('sum(positivos) as posi'), DB::raw('sum(negativos) as neg')) 
        // ->groupBy('name')
        // ->get();


        // $positivos = RrhhRastrillaje::select(DB::raw("COUNT(*) AS count"))
        // ->whereYear("fecha", date('Y'))
        // ->groupBy(DB::raw("Date(fecha)"))
        // ->pluck('count');

        // $puntos = [];
        // foreach ($positivos as $positivo ) {
        //     $puntos[] = ['name' => $positivo['sospechosos'], 'y'=>$positivo['fecha']];
        // }
        // dd(json_encode($puntos));
        // return view('frontend.salacovid.salacovid', ["data" => json_encode($puntos)]);
        
        // dd(json_encode($vacunas));
        return view('frontend.salacovid.salacovid');
    }

    public function positivos()
    {
        $positivos = DB::table('rrhh_rastrillajes')
        ->select(DB::raw('DATE(fecha) AS name'), DB::raw('sum(sospechosos) AS data')) 
        ->groupBy('name')
        ->orderBy('name', 'ASC')
        ->get();   
        echo json_encode($positivos);
    }

    public function atendidos()
    {
        $positivos = DB::table('rrhh_rastrillajes')
        ->select(DB::raw('DATE(fecha) AS name'), DB::raw('sum(atendidos) AS data')) 
        ->groupBy('name')
        ->orderBy('name', 'ASC')
        ->get();   
        echo json_encode($positivos);
    }

    public function vacunas()
    {
        $vacunas = DB::table('rrhh_vacunas')
        ->select(DB::raw("DATE(fecha) as name"), DB::raw('sum(dosis1) as dosisuno'), DB::raw('sum(dosis2) as dosisdos'))
        ->groupBy('name')
        ->orderBy('name', 'ASC')
        ->get();
        echo json_encode($vacunas);
        
    }

    public function antigenos()
    {
        $antigenos = DB::table('rrhh_antigenos')
        ->select(DB::raw("MONTH(fecha) as name"), DB::raw('sum(positivos) as posi'), DB::raw('sum(negativos) as neg')) 
        ->groupBy('name')
        ->get(); 
        echo json_encode($antigenos);
    }

    // public function antigenos()
    // {
    //     $antigenos = DB::table('rrhh_antigenos')
    //     ->select(DB::raw("MONTH(fecha) as name"), DB::raw('COUNT(positivos) as posi') ) 
    //     ->groupBy('name')
    //     ->get();

    //     echo json_encode($antigenos);
    // }
}
