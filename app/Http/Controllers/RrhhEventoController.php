<?php

namespace App\Http\Controllers;

use App\Models\RrhhEvento;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class RrhhEventoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $id = Auth::user()->id;
        $user = User::find($id);
        $event = RrhhEvento::latest()->get();          
        
        return view('backend.calendario.calendario_index', compact('user'));
    }

    public function eventos(){
        $event = RrhhEvento::latest()->get();
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
            'titulo'=>'required',
            'descripcion'=>'required',
            'inicio'=>'required',
            'fin'=>'required',
            'todo_dia'=>'required',
            'color'=>'required',
            'text_color'=>'required',
        ]);
        if($validator->failed()){
            return redirect()->back();
        }else{
            $data = $request->all();
            $data['user_id'] = $user->id;
            RrhhEvento::create($data);
            return redirect()->back();
        }

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
