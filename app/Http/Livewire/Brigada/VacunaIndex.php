<?php

namespace App\Http\Livewire\Brigada;

use App\Models\AdmMunicipio;
use Livewire\Component;
use Livewire\WithPagination;
use App\Models\RrhhVacuna as Model;
use App\Models\RrhhBrigada;
use Carbon\Carbon;


class VacunaIndex extends Component
{
    use WithPagination;

    public $paginate = 10;
    protected $paginationTheme = "bootstrap";

    public $adm_municipio_id;
    public $rrhh_brigada_id;
    public $marca;
    public $dosis1;
    public $dosis2;
    public $esavis;
    public $fecha;
    public $user_id;

    public $municipio;
    public $municipios;
    public $selectedMunicipio;
    public $brigadas;

    public $mode = 'create';

    public $showForm = false;

    public $primaryId = null;

    public $search;

    public $showConfirmDeletePopup = false;

    protected $rules = [    
    'municipio' => 'required',
    'selectedMunicipio' => 'required',
    'marca' => 'required',
    'dosis1' => 'required',
    'dosis2' => 'required',
    'esavis' => 'required',
    'fecha' => 'required',
    // 'user_id' => 'required',

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
        if(auth()->user()->establecimiento){
            $nivel = auth()->user()->establecimiento->municipio->departamento->id;
            // dd($nivel);
            // $this->brigadas = RrhhBrigada::whereRelation('establecimiento.municipio.departamento', 'id', '=', $nivel);
            $this->municipios = AdmMunicipio::where('adm_departamento_id', '=', $nivel)->get();
            // dd($this->municipios);
        }

        $this->brigadas = collect();
        
    }

    public function render()
    {
        $model = Model::where('adm_municipio_id', 'like', '%'.$this->search.'%')
        ->orWhere('rrhh_brigada_id', 'like', '%'.$this->search.'%')
        ->orWhere('marca', 'like', '%'.$this->search.'%')
        ->orWhere('dosis1', 'like', '%'.$this->search.'%')
        ->orWhere('dosis2', 'like', '%'.$this->search.'%')
        ->orWhere('esavis', 'like', '%'.$this->search.'%')
        ->orWhere('fecha', 'like', '%'.$this->search.'%')
        ->orWhere('user_id', 'like', '%'.$this->search.'%')->latest()->paginate($this->paginate);
        return view('livewire.brigada.vacuna-index', [
            'rows'=> $model
        ]);
    }

    public function updatedMunicipio($municipio)
    {
        if(!is_null($municipio)){
            $this->brigadas = RrhhBrigada::where('adm_municipio_id', $municipio)->get();
        }
        
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

        $this->municipio= $model->adm_municipio_id;
        $this->selectedMunicipio= $model->rrhh_brigada_id;
        $this->marca= $model->marca;
        $this->dosis1= $model->dosis1;
        $this->dosis2= $model->dosis2;
        $this->esavis= $model->esavis;
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

            $model->adm_municipio_id= $this->municipio;
            $model->rrhh_brigada_id= $this->selectedMunicipio;
            $model->marca= $this->marca;
            $model->dosis1= $this->dosis1;
            $model->dosis2= $this->dosis2;
            $model->esavis= $this->esavis;
            $model->fecha= Carbon::parse($this->fecha)->format('Y-m-d');
            $model->user_id= auth()->user()->id;
            $model->save();

          $this->resetForm();
          $this->emit("hideForm");
          session()->flash('message', 'Registro Guardado Exitosamente');
          $this->showForm = false;

    }

    public function resetForm()
    {
        $this->municipio= "";
        $this->selectedMunicipio= "";
        $this->marca= "";
        $this->dosis1= "";
        $this->dosis2= "";
        $this->esavis= "";
        $this->fecha= "";
        $this->user_id= "";

    }


    public function update()
    {
          $this->validate();

          $model = Model::find($this->primaryId);

            $model->adm_municipio_id= $this->municipio;
            $model->rrhh_brigada_id= $this->selectedMunicipio;
            $model->marca= $this->marca;
            $model->dosis1= $this->dosis1;
            $model->dosis2= $this->dosis2;
            $model->esavis= $this->esavis;
            $model->fecha= Carbon::parse($this->fecha)->format('Y-m-d');
            $model->user_id= auth()->user()->id;
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
