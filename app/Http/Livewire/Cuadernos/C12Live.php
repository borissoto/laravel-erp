<?php

namespace App\Http\Livewire\Cuadernos;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\C12 as Model;


class C12Live extends Component
{
    use WithPagination;
    protected $paginationTheme = "bootstrap";

    public $paginate = 10;

    public $establecimiento;
   public $medico;
   public $fconsulta;
   public $hclin;
   public $asegurado;
   public $apellidosynombres;
   public $riada;
   public $riadapersonasafectadas;
   public $riadafallecidos;
   public $heladagranizonevada;
   public $heladagranizonevadaafectados;
   public $heladagranizonevadafallecidos;
   public $incendio;
   public $incendioafectados;
   public $incendiofallecidos;
   public $deslizamientosismoterremoto;
   public $deslizamientosismoterremotoafectados;
   public $deslizamientosismoterremotofallecidas;
   public $inundacion;
   public $inundacionafectados;
   public $inundacionfallecidos;
   public $otros;
   public $otrosafectados;
   public $otrosfallecidos;


    public $mode = 'create';

    public $showForm = false;

    public $primaryId = null;

    public $search;

    public $showConfirmDeletePopup = false;

    protected $rules = [
'establecimiento' => 'required',
'medico' => 'required',
'fconsulta' => 'required',
'hclin' => 'required',
'asegurado' => 'required',
'apellidosynombres' => 'required',
'riada' => 'required',
'riadapersonasafectadas' => 'required',
'riadafallecidos' => 'required',
'heladagranizonevada' => 'required',
'heladagranizonevadaafectados' => 'required',
'heladagranizonevadafallecidos' => 'required',
'incendio' => 'required',
'incendioafectados' => 'required',
'incendiofallecidos' => 'required',
'deslizamientosismoterremoto' => 'required',
'deslizamientosismoterremotoafectados' => 'required',
'deslizamientosismoterremotofallecidas' => 'required',
'inundacion' => 'required',
'inundacionafectados' => 'required',
'inundacionfallecidos' => 'required',
'otros' => 'required',
'otrosafectados' => 'required',
'otrosfallecidos' => 'required',

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
        $model = Model::where('establecimiento', 'like', '%'.$this->search.'%')->orWhere('medico', 'like', '%'.$this->search.'%')->orWhere('fconsulta', 'like', '%'.$this->search.'%')->orWhere('hclin', 'like', '%'.$this->search.'%')->orWhere('asegurado', 'like', '%'.$this->search.'%')->orWhere('apellidosynombres', 'like', '%'.$this->search.'%')->orWhere('riada', 'like', '%'.$this->search.'%')->orWhere('riadapersonasafectadas', 'like', '%'.$this->search.'%')->orWhere('riadafallecidos', 'like', '%'.$this->search.'%')->orWhere('heladagranizonevada', 'like', '%'.$this->search.'%')->orWhere('heladagranizonevadaafectados', 'like', '%'.$this->search.'%')->orWhere('heladagranizonevadafallecidos', 'like', '%'.$this->search.'%')->orWhere('incendio', 'like', '%'.$this->search.'%')->orWhere('incendioafectados', 'like', '%'.$this->search.'%')->orWhere('incendiofallecidos', 'like', '%'.$this->search.'%')->orWhere('deslizamientosismoterremoto', 'like', '%'.$this->search.'%')->orWhere('deslizamientosismoterremotoafectados', 'like', '%'.$this->search.'%')->orWhere('deslizamientosismoterremotofallecidas', 'like', '%'.$this->search.'%')->orWhere('inundacion', 'like', '%'.$this->search.'%')->orWhere('inundacionafectados', 'like', '%'.$this->search.'%')->orWhere('inundacionfallecidos', 'like', '%'.$this->search.'%')->orWhere('otros', 'like', '%'.$this->search.'%')->orWhere('otrosafectados', 'like', '%'.$this->search.'%')->orWhere('otrosfallecidos', 'like', '%'.$this->search.'%')->latest()->paginate($this->paginate);
        return view('livewire.cuadernos.c12-live', [
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
$this->fconsulta= $model->fconsulta;
$this->hclin= $model->hclin;
$this->asegurado= $model->asegurado;
$this->apellidosynombres= $model->apellidosynombres;
$this->riada= $model->riada;
$this->riadapersonasafectadas= $model->riadapersonasafectadas;
$this->riadafallecidos= $model->riadafallecidos;
$this->heladagranizonevada= $model->heladagranizonevada;
$this->heladagranizonevadaafectados= $model->heladagranizonevadaafectados;
$this->heladagranizonevadafallecidos= $model->heladagranizonevadafallecidos;
$this->incendio= $model->incendio;
$this->incendioafectados= $model->incendioafectados;
$this->incendiofallecidos= $model->incendiofallecidos;
$this->deslizamientosismoterremoto= $model->deslizamientosismoterremoto;
$this->deslizamientosismoterremotoafectados= $model->deslizamientosismoterremotoafectados;
$this->deslizamientosismoterremotofallecidas= $model->deslizamientosismoterremotofallecidas;
$this->inundacion= $model->inundacion;
$this->inundacionafectados= $model->inundacionafectados;
$this->inundacionfallecidos= $model->inundacionfallecidos;
$this->otros= $model->otros;
$this->otrosafectados= $model->otrosafectados;
$this->otrosfallecidos= $model->otrosfallecidos;


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
$model->fconsulta= $this->fconsulta;
$model->hclin= $this->hclin;
$model->asegurado= $this->asegurado;
$model->apellidosynombres= $this->apellidosynombres;
$model->riada= $this->riada;
$model->riadapersonasafectadas= $this->riadapersonasafectadas;
$model->riadafallecidos= $this->riadafallecidos;
$model->heladagranizonevada= $this->heladagranizonevada;
$model->heladagranizonevadaafectados= $this->heladagranizonevadaafectados;
$model->heladagranizonevadafallecidos= $this->heladagranizonevadafallecidos;
$model->incendio= $this->incendio;
$model->incendioafectados= $this->incendioafectados;
$model->incendiofallecidos= $this->incendiofallecidos;
$model->deslizamientosismoterremoto= $this->deslizamientosismoterremoto;
$model->deslizamientosismoterremotoafectados= $this->deslizamientosismoterremotoafectados;
$model->deslizamientosismoterremotofallecidas= $this->deslizamientosismoterremotofallecidas;
$model->inundacion= $this->inundacion;
$model->inundacionafectados= $this->inundacionafectados;
$model->inundacionfallecidos= $this->inundacionfallecidos;
$model->otros= $this->otros;
$model->otrosafectados= $this->otrosafectados;
$model->otrosfallecidos= $this->otrosfallecidos;
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
$this->fconsulta= "";
$this->hclin= "";
$this->asegurado= "";
$this->apellidosynombres= "";
$this->riada= "";
$this->riadapersonasafectadas= "";
$this->riadafallecidos= "";
$this->heladagranizonevada= "";
$this->heladagranizonevadaafectados= "";
$this->heladagranizonevadafallecidos= "";
$this->incendio= "";
$this->incendioafectados= "";
$this->incendiofallecidos= "";
$this->deslizamientosismoterremoto= "";
$this->deslizamientosismoterremotoafectados= "";
$this->deslizamientosismoterremotofallecidas= "";
$this->inundacion= "";
$this->inundacionafectados= "";
$this->inundacionfallecidos= "";
$this->otros= "";
$this->otrosafectados= "";
$this->otrosfallecidos= "";

    }


    public function update()
    {
          $this->validate();

          $model = Model::find($this->primaryId);

             $model->establecimiento= $this->establecimiento;
$model->medico= $this->medico;
$model->fconsulta= $this->fconsulta;
$model->hclin= $this->hclin;
$model->asegurado= $this->asegurado;
$model->apellidosynombres= $this->apellidosynombres;
$model->riada= $this->riada;
$model->riadapersonasafectadas= $this->riadapersonasafectadas;
$model->riadafallecidos= $this->riadafallecidos;
$model->heladagranizonevada= $this->heladagranizonevada;
$model->heladagranizonevadaafectados= $this->heladagranizonevadaafectados;
$model->heladagranizonevadafallecidos= $this->heladagranizonevadafallecidos;
$model->incendio= $this->incendio;
$model->incendioafectados= $this->incendioafectados;
$model->incendiofallecidos= $this->incendiofallecidos;
$model->deslizamientosismoterremoto= $this->deslizamientosismoterremoto;
$model->deslizamientosismoterremotoafectados= $this->deslizamientosismoterremotoafectados;
$model->deslizamientosismoterremotofallecidas= $this->deslizamientosismoterremotofallecidas;
$model->inundacion= $this->inundacion;
$model->inundacionafectados= $this->inundacionafectados;
$model->inundacionfallecidos= $this->inundacionfallecidos;
$model->otros= $this->otros;
$model->otrosafectados= $this->otrosafectados;
$model->otrosfallecidos= $this->otrosfallecidos;
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
