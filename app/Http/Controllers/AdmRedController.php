<?php

namespace App\Http\Controllers;

use App\Models\AdmRedes;
use Illuminate\Http\Request;

class AdmRedController extends Controller
{
    public function RedList(){
        $redes = AdmRedes::latest()->get();
        return view('admin.red.red_list', compact('redes'));
    }
}
