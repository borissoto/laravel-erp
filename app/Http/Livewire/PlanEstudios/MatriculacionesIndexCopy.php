<?php

namespace App\Http\Livewire\PlanEstudios;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\PeMatriculaciones as Model;
use App\Models\PeResidente;
use App\Models\User;
use Illuminate\Support\Str;


class MatriculacionesIndexCopy extends Component
{
    use WithPagination;

    protected $listeners = [ 'selectedResidencia' => 'createMatriculacion' ];
    public $residentes;

    public $paginate = 10;

    public $pe_residente_id;
    public $pe_residencia_id;

    public $residenciaId;

    public $mode = 'create';

    public $showForm = false;

    public $primaryId = null;

    public $search;

    public $showConfirmDeletePopup = false;

    protected $rules = [
        'pe_residente_id' => 'required',
        // 'pe_residencia_id' => 'required',
    ];

    public function createMatriculacion($residenciaId)
    {
        $this->residenciaId = $residenciaId; 
    }

    public function mount()
    {
        $this->residentes = PeResidente::all();
    }


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
        $model = Model::where('pe_residente_id', 'like', '%'.$this->search.'%')->
        orWhere('pe_residencia_id', 'like', '%'.$this->search.'%');
        $model = Model::where('pe_residencia_id', $this->residenciaId)->
        latest()->paginate($this->paginate);
        return view('livewire.planestudios.matriculacion-index', [
            'rows'=> $model
        ]);
    }


    public function create ()
    {

        $nomatriculados = Model::where('pe_residencia_id','<>', $this->residenciaId)->get();
        foreach($nomatriculados as $nomatriculado){
            $residente = PeResidente::find($nomatriculado->pe_residente_id);

            $this->residentes->push($residente);
        }
        // dd($this->residentes);

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

        $this->pe_residente_id= $model->pe_residente_id;
        $this->pe_residencia_id= $model->pe_residencia_id;


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

        $model->pe_residente_id= $this->pe_residente_id;
        $model->pe_residencia_id= $this->residenciaId;
        $model->save();

        $this->resetForm();
        $this->emit("hideForm");
        // session()->flash('message', 'Registro Guardado Exitosamente');
        $this->showForm = false;

    }

    public function resetForm()
    {
        $this->pe_residente_id= "";
$this->pe_residencia_id= "";

    }


    public function update()
    {
        $this->validate();

        $model = Model::find($this->primaryId);

        $model->pe_residente_id= $this->pe_residente_id;
        $model->pe_residencia_id= $this->pe_residencia_id;
        $model->save();

        $this->resetForm();
        $this->emit("hideForm");
        // session()->flash('message', 'Registro Actualizado Exitosamente');
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
        session()->flash('message', 'Registro Eliminado Exitosamente');
    }

    public function clearFlash()
    {
        session()->forget('message');
    }

}
