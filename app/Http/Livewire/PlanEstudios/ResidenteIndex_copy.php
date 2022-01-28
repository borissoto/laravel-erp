<?php

namespace App\Http\Livewire\PlanEstudios;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\PeResidente as Model;
use Illuminate\Support\Str;

class ResidenteIndex extends Component
{
    use WithPagination;

    public $paginate = 10;

    public $nombres;
   public $ap_paterno;
   public $ap_materno;
   public $ci;
   public $adm_departamento_id;
   public $sexo;
   public $fecha_nac;
   public $telefono;
   public $domicilio;
   public $universidad;
   public $grado;
   public $obs;
   public $estado;


    public $mode = 'create';

    public $showForm = false;

    public $primaryId = null;

    public $search;

    public $showConfirmDeletePopup = false;

    protected $rules = [
        'nombres' => 'required',
        'ap_paterno' => 'required',
        'ap_materno' => 'required',
        'ci' => 'required',
        'adm_departamento_id' => 'required',
        'sexo' => 'required',
        'fecha_nac' => 'required',
        'telefono' => 'required',
        'domicilio' => 'required',
        'universidad' => 'required',
        'grado' => 'required',
        // 'obs' => 'required',
        'estado' => 'required',
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
        $model = Model::where('nombres', 'like', '%'.$this->search.'%')->orWhere('ap_paterno', 'like', '%'.$this->search.'%')->orWhere('ap_materno', 'like', '%'.$this->search.'%')->orWhere('ci', 'like', '%'.$this->search.'%')->orWhere('adm_departamento_id', 'like', '%'.$this->search.'%')->orWhere('sexo', 'like', '%'.$this->search.'%')->orWhere('fecha_nac', 'like', '%'.$this->search.'%')->orWhere('telefono', 'like', '%'.$this->search.'%')->orWhere('domicilio', 'like', '%'.$this->search.'%')->orWhere('universidad', 'like', '%'.$this->search.'%')->orWhere('grado', 'like', '%'.$this->search.'%')->orWhere('obs', 'like', '%'.$this->search.'%')->orWhere('estado', 'like', '%'.$this->search.'%')->latest()->paginate($this->paginate);
        return view('livewire.planestudios.residente-index', [
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

        $this->nombres= $model->nombres;
        $this->ap_paterno= $model->ap_paterno;
        $this->ap_materno= $model->ap_materno;
        $this->ci= $model->ci;
        $this->adm_departamento_id= $model->adm_departamento_id;
        $this->sexo= $model->sexo;
        $this->fecha_nac= $model->fecha_nac;
        $this->telefono= $model->telefono;
        $this->domicilio= $model->domicilio;
        $this->universidad= $model->universidad;
        $this->grado= $model->grado;
        $this->obs= $model->obs;
        $this->estado= $model->estado;

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

        $model->nombres= Str::upper($this->nombres);
        $model->ap_paterno= Str::upper($this->ap_paterno);
        $model->ap_materno= Str::upper($this->ap_materno);
        $model->ci= $this->ci;
        $model->adm_departamento_id= $this->adm_departamento_id;
        $model->sexo= $this->sexo;
        $model->fecha_nac= $this->fecha_nac;
        $model->telefono= $this->telefono;
        $model->domicilio= $this->domicilio;
        $model->universidad= $this->universidad;
        $model->grado= Str::upper($this->grado);
        $model->obs= Str::upper($this->obs);
        $model->estado= $this->estado;
        $model->save();

        $this->resetForm();
        $this->emit("hideForm");
        session()->flash('message', 'Registro Guardado Exitosamente');
        $this->showForm = false;

    }

    public function resetForm()
    {
        $this->nombres= "";
        $this->ap_paterno= "";
        $this->ap_materno= "";
        $this->ci= "";
        $this->adm_departamento_id= "";
        $this->sexo= "";
        $this->fecha_nac= "";
        $this->telefono= "";
        $this->domicilio= "";
        $this->universidad= "";
        $this->grado= "";
        $this->obs= "";
        $this->estado= "";

    }


    public function update()
    {
        $this->validate();

        $model = Model::find($this->primaryId);
        
        $model->nombres= Str::upper($this->nombres);
        $model->ap_paterno= Str::upper($this->ap_paterno);
        $model->ap_materno= Str::upper($this->ap_materno);
        $model->ci= $this->ci;
        $model->adm_departamento_id= $this->adm_departamento_id;
        $model->sexo= $this->sexo;
        $model->fecha_nac= $this->fecha_nac;
        $model->telefono= $this->telefono;
        $model->domicilio= $this->domicilio;
        $model->universidad= $this->universidad;
        $model->grado= Str::upper($this->grado);
        $model->obs= Str::upper($this->obs);
        $model->estado= $this->estado;
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
