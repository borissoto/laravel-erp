<?php

namespace App\Http\Livewire\PlanEstudios;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\PeCurso as Model;
use App\Models\PeModulo;
use App\Models\PeResidencia;
use App\Models\User;
use Illuminate\Support\Str;

class CursoIndex extends Component
{

    protected $listeners = [ 'gestionId' => 'getGestionId' ];
    public $gestionId;
    public $gestion;
    public $nivel;
    public $nom_jefe;
    public function updatedJefe($value){
        $this->nom_jefe = User::select('name','nombres','ap_paterno','ap_materno')->where('id', $value)->first();
        // dd($this->nom_jefe);
    }

    public $residencias;
    public $modulos;
    public $usuarios;

    /****1er año *****/
    public $dr_obs;
    public $dr_gin;
    public $dr_int;
    public $dr_ped;
    public $dr_neo;
    public $dr_tra;
    public $dr_cir;
    
    
    public $selectedResidencia;

    use WithPagination;

    public $paginate = 10;

    public $pe_residencia_id;
    public $user_id;
    // public $instructor;
    public $nom_curso;


    public $mode = 'create';

    public $showForm = false;

    public $primaryId = null;

    public $search;

    public $showConfirmDeletePopup = false;

    protected $rules = [
        'pe_residencia_id' => 'required',
        'user_id' => 'required',
        'jefe' => 'required',
        // 'instructor' => 'required',        
        // 'modulo' => 'required',
        'nom_curso' => 'required',
        // 'parcial_nom' => 'required',
        // 'parcial_nota_max' => 'required',      
    ];

    public function getGestionId($gesId){       
        // dd($gesId);
        $this->gestionId = $gesId;
        
        // dd($this->gestion);

    }


    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function updatingSearch()
    {
        $this->resetPage();
    }

    public function mount($nivel)
    {
        $this->nivel = $nivel;
        $this->residencias = PeResidencia::all();
        $this->usuarios = User::where('docente','EDPERM')->get();
        $this->jefe = User::where('docente','EDPERM')->get();
        
        
    }

    public function render()
    {
        // dd($this->gestionId);
        $gestion = PeResidencia::where('id', $this->gestionId)->first();
        
        $model = Model::where('user_id', 'like', '%'.$this->search.'%')->
        orWhere('modulo', 'like', '%'.$this->search.'%')->
        orWhere('nom_curso', 'like', '%'.$this->search.'%');

        $model = Model::where('pe_residencia_id', $this->gestionId)->latest();
        return view('livewire.planestudios.curso-index', [
            'rows'=> $model, 'gestion' => $gestion
        ]);
    }

    public function updatedSelectedResidencia($residencia)
    {
        $this->modulos = PeResidencia::where('pe_residencia_id', $residencia)->get();
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
        $this->user_id= $model->user_id;
        $this->instructor= $model->instructor;
        $this->nom_curso= $model->nom_curso;


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

        $model->pe_residencia_id= $this->pe_residencia_id;
        $model->user_id= $this->user_id;
        // $model->instructor= $this->instructor;
        $model->nom_curso= Str::upper($this->nom_curso);
        $model->save();

        $this->resetForm();
        $this->emit("hideForm");
        session()->flash('message', 'Record Saved Successfully');
        $this->showForm = false;

    }

    public function resetForm()
    {
        $this->pe_residencia_id= "";
        $this->user_id= "";
        // $this->instructor= "";
        $this->nom_curso= "";

    }


    public function update()
    {
        $this->validate();

        $model = Model::find($this->primaryId);

        $model->pe_residencia_id= $this->pe_residencia_id;
        $model->user_id= $this->user_id;
        $model->instructor= $this->instructor;
        $model->nom_curso= Str::upper($this->nom_curso);
        $model->save();

        // $this->resetForm();
        // $this->emit("hideForm");
        // session()->flash('message', 'Record Updated Successfully');
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
