<?php

namespace App\Http\Livewire\Cuadernos;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\C6 as Model;


class C6Live extends Component
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
   public $ingreso;
   public $tratamiento;
   public $egreso;
   public $sitegreso;
   public $fallecimiento;
   public $inyectables;
   public $sueros;
   public $curacionessuturas;
   public $referidoa;


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
'ingreso' => 'required',
'tratamiento' => 'required',
'egreso' => 'required',
'sitegreso' => 'required',
'fallecimiento' => 'required',
'inyectables' => 'required',
'sueros' => 'required',
'curacionessuturas' => 'required',
'referidoa' => 'required',

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
        $model = Model::where('establecimiento', 'like', '%'.$this->search.'%')->orWhere('medico', 'like', '%'.$this->search.'%')->orWhere('fecha', 'like', '%'.$this->search.'%')->orWhere('hclin', 'like', '%'.$this->search.'%')->orWhere('asegurado', 'like', '%'.$this->search.'%')->orWhere('apellidosynombres', 'like', '%'.$this->search.'%')->orWhere('sexo', 'like', '%'.$this->search.'%')->orWhere('fechanac', 'like', '%'.$this->search.'%')->orWhere('años', 'like', '%'.$this->search.'%')->orWhere('meses', 'like', '%'.$this->search.'%')->orWhere('dias', 'like', '%'.$this->search.'%')->orWhere('ingreso', 'like', '%'.$this->search.'%')->orWhere('tratamiento', 'like', '%'.$this->search.'%')->orWhere('egreso', 'like', '%'.$this->search.'%')->orWhere('sitegreso', 'like', '%'.$this->search.'%')->orWhere('fallecimiento', 'like', '%'.$this->search.'%')->orWhere('inyectables', 'like', '%'.$this->search.'%')->orWhere('sueros', 'like', '%'.$this->search.'%')->orWhere('curacionessuturas', 'like', '%'.$this->search.'%')->orWhere('referidoa', 'like', '%'.$this->search.'%')->latest()->paginate($this->paginate);
        return view('livewire.cuadernos.c6-live', [
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
$this->ingreso= $model->ingreso;
$this->tratamiento= $model->tratamiento;
$this->egreso= $model->egreso;
$this->sitegreso= $model->sitegreso;
$this->fallecimiento= $model->fallecimiento;
$this->inyectables= $model->inyectables;
$this->sueros= $model->sueros;
$this->curacionessuturas= $model->curacionessuturas;
$this->referidoa= $model->referidoa;


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
$model->ingreso= $this->ingreso;
$model->tratamiento= $this->tratamiento;
$model->egreso= $this->egreso;
$model->sitegreso= $this->sitegreso;
$model->fallecimiento= $this->fallecimiento;
$model->inyectables= $this->inyectables;
$model->sueros= $this->sueros;
$model->curacionessuturas= $this->curacionessuturas;
$model->referidoa= $this->referidoa;
 $model->save();

          $this->resetForm();
          $this->emit("hideForm");
          session()->flash('message', 'Registro Guardado Exitosamente');
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
$this->ingreso= "";
$this->tratamiento= "";
$this->egreso= "";
$this->sitegreso= "";
$this->fallecimiento= "";
$this->inyectables= "";
$this->sueros= "";
$this->curacionessuturas= "";
$this->referidoa= "";

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
$model->ingreso= $this->ingreso;
$model->tratamiento= $this->tratamiento;
$model->egreso= $this->egreso;
$model->sitegreso= $this->sitegreso;
$model->fallecimiento= $this->fallecimiento;
$model->inyectables= $this->inyectables;
$model->sueros= $this->sueros;
$model->curacionessuturas= $this->curacionessuturas;
$model->referidoa= $this->referidoa;
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
