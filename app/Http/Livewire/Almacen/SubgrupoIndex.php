<?php

namespace App\Http\Livewire\Almacen;

use App\Models\AlmPartida;
use Livewire\Component;
use Livewire\WithPagination;
use Illuminate\Support\Str;
use App\Models\AlmSubgrupo as Model;


class SubgrupoIndex extends Component
{
    use WithPagination;

    public $paginate = 10;

    public $descrip;
    public $alm_partida_id;
    public $partidas;
    public $selectedPartidas;

    public $mode = 'create';
    public $showForm = false;
    public $primaryId = null;
    public $search;
    public $showConfirmDeletePopup = false;

    protected $rules = [
        'descrip' => 'required',
        'alm_partida_id' => 'required',
    ];



    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function updatingSearch()
    {
        $this->resetPage();
    }
 
    public function mount()
    {
        $this->partidas = AlmPartida::all();
    }

    public function render()
    {
        $model = Model::where('descrip', 'like', '%'.$this->search.'%')->orWhere('alm_partida_id', 'like', '%'.$this->search.'%')->latest()->paginate($this->paginate);
        return view('livewire.almacen.subgrupo-index', [
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
$this->alm_partida_id= $model->alm_partida_id;


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
            $model->alm_partida_id= $this->alm_partida_id;
            $model->save();

          $this->resetForm();
          $this->emit("hideForm");
          session()->flash('message', 'Registro Guardado Exitosamente');
          $this->showForm = false;

    }

    public function resetForm()
    {
        $this->descrip= "";
$this->alm_partida_id= "";

    }


    public function update()
    {
          $this->validate();

          $model = Model::find($this->primaryId);

             $model->descrip= $this->descrip;
$model->alm_partida_id= $this->alm_partida_id;
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
