<?php

namespace App\Http\Livewire\PlanEstudios;

use App\Exports\UsersExport;
use App\Models\AdmCargo;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;
use Livewire\WithPagination;
use App\Models\User as Model;
use Illuminate\Support\Str;
use Carbon\Carbon;

class ResidenteIndex extends Component
{
    use WithPagination;

    public $paginate = 10;

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


    public $mode = 'create';

    public $showForm = false;

    public $primaryId = null;

    public $search;

    public $showConfirmDeletePopup = false;

    protected $queryString = ['search' => ['except' => '']];
    public $perPage = '10';
    public $campo = null;
    public $order = null;
    public $icon = '-sort';

    public $cargocampo = null;
    // public $showModal = 'hidden';

    protected $paginationTheme = "bootstrap";

    // protected $rules = [
    //     'name' => 'required|unique:users',
    //     'email' => 'required|unique:users,email',            
    //     'password' => 'required|min:6',                                    
    //     'nombres' => 'required',
    //     'ap_paterno' => 'required',
    //     // 'ap_materno' => 'required',
    //     'adm_departamento_id'=> 'required',
    //     'ci' => 'required|numeric|between:10000,12000000',                        
    //     'sexo' => 'required',
    //     // 'fecha_nac' => 'required',
    //     'telefono' => 'required',
    //     'domicilio' => 'required',
    //     // 'item' => 'required',
    //     // 'incorporacion' => 'required',
    //     'universidad' => 'required',
    //     'grado' => 'required',
    //     // 'docente' => 'required',
    //     // 'obs' => 'required',
    //     // 'estado' => 'required',
    // ];

   



    public function updated($propertyName)
    {
        // $this->validateOnly($propertyName);
    }

    public function updatingSearch()
    {
        $this->resetPage();
    }

    public function render()
    {
        
        $model = Model::where('name', 'like', '%'.$this->search.'%')
        ->orWhere('nombres', 'like', '%'.$this->search.'%')
        ->orWhere('ap_paterno', 'like', '%'.$this->search.'%')
        ->orWhere('ap_materno', 'like', '%'.$this->search.'%')
        ->orWhere('ci', 'like', '%'.$this->search.'%')
        ->orWhere('adm_departamento_id', 'like', '%'.$this->search.'%')
        ->orWhere('sexo', 'like', '%'.$this->search.'%')
        ->orWhere('fecha_nac', 'like', '%'.$this->search.'%')                
        ->orWhere('universidad', 'like', '%'.$this->search.'%')
        ->orWhere('grado', 'like', '%'.$this->search.'%')        
        ->orWhere('estado', 'like', '%'.$this->search.'%');
        
        // if ($this->campo && $this->order) {
            //     $model = $model->orderBy($this->campo, $this->order);
            // }      
            
        $model = Model::where('docente', 'like','RESIDENTE');
        $model = $model->latest()->paginate($this->perPage);


        return view('livewire.planestudios.residente-index', [
            'rows'=> $model
        ]);
    }


    public function create ()
    {
        $this->mode = 'create';
        $this->resetForm();
        $this->showForm = true;

        $this->emit("showForm");
    }


    public function edit($primaryId)
    {
        $this->mode = 'update';
        $this->primaryId = $primaryId;
        $model = Model::find($primaryId);

        $this->name= $model->name;
        $this->email= $model->email;
        $this->nombres= $model->nombres;
        $this->ap_paterno= $model->ap_paterno;
        $this->ap_materno= $model->ap_materno;
        $this->ci= $model->ci;
        $this->adm_departamento_id= $model->adm_departamento_id;
        $this->sexo= $model->sexo;
        $this->fecha_nac= Carbon::parse($model->fecha_nac)->format('Y-m-d');
        $this->telefono= $model->telefono;
        $this->domicilio= $model->domicilio;
        $this->universidad= $model->universidad;
        $this->grado= $model->grado;
        $this->obs= $model->obs;
        $this->estado= $model->estado;

        $this->emit("showForm");
        $this->showForm = true;
    }

    public function closeForm()
    {
        $this->showForm = false;

        $this->emit("hideForm");
    }

    public function store()
    {
        // $this->validate();

        $this->validate([           
            'name' => 'required|unique:users',
            'email' => 'required|unique:users,email',            
            'password' => 'required|min:6',                                    
            'nombres' => 'required',
            'ap_paterno' => 'required',
            // 'ap_materno' => 'required',
            'adm_departamento_id'=> 'required',
            'ci' => 'required|numeric|between:10000,12000000',                        
            'sexo' => 'required',
            // 'fecha_nac' => 'required',
            'telefono' => 'required',
            'domicilio' => 'required',
            // 'item' => 'required',
            // 'incorporacion' => 'required',
            'universidad' => 'required',
            'grado' => 'required',
            // 'docente' => 'required',
            // 'obs' => 'required',
            // 'estado' => 'required',
            
        ]);

        $this->password = Hash::make($this->password); 
        $this->name = Str::upper($this->name);

        $model = new Model();

        $model->name = Str::upper($this->name);
        $model->email = $this->email;            
        $model->password = $this->password;        
        $model->nombres= Str::upper($this->nombres);
        $model->ap_paterno = Str::upper($this->ap_paterno);
        $model->ap_materno = Str::upper($this->ap_materno);
        $model->ci = $this->ci;
        $model->adm_departamento_id = $this->adm_departamento_id;
        $model->sexo = $this->sexo;
        $model->fecha_nac = $this->fecha_nac;
        $model->telefono = $this->telefono;
        $model->domicilio = $this->domicilio;
        $model->item = 0;
        $model->incorporacion = Carbon::now();
        $model->universidad = $this->universidad;
        $model->grado = Str::upper($this->grado);
        $model->docente = 'RESIDENTE';
        $model->obs = Str::upper($this->obs);
        $model->estado = $this->estado;
        $model->save ();

        $userId= $model->id;
        $cargo = new AdmCargo();
        $cargo->user_id = $userId;
        $cargo->estado = 1;
        $cargo->nom_cargo = 'RESIDENTE';
        $cargo->adm_unidades_id = 2;
        $cargo->incorporacion = Carbon::now();
        $cargo->save();

        $this->resetForm();
        $this->emit("hideForm");
        session()->flash('message', 'Registro Guardado Exitosamente');
        $this->showForm = false;

    }

    public function resetForm()
    {
        $this->nombres= "";
        $this->name= "";
        $this->email= "";
        $this->ap_paterno= "";
        $this->ap_materno= "";
        $this->ci= "";
        $this->adm_departamento_id= "";
        $this->sexo= "";
        $this->fecha_nac= "";
        $this->telefono= "";
        $this->domicilio= "";
        $this->universidad= "";
        $this->grado= "";
        $this->obs= "";
        $this->estado= "";

    }


    public function update()
    {
        $name = $this->primaryId;
        $this->validate([           
            'name' => 'required|unique:users,id,'.$name,
            // 'email' => 'required|unique:users,email',            
            // 'password' => 'required|min:6',                                    
            'nombres' => 'required',
            'ap_paterno' => 'required',
            // 'ap_materno' => 'required',
            'adm_departamento_id'=> 'required',
            'ci' => 'required|numeric|between:10000,12000000',                        
            'sexo' => 'required',
            // 'fecha_nac' => 'required',
            'telefono' => 'required',
            'domicilio' => 'required',
            // 'item' => 'required',
            // 'incorporacion' => 'required',
            'universidad' => 'required',
            'grado' => 'required',
            // 'docente' => 'required',
            // 'obs' => 'required',
            // 'estado' => 'required',
            
        ]);

        $model = Model::find($this->primaryId);
        
        $model->name= Str::upper($this->name);
        $model->email= Str::upper($this->email);
        $model->nombres= Str::upper($this->nombres);
        $model->ap_paterno= Str::upper($this->ap_paterno);
        $model->ap_materno= Str::upper($this->ap_materno);
        $model->ci= $this->ci;
        $model->adm_departamento_id= $this->adm_departamento_id;
        $model->sexo= $this->sexo;
        $model->fecha_nac= $this->fecha_nac;
        $model->telefono= $this->telefono;
        $model->domicilio= $this->domicilio;
        $model->universidad= $this->universidad;
        $model->grado= Str::upper($this->grado);
        $model->obs= Str::upper($this->obs);
        $model->estado= $this->estado;
        $model->save();

        $this->resetForm();
        $this->emit("hideForm");
        // session()->flash('message', 'Registro Actualizado Exitosamente');
    }

    public function confirmDelete($primaryId)
    {
        $this->primaryId = $primaryId;
        $this->showConfirmDeletePopup = true;
        $this->emit('showConfirmDelete');
    }

    public function hideConfirmationModal()
    {
        $this->emit('hideConfirmDelete');
    }

    public function destroy()
    {
        Model::find($this->primaryId)->delete();
        $this->showConfirmDeletePopup = false;
        $this->emit('hideConfirmDelete');
        session()->flash('message', 'Registro Eliminado Exitosamente');
    }

    public function clearFlash()
    {
        session()->forget('message');
    }

}
