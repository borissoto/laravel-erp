<?php

namespace App\Http\Controllers;

use App\Models\RrhhBrigada;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    //
    public function dashboard(Request $request)
    {
        $user = Auth::user();
        $brigadas = RrhhBrigada::count(); 
        
        return view('admin.index', compact('user', 'brigadas'));
    }
}
