<?php

namespace App\Http\Livewire\PlanEstudios;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\PeModulo as Model;
use App\Models\PeModulo;
use Illuminate\Support\Str;
use App\Models\PeResidencia;
use App\Rules\Percentage;

class ModuloIndex extends Component
{
    
    public $residencias;
    public $msg_porcentaje;
    
    use WithPagination;

    public $paginate = 10;

    public $pe_residencia_id;
    public $nom_modulo;
    public $porcentaje;
    public $porcentaje_restar;


    public $mode = 'create';

    public $showForm = false;

    public $primaryId = null;

    public $search;

    public $showConfirmDeletePopup = false;

    protected $rules = [
        'pe_residencia_id' => 'required',
        'nom_modulo' => 'required',
        'porcentaje' => 'required|numeric|between:1,100',
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
        $this->residencias = PeResidencia::all();
    }

    public function render()
    {
        $model = Model::where('pe_residencia_id', 'like', '%'.$this->search.'%')->orWhere('nom_modulo', 'like', '%'.$this->search.'%')->orWhere('porcentaje', 'like', '%'.$this->search.'%')->latest()->paginate($this->paginate);
        return view('livewire.planestudios.modulo-index', [
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

        $this->pe_residencia_id= $model->pe_residencia_id;
        $this->nom_modulo= $model->nom_modulo;
        $this->porcentaje= $model->porcentaje;
        $this->porcentaje_restar = $model->porcentaje;


        $this->emit("showForm");
        $this->showForm = true;
    }

    public function closeForm()
    {
        $this->showForm = false;

        $this->emit("hideForm");
    }
    // public function sumPorcentajes($percentage)
    // {
    //     $porcentaje_suma = PeModulo::where('pe_residencia_id', $this->pe_residencia_id)->sum('porcentaje');
    //     dd($porcentaje_suma+$percentage);            
    //         if($percentage + $porcentaje_suma > 100){
    //             $this-> msg_porcentaje = 'Es mayor a 100';
    //         }
    // }

    public function store()
    {
        $this->validate();

        $model = new Model();

        $model->pe_residencia_id= $this->pe_residencia_id;
        $model->nom_modulo= Str::upper($this->nom_modulo);
        $model->porcentaje= $this->porcentaje;
        $this->validate([
            'porcentaje' => [new Percentage($this->pe_residencia_id, $this->porcentaje, 0)]
        ]);
        // $this->sumPorcentajes($this->porcentaje); //

        $model->save();

        $this->resetForm();
        $this->emit("hideForm");
        session()->flash('message', 'Record Saved Successfully');
        $this->showForm = false;

    }

    public function resetForm()
    {
        $this->pe_residencia_id= "";
        $this->nom_modulo= "";
        $this->porcentaje= "";

    }


    public function update()
    {
        $this->validate();
        $model = Model::find($this->primaryId);

        $model->pe_residencia_id= $this->pe_residencia_id;
        $model->nom_modulo= $this->nom_modulo;
        $model->porcentaje= $this->porcentaje;

        $this->validate([
            'porcentaje' => [new Percentage($this->pe_residencia_id, $this->porcentaje, $this->porcentaje_restar)]
        ]);

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
