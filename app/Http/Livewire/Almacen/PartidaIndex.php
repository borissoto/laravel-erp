<?php

namespace App\Http\Livewire\Almacen;

use Livewire\Component;
use Livewire\WithPagination;
use Illuminate\Support\Str;
use App\Models\AlmPartida as Model;


class PartidaIndex extends Component
{
    use WithPagination;

    public $paginate = 10;

    public $descrip;
   public $detalle;
   public $numero;
   public $partida;
   public $tipo;
   public $vigente;


    public $mode = 'create';

    public $showForm = false;

    public $primaryId = null;

    public $search;

    public $showConfirmDeletePopup = false;

    protected $rules = [
'descrip' => 'required',
'detalle' => 'required',
'numero' => 'required',
'partida' => 'required',
'tipo' => 'required',
'vigente' => 'required',

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
        $model = Model::where('descrip', 'like', '%'.$this->search.'%')->orWhere('detalle', 'like', '%'.$this->search.'%')->orWhere('numero', 'like', '%'.$this->search.'%')->orWhere('partida', 'like', '%'.$this->search.'%')->orWhere('tipo', 'like', '%'.$this->search.'%')->orWhere('vigente', 'like', '%'.$this->search.'%')->latest()->paginate($this->paginate);
        return view('livewire.almacen.partida-index', [
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

        $this->descrip= $model->descrip;
$this->detalle= $model->detalle;
$this->numero= $model->numero;
$this->partida= $model->partida;
$this->tipo= $model->tipo;
$this->vigente= $model->vigente;


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

        $model->descrip= Str::upper($this->descrip);
        $model->detalle= Str::upper($this->detalle);
        $model->numero= $this->numero;
        $model->partida= $this->partida;
        $model->tipo= $this->tipo;
        $model->vigente= $this->vigente;
        $model->save();

          $this->resetForm();
          $this->emit("hideForm");
          session()->flash('message', 'Record Saved Successfully');
          $this->showForm = false;

    }

    public function resetForm()
    {
        $this->descrip= "";
$this->detalle= "";
$this->numero= "";
$this->partida= "";
$this->tipo= "";
$this->vigente= "";

    }


    public function update()
    {
          $this->validate();

          $model = Model::find($this->primaryId);

             $model->descrip= $this->descrip;
$model->detalle= $this->detalle;
$model->numero= $this->numero;
$model->partida= $this->partida;
$model->tipo= $this->tipo;
$model->vigente= $this->vigente;
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




