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

    protected $listeners = [ 'gestionId' => 'getGestionId', 'modecurso' => 'edit'];
    // protected $listeners = [ 'gestionId' => 'getGestionId']; 
    public $gestionId;
    public $gestion;
    public $nivel;
    public $jefe;
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
    public $obstetricia;
    public $dr_gin;
    public $dr_int;
    public $dr_ped;
    public $dr_neo;
    public $dr_tra;
    public $dr_cir;
    
      /****2d0 año *****/
      public $dr_2_1;
      public $dr_2_2;
      public $dr_2_3;
      public $dr_2_4;
      public $dr_2_5;
      
      /****2d0 año *****/
      public $dr_3_1;
      public $dr_3_2;
      public $dr_3_3;
      public $dr_3_4;
      public $dr_3_5;
    
    
    public $selectedResidencia;

    use WithPagination;

    public $paginate = 10;

    public $pe_residencia_id;
    public $user_id;
    // public $instructor;
    public $nom_materia;


    public $mode = 'create';

    public $showForm = false;

    public $primaryId = null;

    public $search;

    public $showConfirmDeletePopup = false;

    protected $rules = [
        'pe_residencia_id' => 'required',
        // 'user_id' => 'required',
        'jefe' => 'required',
        // 'instructor' => 'required',        
        // 'modulo' => 'required',
        // 'nom_materia' => 'required',
        // 'cod_materia' => 'required',
        // 'nota_max' => 'required',      
    ];

    public function getGestionId($gesId){       
        // dd($gesId);
        $this->gestionId = $gesId;
        $this->pe_residencia_id = $gesId;
        
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
        // dd($nivel);
        $this->nivel = $nivel;
        // $this->mode = $mode;
        $this->residencias = PeResidencia::all();
        $this->usuarios = User::where('docente','EDPERM')->get();
        $this->obstetricia = User::where('docente','EDPERM')->get();
        $this->jefe = User::where('docente','EDPERM')->get();
        
        
    }

    public function render()
    {
        // dd($this->gestionId);
        $gestion = PeResidencia::where('id', $this->gestionId)->first();
        
        $model = Model::where('user_id', 'like', '%'.$this->search.'%')->
        orWhere('modulo', 'like', '%'.$this->search.'%')->
        orWhere('nom_materia', 'like', '%'.$this->search.'%');

        $model = Model::where('pe_residencia_id', $this->gestionId)->latest();
        return view('livewire.planestudios.curso-index', [
            'rows'=> $model, 'gestion' => $gestion
        ]);
    }

    public function updatedSelectedResidencia($residencia)
    {
        $this->modulos = PeResidencia::where('pe_residencia_id', $residencia)->get();
    }


    public function create()
    {
        $this->mode = 'create';
        $this->resetForm();
        $this->showForm = true;

        $this->emit("showForm");
    }


    public function edit($primaryId)
    {
        // dd($primaryId);
        $this->mode = 'update';
        $this->primaryId = $primaryId;
        $model = Model::where('pe_residencia_id',$primaryId)->get();
        // dd($model);
        $this->pe_residencia_id= $primaryId;
        // $this->jefe= $model->user_id;
        // $this->instructor= $model->instructor;
        // $this->nom_materia= $model->nom_materia;
        foreach ($model as $m) {
            if($m->cod_materia === 'OBS1') $this->dr_obs = $m->user_id;
            if($m->cod_materia === 'GIN1') $this->dr_gin = $m->user_id;
            if($m->cod_materia === 'MI1') $this->dr_int = $m->user_id;
            if($m->cod_materia === 'PED1') $this->dr_ped = $m->user_id;
            if($m->cod_materia === 'NEO1') $this->dr_neo = $m->user_id;
            if($m->cod_materia === 'TRA1') $this->dr_tra = $m->user_id;
            if($m->cod_materia === 'CIR1') $this->dr_cir = $m->user_id;            
            if($m->cod_materia === 'TRIM1') $this->jefe = $m->user_id;
            $this->nom_jefe = User::select('name','nombres','ap_paterno','ap_materno')->where('id', $this->jefe)->first();     
        }

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

        if($this->nivel == 1){
            
            $nf1 = new Model();
            $nf1->pe_residencia_id = $this->pe_residencia_id;
            $nf1->modulo = "MOD1";
            $nf1->nom_materia = "OBSTETRICIA";
            $nf1->cod_materia = "OBS1"; //Codigo de materia
            $nf1->nota_max = 50;
            // $nf1->user_id = $this->dr_obs;
            $nf1->user_id = $this->jefe;
            $nf1->save();

            $nf1 = new Model();
            $nf1->pe_residencia_id = $this->pe_residencia_id;
            $nf1->modulo = "MOD1";
            $nf1->nom_materia = "GINECOLOGIA";
            $nf1->cod_materia = "GIN1"; //Codigo de materia
            $nf1->nota_max = 50;
            // $nf1->user_id = $this->dr_gin;
            $nf1->user_id = $this->jefe;
            $nf1->save();

            $nf1 = new Model();
            $nf1->pe_residencia_id = $this->pe_residencia_id;
            $nf1->modulo = "MOD1";
            $nf1->nom_materia = "MEDICINA INTERNA";
            $nf1->cod_materia = "MI1"; //Codigo de materia
            $nf1->nota_max = 50;
            // $nf1->user_id = $this->dr_int;
            $nf1->user_id = $this->jefe;
            $nf1->save();

            $nf1 = new Model();
            $nf1->pe_residencia_id = $this->pe_residencia_id;
            $nf1->modulo = "MOD1";
            $nf1->nom_materia = "PEDIATRIA";
            $nf1->cod_materia = "PED1"; //Codigo de materia
            $nf1->nota_max = 50;
            // $nf1->user_id = $this->dr_gin;
            $nf1->user_id = $this->jefe;
            $nf1->save();

            $nf1 = new Model();
            $nf1->pe_residencia_id = $this->pe_residencia_id;
            $nf1->modulo = "MOD1";
            $nf1->nom_materia = "NEONATOLOGIA";
            $nf1->cod_materia = "NEO1"; //Codigo de materia
            $nf1->nota_max = 50;
            // $nf1->user_id = $this->dr_ped;
            $nf1->user_id = $this->jefe;
            $nf1->save();

            $nf1 = new Model();
            $nf1->pe_residencia_id = $this->pe_residencia_id;
            $nf1->modulo = "MOD1";
            $nf1->nom_materia = "TRAUMATOLOGIA";
            $nf1->cod_materia = "TRA1"; //Codigo de materia
            $nf1->nota_max = 50;
            // $nf1->user_id = $this->dr_tra;
            $nf1->user_id = $this->jefe;
            $nf1->save();

            $nf1 = new Model();
            $nf1->pe_residencia_id = $this->pe_residencia_id;
            $nf1->modulo = "MOD1";
            $nf1->nom_materia = "CIRUGIA";
            $nf1->cod_materia = "CIR1"; //Codigo de materia
            $nf1->nota_max = 50;
            // $nf1->user_id = $this->dr_cir;
            $nf1->user_id = $this->jefe;
            $nf1->save();

            $nf1 = new Model();
            $nf1->pe_residencia_id = $this->pe_residencia_id;
            $nf1->modulo = "MOD2";
            $nf1->nom_materia = "PRIMERO";
            $nf1->cod_materia = "TRIM1"; //Codigo de materia
            $nf1->nota_max = 15;
            $nf1->user_id = $this->jefe;
            $nf1->save();

            $nf1 = new Model();
            $nf1->pe_residencia_id = $this->pe_residencia_id;
            $nf1->modulo = "MOD2";
            $nf1->nom_materia = "SEGUNDO";
            $nf1->cod_materia = "TRIM2"; //Codigo de materia
            $nf1->nota_max = 15;
            $nf1->user_id = $this->jefe;
            $nf1->save();

            $nf1 = new Model();
            $nf1->pe_residencia_id = $this->pe_residencia_id;
            $nf1->modulo = "MOD2";
            $nf1->nom_materia = "TERCERO";
            $nf1->cod_materia = "TRIM3"; //Codigo de materia
            $nf1->nota_max = 15;
            $nf1->user_id = $this->jefe;
            $nf1->save();

            $nf1 = new Model();
            $nf1->pe_residencia_id = $this->pe_residencia_id;
            $nf1->modulo = "MOD2";
            $nf1->nom_materia = "CUARTO";
            $nf1->cod_materia = "TRIM4"; //Codigo de materia
            $nf1->nota_max = 15;
            $nf1->user_id = $this->jefe;
            $nf1->save();

            $nf1 = new Model();
            $nf1->pe_residencia_id = $this->pe_residencia_id;
            $nf1->modulo = "MOD3";
            $nf1->nom_materia = "MARZO";
            $nf1->cod_materia = "MES1"; //Codigo de materia
            $nf1->nota_max = 15;
            $nf1->user_id = $this->jefe;
            $nf1->save();

            $nf1 = new Model();
            $nf1->pe_residencia_id = $this->pe_residencia_id;
            $nf1->modulo = "MOD3";
            $nf1->nom_materia = "ABRIL";
            $nf1->cod_materia = "MES2"; //Codigo de materia
            $nf1->nota_max = 15;
            $nf1->user_id = $this->jefe;
            $nf1->save();

            $nf1 = new Model();
            $nf1->pe_residencia_id = $this->pe_residencia_id;
            $nf1->modulo = "MOD3";
            $nf1->nom_materia = "MAYO";
            $nf1->cod_materia = "MES3"; //Codigo de materia
            $nf1->nota_max = 15;
            $nf1->user_id = $this->jefe;
            $nf1->save();

            $nf1 = new Model();
            $nf1->pe_residencia_id = $this->pe_residencia_id;
            $nf1->modulo = "MOD3";
            $nf1->nom_materia = "JUNIO";
            $nf1->cod_materia = "MES4"; //Codigo de materia
            $nf1->nota_max = 15;
            $nf1->user_id = $this->jefe;
            $nf1->save();

            $nf1 = new Model();
            $nf1->pe_residencia_id = $this->pe_residencia_id;
            $nf1->modulo = "MOD3";
            $nf1->nom_materia = "JULIO";
            $nf1->cod_materia = "MES5"; //Codigo de materia
            $nf1->nota_max = 15;
            $nf1->user_id = $this->jefe;
            $nf1->save();

            $nf1 = new Model();
            $nf1->pe_residencia_id = $this->pe_residencia_id;
            $nf1->modulo = "MOD3";
            $nf1->nom_materia = "AGOSTO";
            $nf1->cod_materia = "MES6"; //Codigo de materia
            $nf1->nota_max = 15;
            $nf1->user_id = $this->jefe;
            $nf1->save();

            $nf1 = new Model();
            $nf1->pe_residencia_id = $this->pe_residencia_id;
            $nf1->modulo = "MOD3";
            $nf1->nom_materia = "SEPTIEMBRE";
            $nf1->cod_materia = "MES7"; //Codigo de materia
            $nf1->nota_max = 15;
            $nf1->user_id = $this->jefe;
            $nf1->save();

            $nf1 = new Model();
            $nf1->pe_residencia_id = $this->pe_residencia_id;
            $nf1->modulo = "MOD3";
            $nf1->nom_materia = "OCTUBRE";
            $nf1->cod_materia = "MES8"; //Codigo de materia
            $nf1->nota_max = 15;
            $nf1->user_id = $this->jefe;
            $nf1->save();

            $nf1 = new Model();
            $nf1->pe_residencia_id = $this->pe_residencia_id;
            $nf1->modulo = "MOD3";
            $nf1->nom_materia = "NOVIEMBRE";
            $nf1->cod_materia = "MES9"; //Codigo de materia
            $nf1->nota_max = 15;
            $nf1->user_id = $this->jefe;
            $nf1->save();

            $nf1 = new Model();
            $nf1->pe_residencia_id = $this->pe_residencia_id;
            $nf1->modulo = "MOD3";
            $nf1->nom_materia = "DICIEMBRE";
            $nf1->cod_materia = "MES10"; //Codigo de materia
            $nf1->nota_max = 15;
            $nf1->user_id = $this->jefe;
            $nf1->save();

            $nf1 = new Model();
            $nf1->pe_residencia_id = $this->pe_residencia_id;
            $nf1->modulo = "MOD3";
            $nf1->nom_materia = "ENERO";
            $nf1->cod_materia = "MES11"; //Codigo de materia
            $nf1->nota_max = 15;
            $nf1->user_id = $this->jefe;
            $nf1->save();

            $nf1 = new Model();
            $nf1->pe_residencia_id = $this->pe_residencia_id;
            $nf1->modulo = "MOD3";
            $nf1->nom_materia = "FEBRERO";
            $nf1->cod_materia = "MES12"; //Codigo de materia
            $nf1->nota_max = 15;
            $nf1->user_id = $this->jefe;
            $nf1->save();

            $nf1 = new Model();
            $nf1->pe_residencia_id = $this->pe_residencia_id;
            $nf1->modulo = "MOD4";
            $nf1->nom_materia = "TRABAJO DE INVESTIGACION";
            $nf1->cod_materia = "TRAB1"; //Codigo de materia
            $nf1->nota_max = 20;
            $nf1->user_id = $this->jefe;
            $nf1->save();

        }

        // $model->pe_residencia_id= $this->pe_residencia_id;
        // $model->user_id= $this->user_id;
        // $model->instructor= $this->instructor;
        // $model->nom_materia= Str::upper($this->nom_materia);
        // $model->save();

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
        $this->nom_materia= "";

    }


    public function update()
    {
        $this->validate();

        // $model = Model::find($this->primaryId);
        if($this->nivel == 1){
            $model = Model::where('pe_residencia_id',$this->primaryId)->get();
        // dd($model);
        // $this->pe_residencia_id= $primaryId;
        // $this->jefe= $model->user_id;
        // $this->instructor= $model->instructor;
        // $this->nom_materia= $model->nom_materia;
        foreach ($model as $m) {
            if($m->cod_materia === 'OBS1') $this->dr_obs = $m->user_id;
            if($m->cod_materia === 'GIN1') $this->dr_gin = $m->user_id;
            if($m->cod_materia === 'MI1') $this->dr_int = $m->user_id;
            if($m->cod_materia === 'PED1') $this->dr_ped = $m->user_id;
            if($m->cod_materia === 'NEO1') $this->dr_neo = $m->user_id;
            if($m->cod_materia === 'TRA1') $this->dr_tra = $m->user_id;
            if($m->cod_materia === 'CIR1') $this->dr_cir = $m->user_id;            
            if($m->cod_materia === 'TRIM1') $this->jefe = $m->user_id;
            $this->nom_jefe = User::select('name','nombres','ap_paterno','ap_materno')->where('id', $this->jefe)->first();     
        }
            
           
        }

        // $model->pe_residencia_id= $this->pe_residencia_id;
        // $model->user_id= $this->user_id;
        // $model->instructor= $this->instructor;
        // $model->nom_materia= Str::upper($this->nom_materia);
        // $model->save();

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
