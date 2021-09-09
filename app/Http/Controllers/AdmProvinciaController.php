<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdmProvinciaController extends Controller
{
    public function AllProvincia(){
        return view('admin.provincia.index');
    }
}
