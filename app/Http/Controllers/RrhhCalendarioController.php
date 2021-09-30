<?php

namespace App\Http\Controllers;

use App\Models\RrhhCalendario;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class RrhhCalendarioController extends Controller
{
    public function index()
    {
        //
        $id = Auth::user()->id;
        $user = User::find($id);
        // $event = RrhhCalendario::latest()->get();          
        
        return view('backend.calendario.calendario_index', compact('user'));
    }

    public function eventos(){
        $event = RrhhCalendario::latest()->get();
        return response()->json($event);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $id = Auth::user()->id;
        $user = User::find($id);        

        $validator = Validator::make($request->all(),[            
            'title'=>'required',
            // 'descripcion'=>'required',
            'start'=>'required',
            'end'=>'required',
            'allDay'=>'required',
            'color'=>'required',
            'backgroundColor'=>'required',
        ]);
        if($validator->failed()){
            return redirect()->back();
        }else{
            $data = $request->all();
            $data['user_id'] = $user->id;
            RrhhCalendario::create($data);
            return redirect()->back();
        }

    }
}
