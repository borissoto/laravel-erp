<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\PeParciales as Model;


class PeParciales extends Component
{
    use WithPagination;

    public $paginate = 10;

    public $pe_curso_id;
   public $parent_id;
   public $is_children;
   public $gestion;
   public $nom_parcial;
   public $docente_calificador;


    public $mode = 'create';

    public $showForm = false;

    public $primaryId = null;

    public $search;

    public $showConfirmDeletePopup = false;

    protected $rules = [
'pe_curso_id' => 'required',
'parent_id' => 'required',
'is_children' => 'required',
'gestion' => 'required',
'nom_parcial' => 'required',
'docente_calificador' => 'required',

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
        $model = Model::where('pe_curso_id', 'like', '%'.$this->search.'%')->orWhere('parent_id', 'like', '%'.$this->search.'%')->orWhere('is_children', 'like', '%'.$this->search.'%')->orWhere('gestion', 'like', '%'.$this->search.'%')->orWhere('nom_parcial', 'like', '%'.$this->search.'%')->orWhere('docente_calificador', 'like', '%'.$this->search.'%')->latest()->paginate($this->paginate);
        return view('livewire.peparciales', [
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

        $this->pe_curso_id= $model->pe_curso_id;
$this->parent_id= $model->parent_id;
$this->is_children= $model->is_children;
$this->gestion= $model->gestion;
$this->nom_parcial= $model->nom_parcial;
$this->docente_calificador= $model->docente_calificador;


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

             $model->pe_curso_id= $this->pe_curso_id;
$model->parent_id= $this->parent_id;
$model->is_children= $this->is_children;
$model->gestion= $this->gestion;
$model->nom_parcial= $this->nom_parcial;
$model->docente_calificador= $this->docente_calificador;
 $model->save();

          $this->resetForm();
          $this->emit("hideForm");
          session()->flash('message', 'Record Saved Successfully');
          $this->showForm = false;

    }

    public function resetForm()
    {
        $this->pe_curso_id= "";
$this->parent_id= "";
$this->is_children= "";
$this->gestion= "";
$this->nom_parcial= "";
$this->docente_calificador= "";

    }


    public function update()
    {
          $this->validate();

          $model = Model::find($this->primaryId);

             $model->pe_curso_id= $this->pe_curso_id;
$model->parent_id= $this->parent_id;
$model->is_children= $this->is_children;
$model->gestion= $this->gestion;
$model->nom_parcial= $this->nom_parcial;
$model->docente_calificador= $this->docente_calificador;
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
