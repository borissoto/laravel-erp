<?php

namespace App\Http\Livewire\Brigada;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\RrhhRastrillaje as Model;


class RastrillajeIndex extends Component
{
    use WithPagination;

    public $paginate = 10;
    protected $paginationTheme = "bootstrap";

    public $adm_municipio_id;
    public $rrhh_brigada_id;
    public $atendidos;
    public $sospechosos;
    public $confirmados;
    public $contactos;
    public $referidos;
    public $fallecidos;
    public $fecha;
    public $user_id;


    public $mode = 'create';

    public $showForm = false;

    public $primaryId = null;

    public $search;

    public $showConfirmDeletePopup = false;

    protected $rules = [
    'adm_municipio_id' => 'required',
    'rrhh_brigada_id' => 'required',
    'atendidos' => 'required',
    'sospechosos' => 'required',
    'confirmados' => 'required',
    'contactos' => 'required',
    'referidos' => 'required',
    'fallecidos' => 'required',
    'fecha' => 'required',
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
        $model = Model::where('adm_municipio_id', 'like', '%'.$this->search.'%')->orWhere('rrhh_brigada_id', 'like', '%'.$this->search.'%')->orWhere('atendidos', 'like', '%'.$this->search.'%')->orWhere('sospechosos', 'like', '%'.$this->search.'%')->orWhere('confirmados', 'like', '%'.$this->search.'%')->orWhere('contactos', 'like', '%'.$this->search.'%')->orWhere('referidos', 'like', '%'.$this->search.'%')->orWhere('fallecidos', 'like', '%'.$this->search.'%')->orWhere('fecha', 'like', '%'.$this->search.'%')->orWhere('user_id', 'like', '%'.$this->search.'%')->latest()->paginate($this->paginate);
        return view('livewire.brigada.rastrillaje-index', [
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
$this->rrhh_brigada_id= $model->rrhh_brigada_id;
$this->atendidos= $model->atendidos;
$this->sospechosos= $model->sospechosos;
$this->confirmados= $model->confirmados;
$this->contactos= $model->contactos;
$this->referidos= $model->referidos;
$this->fallecidos= $model->fallecidos;
$this->fecha= $model->fecha;
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

             $model->adm_municipio_id= $this->adm_municipio_id;
$model->rrhh_brigada_id= $this->rrhh_brigada_id;
$model->atendidos= $this->atendidos;
$model->sospechosos= $this->sospechosos;
$model->confirmados= $this->confirmados;
$model->contactos= $this->contactos;
$model->referidos= $this->referidos;
$model->fallecidos= $this->fallecidos;
$model->fecha= $this->fecha;
$model->user_id= $this->user_id;
 $model->save();

          $this->resetForm();
          $this->emit("hideForm");
          session()->flash('message', 'Record Saved Successfully');
          $this->showForm = false;

    }

    public function resetForm()
    {
        $this->adm_municipio_id= "";
$this->rrhh_brigada_id= "";
$this->atendidos= "";
$this->sospechosos= "";
$this->confirmados= "";
$this->contactos= "";
$this->referidos= "";
$this->fallecidos= "";
$this->fecha= "";
$this->user_id= "";

    }


    public function update()
    {
          $this->validate();

          $model = Model::find($this->primaryId);

             $model->adm_municipio_id= $this->adm_municipio_id;
$model->rrhh_brigada_id= $this->rrhh_brigada_id;
$model->atendidos= $this->atendidos;
$model->sospechosos= $this->sospechosos;
$model->confirmados= $this->confirmados;
$model->contactos= $this->contactos;
$model->referidos= $this->referidos;
$model->fallecidos= $this->fallecidos;
$model->fecha= $this->fecha;
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
