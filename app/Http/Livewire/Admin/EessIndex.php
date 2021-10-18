<?php

namespace App\Http\Livewire\Admin;

use App\Models\AdmDepartamento;
use App\Models\AdmEstablecimiento;
use App\Models\AdmMunicipio;
use Livewire\Component;
use Livewire\WithPagination;

class EessIndex extends Component
{

    public $departamentos;
    public $municipios = null;

    public $selectedDepartamento = null;

    
    public $establecimiento_id;

    public $adm_departamento_id;
    public $adm_municipio_id;
    public $cod_red;
    public $tipo;
    public $nom_establecimiento;
    public $subsector;
    public $ambito;
    public $dependencia;
    public $nivel;
    public $codsnis;
    public $lat;
    public $long;
    public $soaps;
    public $estado;

    use WithPagination;

    public $updateMode = false;

    protected $queryString = ['search' => ['except' => '']];

    public $search;
    public $perPage = '10';
    public $campo = null;
    public $order = null;
    public $icon = '-sort';

    protected $paginationTheme = "bootstrap";

    public function updatingSearch(){
        $this->resetPage();
    }
    

    public function mount()
    {
        $this->departamentos = AdmDepartamento::all();
        
    }


    public function render()
    {

        $establecimientos = AdmEstablecimiento::where('nom_establecimiento', 'LIKE', '%' . $this->search . '%')
        ->orWhere('tipo','LIKE', '%' . $this->search . '%')
        ->orWhere('nivel','LIKE', '%' . $this->search . '%')
        ->orWhere('codsnis','LIKE', '%' . $this->search . '%');        

        if ($this->campo && $this->order) {
            $establecimientos = $establecimientos->orderBy($this->campo, $this->order);
        }
        
        $establecimientos = $establecimientos->latest()->paginate($this->perPage);

        return view('livewire.admin.eess-index', compact('establecimientos',));
    }

    public function sorteable($campo)
    {      
        if($campo !== $this->campo){
            $this->order = null;
        }
        switch($this->order){
            case null:
                $this->order ='asc';
                $this->icon = '-sort-up';
                break;
            case 'asc':
                $this->order = 'desc';
                $this->icon = '-sort-down';
                break;
            case 'desc':
                $this->order = null;
                $this->icon = '-sort';
                break;
        }
        $this->campo = $campo;
    }

    public function updatedSelectedDepartamento($departamento)
    {
        $this->municipios = AdmMunicipio::where('adm_departamento_id', $departamento)->get();     
        $this->adm_departamento_id = $departamento;  
    }


    public function newEstablecimiento()
    {
        $this->resetInputFields();
    }


    public function resetInputFields()
    {     
        
        $this->tipo = '';
        $this->nom_establecimiento = '';
        $this->subsector = '';
        $this->ambito = '';
        $this->dependencia = '';
        $this->nivel = '';
        // $this->codsnis = '';
        // $this->lat = '';
        // $this->long = '';
        $this->soaps = '';
                
    }
    
    public function storeEstablecimiento()
    {
       
    
        // $userid = $this->user->id;
        // $this->supervisor_id = Auth::user()->id;

       $this->validate([            
            
        'tipo' => 'required',
        'nom_establecimiento' => 'required',
        'subsector' => 'required',
        'ambito' => 'required',
        'dependencia' => 'required',
        'nivel' => 'required',
        'codsnis' => 'required',
        'lat' => 'required',
        'long' => 'required',
        'soaps' => 'required',
        // 'estado' => 'required',
                
        ]);   

      
        $red = AdmMunicipio::find($this->adm_municipio_id);
        $codred = $red->cod_red;

        // dd($codred);

        AdmEstablecimiento::create([   


            'adm_departamento_id' => $this->adm_departamento_id,            
            'adm_municipio_id' => $this->adm_municipio_id,            
            'cod_red' => $codred,            
            
            'tipo' => $this->tipo,
            'nom_establecimiento' => $this->nom_establecimiento,
            'subsector' => $this->subsector,
            'ambito' => $this->ambito,
            'dependencia' => $this->dependencia,
            'nivel' => $this->nivel,
            'codsnis' => $this->codsnis,
            'lat' => $this->lat,
            'long' => $this->long,
            'soaps' => $this->soaps,
            'estado' => 1,
            
            
        ]);
       
        // session()->flash('message', 'Usuario creado satisfactoriamente');
        $this->resetInputFields();
        // $this->emit('storeCargo');
        $this->emit('closeEstablecimientoCreate');

    }

    public function editEstablecimiento($id)
    {
        $this->updateMode = true;
        $eess = AdmEstablecimiento::where('id',$id)->first();        

        $this->establecimiento_id = $eess->id;
        
        $this->adm_departamento_id = $eess->adm_establecimiento_id;
        $this->adm_municipio_id = $eess->adm_municipio_id;   
        
        $this->tipo = $eess->tipo;
        $this->nom_establecimiento = $eess->nom_establecimiento;
        $this->subsector = $eess->subsector;
        $this->ambito = $eess->ambito;
        $this->dependencia = $eess->dependencia;
        $this->nivel = $eess->nivel;
        $this->codsnis = $eess->codsnis;
        $this->lat = $eess->lat;
        $this->long = $eess->long;
        $this->soaps = $eess->soaps;
        
        
    }

    public function updateEstablecimiento()
    {
        $this->validate([
                      
            'tipo' => 'required',
            'nom_establecimiento' => 'required',
            'subsector' => 'required',
            'ambito' => 'required',
            'dependencia' => 'required',
            'nivel' => 'required',
            'codsnis' => 'required',
            'lat' => 'required',
            'long' => 'required',
        
                       
        ]);

        if ($this->establecimiento_id) {
            $eess = AdmEstablecimiento::find($this->establecimiento_id);

            $red = AdmMunicipio::find($this->adm_municipio_id);
            $codred = $red->cod_red;

            $eess->update([                               
                
                'adm_departamento_id' => $this->adm_departamento_id,            
                'adm_municipio_id' => $this->adm_municipio_id,            
                'cod_red' => $codred,            
                
                'tipo' => $this->tipo,
                'nom_establecimiento' => $this->nom_establecimiento,
                'subsector' => $this->subsector,
                'ambito' => $this->ambito,
                'dependencia' => $this->dependencia,
                'nivel' => $this->nivel,
                'codsnis' => $this->codsnis,
                'lat' => $this->lat,
                'long' => $this->long,
                'soaps' => $this->soaps,                
                
            ]);
            $this->updateMode = false;
            // session()->flash('message', 'Users Updated Successfully.');
            $this->resetInputFields();
            // $this->emit('update');
            $this->emit('closeEstablecimientoUpdate');

        }
    }


    public function deleteEstablecimiento($id)
    {
        if($id){
           $this->establecimiento_del_id = $id;
            // session()->flash('message', 'Users Deleted Successfully.');
        }
    }

    public function deleteConfirmEstablecimiento()
    {
        AdmEstablecimiento::find($this->establecimiento_del_id)->delete();
    }

}
