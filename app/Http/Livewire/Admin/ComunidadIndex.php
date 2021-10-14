<?php

namespace App\Http\Livewire\Admin;

use App\Models\AdmComunidades;
use App\Models\AdmDepartamento;
use App\Models\AdmEstablecimiento;
use App\Models\AdmMunicipio;
use Livewire\Component;
use Livewire\WithPagination;

class ComunidadIndex extends Component
{

    public $departamentos;
    public $municipios;
    public $establecimientos;

    public $selectedDepartamento;
    public $selectedMunicipio;
    public $selectedEstablecimiento;

    use WithPagination;
    
    //Datos para el registro
    public $nom_comunidad; 
    public $pioc; 
    public $nacion; 
    public $habitantes;
    public $familias;
    public $carpetizacion;
    public $tiempo_viaje;
    public $lat;
    public $long;    

    public $updateMode = false;

    protected $queryString = ['search' => ['except' => '']];

    public $search;
    public $perPage = '10';
    public $campo = null;
    public $order = null;
    public $icon = '-sort';

    protected $paginationTheme = "bootstrap";

    public function mount($selectedEstablecimiento = null)
    {
        $this->departamentos = AdmDepartamento::all();
        $this->municipios = collect();
        $this->establecimientos = collect();
        $this->selectedEstablecimiento = $selectedEstablecimiento;

        if(!is_null($selectedEstablecimiento)){
            $establecimiento = AdmEstablecimiento::with('municipio.departamento')->find($selectedEstablecimiento);
            if($establecimiento){
                $this->establecimientos = AdmEstablecimiento::where('adm_municipio_id', $establecimiento->adm_municipio_id)->get();
                $this->municipios = AdmMunicipio::where('adm_departamento_id', $establecimiento->municipio->adm_departamento_id)->get();
                $this->selectedDepartamento = $establecimiento->municipio->adm_departamento_id;
                $this->selectedMunicipio = $establecimiento->adm_municipio_id;
            }
        }

    }

    public function updatingSearch(){
        $this->resetPage();
    } 

    public function render()
    {
        $comunidades = AdmComunidades::whereRelation('establecimiento', 'nom_establecimiento', 'LIKE', '%' . $this->search . '%')
        ->orWhere('nom_comunidad','LIKE', '%' . $this->search . '%')        
        ->orWhere('nacion','LIKE', '%' . $this->search . '%')
        ->orWhere('habitantes','LIKE', '%' . $this->search . '%');        

        if ($this->campo && $this->order) {
            if($this->campo === 'nom_departamento'){
                $comunidades = $comunidades->orderBy(AdmEstablecimiento::select('nom_establecimiento')
                ->whereColumn('adm_comunidades.adm_establecimiento_id', 'adm_establecimientos.id'), $this->order);
            }else{
                $comunidades = $comunidades->orderBy($this->campo, $this->order);
            }
        }else{
            $this->camp = null;
            $this->order = null;
        }
        $comunidades = $comunidades->latest()->paginate($this->perPage);  

        return view('livewire.admin.comunidad-index', compact('comunidades'));
    }


    public function updatedSelectedDepartamento($departamento)
    {
        $this->municipios = AdmMunicipio::where('adm_departamento_id', $departamento)->get();
        $this->selectedMunicipio = NULL;
    }

    //  public function updatedSelectedMunicipio($value)
    // {
    //     $this->establecimientos = AdmEstablecimiento::where('adm_municipio_id', $value)->get();
    //     $this->establecimiento = $this->establecimientos->first()->id ?? null;
    // }

     public function updatedSelectedMunicipio($municipio)
    {
        if(!is_null($municipio)){
            $this->establecimientos = AdmEstablecimiento::where('adm_municipio_id', $municipio)->get();
        }
        
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

    public function resetInputFields()
    {
        $this->nom_comunidad = '';
        $this->pioc = '';
        $this->nacion = '';
        $this->habitantes = '';
        $this->familias = '';
        $this->carpetizacion = '';
        $this->tiempo_viaje = '';
        $this->lat = '';
        $this->long = '';
        

    }

   
    public function store()
    {
        // dd($this->lat.' '.$this->long);
        
        
       $this->validate([
            'nom_comunidad' =>'required', 
            'pioc' =>'required', 
            'nacion' =>'required', 
            'habitantes' =>'required',
            'familias' =>'required',
            'carpetizacion' =>'required',                                 
        ]);

        AdmComunidades::create([
            'adm_establecimiento_id' => $this->establecimiento,
            'nom_comunidad' => $this->nom_comunidad, 
            'pioc' => $this->pioc, 
            'nacion' => $this->nacion, 
            'habitantes' => $this->habitantes,
            'familias' => $this->familias,
            'carpetizacion' => $this->carpetizacion,
            'tiempo_viaje' => $this->tiempo_viaje,
            'lat' => $this->lat,
            'long' => $this->long,
            'user_id' => auth()->user()->id,
        ]);

        // session()->flash('message', 'Comunidad creada satisfactoriamente');
        $this->resetInputFields();
        $this->dispatchBrowserEvent('closeComunidadStore');

    }

    public function edit($id)
    {
        $this->updateMode = true;
        $comunidad = AdmComunidades::where('id',$id)->first();        
        $this->id = $id;
        $this->establecimiento = $comunidad->adm_establecimiento_id;
        // dd($this->establecimiento);
        $this->nom_comunidad = $comunidad->nom_comunidad;
        $this->pioc = $comunidad->pioc;
        $this->nacion = $comunidad->nacion;
        $this->habitantes = $comunidad->habitantes;
        $this->familias = $comunidad->familias;
        $this->carpetizacion = $comunidad->carpetizacion;
        $this->tiempo_viaje = $comunidad->tiempo_viaje;
        $this->lat = $comunidad->lat;
        $this->long = $comunidad->long;
        
    }
}
