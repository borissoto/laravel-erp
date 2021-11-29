<?php

namespace App\Http\Livewire\PlanEstudios;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\PeCurso as Model;
use App\Models\PeModulo;
use App\Models\PeResidencia;
use App\Models\User;
use Illuminate\Support\Str;

class CursoSelect extends Component
{
    public $residencias;
    public $modulos;
    public $usuarios;

    public $selectedResidencia;

    use WithPagination;

    public $paginate = 10;

    public $pe_modulo_id;
    public $user_id;
    public $instructor;
    public $nom_curso;


    public $mode = 'create';

    public $showForm = false;

    public $primaryId = null;

    public $search;

    public $showConfirmDeletePopup = false;

    protected $rules = [
        'pe_modulo_id' => 'required',
        'user_id' => 'required',
        // 'instructor' => 'required',
        'nom_curso' => 'required',        
    ];



    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function updatingSearch()
    {
        $this->resetPage();
    }

    public function mount()
    {
        
        $this->residencias = PeResidencia::all();
        $this->usuarios = User::where('docente','EDPERM')->get();
        
    }

    public function render()
    {
        $model = Model::where('pe_modulo_id', 'like', '%'.$this->search.'%')->
        orWhere('user_id', 'like', '%'.$this->search.'%')->
        orWhere('instructor', 'like', '%'.$this->search.'%')->
        orWhere('nom_curso', 'like', '%'.$this->search.'%')->latest()->paginate($this->paginate);
        return view('livewire.planestudios.curso-select', [
            'rows'=> $model
        ]);
    }

    public function updatedSelectedResidencia($residencia)
    {
        $this->modulos = PeModulo::where('pe_residencia_id', $residencia)->get();
    }


    
    public function closeForm()
    {
        $this->showForm = false;

        $this->emit("hideForm");
    }   



    public function clearFlash()
    {
        session()->forget('message');
    }

    public function selectedCurso($primaryId)
    {
        $this->primaryId = $primaryId;       
        $this->emit('selectedCurso', $this->primaryId);
    }

}
