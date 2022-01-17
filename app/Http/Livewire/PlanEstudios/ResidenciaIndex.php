<?php

namespace App\Http\Livewire\PlanEstudios;

use App\Models\Gestiones;
use App\Models\PeCurso;
use App\Models\PeModulo;
use Livewire\Component;
use Livewire\WithPagination;
use Illuminate\Support\Str;
use App\Models\PeResidencia as Model;


class ResidenciaIndex extends Component
{
    public $showComponents = false;
    public $flag = 0;

    public $gestiones;
    public $selectedGestion;

    use WithPagination;
    protected $paginationTheme = "bootstrap";

    public $paginate = 10;

    public $nom_residencia;
    public $nivel;
    public $gestion_ini;
    public $mes_ini;
    public $gestion_fin;
    public $mes_fin;
    public $estado;

    public $resi = null;
    public $modulos = null;
    public $cursos = null;

    public $org_gestion_ini;
    public $org_mes_ini;
    public $org_gestion_fin;
    public $org_mes_fin;


    public $mode = 'create';

    public $showForm = false;

    public $primaryId = null;

    public $search;

    public $showConfirmDeletePopup = false;

    protected $rules = [
        'nom_residencia' => 'required',
        'nivel' => 'required',
        'gestion_ini' => 'required',
        // 'mes_ini' => 'required',
        // 'gestion_fin' => 'required',
        // 'mes_fin' => 'required',
        // 'estado' => 'required',
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
        $this->gestiones = Gestiones::all();
    }

    public function render()
    {
        // if($this->resi != null){
        //     $modulos = PeModulo::where('pe_residencia_id',$this->resi->id)->get();
        // }else{
        //     $modulos = null;
        // }
        $model = Model::where('nom_residencia', 'like', '%'.$this->search.'%')->orWhere('gestion_ini', 'like', '%'.$this->search.'%')->orWhere('mes_ini', 'like', '%'.$this->search.'%')->orWhere('gestion_fin', 'like', '%'.$this->search.'%')->orWhere('mes_fin', 'like', '%'.$this->search.'%')->orWhere('estado', 'like', '%'.$this->search.'%')->latest()->paginate($this->paginate);
        return view('livewire.planestudios.residencia-index', [
            'rows'=> $model,   
            // 'modulos' =>$modulos,         
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
        $this->showComponents = false;
        $this->flag = 0;
        
        $this->mode = 'update';
        $this->primaryId = $primaryId;
        $model = Model::find($primaryId);

        $this->nom_residencia= Str::upper($model->nom_residencia);
        $this->nivel= $model->nivel;
        $this->gestion_ini= $model->gestion_ini;
        $this->mes_ini= $model->mes_ini;
        $this->gestion_fin= $model->gestion_fin;
        $this->mes_fin= $model->mes_fin;
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

        $model->nom_residencia= Str::upper($this->nom_residencia);
        $model->nivel= $this->nivel;
        $model->gestion_ini= $this->gestion_ini;
        $model->mes_ini= $this->mes_ini;
        $model->gestion_fin= $this->gestion_fin;
        $model->mes_fin= $this->mes_fin;
        $model->estado= $this->estado;
        $model->save();

        $gestionId = $model->id;

        // $this->resetForm();
        // $this->emit("hideForm");
        // session()->flash('message', 'Record Saved Successfully');
        // $this->showForm = false;

        $this->emit('gestionId', $gestionId);
        $this->showComponents = true;
        $this->flag = 1;

    }

    public function resetForm()
    {
        $this->nom_residencia= "";
        $this->gestion_ini= "";
        $this->mes_ini= "";
        $this->gestion_fin= "";
        $this->mes_fin= "";
        $this->estado= "";

    }


    public function update()
    {
        $this->validate();

        $model = Model::find($this->primaryId);

        $model->nom_residencia= $this->nom_residencia;
        $model->nivel= $this->nivel;
        $model->gestion_ini= $this->gestion_ini;
        $model->mes_ini= $this->mes_ini;
        $model->gestion_fin= $this->gestion_fin;
        $model->mes_fin= $this->mes_fin;
        $model->estado= $this->estado;
        $model->save();

        $gestionId = $model->id;


        // $this->resetForm();
        // $this->emit("hideForm");
        // session()->flash('message', 'Record Updated Successfully');
        $this->emit('gestionId', $gestionId);
        $this->emit('modecurso', $gestionId);
        $this->showComponents = true;
        $this->flag = 1;
        // dd($gestionId);
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

    public function diagram($primaryId)
    {
        $this->primaryId = $primaryId;
        $model = Model::find($primaryId);
        
        $this->resi = $model;

        $this->modulo = PeModulo::where('pe_residencia_id',$model->id)->get();
        // dd($this->modulo);

        if($this->resi != null){
            $modulos = PeModulo::where('pe_residencia_id',$this->resi->id)->get();
            if($modulos != null ){
                foreach($modulos as $modulo ){
                    // echo "$modulo: $val";
                    $this->cursos = PeCurso::where('pe_modulo_id', $modulo->id)->get();
                   
                    // dd($this->cursos);
                    // echo "$cursos";
                }
                $this->modulos = $modulos;
            }else{
                dd('que paso');
            }
        }else{
            $this->modulos = null;
        }
        
        // $this->emit('showDiagram');
        $this->dispatchBrowserEvent('showDiagram');
    }
}
 