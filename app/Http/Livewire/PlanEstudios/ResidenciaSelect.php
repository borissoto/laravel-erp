<?php

namespace App\Http\Livewire\PlanEstudios;

use App\Models\Gestiones;
use App\Models\PeCurso;
use App\Models\PeMatriculaciones;
use App\Models\PeModulo;
use Livewire\Component;
use Livewire\WithPagination;
use Illuminate\Support\Str;
use App\Models\PeResidencia as Model;


class ResidenciaSelect extends Component
{

    

    public $gestiones;
    public $selectedGestion;

    use WithPagination;

    public $paginate = 10;

    public $nom_residencia;
    public $gestion_ini;
    public $mes_ini;
    public $gestion_fin;
    public $mes_fin;
    public $estado;

    public $resi = null;
    public $modulos = null;
    public $cursos = null;

    public $mode = 'create';

    public $showForm = false;

    public $primaryId = null;

    public $search;
    

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function updatingSearch()
    {
        $this->resetPage();
    }  

    public function render()
    {
        // if($this->resi != null){
        //     $modulos = PeModulo::where('pe_residencia_id',$this->resi->id)->get();
        // }else{
        //     $modulos = null;
        // }
        $model = Model::where('nom_residencia', 'like', '%'.$this->search.'%')->
        orWhere('gestion_ini', 'like', '%'.$this->search.'%')->
        orWhere('mes_ini', 'like', '%'.$this->search.'%')->
        orWhere('gestion_fin', 'like', '%'.$this->search.'%')->
        orWhere('mes_fin', 'like', '%'.$this->search.'%')->
        orWhere('estado', 'like', '%'.$this->search.'%')->latest()->paginate($this->paginate);
        return view('livewire.planestudios.residencia-select', [
            'rows'=> $model,   
            // 'modulos' =>$modulos,         
        ]);
    }

    public function hideConfirmationModal()
    {
        $this->emit('hideConfirmDelete');
    }

  
    public function clearFlash()
    {
        session()->forget('message');
    }

    public function selectedResidencia($primaryId)
    {
        $this->primaryId = $primaryId;       
        $this->emit('selectedResidencia', $this->primaryId);
    }
  
  
}
