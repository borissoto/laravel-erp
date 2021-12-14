<?php

namespace App\Http\Livewire\Cuadernos;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\C5 as Model;


class C5Live extends Component
{
    use WithPagination;
    protected $paginationTheme = "bootstrap";

    public $paginate = 10;

    public $establecimiento;
   public $medico;
   public $fecha;
   public $hclin;
   public $asegurado;
   public $apellidosynombres;
   public $sexo;
   public $fechanac;
   public $anos;
   public $meses;
   public $dias;
   public $peso;
   public $talla;
   public $temp;
   public $fcar;
   public $fresp;
   public $pa;
   public $ingreso;
   public $dxingresodes;
   public $dxingreso;
   public $cirugiamed;
   public $anestesia;
   public $dxegresodesc;
   public $dxegreso;
   public $fegreso;
   public $estadia;
   public $cama;
   public $tipoegreso;
   public $mortalidad;
   public $refycontraref;


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
'asegurado' => 'required',
'apellidosynombres' => 'required',
'sexo' => 'required',
'fechanac' => 'required',
'anos' => 'required',
'meses' => 'required',
'dias' => 'required',
'peso' => 'required',
'talla' => 'required',
'temp' => 'required',
'fcar' => 'required',
'fresp' => 'required',
'pa' => 'required',
'ingreso' => 'required',
'dxingresodes' => 'required',
'dxingreso' => 'required',
'cirugiamed' => 'required',
'anestesia' => 'required',
'dxegresodesc' => 'required',
'dxegreso' => 'required',
'fegreso' => 'required',
'estadia' => 'required',
'cama' => 'required',
'tipoegreso' => 'required',
'mortalidad' => 'required',
'refycontraref' => 'required',

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
        $model = Model::where('establecimiento', 'like', '%'.$this->search.'%')->orWhere('medico', 'like', '%'.$this->search.'%')->orWhere('fecha', 'like', '%'.$this->search.'%')->orWhere('hclin', 'like', '%'.$this->search.'%')->orWhere('asegurado', 'like', '%'.$this->search.'%')->orWhere('apellidosynombres', 'like', '%'.$this->search.'%')->orWhere('sexo', 'like', '%'.$this->search.'%')->orWhere('fechanac', 'like', '%'.$this->search.'%')->orWhere('años', 'like', '%'.$this->search.'%')->orWhere('meses', 'like', '%'.$this->search.'%')->orWhere('dias', 'like', '%'.$this->search.'%')->orWhere('peso', 'like', '%'.$this->search.'%')->orWhere('talla', 'like', '%'.$this->search.'%')->orWhere('temp', 'like', '%'.$this->search.'%')->orWhere('fcar', 'like', '%'.$this->search.'%')->orWhere('fresp', 'like', '%'.$this->search.'%')->orWhere('pa', 'like', '%'.$this->search.'%')->orWhere('ingreso', 'like', '%'.$this->search.'%')->orWhere('dxingresodes', 'like', '%'.$this->search.'%')->orWhere('dxingreso', 'like', '%'.$this->search.'%')->orWhere('cirugiamed', 'like', '%'.$this->search.'%')->orWhere('anestesia', 'like', '%'.$this->search.'%')->orWhere('dxegresodesc', 'like', '%'.$this->search.'%')->orWhere('dxegreso', 'like', '%'.$this->search.'%')->orWhere('fegreso', 'like', '%'.$this->search.'%')->orWhere('estadia', 'like', '%'.$this->search.'%')->orWhere('cama', 'like', '%'.$this->search.'%')->orWhere('tipoegreso', 'like', '%'.$this->search.'%')->orWhere('mortalidad', 'like', '%'.$this->search.'%')->orWhere('refycontraref', 'like', '%'.$this->search.'%')->latest()->paginate($this->paginate);
        return view('livewire.cuadernos.c5-live', [
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
$this->asegurado= $model->asegurado;
$this->apellidosynombres= $model->apellidosynombres;
$this->sexo= $model->sexo;
$this->fechanac= $model->fechanac;
$this->anos= $model->años;
$this->meses= $model->meses;
$this->dias= $model->dias;
$this->peso= $model->peso;
$this->talla= $model->talla;
$this->temp= $model->temp;
$this->fcar= $model->fcar;
$this->fresp= $model->fresp;
$this->pa= $model->pa;
$this->ingreso= $model->ingreso;
$this->dxingresodes= $model->dxingresodes;
$this->dxingreso= $model->dxingreso;
$this->cirugiamed= $model->cirugiamed;
$this->anestesia= $model->anestesia;
$this->dxegresodesc= $model->dxegresodesc;
$this->dxegreso= $model->dxegreso;
$this->fegreso= $model->fegreso;
$this->estadia= $model->estadia;
$this->cama= $model->cama;
$this->tipoegreso= $model->tipoegreso;
$this->mortalidad= $model->mortalidad;
$this->refycontraref= $model->refycontraref;


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
$model->asegurado= $this->asegurado;
$model->apellidosynombres= $this->apellidosynombres;
$model->sexo= $this->sexo;
$model->fechanac= $this->fechanac;
$model->anos= $this->anos;
$model->meses= $this->meses;
$model->dias= $this->dias;
$model->peso= $this->peso;
$model->talla= $this->talla;
$model->temp= $this->temp;
$model->fcar= $this->fcar;
$model->fresp= $this->fresp;
$model->pa= $this->pa;
$model->ingreso= $this->ingreso;
$model->dxingresodes= $this->dxingresodes;
$model->dxingreso= $this->dxingreso;
$model->cirugiamed= $this->cirugiamed;
$model->anestesia= $this->anestesia;
$model->dxegresodesc= $this->dxegresodesc;
$model->dxegreso= $this->dxegreso;
$model->fegreso= $this->fegreso;
$model->estadia= $this->estadia;
$model->cama= $this->cama;
$model->tipoegreso= $this->tipoegreso;
$model->mortalidad= $this->mortalidad;
$model->refycontraref= $this->refycontraref;
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
$this->asegurado= "";
$this->apellidosynombres= "";
$this->sexo= "";
$this->fechanac= "";
$this->anos= "";
$this->meses= "";
$this->dias= "";
$this->peso= "";
$this->talla= "";
$this->temp= "";
$this->fcar= "";
$this->fresp= "";
$this->pa= "";
$this->ingreso= "";
$this->dxingresodes= "";
$this->dxingreso= "";
$this->cirugiamed= "";
$this->anestesia= "";
$this->dxegresodesc= "";
$this->dxegreso= "";
$this->fegreso= "";
$this->estadia= "";
$this->cama= "";
$this->tipoegreso= "";
$this->mortalidad= "";
$this->refycontraref= "";

    }


    public function update()
    {
          $this->validate();

          $model = Model::find($this->primaryId);

             $model->establecimiento= $this->establecimiento;
$model->medico= $this->medico;
$model->fecha= $this->fecha;
$model->hclin= $this->hclin;
$model->asegurado= $this->asegurado;
$model->apellidosynombres= $this->apellidosynombres;
$model->sexo= $this->sexo;
$model->fechanac= $this->fechanac;
$model->anos= $this->anos;
$model->meses= $this->meses;
$model->dias= $this->dias;
$model->peso= $this->peso;
$model->talla= $this->talla;
$model->temp= $this->temp;
$model->fcar= $this->fcar;
$model->fresp= $this->fresp;
$model->pa= $this->pa;
$model->ingreso= $this->ingreso;
$model->dxingresodes= $this->dxingresodes;
$model->dxingreso= $this->dxingreso;
$model->cirugiamed= $this->cirugiamed;
$model->anestesia= $this->anestesia;
$model->dxegresodesc= $this->dxegresodesc;
$model->dxegreso= $this->dxegreso;
$model->fegreso= $this->fegreso;
$model->estadia= $this->estadia;
$model->cama= $this->cama;
$model->tipoegreso= $this->tipoegreso;
$model->mortalidad= $this->mortalidad;
$model->refycontraref= $this->refycontraref;
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
