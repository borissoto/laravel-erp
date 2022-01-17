<?php

namespace App\Http\Livewire\PlanEstudios;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\PeCurso as Model;
use App\Models\PeModulo;
use App\Models\PeResidencia;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class MateriaIndex extends Component
{

    use WithPagination;
    protected $paginationTheme = "bootstrap";

    public $paginate = 10;

    public $pe_residencia_id;
    public $user_id;
    // public $instructor;
    public $nom_materia;


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
        // dd($this->gestionId);
        // $gestion = PeResidencia::where('id', $this->gestionId)->first();
        
        // $model = Model::where('user_id', 'like', '%'.$this->search.'%')->
        $userid = Auth::id();
        $model = Model::where('modulo', 'like', '%'.$this->search.'%')->
        orWhere('nom_materia', 'like', '%'.$this->search.'%');
        
        // $model = Model::where('user_id', $userid);
        // $model = Model::where('pe_residencia_id', $this->gestionId)->latest();
        $model = Model::where('user_id', $userid)->latest()->paginate($this->paginate);
        return view('livewire.planestudios.materia-index', [
            'rows'=> $model
        ]);
    }
}
