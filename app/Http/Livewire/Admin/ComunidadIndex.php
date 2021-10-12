<?php

namespace App\Http\Livewire\Admin;

use App\Models\AdmComunidades;
use App\Models\AdmEstablecimiento;
use Livewire\Component;
use Livewire\WithPagination;

class ComunidadIndex extends Component
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
        $comunidades = $comunidades->paginate($this->perPage);  

        return view('livewire.admin.comunidad-index', compact('comunidades'));
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
