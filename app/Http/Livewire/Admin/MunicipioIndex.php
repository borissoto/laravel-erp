<?php

namespace App\Http\Livewire\Admin;

use App\Models\AdmDepartamento;
use App\Models\AdmMunicipio;
use Livewire\Component;
use Livewire\WithPagination;

class MunicipioIndex extends Component
{

    
    use WithPagination;

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

    public function render()
    {

        $municipios = AdmMunicipio::whereRelation('departamento', 'nom_departamento', 'LIKE', '%' . $this->search . '%')
        ->orWhere('nom_municipio','LIKE', '%' . $this->search . '%')        
        ->orWhere('nom_provincia','LIKE', '%' . $this->search . '%')
        ->orWhere('cod_municipio','LIKE', '%' . $this->search . '%');        

        if ($this->campo && $this->order) {
            if($this->campo === 'nom_departamento'){
                $municipios = $municipios->orderBy(AdmDepartamento::select('nom_departamento')
                ->whereColumn('adm_municipios.adm_departamento_id', 'adm_departamentos.id'), $this->order);
            }else{
                $municipios = $municipios->orderBy($this->campo, $this->order);
            }
        }else{
            $this->camp = null;
            $this->order = null;
        }
        $municipios = $municipios->paginate($this->perPage);      

        return view('livewire.admin.municipio-index', compact('municipios'));
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
}
