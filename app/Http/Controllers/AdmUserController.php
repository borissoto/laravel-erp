<?php

namespace App\Http\Controllers;

use App\Models\AdmCargo;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use App\Models\AdmDepartamento;
use App\Models\AdmEstablecimiento;
use App\Models\AdmProvincia;
use App\Models\AdmMunicipio;
use Carbon\Carbon;
use Illuminate\Support\Facades\Session;

class AdmUserController extends Controller
{
    // public function logout(){
    //     Session::flush();
    //     Auth::logout();
    //     return Redirect('/');
    // }

    public function UserProfile(){
        $id = Auth::user()->id;
        $user = User::find($id);
        $cargo = AdmCargo::where('estado',1)->first();

        // $cargo = AdmCargo::where(['user_id'=> $id, 'estado'=>1])->first();
        

        return view('backend.user.user_profile', compact('user', 'cargo'));
    }

    public function UserProfileEdit(){
        $id = Auth::user()->id;
        $user = User::find($id);

        $cargo = AdmCargo::where('estado',1)->first();
        // $cargo = AdmCargo::where(['user_id'=> $user, 'estado'=>1])->get();

        return view('backend.user.user_profile_edit ', compact('user','cargo'));
         
    }

    public function UserProfileStore(Request $request){
        $id = Auth::user()->id;
        $user = User::find($id);
        $user->name = $request->name;
        $user->email = $request->email;
        if($request->file('profile_photo_path')){
            $file = $request->file('profile_photo_path');
            @unlink(public_path('upload/user_images'.$user->profile_photo_path));
            $filename = date('YmdHi').$file->getClientOriginalName();
            $file->move(public_path('upload/user_images'),$filename);
            $user['profile_photo_path'] = $filename;
        }
        $user->save();
        return redirect()->route('user.profile');

    }

    public function UserAdd(){
        $departamentos = AdmDepartamento::latest()->get();        
        $municipios = AdmMunicipio::latest()->get();
        
        return view('backend.rrhh.user_add', compact('departamentos', 'municipios'));
    }


    public function rrhhEdit($id){
        $user = User::findOrFail($id);
        return view('backend.rrhh.rrhh_edit', compact('user'));
    }

    public function UserList(){        
        return view('backend.rrhh.rrhh_index');
    }

    public function kardexIndex($id){
        $user = User::findOrFail($id);
        $cargo = AdmCargo::where('estado',1)->first();
        return view('backend.rrhh.rrhh_kardex_index', compact('user','cargo'));
    }  
    
    public function kardexCargo($id){
        $user = User::findOrFail($id);
        $cargo = AdmCargo::where('estado',1)->first();
        return view('backend.rrhh.rrhh_kardex_cargo', compact('user','cargo'));
    }   

    public function kardexEducacion($id){
        $user = User::findOrFail($id);        
        return view('backend.rrhh.rrhh_kardex_educacion', compact('user'));
    }   

    public function kardexEstablecimiento($id){
        $user = User::findOrFail($id);        
        return view('backend.rrhh.rrhh_kardex_establecimiento', compact('user'));
    }   

    public function kardexSupervision($id){
        $user = User::findOrFail($id);        
        return view('backend.rrhh.rrhh_kardex_supervision', compact('user'));
    }   

    public function kardexVacuna($id){
        $user = User::findOrFail($id);        
        return view('backend.rrhh.rrhh_kardex_vacuna', compact('user'));
    }   

    public function kardexBaja($id){
        $user = User::findOrFail($id);        
        return view('backend.rrhh.rrhh_kardex_baja', compact('user'));
    }   
}
