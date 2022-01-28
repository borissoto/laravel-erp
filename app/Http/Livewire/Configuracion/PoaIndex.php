<?php

namespace App\Http\Livewire\Configuracion;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\AdmPoa as Model;


class PoaIndex extends Component
{
    use WithPagination;

    public $paginate = 10;

    public $gestiones_id;
   public $codigo;
   public $operacion;
   public $producto;


    public $mode = 'create';

    public $showForm = false;

    public $primaryId = null;

    public $search;

    public $showConfirmDeletePopup = false;

    protected $rules = [
'gestiones_id' => 'required',
'codigo' => 'required',
'operacion' => 'required',
'producto' => 'required',

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
        $model = Model::where('gestiones_id', 'like', '%'.$this->search.'%')->orWhere('codigo', 'like', '%'.$this->search.'%')->orWhere('operacion', 'like', '%'.$this->search.'%')->orWhere('producto', 'like', '%'.$this->search.'%')->latest()->paginate($this->paginate);
        return view('livewire.configuracion.poa-index', [
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

        $this->gestiones_id= $model->gestiones_id;
$this->codigo= $model->codigo;
$this->operacion= $model->operacion;
$this->producto= $model->producto;


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

             $model->gestiones_id= $this->gestiones_id;
$model->codigo= $this->codigo;
$model->operacion= $this->operacion;
$model->producto= $this->producto;
 $model->save();

          $this->resetForm();
          $this->emit("hideForm");
          session()->flash('message', 'Registro Guardado Exitosamente');
          $this->showForm = false;

    }

    public function resetForm()
    {
        $this->gestiones_id= "";
$this->codigo= "";
$this->operacion= "";
$this->producto= "";

    }


    public function update()
    {
          $this->validate();

          $model = Model::find($this->primaryId);

             $model->gestiones_id= $this->gestiones_id;
$model->codigo= $this->codigo;
$model->operacion= $this->operacion;
$model->producto= $this->producto;
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
