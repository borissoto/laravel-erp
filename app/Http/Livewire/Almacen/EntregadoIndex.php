<?php

namespace App\Http\Livewire\Almacen;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\AlmSolicitudes as Model;


class EntregadoIndex extends Component
{
    use WithPagination;

    public $paginate = 10;

    public $area;
   public $boleta;
   public $cargo;
   public $estado;
   public $fecha_entrega;
   public $fecha_solicitud;
   public $impresion;
   public $imprimido;
   public $justificativo;
   public $user_id;


    public $mode = 'create';

    public $showForm = false;

    public $primaryId = null;

    public $search;

    public $showConfirmDeletePopup = false;

    protected $rules = [
'area' => 'required',
'boleta' => 'required',
'cargo' => 'required',
'estado' => 'required',
'fecha_entrega' => 'required',
'fecha_solicitud' => 'required',
'impresion' => 'required',
'imprimido' => 'required',
'justificativo' => 'required',
'user_id' => 'required',

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
        $model = Model::where('area', 'like', '%'.$this->search.'%')->orWhere('boleta', 'like', '%'.$this->search.'%')->orWhere('cargo', 'like', '%'.$this->search.'%')->orWhere('estado', 'like', '%'.$this->search.'%')->orWhere('fecha_entrega', 'like', '%'.$this->search.'%')->orWhere('fecha_solicitud', 'like', '%'.$this->search.'%')->orWhere('impresion', 'like', '%'.$this->search.'%')->orWhere('imprimido', 'like', '%'.$this->search.'%')->orWhere('justificativo', 'like', '%'.$this->search.'%')->orWhere('user_id', 'like', '%'.$this->search.'%')->latest()->paginate($this->paginate);
        return view('livewire.almacen.entregado-index', [
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

        $this->area= $model->area;
$this->boleta= $model->boleta;
$this->cargo= $model->cargo;
$this->estado= $model->estado;
$this->fecha_entrega= $model->fecha_entrega;
$this->fecha_solicitud= $model->fecha_solicitud;
$this->impresion= $model->impresion;
$this->imprimido= $model->imprimido;
$this->justificativo= $model->justificativo;
$this->user_id= $model->user_id;


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

             $model->area= $this->area;
$model->boleta= $this->boleta;
$model->cargo= $this->cargo;
$model->estado= $this->estado;
$model->fecha_entrega= $this->fecha_entrega;
$model->fecha_solicitud= $this->fecha_solicitud;
$model->impresion= $this->impresion;
$model->imprimido= $this->imprimido;
$model->justificativo= $this->justificativo;
$model->user_id= $this->user_id;
 $model->save();

          $this->resetForm();
          $this->emit("hideForm");
          session()->flash('message', 'Record Saved Successfully');
          $this->showForm = false;

    }

    public function resetForm()
    {
        $this->area= "";
$this->boleta= "";
$this->cargo= "";
$this->estado= "";
$this->fecha_entrega= "";
$this->fecha_solicitud= "";
$this->impresion= "";
$this->imprimido= "";
$this->justificativo= "";
$this->user_id= "";

    }


    public function update()
    {
          $this->validate();

          $model = Model::find($this->primaryId);

             $model->area= $this->area;
$model->boleta= $this->boleta;
$model->cargo= $this->cargo;
$model->estado= $this->estado;
$model->fecha_entrega= $this->fecha_entrega;
$model->fecha_solicitud= $this->fecha_solicitud;
$model->impresion= $this->impresion;
$model->imprimido= $this->imprimido;
$model->justificativo= $this->justificativo;
$model->user_id= $this->user_id;
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
