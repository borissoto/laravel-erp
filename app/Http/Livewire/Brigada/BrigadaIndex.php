<?php

namespace App\Http\Livewire\Brigada;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\RrhhBrigada as Model;


class BrigadaIndex extends Component
{
    use WithPagination;
    protected $paginationTheme = "bootstrap";

    public $paginate = 10;

    public $adm_municipio_id;
    public $nom_brigada;
    public $tipo;
    public $user_id;
    public $integrantes;


    public $mode = 'create';

    public $showForm = false;

    public $primaryId = null;

    public $search;

    public $showConfirmDeletePopup = false;

    protected $rules = [
    'adm_municipio_id' => 'required',
    'nom_brigada' => 'required',
    'tipo' => 'required',
    'user_id' => 'required',
    'integrantes' => 'required',

];



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
        $model = Model::where('adm_municipio_id', 'like', '%'.$this->search.'%')->orWhere('nom_brigada', 'like', '%'.$this->search.'%')->orWhere('tipo', 'like', '%'.$this->search.'%')->orWhere('user_id', 'like', '%'.$this->search.'%')->orWhere('integrantes', 'like', '%'.$this->search.'%')->latest()->paginate($this->paginate);
        return view('livewire.brigada.brigada-index', [
            'rows'=> $model
        ]);
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

        $this->adm_municipio_id= $model->adm_municipio_id;
$this->nom_brigada= $model->nom_brigada;
$this->tipo= $model->tipo;
$this->user_id= $model->user_id;
$this->integrantes= $model->integrantes;


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

             $model->adm_municipio_id= $this->adm_municipio_id;
$model->nom_brigada= $this->nom_brigada;
$model->tipo= $this->tipo;
$model->user_id= $this->user_id;
$model->integrantes= $this->integrantes;
 $model->save();

          $this->resetForm();
          $this->emit("hideForm");
          session()->flash('message', 'Registro Guardado Exitosamente');
          $this->showForm = false;

    }

    public function resetForm()
    {
        $this->adm_municipio_id= "";
$this->nom_brigada= "";
$this->tipo= "";
$this->user_id= "";
$this->integrantes= "";

    }


    public function update()
    {
          $this->validate();

          $model = Model::find($this->primaryId);

             $model->adm_municipio_id= $this->adm_municipio_id;
$model->nom_brigada= $this->nom_brigada;
$model->tipo= $this->tipo;
$model->user_id= $this->user_id;
$model->integrantes= $this->integrantes;
 $model->save();

          $this->resetForm();
         $this->emit("hideForm");
         session()->flash('message', 'Registro Actualizado Exitosamente');
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
