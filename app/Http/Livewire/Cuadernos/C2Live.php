<?php

namespace App\Http\Livewire\Cuadernos;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\C2 as Model;


class C2Live extends Component
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
   public $nacimiento;
   public $anos;
   public $meses;
   public $dias;
   public $beneficio;
   public $peso;
   public $talla;
   public $fum;
   public $nutricion;
   public $prenatal;
   public $cpn4;
   public $pap;
   public $pappos;
   public $ivaa;
   public $ivaapos;
   public $mamapos;
   public $hemorragia1mit;
   public $hemorragiaparto;
   public $embsepsis;
   public $preeclamsiasevera;
   public $eclamsia;
   public $atencionparto;
   public $tipoparto;
   public $anestesia;
   public $reciennac;
   public $partera;
   public $partodom;
   public $malformacion;
   public $mujer1549con4cpn;
   public $lactanciainmediata;
   public $rnapegoprecoz;
   public $controlpostparto;
   public $hierro90;
   public $vitap;
   public $mortalidadfuera;
   public $refcontraref;
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
'apellidosynombre' => 'required',
'nacimiento' => 'required',
'anos' => 'required',
'meses' => 'required',
'dias' => 'required',
'beneficio' => 'required',
'peso' => 'required',
'talla' => 'required',
'fum' => 'required',
'nutricion' => 'required',
'prenatal' => 'required',
'4cpn' => 'required',
'pap' => 'required',
'pappos' => 'required',
'ivaa' => 'required',
'ivaapos' => 'required',
'mamapos' => 'required',
'hemorragia1mit' => 'required',
'hemorragiaparto' => 'required',
'embsepsis' => 'required',
'preeclamsiasevera' => 'required',
'eclamsia' => 'required',
'atencionparto' => 'required',
'tipoparto' => 'required',
'anestesia' => 'required',
'reciennac' => 'required',
'partera' => 'required',
'partodom' => 'required',
'malformacion' => 'required',
'mujer1549con4cpn' => 'required',
'lactanciainmediata' => 'required',
'rnapegoprecoz' => 'required',
'controlpostparto' => 'required',
'hierro90' => 'required',
'vitap' => 'required',
'mortalidadfuera' => 'required',
'refcontraref' => 'required',
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
        $model = Model::where('establecimiento', 'like', '%'.$this->search.'%')->orWhere('medico', 'like', '%'.$this->search.'%')->orWhere('fecha', 'like', '%'.$this->search.'%')->orWhere('hclin', 'like', '%'.$this->search.'%')->orWhere('noasegurado', 'like', '%'.$this->search.'%')->orWhere('apellidosynombre', 'like', '%'.$this->search.'%')->orWhere('nacimiento', 'like', '%'.$this->search.'%')->orWhere('años', 'like', '%'.$this->search.'%')->orWhere('meses', 'like', '%'.$this->search.'%')->orWhere('dias', 'like', '%'.$this->search.'%')->orWhere('beneficio', 'like', '%'.$this->search.'%')->orWhere('peso', 'like', '%'.$this->search.'%')->orWhere('talla', 'like', '%'.$this->search.'%')->orWhere('fum', 'like', '%'.$this->search.'%')->orWhere('nutricion', 'like', '%'.$this->search.'%')->orWhere('prenatal', 'like', '%'.$this->search.'%')->orWhere('4cpn', 'like', '%'.$this->search.'%')->orWhere('pap', 'like', '%'.$this->search.'%')->orWhere('pappos', 'like', '%'.$this->search.'%')->orWhere('ivaa', 'like', '%'.$this->search.'%')->orWhere('ivaapos', 'like', '%'.$this->search.'%')->orWhere('mamapos', 'like', '%'.$this->search.'%')->orWhere('hemorragia1mit', 'like', '%'.$this->search.'%')->orWhere('hemorragiaparto', 'like', '%'.$this->search.'%')->orWhere('embsepsis', 'like', '%'.$this->search.'%')->orWhere('preeclamsiasevera', 'like', '%'.$this->search.'%')->orWhere('eclamsia', 'like', '%'.$this->search.'%')->orWhere('atencionparto', 'like', '%'.$this->search.'%')->orWhere('tipoparto', 'like', '%'.$this->search.'%')->orWhere('anestesia', 'like', '%'.$this->search.'%')->orWhere('reciennac', 'like', '%'.$this->search.'%')->orWhere('partera', 'like', '%'.$this->search.'%')->orWhere('partodom', 'like', '%'.$this->search.'%')->orWhere('malformacion', 'like', '%'.$this->search.'%')->orWhere('mujer1549con4cpn', 'like', '%'.$this->search.'%')->orWhere('lactanciainmediata', 'like', '%'.$this->search.'%')->orWhere('rnapegoprecoz', 'like', '%'.$this->search.'%')->orWhere('controlpostparto', 'like', '%'.$this->search.'%')->orWhere('hierro90', 'like', '%'.$this->search.'%')->orWhere('vitap', 'like', '%'.$this->search.'%')->orWhere('mortalidadfuera', 'like', '%'.$this->search.'%')->orWhere('refcontraref', 'like', '%'.$this->search.'%')->orWhere('refde', 'like', '%'.$this->search.'%')->orWhere('refa', 'like', '%'.$this->search.'%')->latest()->paginate($this->paginate);
        return view('livewire.cuadernos.c2-live', [
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
$this->nacimiento= $model->nacimiento;
$this->anos= $model->años;
$this->meses= $model->meses;
$this->dias= $model->dias;
$this->beneficio= $model->beneficio;
$this->peso= $model->peso;
$this->talla= $model->talla;
$this->fum= $model->fum;
$this->nutricion= $model->nutricion;
$this->prenatal= $model->prenatal;
$this->cpn4= $model->cpn4;
$this->pap= $model->pap;
$this->pappos= $model->pappos;
$this->ivaa= $model->ivaa;
$this->ivaapos= $model->ivaapos;
$this->mamapos= $model->mamapos;
$this->hemorragia1mit= $model->hemorragia1mit;
$this->hemorragiaparto= $model->hemorragiaparto;
$this->embsepsis= $model->embsepsis;
$this->preeclamsiasevera= $model->preeclamsiasevera;
$this->eclamsia= $model->eclamsia;
$this->atencionparto= $model->atencionparto;
$this->tipoparto= $model->tipoparto;
$this->anestesia= $model->anestesia;
$this->reciennac= $model->reciennac;
$this->partera= $model->partera;
$this->partodom= $model->partodom;
$this->malformacion= $model->malformacion;
$this->mujer1549con4cpn= $model->mujer1549con4cpn;
$this->lactanciainmediata= $model->lactanciainmediata;
$this->rnapegoprecoz= $model->rnapegoprecoz;
$this->controlpostparto= $model->controlpostparto;
$this->hierro90= $model->hierro90;
$this->vitap= $model->vitap;
$this->mortalidadfuera= $model->mortalidadfuera;
$this->refcontraref= $model->refcontraref;
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
$model->apellidosynombre= $this->apellidosynombre;
$model->nacimiento= $this->nacimiento;
$model->anos= $this->anos;
$model->meses= $this->meses;
$model->dias= $this->dias;
$model->beneficio= $this->beneficio;
$model->peso= $this->peso;
$model->talla= $this->talla;
$model->fum= $this->fum;
$model->nutricion= $this->nutricion;
$model->prenatal= $this->prenatal;
$model->cpn4= $this->cpn4;
$model->pap= $this->pap;
$model->pappos= $this->pappos;
$model->ivaa= $this->ivaa;
$model->ivaapos= $this->ivaapos;
$model->mamapos= $this->mamapos;
$model->hemorragia1mit= $this->hemorragia1mit;
$model->hemorragiaparto= $this->hemorragiaparto;
$model->embsepsis= $this->embsepsis;
$model->preeclamsiasevera= $this->preeclamsiasevera;
$model->eclamsia= $this->eclamsia;
$model->atencionparto= $this->atencionparto;
$model->tipoparto= $this->tipoparto;
$model->anestesia= $this->anestesia;
$model->reciennac= $this->reciennac;
$model->partera= $this->partera;
$model->partodom= $this->partodom;
$model->malformacion= $this->malformacion;
$model->mujer1549con4cpn= $this->mujer1549con4cpn;
$model->lactanciainmediata= $this->lactanciainmediata;
$model->rnapegoprecoz= $this->rnapegoprecoz;
$model->controlpostparto= $this->controlpostparto;
$model->hierro90= $this->hierro90;
$model->vitap= $this->vitap;
$model->mortalidadfuera= $this->mortalidadfuera;
$model->refcontraref= $this->refcontraref;
$model->refde= $this->refde;
$model->refa= $this->refa;
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
$this->noasegurado= "";
$this->apellidosynombre= "";
$this->nacimiento= "";
$this->anos= "";
$this->meses= "";
$this->dias= "";
$this->beneficio= "";
$this->peso= "";
$this->talla= "";
$this->fum= "";
$this->nutricion= "";
$this->prenatal= "";
$this->cpn4= "";
$this->pap= "";
$this->pappos= "";
$this->ivaa= "";
$this->ivaapos= "";
$this->mamapos= "";
$this->hemorragia1mit= "";
$this->hemorragiaparto= "";
$this->embsepsis= "";
$this->preeclamsiasevera= "";
$this->eclamsia= "";
$this->atencionparto= "";
$this->tipoparto= "";
$this->anestesia= "";
$this->reciennac= "";
$this->partera= "";
$this->partodom= "";
$this->malformacion= "";
$this->mujer1549con4cpn= "";
$this->lactanciainmediata= "";
$this->rnapegoprecoz= "";
$this->controlpostparto= "";
$this->hierro90= "";
$this->vitap= "";
$this->mortalidadfuera= "";
$this->refcontraref= "";
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
$model->apellidosynombre= $this->apellidosynombre;
$model->nacimiento= $this->nacimiento;
$model->anos= $this->anos;
$model->meses= $this->meses;
$model->dias= $this->dias;
$model->beneficio= $this->beneficio;
$model->peso= $this->peso;
$model->talla= $this->talla;
$model->fum= $this->fum;
$model->nutricion= $this->nutricion;
$model->prenatal= $this->prenatal;
$model->cpn4= $this->cpn4;
$model->pap= $this->pap;
$model->pappos= $this->pappos;
$model->ivaa= $this->ivaa;
$model->ivaapos= $this->ivaapos;
$model->mamapos= $this->mamapos;
$model->hemorragia1mit= $this->hemorragia1mit;
$model->hemorragiaparto= $this->hemorragiaparto;
$model->embsepsis= $this->embsepsis;
$model->preeclamsiasevera= $this->preeclamsiasevera;
$model->eclamsia= $this->eclamsia;
$model->atencionparto= $this->atencionparto;
$model->tipoparto= $this->tipoparto;
$model->anestesia= $this->anestesia;
$model->reciennac= $this->reciennac;
$model->partera= $this->partera;
$model->partodom= $this->partodom;
$model->malformacion= $this->malformacion;
$model->mujer1549con4cpn= $this->mujer1549con4cpn;
$model->lactanciainmediata= $this->lactanciainmediata;
$model->rnapegoprecoz= $this->rnapegoprecoz;
$model->controlpostparto= $this->controlpostparto;
$model->hierro90= $this->hierro90;
$model->vitap= $this->vitap;
$model->mortalidadfuera= $this->mortalidadfuera;
$model->refcontraref= $this->refcontraref;
$model->refde= $this->refde;
$model->refa= $this->refa;
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
