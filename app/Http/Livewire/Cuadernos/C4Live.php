<?php

namespace App\Http\Livewire\Cuadernos;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\C4 as Model;


class C4Live extends Component
{
    use WithPagination;
    protected $paginationTheme = "bootstrap";

    public $paginate = 10;

    public $establecimiento;
   public $medico;
   public $fecha;
   public $hclin;
   public $noasegurado;
   public $apellidosynombres;
   public $sexo;
   public $nacimiento;
   public $anos;
   public $meses;
   public $dias;
   public $bja;
   public $peso;
   public $talla;
   public $control;
   public $pesotalla;
   public $tallaedad;
   public $hierro;
   public $vitaa;
   public $zinc;
   public $mebendazol;
   public $conselact;
   public $lactancia;
   public $consealimentacion;
   public $alcomplementariomenores1;
   public $alcomplementario1a;
   public $motricidadgruesa;
   public $motricidadfina;
   public $audicionlenguaje;
   public $personalsocial;
   public $consultaexterna;
   public $diagnostico;
   public $cie;
   public $tratamiento;
   public $responsable;
   public $inyectable;
   public $sueros;
   public $sutcur;
   public $otrasactividades;
   public $mortalidad;
   public $refycontra;
   public $refde;
   public $refa;


    public $mode = 'create';

    public $showForm = false;

    public $primaryId = null;

    public $search;

    public $showConfirmDeletePopup = false;

    protected $rules = [
'establecimiento' => 'required',
'medico' => 'required',
'fecha' => 'required',
'hclin' => 'required',
'noasegurado' => 'required',
'apellidosynombres' => 'required',
'sexo' => 'required',
'nacimiento' => 'required',
'anos' => 'required',
'meses' => 'required',
'dias' => 'required',
'bja' => 'required',
'peso' => 'required',
'talla' => 'required',
'control' => 'required',
'pesotalla' => 'required',
'tallaedad' => 'required',
'hierro' => 'required',
'vitaa' => 'required',
'zinc' => 'required',
'mebendazol' => 'required',
'conselact' => 'required',
'lactancia' => 'required',
'consealimentacion' => 'required',
'alcomplementariomenores1' => 'required',
'alcomplementario1a' => 'required',
'motricidadgruesa' => 'required',
'motricidadfina' => 'required',
'audicionlenguaje' => 'required',
'personalsocial' => 'required',
'consultaexterna' => 'required',
'diagnostico' => 'required',
'cie' => 'required',
'tratamiento' => 'required',
'responsable' => 'required',
'inyectable' => 'required',
'sueros' => 'required',
'sutcur' => 'required',
'otrasactividades' => 'required',
'mortalidad' => 'required',
'refycontra' => 'required',
'refde' => 'required',
'refa' => 'required',

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
        $model = Model::where('establecimiento', 'like', '%'.$this->search.'%')->orWhere('medico', 'like', '%'.$this->search.'%')->orWhere('fecha', 'like', '%'.$this->search.'%')->orWhere('hclin', 'like', '%'.$this->search.'%')->orWhere('noasegurado', 'like', '%'.$this->search.'%')->orWhere('apellidosynombres', 'like', '%'.$this->search.'%')->orWhere('sexo', 'like', '%'.$this->search.'%')->orWhere('nacimiento', 'like', '%'.$this->search.'%')->orWhere('años', 'like', '%'.$this->search.'%')->orWhere('meses', 'like', '%'.$this->search.'%')->orWhere('dias', 'like', '%'.$this->search.'%')->orWhere('bja', 'like', '%'.$this->search.'%')->orWhere('peso', 'like', '%'.$this->search.'%')->orWhere('talla', 'like', '%'.$this->search.'%')->orWhere('control', 'like', '%'.$this->search.'%')->orWhere('pesotalla', 'like', '%'.$this->search.'%')->orWhere('tallaedad', 'like', '%'.$this->search.'%')->orWhere('hierro', 'like', '%'.$this->search.'%')->orWhere('vitaa', 'like', '%'.$this->search.'%')->orWhere('zinc', 'like', '%'.$this->search.'%')->orWhere('mebendazol', 'like', '%'.$this->search.'%')->orWhere('conselact', 'like', '%'.$this->search.'%')->orWhere('lactancia', 'like', '%'.$this->search.'%')->orWhere('consealimentacion', 'like', '%'.$this->search.'%')->orWhere('alcomplementariomenores1', 'like', '%'.$this->search.'%')->orWhere('alcomplementario1a', 'like', '%'.$this->search.'%')->orWhere('motricidadgruesa', 'like', '%'.$this->search.'%')->orWhere('motricidadfina', 'like', '%'.$this->search.'%')->orWhere('audicionlenguaje', 'like', '%'.$this->search.'%')->orWhere('personalsocial', 'like', '%'.$this->search.'%')->orWhere('consultaexterna', 'like', '%'.$this->search.'%')->orWhere('diagnostico', 'like', '%'.$this->search.'%')->orWhere('cie', 'like', '%'.$this->search.'%')->orWhere('tratamiento', 'like', '%'.$this->search.'%')->orWhere('responsable', 'like', '%'.$this->search.'%')->orWhere('inyectable', 'like', '%'.$this->search.'%')->orWhere('sueros', 'like', '%'.$this->search.'%')->orWhere('sutcur', 'like', '%'.$this->search.'%')->orWhere('otrasactividades', 'like', '%'.$this->search.'%')->orWhere('mortalidad', 'like', '%'.$this->search.'%')->orWhere('refycontra', 'like', '%'.$this->search.'%')->orWhere('refde', 'like', '%'.$this->search.'%')->orWhere('refa', 'like', '%'.$this->search.'%')->latest()->paginate($this->paginate);
        return view('livewire.cuadernos.c4-live', [
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

        $this->establecimiento= $model->establecimiento;
$this->medico= $model->medico;
$this->fecha= $model->fecha;
$this->hclin= $model->hclin;
$this->noasegurado= $model->noasegurado;
$this->apellidosynombres= $model->apellidosynombres;
$this->sexo= $model->sexo;
$this->nacimiento= $model->nacimiento;
$this->anos= $model->años;
$this->meses= $model->meses;
$this->dias= $model->dias;
$this->bja= $model->bja;
$this->peso= $model->peso;
$this->talla= $model->talla;
$this->control= $model->control;
$this->pesotalla= $model->pesotalla;
$this->tallaedad= $model->tallaedad;
$this->hierro= $model->hierro;
$this->vitaa= $model->vitaa;
$this->zinc= $model->zinc;
$this->mebendazol= $model->mebendazol;
$this->conselact= $model->conselact;
$this->lactancia= $model->lactancia;
$this->consealimentacion= $model->consealimentacion;
$this->alcomplementariomenores1= $model->alcomplementariomenores1;
$this->alcomplementario1a= $model->alcomplementario1a;
$this->motricidadgruesa= $model->motricidadgruesa;
$this->motricidadfina= $model->motricidadfina;
$this->audicionlenguaje= $model->audicionlenguaje;
$this->personalsocial= $model->personalsocial;
$this->consultaexterna= $model->consultaexterna;
$this->diagnostico= $model->diagnostico;
$this->cie= $model->cie;
$this->tratamiento= $model->tratamiento;
$this->responsable= $model->responsable;
$this->inyectable= $model->inyectable;
$this->sueros= $model->sueros;
$this->sutcur= $model->sutcur;
$this->otrasactividades= $model->otrasactividades;
$this->mortalidad= $model->mortalidad;
$this->refycontra= $model->refycontra;
$this->refde= $model->refde;
$this->refa= $model->refa;


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

             $model->establecimiento= $this->establecimiento;
$model->medico= $this->medico;
$model->fecha= $this->fecha;
$model->hclin= $this->hclin;
$model->noasegurado= $this->noasegurado;
$model->apellidosynombres= $this->apellidosynombres;
$model->sexo= $this->sexo;
$model->nacimiento= $this->nacimiento;
$model->anos= $this->anos;
$model->meses= $this->meses;
$model->dias= $this->dias;
$model->bja= $this->bja;
$model->peso= $this->peso;
$model->talla= $this->talla;
$model->control= $this->control;
$model->pesotalla= $this->pesotalla;
$model->tallaedad= $this->tallaedad;
$model->hierro= $this->hierro;
$model->vitaa= $this->vitaa;
$model->zinc= $this->zinc;
$model->mebendazol= $this->mebendazol;
$model->conselact= $this->conselact;
$model->lactancia= $this->lactancia;
$model->consealimentacion= $this->consealimentacion;
$model->alcomplementariomenores1= $this->alcomplementariomenores1;
$model->alcomplementario1a= $this->alcomplementario1a;
$model->motricidadgruesa= $this->motricidadgruesa;
$model->motricidadfina= $this->motricidadfina;
$model->audicionlenguaje= $this->audicionlenguaje;
$model->personalsocial= $this->personalsocial;
$model->consultaexterna= $this->consultaexterna;
$model->diagnostico= $this->diagnostico;
$model->cie= $this->cie;
$model->tratamiento= $this->tratamiento;
$model->responsable= $this->responsable;
$model->inyectable= $this->inyectable;
$model->sueros= $this->sueros;
$model->sutcur= $this->sutcur;
$model->otrasactividades= $this->otrasactividades;
$model->mortalidad= $this->mortalidad;
$model->refycontra= $this->refycontra;
$model->refde= $this->refde;
$model->refa= $this->refa;
 $model->save();

          $this->resetForm();
          $this->emit("hideForm");
          session()->flash('message', 'Record Saved Successfully');
          $this->showForm = false;

    }

    public function resetForm()
    {
        $this->establecimiento= "";
$this->medico= "";
$this->fecha= "";
$this->hclin= "";
$this->noasegurado= "";
$this->apellidosynombres= "";
$this->sexo= "";
$this->nacimiento= "";
$this->anos= "";
$this->meses= "";
$this->dias= "";
$this->bja= "";
$this->peso= "";
$this->talla= "";
$this->control= "";
$this->pesotalla= "";
$this->tallaedad= "";
$this->hierro= "";
$this->vitaa= "";
$this->zinc= "";
$this->mebendazol= "";
$this->conselact= "";
$this->lactancia= "";
$this->consealimentacion= "";
$this->alcomplementariomenores1= "";
$this->alcomplementario1a= "";
$this->motricidadgruesa= "";
$this->motricidadfina= "";
$this->audicionlenguaje= "";
$this->personalsocial= "";
$this->consultaexterna= "";
$this->diagnostico= "";
$this->cie= "";
$this->tratamiento= "";
$this->responsable= "";
$this->inyectable= "";
$this->sueros= "";
$this->sutcur= "";
$this->otrasactividades= "";
$this->mortalidad= "";
$this->refycontra= "";
$this->refde= "";
$this->refa= "";

    }


    public function update()
    {
          $this->validate();

          $model = Model::find($this->primaryId);

             $model->establecimiento= $this->establecimiento;
$model->medico= $this->medico;
$model->fecha= $this->fecha;
$model->hclin= $this->hclin;
$model->noasegurado= $this->noasegurado;
$model->apellidosynombres= $this->apellidosynombres;
$model->sexo= $this->sexo;
$model->nacimiento= $this->nacimiento;
$model->anos= $this->anos;
$model->meses= $this->meses;
$model->dias= $this->dias;
$model->bja= $this->bja;
$model->peso= $this->peso;
$model->talla= $this->talla;
$model->control= $this->control;
$model->pesotalla= $this->pesotalla;
$model->tallaedad= $this->tallaedad;
$model->hierro= $this->hierro;
$model->vitaa= $this->vitaa;
$model->zinc= $this->zinc;
$model->mebendazol= $this->mebendazol;
$model->conselact= $this->conselact;
$model->lactancia= $this->lactancia;
$model->consealimentacion= $this->consealimentacion;
$model->alcomplementariomenores1= $this->alcomplementariomenores1;
$model->alcomplementario1a= $this->alcomplementario1a;
$model->motricidadgruesa= $this->motricidadgruesa;
$model->motricidadfina= $this->motricidadfina;
$model->audicionlenguaje= $this->audicionlenguaje;
$model->personalsocial= $this->personalsocial;
$model->consultaexterna= $this->consultaexterna;
$model->diagnostico= $this->diagnostico;
$model->cie= $this->cie;
$model->tratamiento= $this->tratamiento;
$model->responsable= $this->responsable;
$model->inyectable= $this->inyectable;
$model->sueros= $this->sueros;
$model->sutcur= $this->sutcur;
$model->otrasactividades= $this->otrasactividades;
$model->mortalidad= $this->mortalidad;
$model->refycontra= $this->refycontra;
$model->refde= $this->refde;
$model->refa= $this->refa;
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
