<?php

namespace App\Http\Livewire\Admin;

use App\Models\AdmCargo;
use App\Models\User;
use Illuminate\Support\Carbon;
use Livewire\Component;
use Livewire\WithPagination;

class KardexCargo extends Component
{

    public User $user;
    public $cargo_id;
    public $cargo_del_id = '';
    
    public $user_id;    
    public $estado;
    public $nom_cargo;
    public $descripcion;
    public $adm_unidades_id;
    public $incorporacion;

    public $updateMode = false;

    use WithPagination;

    protected $queryString = ['search' => ['except' => '']];

    public $search;
    public $perPage = '5';
    public $campo = null;
    public $order = null;
    public $icon = '-sort';

    protected $paginationTheme = "bootstrap";

    public function updatingSearch(){
        $this->resetPage();
    } 

    public function mount($user)
    {
            $this->user=$user;
    }

    protected $listeners = ['storeCargo' => 'render'];

    public function render()
    {
        $userid = $this->user->id;
        $cargos = AdmCargo::where('user_id', $userid );
        $cargos = $cargos->latest()->paginate($this->perPage);  
        //dd($cargos);
        return view('livewire.admin.kardex-cargo', compact('cargos'));
    }


    public function storeCargo()
    {
        // dd($this->lat.' '.$this->long);       
    
        $userid = $this->user->id;

       $this->validate([           
                
        'estado' => 'required',
        'nom_cargo' => 'required',
        // 'descripcion' => 'required|max:120',
        'adm_unidades_id' => 'required',
        'incorporacion' => 'required',           
        
        ]);   

        AdmCargo::create([   
            'user_id' => $userid,
            'estado' => $this->estado,
            'nom_cargo' => $this->nom_cargo,
            'descripcion' => $this->descripcion,
            'adm_unidades_id' => $this->adm_unidades_id,
            'incorporacion' => $this->incorporacion,           
        ]);

        // session()->flash('message', 'Usuario creado satisfactoriamente');
        $this->resetInputFields();
        // $this->emit('storeCargo');
        $this->emit('closeKardexCargoCreate');

    }

    public function resetInputFields()
    {
        $this->estado = '';
        $this->nom_cargo = '';
        $this->descripcion = '';
        $this->adm_unidades_id = '';
        $this->incorporacion = '';   
        
    }

    public function newCargo()
    {
        $this->resetInputFields();
    }

    
    public function editCargo($id)
    {
        $userid = $this->user->id;

        $this->updateMode = true;
        $cargo = AdmCargo::where('id',$id)->first(); 
        $this->cargo_id = $cargo->id;      
        $this->user_id = $userid;
        $this->estado = $cargo->estado;
        $this->nom_cargo = $cargo->nom_cargo;
        $this->descripcion = $cargo->descripcion;
        $this->adm_unidades_id = $cargo->adm_unidades_id;
        $this->incorporacion = Carbon::parse($cargo->incorporacion)->format('Y-m-d');   

                 
    }

    public function updateCargo()
    {
        $this->validate([
                      
            'estado' => 'required', 
            'nom_cargo' => 'required',
            // 'descripcion' => 'required',
            'adm_unidades_id' => 'required',
            'incorporacion' => 'required',
                       
        ]);

        if ($this->cargo_id) {
            $cargo = AdmCargo::find($this->cargo_id);
            $cargo->update([                               
                
                'estado' => $this->estado, 
                'nom_cargo' => $this->nom_cargo,
                'descripcion' => $this->descripcion,
                'adm_unidades_id' => $this->adm_unidades_id,
                'incorporacion' => $this->incorporacion,
                
            ]);
            $this->updateMode = false;
            // session()->flash('message', 'Users Updated Successfully.');
            $this->resetInputFields();
            // $this->emit('update');
            $this->emit('closeKardexCargoUpdate');

        }
    }

    public function deleteCargo($id)
    {
        if($id){
           $this->cargo_del_id = $id;
            // session()->flash('message', 'Users Deleted Successfully.');
        }
    }

    public function deleteConfirm()
    {
        AdmCargo::find($this->cargo_del_id)->delete();
    }


}
