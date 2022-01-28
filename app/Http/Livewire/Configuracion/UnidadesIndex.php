<?php

namespace App\Http\Livewire\Configuracion;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\AdmUnidades as Model;


class UnidadesIndex extends Component
{
    use WithPagination;
    protected $paginationTheme = "bootstrap";

    public $paginate = 10;

    public $nom_unidad;
   public $sigla;


    public $mode = 'create';

    public $showForm = false;

    public $primaryId = null;

    public $search;

    public $showConfirmDeletePopup = false;

    protected $rules = [
'nom_unidad' => 'required',
'sigla' => 'required',

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
        $model = Model::where('nom_unidad', 'like', '%'.$this->search.'%')->orWhere('sigla', 'like', '%'.$this->search.'%')->latest()->paginate($this->paginate);
        return view('livewire.configuracion.unidades-index', [
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

        $this->nom_unidad= $model->nom_unidad;
$this->sigla= $model->sigla;


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

             $model->nom_unidad= $this->nom_unidad;
$model->sigla= $this->sigla;
 $model->save();

          $this->resetForm();
          $this->emit("hideForm");
          session()->flash('message', 'Registro Guardado Exitosamente');
          $this->showForm = false;

    }

    public function resetForm()
    {
        $this->nom_unidad= "";
$this->sigla= "";

    }


    public function update()
    {
          $this->validate();

          $model = Model::find($this->primaryId);

             $model->nom_unidad= $this->nom_unidad;
$model->sigla= $this->sigla;
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
