<?php

namespace App\Http\Livewire\Utils;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\User as Model;


class UserSelect extends Component
{
    use WithPagination;

    public $paginate = 5;
    protected $paginationTheme = "bootstrap";

    public $name;
    public $adm_establecimiento_id;
    public $nombres;
    public $ap_paterno;
    public $ap_materno;
    public $ci;
    public $adm_departamento_id;
    public $item;
    public $grado;


    public $mode = 'create';

    public $showForm = false;

    public $primaryId = null;

    public $search;

    public $showConfirmDeletePopup = false;

    protected $rules = [
        'name' => 'required',
        'adm_establecimiento_id' => 'required',
        'nombres' => 'required',
        'ap_paterno' => 'required',
        'ap_materno' => 'required',
        'ci' => 'required',
        'adm_departamento_id' => 'required',
        'item' => 'required',
        'grado' => 'required',
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
        $model = Model::where('name', 'like', '%'.$this->search.'%')->
        orWhere('adm_establecimiento_id', 'like', '%'.$this->search.'%')->
        orWhere('nombres', 'like', '%'.$this->search.'%')->
        orWhere('ap_paterno', 'like', '%'.$this->search.'%')->
        orWhere('ap_materno', 'like', '%'.$this->search.'%')->
        orWhere('ci', 'like', '%'.$this->search.'%')->
        orWhere('adm_departamento_id', 'like', '%'.$this->search.'%')->
        orWhere('item', 'like', '%'.$this->search.'%')->
        orWhere('grado', 'like', '%'.$this->search.'%')->latest()->paginate($this->paginate);
        return view('livewire.utils.user-select', [
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

        $this->name= $model->name;
        $this->adm_establecimiento_id= $model->adm_establecimiento_id;
        $this->nombres= $model->nombres;
        $this->ap_paterno= $model->ap_paterno;
        $this->ap_materno= $model->ap_materno;
        $this->ci= $model->ci;
        $this->adm_departamento_id= $model->adm_departamento_id;
        $this->item= $model->item;
        $this->grado= $model->grado;


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

            $model->name= $this->name;
            $model->adm_establecimiento_id= $this->adm_establecimiento_id;
            $model->nombres= $this->nombres;
            $model->ap_paterno= $this->ap_paterno;
            $model->ap_materno= $this->ap_materno;
            $model->ci= $this->ci;
            $model->adm_departamento_id= $this->adm_departamento_id;
            $model->item= $this->item;
            $model->grado= $this->grado;
            $model->save();

            $this->resetForm();
            $this->emit("hideForm");
            session()->flash('message', 'Registro Guardado Exitosamente');
            $this->showForm = false;

    }

    public function resetForm()
    {
        $this->name= "";
        $this->adm_establecimiento_id= "";
        $this->nombres= "";
        $this->ap_paterno= "";
        $this->ap_materno= "";
        $this->ci= "";
        $this->adm_departamento_id= "";
        $this->item= "";
        $this->grado= "";

    }


    public function update()
    {
        $this->validate();

        $model = Model::find($this->primaryId);

        $model->name= $this->name;
        $model->adm_establecimiento_id= $this->adm_establecimiento_id;
        $model->nombres= $this->nombres;
        $model->ap_paterno= $this->ap_paterno;
        $model->ap_materno= $this->ap_materno;
        $model->ci= $this->ci;
        $model->adm_departamento_id= $this->adm_departamento_id;
        $model->item= $this->item;
        $model->grado= $this->grado;
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

    public function selectedUser($primaryId)
    {
        $this->primaryId = $primaryId;       
        $this->emit('comisionUser', $this->primaryId);
    }

}
