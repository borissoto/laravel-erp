<?php

namespace App\Http\Livewire\Cuadernos;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\C3 as Model;


class C3Live extends Component
{
    use WithPagination;
    protected $paginationTheme = "bootstrap";

    public $paginate = 10;

    public $establecimiento;
   public $medico;
   public $fecha;
   public $hclin;
   public $noasegurado;
   public $apellidosynombre;
   public $sexo;
   public $nacimiento;
   public $anos;
   public $meses;
   public $dias;
   public $orientacion;
   public $anticonceptivos;
   public $insumos;
   public $naturales;
   public $pap;


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
'apellidosynombre' => 'required',
'sexo' => 'required',
'nacimiento' => 'required',
'anos' => 'required',
'meses' => 'required',
'dias' => 'required',
'orientacion' => 'required',
'anticonceptivos' => 'required',
'insumos' => 'required',
'naturales' => 'required',
'pap' => 'required',

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
        $model = Model::where('establecimiento', 'like', '%'.$this->search.'%')->orWhere('medico', 'like', '%'.$this->search.'%')->orWhere('fecha', 'like', '%'.$this->search.'%')->orWhere('hclin', 'like', '%'.$this->search.'%')->orWhere('noasegurado', 'like', '%'.$this->search.'%')->orWhere('apellidosynombre', 'like', '%'.$this->search.'%')->orWhere('sexo', 'like', '%'.$this->search.'%')->orWhere('nacimiento', 'like', '%'.$this->search.'%')->orWhere('años', 'like', '%'.$this->search.'%')->orWhere('meses', 'like', '%'.$this->search.'%')->orWhere('dias', 'like', '%'.$this->search.'%')->orWhere('orientacion', 'like', '%'.$this->search.'%')->orWhere('anticonceptivos', 'like', '%'.$this->search.'%')->orWhere('insumos', 'like', '%'.$this->search.'%')->orWhere('naturales', 'like', '%'.$this->search.'%')->orWhere('pap', 'like', '%'.$this->search.'%')->latest()->paginate($this->paginate);
        return view('livewire.cuadernos.c3-live', [
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
$this->apellidosynombre= $model->apellidosynombre;
$this->sexo= $model->sexo;
$this->nacimiento= $model->nacimiento;
$this->anos= $model->años;
$this->meses= $model->meses;
$this->dias= $model->dias;
$this->orientacion= $model->orientacion;
$this->anticonceptivos= $model->anticonceptivos;
$this->insumos= $model->insumos;
$this->naturales= $model->naturales;
$this->pap= $model->pap;


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
$model->apellidosynombre= $this->apellidosynombre;
$model->sexo= $this->sexo;
$model->nacimiento= $this->nacimiento;
$model->anos= $this->anos;
$model->meses= $this->meses;
$model->dias= $this->dias;
$model->orientacion= $this->orientacion;
$model->anticonceptivos= $this->anticonceptivos;
$model->insumos= $this->insumos;
$model->naturales= $this->naturales;
$model->pap= $this->pap;
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
$this->apellidosynombre= "";
$this->sexo= "";
$this->nacimiento= "";
$this->anos= "";
$this->meses= "";
$this->dias= "";
$this->orientacion= "";
$this->anticonceptivos= "";
$this->insumos= "";
$this->naturales= "";
$this->pap= "";

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
$model->apellidosynombre= $this->apellidosynombre;
$model->sexo= $this->sexo;
$model->nacimiento= $this->nacimiento;
$model->anos= $this->anos;
$model->meses= $this->meses;
$model->dias= $this->dias;
$model->orientacion= $this->orientacion;
$model->anticonceptivos= $this->anticonceptivos;
$model->insumos= $this->insumos;
$model->naturales= $this->naturales;
$model->pap= $this->pap;
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
