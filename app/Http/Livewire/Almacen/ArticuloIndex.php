<?php

namespace App\Http\Livewire\Almacen;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\AlmArticulo as Model;


class ArticuloIndex extends Component
{
    use WithPagination;

    public $paginate = 10;

    public $alm_clase_id;
   public $descrip;
   public $existencia_min;
   public $alm_subgrupo_id;
   public $ubicacion;
   public $unidad;
   public $user_id;


    public $mode = 'create';

    public $showForm = false;

    public $primaryId = null;

    public $search;

    public $showConfirmDeletePopup = false;

    protected $rules = [
'alm_clase_id' => 'required',
'descrip' => 'required',
'existencia_min' => 'required',
'alm_subgrupo_id' => 'required',
'ubicacion' => 'required',
'unidad' => 'required',
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
        $model = Model::where('alm_clase_id', 'like', '%'.$this->search.'%')->orWhere('descrip', 'like', '%'.$this->search.'%')->orWhere('existencia_min', 'like', '%'.$this->search.'%')->orWhere('alm_subgrupo_id', 'like', '%'.$this->search.'%')->orWhere('ubicacion', 'like', '%'.$this->search.'%')->orWhere('unidad', 'like', '%'.$this->search.'%')->orWhere('user_id', 'like', '%'.$this->search.'%')->latest()->paginate($this->paginate);
        return view('livewire.almacen.articulo-index', [
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

        $this->alm_clase_id= $model->alm_clase_id;
$this->descrip= $model->descrip;
$this->existencia_min= $model->existencia_min;
$this->alm_subgrupo_id= $model->alm_subgrupo_id;
$this->ubicacion= $model->ubicacion;
$this->unidad= $model->unidad;
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

             $model->alm_clase_id= $this->alm_clase_id;
$model->descrip= $this->descrip;
$model->existencia_min= $this->existencia_min;
$model->alm_subgrupo_id= $this->alm_subgrupo_id;
$model->ubicacion= $this->ubicacion;
$model->unidad= $this->unidad;
$model->user_id= $this->user_id;
 $model->save();

          $this->resetForm();
          $this->emit("hideForm");
          session()->flash('message', 'Record Saved Successfully');
          $this->showForm = false;

    }

    public function resetForm()
    {
        $this->alm_clase_id= "";
$this->descrip= "";
$this->existencia_min= "";
$this->alm_subgrupo_id= "";
$this->ubicacion= "";
$this->unidad= "";
$this->user_id= "";

    }


    public function update()
    {
          $this->validate();

          $model = Model::find($this->primaryId);

             $model->alm_clase_id= $this->alm_clase_id;
$model->descrip= $this->descrip;
$model->existencia_min= $this->existencia_min;
$model->alm_subgrupo_id= $this->alm_subgrupo_id;
$model->ubicacion= $this->ubicacion;
$model->unidad= $this->unidad;
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
