<?php

namespace App\Http\Livewire\Cuadernos;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\C1 as Model;


class C1Live extends Component
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
   public $consulta;
   public $peso;
   public $talla;
   public $temp;
   public $fcard;
   public $fresp;
   public $presart;
   public $nutricion;
   public $motivo;
   public $exfis;
   public $inyecta;
   public $sueros;
   public $suturas;
   public $otrasact;
   public $dxdesc;
   public $dxprin;
   public $tto;
   public $mortalidad;
   public $referencias;
   public $referido;
   public $referidoa;
   public $mayor60;


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
'consulta' => 'required',
'peso' => 'required',
'talla' => 'required',
'temp' => 'required',
'fcard' => 'required',
'fresp' => 'required',
'presart' => 'required',
'nutricion' => 'required',
'motivo' => 'required',
'exfis' => 'required',
'inyecta' => 'required',
'sueros' => 'required',
'suturas' => 'required',
'otrasact' => 'required',
'dxdesc' => 'required',
'dxprin' => 'required',
'tto' => 'required',
'mortalidad' => 'required',
'referencias' => 'required',
'referido' => 'required',
'referidoa' => 'required',
'mayor60' => 'required',

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
        $model = Model::where('establecimiento', 'like', '%'.$this->search.'%')->orWhere('medico', 'like', '%'.$this->search.'%')->orWhere('fecha', 'like', '%'.$this->search.'%')->orWhere('hclin', 'like', '%'.$this->search.'%')->orWhere('noasegurado', 'like', '%'.$this->search.'%')->orWhere('apellidosynombre', 'like', '%'.$this->search.'%')->orWhere('sexo', 'like', '%'.$this->search.'%')->orWhere('nacimiento', 'like', '%'.$this->search.'%')->orWhere('años', 'like', '%'.$this->search.'%')->orWhere('meses', 'like', '%'.$this->search.'%')->orWhere('dias', 'like', '%'.$this->search.'%')->orWhere('consulta', 'like', '%'.$this->search.'%')->orWhere('peso', 'like', '%'.$this->search.'%')->orWhere('talla', 'like', '%'.$this->search.'%')->orWhere('temp', 'like', '%'.$this->search.'%')->orWhere('fcard', 'like', '%'.$this->search.'%')->orWhere('fresp', 'like', '%'.$this->search.'%')->orWhere('presart', 'like', '%'.$this->search.'%')->orWhere('nutricion', 'like', '%'.$this->search.'%')->orWhere('motivo', 'like', '%'.$this->search.'%')->orWhere('exfis', 'like', '%'.$this->search.'%')->orWhere('inyecta', 'like', '%'.$this->search.'%')->orWhere('sueros', 'like', '%'.$this->search.'%')->orWhere('suturas', 'like', '%'.$this->search.'%')->orWhere('otrasact', 'like', '%'.$this->search.'%')->orWhere('dxdesc', 'like', '%'.$this->search.'%')->orWhere('dxprin', 'like', '%'.$this->search.'%')->orWhere('tto', 'like', '%'.$this->search.'%')->orWhere('mortalidad', 'like', '%'.$this->search.'%')->orWhere('referencias', 'like', '%'.$this->search.'%')->orWhere('referido', 'like', '%'.$this->search.'%')->orWhere('referidoa', 'like', '%'.$this->search.'%')->orWhere('mayor60', 'like', '%'.$this->search.'%')->latest()->paginate($this->paginate);
        return view('livewire.cuadernos.c1-live', [
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
$this->consulta= $model->consulta;
$this->peso= $model->peso;
$this->talla= $model->talla;
$this->temp= $model->temp;
$this->fcard= $model->fcard;
$this->fresp= $model->fresp;
$this->presart= $model->presart;
$this->nutricion= $model->nutricion;
$this->motivo= $model->motivo;
$this->exfis= $model->exfis;
$this->inyecta= $model->inyecta;
$this->sueros= $model->sueros;
$this->suturas= $model->suturas;
$this->otrasact= $model->otrasact;
$this->dxdesc= $model->dxdesc;
$this->dxprin= $model->dxprin;
$this->tto= $model->tto;
$this->mortalidad= $model->mortalidad;
$this->referencias= $model->referencias;
$this->referido= $model->referido;
$this->referidoa= $model->referidoa;
$this->mayor60= $model->mayor60;


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
$model->consulta= $this->consulta;
$model->peso= $this->peso;
$model->talla= $this->talla;
$model->temp= $this->temp;
$model->fcard= $this->fcard;
$model->fresp= $this->fresp;
$model->presart= $this->presart;
$model->nutricion= $this->nutricion;
$model->motivo= $this->motivo;
$model->exfis= $this->exfis;
$model->inyecta= $this->inyecta;
$model->sueros= $this->sueros;
$model->suturas= $this->suturas;
$model->otrasact= $this->otrasact;
$model->dxdesc= $this->dxdesc;
$model->dxprin= $this->dxprin;
$model->tto= $this->tto;
$model->mortalidad= $this->mortalidad;
$model->referencias= $this->referencias;
$model->referido= $this->referido;
$model->referidoa= $this->referidoa;
$model->mayor60= $this->mayor60;
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
$this->consulta= "";
$this->peso= "";
$this->talla= "";
$this->temp= "";
$this->fcard= "";
$this->fresp= "";
$this->presart= "";
$this->nutricion= "";
$this->motivo= "";
$this->exfis= "";
$this->inyecta= "";
$this->sueros= "";
$this->suturas= "";
$this->otrasact= "";
$this->dxdesc= "";
$this->dxprin= "";
$this->tto= "";
$this->mortalidad= "";
$this->referencias= "";
$this->referido= "";
$this->referidoa= "";
$this->mayor60= "";

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
$model->consulta= $this->consulta;
$model->peso= $this->peso;
$model->talla= $this->talla;
$model->temp= $this->temp;
$model->fcard= $this->fcard;
$model->fresp= $this->fresp;
$model->presart= $this->presart;
$model->nutricion= $this->nutricion;
$model->motivo= $this->motivo;
$model->exfis= $this->exfis;
$model->inyecta= $this->inyecta;
$model->sueros= $this->sueros;
$model->suturas= $this->suturas;
$model->otrasact= $this->otrasact;
$model->dxdesc= $this->dxdesc;
$model->dxprin= $this->dxprin;
$model->tto= $this->tto;
$model->mortalidad= $this->mortalidad;
$model->referencias= $this->referencias;
$model->referido= $this->referido;
$model->referidoa= $this->referidoa;
$model->mayor60= $this->mayor60;
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
