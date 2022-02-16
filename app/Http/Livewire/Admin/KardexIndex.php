<?php

namespace App\Http\Livewire\Admin;

use App\Models\User;
use Carbon\Carbon;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;
use Illuminate\Support\Str;
use Spatie\Permission\Models\Role;

class KardexIndex extends Component
{

    public $user;

    public $passid;
    public $user_id;
    public $name;
    public $email;    
    public $password;
    public $profile_photo_path;    
    public $adm_establecimiento_id;
    public $nombres;
    public $ap_paterno;
    public $ap_materno;
    public $ci;   
    public $adm_departamento_id;
    public $sexo;
    public $fecha_nac;
    public $telefono;
    public $domicilio;
    public $item;
    public $incorporacion;
    public $universidad;
    public $grado;
    public $docente;
    public $obs;
    public $estado;
    public $roles;
    public $rol;

    public $updateMode = false;

    public function mount($user)
    {
        // dd($user);
        // $usuario = User::find($user);
        // Ya no se usa typed properties como User $user
        $this->user = User::find($user->id);
        // $this->passid = User::find($serid);
        $this->roles = Role::all();
    }

    protected $listeners = ['update' => 'render'];
    
    public function render()
    {
        // dd($this->user);
        
        return view('livewire.admin.kardex-index', ['user'=>$this->user]);
        //return view('livewire.admin.kardex-index', compact('user'));
    }

    public function edit($id)
    {
        $this->updateMode = true;
        $usuario = User::where('id',$id)->first();        
        $this->user_id = $id;
        $this->name = $usuario->name;
        $this->email = $usuario->email;
        $this->password = $usuario->password;
        $this->nombres = $usuario->nombres;
        $this->ap_paterno = $usuario->ap_paterno;
        $this->ap_materno = $usuario->ap_materno;
        $this->ci = $usuario->ci;
        $this->adm_departamento_id = $usuario->adm_departamento_id;
        $this->sexo = $usuario->sexo;        
        $this->fecha_nac = Carbon::parse($usuario->fecha_nac)->format('Y-m-d');
        $this->telefono = $usuario->telefono;
        $this->domicilio = $usuario->domicilio;
        $this->item = $usuario->item;
        $this->incorporacion = Carbon::parse($usuario->incorporacion)->format('Y-m-d');
        $this->universidad = $usuario->universidad;
        $this->grado = $usuario->grado;
        $this->docente = $usuario->docente;
        $this->obs = $usuario->obs;
        $this->estado = $usuario->estado;     
        $this->rol = $usuario->nivel;        
    }

    public function passEdit($id)
    {
        $this->updateMode = true;
        // $usuario = User::where('id',$id)->first();        
        $this->user_id = $id;
    }

    public function passUpdate()
    {
        $this->validate([
            'password' => 'required|min:6',                                    
            
        ]);
        if ($this->user_id) {
            $user = User::find($this->user_id);
            $user->update([                                          
                'password' => Hash::make($this->password),
            ]);
            $this->updateMode = false;
            // session()->flash('message', 'Users Updated Successfully.');
            $this->resetInputFields();
            $this->emit('update');
            $this->emit('closeKardexPassUpdate');

        }
    }

    

    public function update()
    {
        $this->validate([
            'name' => 'required|unique:users,id,'.$this->user_id,
            'email' => 'required|unique:users,email,'.$this->user_id,            
            'password' => 'required|min:6',                                    
            'nombres' => 'required',
            'ap_paterno' => 'required',
            // 'ap_materno' => 'required',
            'ci' => 'required|digits_between:5,9|unique:users,ci,'.$this->user_id,                        
            'sexo' => 'required',
            // 'fecha_nac' => 'required',
            'telefono' => 'required',
            'domicilio' => 'required',
            'item' => 'required',
            // 'incorporacion' => 'required',
            'universidad' => 'required',
            'grado' => 'required',
            // 'nivel' => 'required',
            // 'docente' => 'required',
            // 'obs' => 'required',
            // 'estado' => 'required',
        ]);

        if ($this->user_id) {
            $user = User::find($this->user_id);
            $user->update([                
                'name' => $this->name,
                'email' => $this->email,            
                'password' => $this->password,                                    
                'nombres' => Str::upper($this->nombres),
                'ap_paterno' => Str::upper($this->ap_paterno),
                'ap_materno' => Str::upper($this->ap_materno),
                'ci' => $this->ci,
                'adm_departamento_id' => $this->adm_departamento_id,       
                'sexo' => $this->sexo,
                'fecha_nac' => $this->fecha_nac,
                'telefono' => $this->telefono,
                'domicilio' => $this->domicilio,
                'item' => $this->item,
                'incorporacion' => $this->incorporacion,
                'universidad' => $this->universidad,
                'grado' => $this->grado,
                'docente' => $this->docente,
                'obs' => $this->obs,
                'estado' => $this->estado,
                'nivel' => $this->rol,
            ]);

            $roles = Role::all();
            $rol_name = null;
            foreach ($roles as $rol) {
                if($rol->id == $this->rol){
                    $rol_name = $rol->name;
                }
            }
    
            $user->syncRoles($rol_name);



            $this->updateMode = false;
            // session()->flash('message', 'Users Updated Successfully.');
            $this->resetInputFields();
            $this->emit('update');
            $this->emit('closeKardexInfoUpdate');

        }
    }

    public function resetInputFields()
    {
        $this->name = '';
        $this->email = '';
        $this->password = '';
        $this->nombres = '';
        $this->ap_paterno = '';
        $this->ap_materno = '';
        $this->ci = '';
        $this->sexo = '';
        $this->telefono = '';
        $this->domicilio = '';
        $this->item = '';
        $this->incorporacion = '';
        $this->universidad = '';
        $this->grado = '';
        $this->obs = '';
        $this->rol = '';
        

    }

    public function closeForm()
    {
        $this->resetInputFields();

        $this->emit('closeKardexInfoUpdate');        
    }
}
