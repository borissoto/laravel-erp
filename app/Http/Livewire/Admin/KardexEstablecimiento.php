<?php

namespace App\Http\Livewire\Admin;

use App\Models\AdmDepartamento;
use App\Models\AdmEstablecimiento;
use App\Models\AdmMunicipio;
use App\Models\RrhhEstablecimientoUser;
use App\Models\User;
use Livewire\Component;
use Livewire\WithPagination;

class KardexEstablecimiento extends Component
{
    public $departamentos;
    public $municipios;
    public $establecimientos;

    public $selectedDepartamento;
    public $selectedMunicipio;
    public $adm_establecimiento_id;

    public User $user;

    public $establecimiento_id;
    public $establecimiento_del_id;

    public $user_id;
    public $estado = 1;
    public $fecha_ini;
    public $fecha_fin;

    public $user_eess;

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
 
    public function mount($user, $adm_establecimiento_id = null)
    {
            $this->user=$user;

        $this->departamentos = AdmDepartamento::all();
        $this->municipios = collect();
        $this->establecimientos = collect();
        $this->adm_establecimiento_id = $adm_establecimiento_id;

        if(!is_null($adm_establecimiento_id)){
            $establecimiento = AdmEstablecimiento::with('municipio.departamento')->find($adm_establecimiento_id);
            if($establecimiento){
                $this->establecimientos = AdmEstablecimiento::where('adm_municipio_id', $establecimiento->adm_municipio_id)->get();
                $this->municipios = AdmMunicipio::where('adm_departamento_id', $establecimiento->municipio->adm_departamento_id)->get();
                $this->selectedDepartamento = $establecimiento->municipio->adm_departamento_id;
                $this->selectedMunicipio = $establecimiento->adm_municipio_id;
            }
        }
    }

    public function render()
    {

        $userid = $this->user->id;
        $eessusers = RrhhEstablecimientoUser::where('user_id', $userid );

        $eessusers = $eessusers->latest()->paginate($this->perPage); 


        return view('livewire.admin.kardex-establecimiento', compact('eessusers'));
    }

    public function updatedSelectedDepartamento($departamento)
    {
        $this->municipios = AdmMunicipio::where('adm_departamento_id', $departamento)->get();
        $this->selectedMunicipio = NULL;
    }  

     public function updatedSelectedMunicipio($municipio)
    {
        if(!is_null($municipio)){
            $this->establecimientos = AdmEstablecimiento::where('adm_municipio_id', $municipio)->get();
        }
        
    }

    public function resetInputFields()
    {     
        
        //$this->adm_establecimiento_id = '';
        
        //$this->estado = '';
        // $this->fecha_ini = '';
        // $this->fecha_fin = '';
                
    }

    public function newEstablecimiento()
    {
        $this->resetInputFields();
    }

    public function storeEstablecimiento()
    {
       
    
        $userid = $this->user->id;
        // $this->supervisor_id = Auth::user()->id;

       $this->validate([            
     
        'adm_establecimiento_id' => 'required',
        // 'user_id' => 'required',
        // 'estado' => 'required',
        'fecha_ini' => 'required',
        // 'fecha_fin' => 'required',
                
        ]);   

        RrhhEstablecimientoUser::create([   

            'user_id' => $userid,

            'adm_establecimiento_id' => $this->adm_establecimiento_id,            
            'estado' => $this->estado,
            'fecha_ini' => $this->fecha_ini,
            'fecha_fin' => $this->fecha_fin,                            
            
        ]);

        $user = User::find($this->user->id);
        if($user){
            $user->update([
                'adm_establecimiento_id' => $this->adm_establecimiento_id,            
            ]);         

        }

        // session()->flash('message', 'Usuario creado satisfactoriamente');
        $this->resetInputFields();
        // $this->emit('storeCargo');
        $this->emit('closeKardexEstablecimientoCreate');

    }
}
