<?php

namespace App\Http\Livewire\Cuadernos;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\C9 as Model;


class C9Live extends Component
{
    use WithPagination;
    protected $paginationTheme = "bootstrap";

    public $paginate = 10;

    public $establecimiento;
   public $medico;
   public $fecha;
   public $hclin;
   public $asegurado;
   public $apellidosynombre;
   public $visitasfamiliares;
   public $otros;
   public $promotores;
   public $dirigentes;
   public $adultos;
   public $jovenes;
   public $escolares;
   public $reunioneslugar;
   public $temaactividad;
   public $actividadeducativa;
   public $feria;
   public $rals;
   public $rclsalud;
   public $comunidadescai;
   public $otro;
   public $odontologo;
   public $auxiliar;
   public $enfermeras;
   public $medicos;
   public $duracionsupervision;
   public $lugar;
   public $capacitacion;
   public $supervision1;
   public $acomunidad;
   public $familiasnuevascarpetizadas;
   public $carpetizadasconseguimiento;
   public $cai;
   public $supervision;
   public $auditoriasint;
   public $autoevaluaciones;
   public $quejasusuarios;
   public $sugerenciasagradecimientos;
   public $visitasfamiliaresplanificadas;
   public $muertematernadentro;
   public $muertematernafuera;


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
'apellidosynombre' => 'required',
'visitasfamiliares' => 'required',
'otros' => 'required',
'promotores' => 'required',
'dirigentes' => 'required',
'adultos' => 'required',
'jovenes' => 'required',
'escolares' => 'required',
'reunioneslugar' => 'required',
'temaactividad' => 'required',
'actividadeducativa' => 'required',
'feria' => 'required',
'rals' => 'required',
'rclsalud' => 'required',
'comunidadescai' => 'required',
'otro' => 'required',
'odontologo' => 'required',
'auxiliar' => 'required',
'enfermeras' => 'required',
'medicos' => 'required',
'duracionsupervision' => 'required',
'lugar' => 'required',
'capacitacion' => 'required',
'supervision1' => 'required',
'acomunidad' => 'required',
'familiasnuevascarpetizadas' => 'required',
'carpetizadasconseguimiento' => 'required',
'cai' => 'required',
'supervision' => 'required',
'auditoriasint' => 'required',
'autoevaluaciones' => 'required',
'quejasusuarios' => 'required',
'sugerenciasagradecimientos' => 'required',
'visitasfamiliaresplanificadas' => 'required',
'muertematernadentro' => 'required',
'muertematernafuera' => 'required',

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
        $model = Model::where('establecimiento', 'like', '%'.$this->search.'%')->orWhere('medico', 'like', '%'.$this->search.'%')->orWhere('fecha', 'like', '%'.$this->search.'%')->orWhere('hclin', 'like', '%'.$this->search.'%')->orWhere('asegurado', 'like', '%'.$this->search.'%')->orWhere('apellidosynombre', 'like', '%'.$this->search.'%')->orWhere('visitasfamiliares', 'like', '%'.$this->search.'%')->orWhere('otros', 'like', '%'.$this->search.'%')->orWhere('promotores', 'like', '%'.$this->search.'%')->orWhere('dirigentes', 'like', '%'.$this->search.'%')->orWhere('adultos', 'like', '%'.$this->search.'%')->orWhere('jovenes', 'like', '%'.$this->search.'%')->orWhere('escolares', 'like', '%'.$this->search.'%')->orWhere('reunioneslugar', 'like', '%'.$this->search.'%')->orWhere('temaactividad', 'like', '%'.$this->search.'%')->orWhere('actividadeducativa', 'like', '%'.$this->search.'%')->orWhere('feria', 'like', '%'.$this->search.'%')->orWhere('rals', 'like', '%'.$this->search.'%')->orWhere('rclsalud', 'like', '%'.$this->search.'%')->orWhere('comunidadescai', 'like', '%'.$this->search.'%')->orWhere('otro', 'like', '%'.$this->search.'%')->orWhere('odontologo', 'like', '%'.$this->search.'%')->orWhere('auxiliar', 'like', '%'.$this->search.'%')->orWhere('enfermeras', 'like', '%'.$this->search.'%')->orWhere('medicos', 'like', '%'.$this->search.'%')->orWhere('duracionsupervision', 'like', '%'.$this->search.'%')->orWhere('lugar', 'like', '%'.$this->search.'%')->orWhere('capacitacion', 'like', '%'.$this->search.'%')->orWhere('supervision1', 'like', '%'.$this->search.'%')->orWhere('acomunidad', 'like', '%'.$this->search.'%')->orWhere('familiasnuevascarpetizadas', 'like', '%'.$this->search.'%')->orWhere('carpetizadasconseguimiento', 'like', '%'.$this->search.'%')->orWhere('cai', 'like', '%'.$this->search.'%')->orWhere('supervision', 'like', '%'.$this->search.'%')->orWhere('auditoriasint', 'like', '%'.$this->search.'%')->orWhere('autoevaluaciones', 'like', '%'.$this->search.'%')->orWhere('quejasusuarios', 'like', '%'.$this->search.'%')->orWhere('sugerenciasagradecimientos', 'like', '%'.$this->search.'%')->orWhere('visitasfamiliaresplanificadas', 'like', '%'.$this->search.'%')->orWhere('muertematernadentro', 'like', '%'.$this->search.'%')->orWhere('muertematernafuera', 'like', '%'.$this->search.'%')->latest()->paginate($this->paginate);
        return view('livewire.cuadernos.c9-live', [
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
$this->apellidosynombre= $model->apellidosynombre;
$this->visitasfamiliares= $model->visitasfamiliares;
$this->otros= $model->otros;
$this->promotores= $model->promotores;
$this->dirigentes= $model->dirigentes;
$this->adultos= $model->adultos;
$this->jovenes= $model->jovenes;
$this->escolares= $model->escolares;
$this->reunioneslugar= $model->reunioneslugar;
$this->temaactividad= $model->temaactividad;
$this->actividadeducativa= $model->actividadeducativa;
$this->feria= $model->feria;
$this->rals= $model->rals;
$this->rclsalud= $model->rclsalud;
$this->comunidadescai= $model->comunidadescai;
$this->otro= $model->otro;
$this->odontologo= $model->odontologo;
$this->auxiliar= $model->auxiliar;
$this->enfermeras= $model->enfermeras;
$this->medicos= $model->medicos;
$this->duracionsupervision= $model->duracionsupervision;
$this->lugar= $model->lugar;
$this->capacitacion= $model->capacitacion;
$this->supervision1= $model->supervision1;
$this->acomunidad= $model->acomunidad;
$this->familiasnuevascarpetizadas= $model->familiasnuevascarpetizadas;
$this->carpetizadasconseguimiento= $model->carpetizadasconseguimiento;
$this->cai= $model->cai;
$this->supervision= $model->supervision;
$this->auditoriasint= $model->auditoriasint;
$this->autoevaluaciones= $model->autoevaluaciones;
$this->quejasusuarios= $model->quejasusuarios;
$this->sugerenciasagradecimientos= $model->sugerenciasagradecimientos;
$this->visitasfamiliaresplanificadas= $model->visitasfamiliaresplanificadas;
$this->muertematernadentro= $model->muertematernadentro;
$this->muertematernafuera= $model->muertematernafuera;


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
$model->apellidosynombre= $this->apellidosynombre;
$model->visitasfamiliares= $this->visitasfamiliares;
$model->otros= $this->otros;
$model->promotores= $this->promotores;
$model->dirigentes= $this->dirigentes;
$model->adultos= $this->adultos;
$model->jovenes= $this->jovenes;
$model->escolares= $this->escolares;
$model->reunioneslugar= $this->reunioneslugar;
$model->temaactividad= $this->temaactividad;
$model->actividadeducativa= $this->actividadeducativa;
$model->feria= $this->feria;
$model->rals= $this->rals;
$model->rclsalud= $this->rclsalud;
$model->comunidadescai= $this->comunidadescai;
$model->otro= $this->otro;
$model->odontologo= $this->odontologo;
$model->auxiliar= $this->auxiliar;
$model->enfermeras= $this->enfermeras;
$model->medicos= $this->medicos;
$model->duracionsupervision= $this->duracionsupervision;
$model->lugar= $this->lugar;
$model->capacitacion= $this->capacitacion;
$model->supervision1= $this->supervision1;
$model->acomunidad= $this->acomunidad;
$model->familiasnuevascarpetizadas= $this->familiasnuevascarpetizadas;
$model->carpetizadasconseguimiento= $this->carpetizadasconseguimiento;
$model->cai= $this->cai;
$model->supervision= $this->supervision;
$model->auditoriasint= $this->auditoriasint;
$model->autoevaluaciones= $this->autoevaluaciones;
$model->quejasusuarios= $this->quejasusuarios;
$model->sugerenciasagradecimientos= $this->sugerenciasagradecimientos;
$model->visitasfamiliaresplanificadas= $this->visitasfamiliaresplanificadas;
$model->muertematernadentro= $this->muertematernadentro;
$model->muertematernafuera= $this->muertematernafuera;
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
$this->apellidosynombre= "";
$this->visitasfamiliares= "";
$this->otros= "";
$this->promotores= "";
$this->dirigentes= "";
$this->adultos= "";
$this->jovenes= "";
$this->escolares= "";
$this->reunioneslugar= "";
$this->temaactividad= "";
$this->actividadeducativa= "";
$this->feria= "";
$this->rals= "";
$this->rclsalud= "";
$this->comunidadescai= "";
$this->otro= "";
$this->odontologo= "";
$this->auxiliar= "";
$this->enfermeras= "";
$this->medicos= "";
$this->duracionsupervision= "";
$this->lugar= "";
$this->capacitacion= "";
$this->supervision1= "";
$this->acomunidad= "";
$this->familiasnuevascarpetizadas= "";
$this->carpetizadasconseguimiento= "";
$this->cai= "";
$this->supervision= "";
$this->auditoriasint= "";
$this->autoevaluaciones= "";
$this->quejasusuarios= "";
$this->sugerenciasagradecimientos= "";
$this->visitasfamiliaresplanificadas= "";
$this->muertematernadentro= "";
$this->muertematernafuera= "";

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
$model->apellidosynombre= $this->apellidosynombre;
$model->visitasfamiliares= $this->visitasfamiliares;
$model->otros= $this->otros;
$model->promotores= $this->promotores;
$model->dirigentes= $this->dirigentes;
$model->adultos= $this->adultos;
$model->jovenes= $this->jovenes;
$model->escolares= $this->escolares;
$model->reunioneslugar= $this->reunioneslugar;
$model->temaactividad= $this->temaactividad;
$model->actividadeducativa= $this->actividadeducativa;
$model->feria= $this->feria;
$model->rals= $this->rals;
$model->rclsalud= $this->rclsalud;
$model->comunidadescai= $this->comunidadescai;
$model->otro= $this->otro;
$model->odontologo= $this->odontologo;
$model->auxiliar= $this->auxiliar;
$model->enfermeras= $this->enfermeras;
$model->medicos= $this->medicos;
$model->duracionsupervision= $this->duracionsupervision;
$model->lugar= $this->lugar;
$model->capacitacion= $this->capacitacion;
$model->supervision1= $this->supervision1;
$model->acomunidad= $this->acomunidad;
$model->familiasnuevascarpetizadas= $this->familiasnuevascarpetizadas;
$model->carpetizadasconseguimiento= $this->carpetizadasconseguimiento;
$model->cai= $this->cai;
$model->supervision= $this->supervision;
$model->auditoriasint= $this->auditoriasint;
$model->autoevaluaciones= $this->autoevaluaciones;
$model->quejasusuarios= $this->quejasusuarios;
$model->sugerenciasagradecimientos= $this->sugerenciasagradecimientos;
$model->visitasfamiliaresplanificadas= $this->visitasfamiliaresplanificadas;
$model->muertematernadentro= $this->muertematernadentro;
$model->muertematernafuera= $this->muertematernafuera;
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
