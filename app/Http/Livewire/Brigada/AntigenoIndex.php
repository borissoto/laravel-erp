<?php

namespace App\Http\Livewire\Brigada;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\RrhhAntigeno as Model;


class AntigenoIndex extends Component
{
    use WithPagination;

    public $paginate = 10;
    protected $paginationTheme = "bootstrap";

    public $adm_municipio_id;
    public $rrhh_brigada_id;
    public $prueba;
    public $tipo;
    public $muestras;
    public $positivos;
    public $negativos;
    public $referencias;
    public $kits;
    public $canastas;
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
        'prueba' => 'required',
        'tipo' => 'required',
        'muestras' => 'required',
        'positivos' => 'required',
        'negativos' => 'required',
        'referencias' => 'required',
        'kits' => 'required',
        'canastas' => 'required',
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
        $model = Model::where('adm_municipio_id', 'like', '%'.$this->search.'%')->orWhere('rrhh_brigada_id', 'like', '%'.$this->search.'%')->orWhere('prueba', 'like', '%'.$this->search.'%')->orWhere('tipo', 'like', '%'.$this->search.'%')->orWhere('muestras', 'like', '%'.$this->search.'%')->orWhere('positivos', 'like', '%'.$this->search.'%')->orWhere('negativos', 'like', '%'.$this->search.'%')->orWhere('referencias', 'like', '%'.$this->search.'%')->orWhere('kits', 'like', '%'.$this->search.'%')->orWhere('canastas', 'like', '%'.$this->search.'%')->orWhere('fecha', 'like', '%'.$this->search.'%')->orWhere('user_id', 'like', '%'.$this->search.'%')->latest()->paginate($this->paginate);
        return view('livewire.brigada.antigeno-index', [
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
$this->prueba= $model->prueba;
$this->tipo= $model->tipo;
$this->muestras= $model->muestras;
$this->positivos= $model->positivos;
$this->negativos= $model->negativos;
$this->referencias= $model->referencias;
$this->kits= $model->kits;
$this->canastas= $model->canastas;
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
$model->prueba= $this->prueba;
$model->tipo= $this->tipo;
$model->muestras= $this->muestras;
$model->positivos= $this->positivos;
$model->negativos= $this->negativos;
$model->referencias= $this->referencias;
$model->kits= $this->kits;
$model->canastas= $this->canastas;
$model->fecha= $this->fecha;
$model->user_id= $this->user_id;
 $model->save();

          $this->resetForm();
          $this->emit("hideForm");
          session()->flash('message', 'Registro Guardado Exitosamente');
          $this->showForm = false;

    }

    public function resetForm()
    {
        $this->adm_municipio_id= "";
$this->rrhh_brigada_id= "";
$this->prueba= "";
$this->tipo= "";
$this->muestras= "";
$this->positivos= "";
$this->negativos= "";
$this->referencias= "";
$this->kits= "";
$this->canastas= "";
$this->fecha= "";
$this->user_id= "";

    }


    public function update()
    {
          $this->validate();

          $model = Model::find($this->primaryId);

             $model->adm_municipio_id= $this->adm_municipio_id;
$model->rrhh_brigada_id= $this->rrhh_brigada_id;
$model->prueba= $this->prueba;
$model->tipo= $this->tipo;
$model->muestras= $this->muestras;
$model->positivos= $this->positivos;
$model->negativos= $this->negativos;
$model->referencias= $this->referencias;
$model->kits= $this->kits;
$model->canastas= $this->canastas;
$model->fecha= $this->fecha;
$model->user_id= $this->user_id;
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
