<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdmRedController extends Controller
{
    public function AllRed(){
        return view('admin.red.index');
    }
}
