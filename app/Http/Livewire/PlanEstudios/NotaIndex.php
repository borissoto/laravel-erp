<?php

namespace App\Http\Livewire\PlanEstudios;

use App\Models\PeMatriculaciones;
use Livewire\Component;
use Livewire\WithPagination;
use App\Models\PeNota as Model;
use App\Models\PeNota;
use App\Models\User;
use Carbon\Carbon;

class NotaIndex extends Component
{
    use WithPagination;
    protected $paginationTheme = "bootstrap";

    public $paginate = 10;

    public $pe_curso_id;
    public $nom_curso;
    public $cod_curso;
    public $user_id;
    public $nota;
    public $rango_max;
    public $docente;
    public $fecha;
    public $pe_residencia_id;
   

   public $residentes;


    public $mode = 'create';

    public $showForm = false;

    public $primaryId = null;

    public $search;

    public $showConfirmDeletePopup = false;

    protected $rules = [
// 'pe_curso_id' => 'required',
// 'user_id' => 'required',
'nota' => 'required:numeric',
// 'rango_max' => 'required',
// 'docente' => 'required',
// 'fecha' => 'required',

];

public function mount($curso)
{
    // dd($curso->pe_residencia_id);
    // $usuario = User::find($user);
    // Ya no se usa typed properties como User $user
    $this->pe_curso_id = $curso->id;
    $this->nom_curso = $curso->nom_materia;
    $this->cod_curso = $curso->cod_materia;
    $this->pe_residencia_id = $curso->pe_residencia_id;
    $this->residentes = PeMatriculaciones::where('pe_residencia_id','=', $curso->pe_residencia_id)->get();
    // $this->passid = User::find($serid);
}



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
        // $model = Model::where('user_id', 'like', '%'.$this->search.'%')
        // ->orWhere('nota', 'like', '%'.$this->search.'%')
        // ->orWhere('rango_max', 'like', '%'.$this->search.'%')
        // ->orWhere('docente', 'like', '%'.$this->search.'%')
        // ->orWhere('fecha', 'like', '%'.$this->search.'%');

        // $model = User::whereRelation('matriculaciones', 'pe_residencia_id', $this->pe_residencia_id )
        // ->latest()->paginate($this->paginate); 

        // $notas = Model::whereRelation('materia.residencia', 'pe_residencia_id', $this->pe_residencia_id )
        // ->latest()->paginate($this->paginate); 
        $model = Model::whereRelation('usuario.matriculaciones', 'pe_residencia_id', $this->pe_residencia_id )
        ->where('pe_curso_id', $this->pe_curso_id )
        ->latest()->paginate($this->paginate); 
        // dd($model);
        // $model = Model::where('pe_curso_id', 'like', $this->pe_curso_id)
        // ->latest()->paginate($this->paginate);
        return view('livewire.planestudios.nota-index', [
            'rows'=> $model  
        ]);
    }


    public function create ($primaryId)
    {
        $this->user_id= $primaryId;
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
        $model = Model::find($primaryId);

        // $this->pe_curso_id= $model->pe_curso_id;
$this->user_id= $primaryId;
// $this->nota= $model->nota;
// $this->rango_max= $model->rango_max;
// $this->docente= $model->docente;
// $this->fecha= $model->fecha;


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

             $model->pe_curso_id= $this->pe_curso_id;
             $model->user_id= $this->user_id;
             $model->nota= $this->nota;
             // $model->rango_max= $this->rango_max;
             $model->docente= auth()->user()->id;
             $model->fecha= Carbon::now();
             $model->save();

          $this->resetForm();
          $this->emit("hideForm");
          session()->flash('message', 'Record Saved Successfully');
          $this->showForm = false;

    }

    public function resetForm()
    {
        // $this->pe_curso_id= "";
// $this->user_id= "";
// $this->nota= "";
// $this->rango_max= "";
// $this->docente= "";
// $this->fecha= "";

    }


    public function update()
    {
          $this->validate();

          $model = Model::find($this->primaryId);

             $model->pe_curso_id= $this->pe_curso_id;
            //  $model->user_id= $this->user_id;
             $model->nota= $this->nota;
            //  $model->rango_max= $this->rango_max;
             $model->docente= auth()->user()->id;
             $model->fecha= Carbon::now();
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
