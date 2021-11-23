<?php

namespace App\Http\Livewire\PlanEstudios;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\PeCurso as Model;
use App\Models\PeModulo;
use App\Models\PeResidencia;
use App\Models\User;
use Illuminate\Support\Str;

class CursoIndex extends Component
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
        $model = Model::where('pe_modulo_id', 'like', '%'.$this->search.'%')->orWhere('user_id', 'like', '%'.$this->search.'%')->orWhere('instructor', 'like', '%'.$this->search.'%')->orWhere('nom_curso', 'like', '%'.$this->search.'%')->latest()->paginate($this->paginate);
        return view('livewire.planestudios.curso-index', [
            'rows'=> $model
        ]);
    }

    public function updatedSelectedResidencia($residencia)
    {
        $this->modulos = PeModulo::where('pe_residencia_id', $residencia)->get();
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

        $this->pe_modulo_id= $model->pe_modulo_id;
        $this->user_id= $model->user_id;
        $this->instructor= $model->instructor;
        $this->nom_curso= $model->nom_curso;


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
        $this->validate();

        $model = new Model();

        $model->pe_modulo_id= $this->pe_modulo_id;
        $model->user_id= $this->user_id;
        $model->instructor= $this->instructor;
        $model->nom_curso= Str::upper($this->nom_curso);
        $model->save();

        $this->resetForm();
        $this->emit("hideForm");
        session()->flash('message', 'Record Saved Successfully');
        $this->showForm = false;

    }

    public function resetForm()
    {
        $this->pe_modulo_id= "";
        $this->user_id= "";
        $this->instructor= "";
        $this->nom_curso= "";

    }


    public function update()
    {
        $this->validate();

        $model = Model::find($this->primaryId);

        $model->pe_modulo_id= $this->pe_modulo_id;
        $model->user_id= $this->user_id;
        $model->instructor= $this->instructor;
        $model->nom_curso= Str::upper($this->nom_curso);
        $model->save();

        $this->resetForm();
        $this->emit("hideForm");
        session()->flash('message', 'Record Updated Successfully');
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
        session()->flash('message', 'Record Deleted Successfully');
    }

    public function clearFlash()
    {
        session()->forget('message');
    }

    

}
