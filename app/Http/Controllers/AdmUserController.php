<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use App\Models\AdmDepartamento;
use App\Models\AdmEstablecimiento;
use App\Models\AdmProvincia;
use App\Models\AdmMunicipio;
use Carbon\Carbon;

class AdmUserController extends Controller
{
    public function AdminLogout(){
        Auth::logout();
        return Redirect()->route('login');
    }

    public function UserProfile(){
        $id = Auth::user()->id;
        $user = User::find($id);

        return view('backend.user.user_profile', compact('user'));
    }

    public function UserProfileEdit(){
        $id = Auth::user()->id;
        $user = User::find($id);

        return view('backend.user.user_profile_edit ', compact('user'));
         
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
        $provincias = AdmProvincia::latest()->get();
        $municipios = AdmMunicipio::latest()->get();
        
        return view('backend.rrhh.user_add', compact('departamentos', 'provincias', 'municipios'));
    }


    public function rrhhEdit($id){
        $user = User::findOrFail($id);
        return view('backend.rrhh.rrhh_edit', compact('user'));
    }

    public function UserList(){
        $users = User::latest()->paginate(10);
        return view('backend.rrhh.rrhh_list', compact('users'));
    }

    public function rrhhView($id){
        $user = User::findOrFail($id);
        return view('backend.rrhh.rrhh_view', compact('user'));
    }    
}
