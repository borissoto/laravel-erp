<?php

namespace App\Http\Controllers;

use App\Models\RrhhAntigeno;
use App\Models\RrhhBrigada;
use App\Models\RrhhRastrillaje;
use App\Models\RrhhVacuna;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    //
    public function dashboard(Request $request)
    {
        $user = Auth::user();
        $brigadas = RrhhBrigada::count(); 
        $antigenos = RrhhAntigeno::count(); 
        $rastrillajes = RrhhRastrillaje::count(); 
        $vacunas = RrhhVacuna::count(); 
        
        return view('admin.index', compact('user', 'brigadas', 'antigenos', 'rastrillajes', 'vacunas'));
    }
}
