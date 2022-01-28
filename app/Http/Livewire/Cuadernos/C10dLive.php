<?php

namespace App\Http\Livewire\Cuadernos;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\C10d as Model;


class C10dLive extends Component
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
   public $sexo;
   public $fnacimiento;
   public $anos;
   public $meses;
   public $dias;
   public $bcgm1;
   public $penta1m1;
   public $penta2m1;
   public $penta3m1;
   public $polio1m1;
   public $polio2m1;
   public $polio3m1;
   public $antirotavir1m1;
   public $antirotavir2m1;
   public $antineumococo1m1;
   public $antineumococo2m1;
   public $antineumococo3m1;
   public $influenza1m1;
   public $influenza2m1;
   public $srp11223m;
   public $srp21223m;
   public $antiamarilica1223m;
   public $penta11223m;
   public $penta21223m;
   public $penta31223m;
   public $penta41223m;
   public $polio11223m;
   public $polio21223m;
   public $polio31223m;
   public $polio41223m;
   public $influenzau1223m;
   public $penta12a3;
   public $penta22a4;
   public $penta32a5;
   public $penta42a6;
   public $polio12a7;
   public $polio22a8;
   public $polio32a9;
   public $polio42a10;
   public $srp12a11;
   public $srp22a12;
   public $antiamarilica2a13;
   public $penta54;
   public $polio54;
   public $srp14;
   public $srp24;
   public $antiamarilica4;
   public $dt1;
   public $dt2;
   public $dt3;
   public $dt4;
   public $dt5;
   public $hepb1tsalud;
   public $hepb2tsalud;
   public $hepb3tsalud;
   public $hepb1tvih;
   public $hepb2tvih;
   public $hepb3tvih;
   public $influenzam60;
   public $influenzaenfcron;
   public $influenzaembarazadas;
   public $influenzatsalud;
   public $vph1;
   public $vph2;


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
'sexo' => 'required',
'fnacimiento' => 'required',
'anos' => 'required',
'meses' => 'required',
'dias' => 'required',
'bcgm1' => 'required',
'penta1m1' => 'required',
'penta2m1' => 'required',
'penta3m1' => 'required',
'polio1m1' => 'required',
'polio2m1' => 'required',
'polio3m1' => 'required',
'antirotavir1m1' => 'required',
'antirotavir2m1' => 'required',
'antineumococo1m1' => 'required',
'antineumococo2m1' => 'required',
'antineumococo3m1' => 'required',
'influenza1m1' => 'required',
'influenza2m1' => 'required',
'srp11223m' => 'required',
'srp21223m' => 'required',
'antiamarilica1223m' => 'required',
'penta11223m' => 'required',
'penta21223m' => 'required',
'penta31223m' => 'required',
'penta41223m' => 'required',
'polio11223m' => 'required',
'polio21223m' => 'required',
'polio31223m' => 'required',
'polio41223m' => 'required',
'influenzau1223m' => 'required',
'penta12a3' => 'required',
'penta22a4' => 'required',
'penta32a5' => 'required',
'penta42a6' => 'required',
'polio12a7' => 'required',
'polio22a8' => 'required',
'polio32a9' => 'required',
'polio42a10' => 'required',
'srp12a11' => 'required',
'srp22a12' => 'required',
'antiamarilica2a13' => 'required',
'penta54' => 'required',
'polio54' => 'required',
'srp14' => 'required',
'srp24' => 'required',
'antiamarilica4' => 'required',
'dt1' => 'required',
'dt2' => 'required',
'dt3' => 'required',
'dt4' => 'required',
'dt5' => 'required',
'hepb1tsalud' => 'required',
'hepb2tsalud' => 'required',
'hepb3tsalud' => 'required',
'hepb1tvih' => 'required',
'hepb2tvih' => 'required',
'hepb3tvih' => 'required',
'influenzam60' => 'required',
'influenzaenfcron' => 'required',
'influenzaembarazadas' => 'required',
'influenzatsalud' => 'required',
'vph1' => 'required',
'vph2' => 'required',

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
        $model = Model::where('establecimiento', 'like', '%'.$this->search.'%')->orWhere('medico', 'like', '%'.$this->search.'%')->orWhere('fconsulta', 'like', '%'.$this->search.'%')->orWhere('hclin', 'like', '%'.$this->search.'%')->orWhere('asegurado', 'like', '%'.$this->search.'%')->orWhere('apellidosynombres', 'like', '%'.$this->search.'%')->orWhere('sexo', 'like', '%'.$this->search.'%')->orWhere('fnacimiento', 'like', '%'.$this->search.'%')->orWhere('años', 'like', '%'.$this->search.'%')->orWhere('meses', 'like', '%'.$this->search.'%')->orWhere('dias', 'like', '%'.$this->search.'%')->orWhere('bcgm1', 'like', '%'.$this->search.'%')->orWhere('penta1m1', 'like', '%'.$this->search.'%')->orWhere('penta2m1', 'like', '%'.$this->search.'%')->orWhere('penta3m1', 'like', '%'.$this->search.'%')->orWhere('polio1m1', 'like', '%'.$this->search.'%')->orWhere('polio2m1', 'like', '%'.$this->search.'%')->orWhere('polio3m1', 'like', '%'.$this->search.'%')->orWhere('antirotavir1m1', 'like', '%'.$this->search.'%')->orWhere('antirotavir2m1', 'like', '%'.$this->search.'%')->orWhere('antineumococo1m1', 'like', '%'.$this->search.'%')->orWhere('antineumococo2m1', 'like', '%'.$this->search.'%')->orWhere('antineumococo3m1', 'like', '%'.$this->search.'%')->orWhere('influenza1m1', 'like', '%'.$this->search.'%')->orWhere('influenza2m1', 'like', '%'.$this->search.'%')->orWhere('srp11223m', 'like', '%'.$this->search.'%')->orWhere('srp21223m', 'like', '%'.$this->search.'%')->orWhere('antiamarilica1223m', 'like', '%'.$this->search.'%')->orWhere('penta11223m', 'like', '%'.$this->search.'%')->orWhere('penta21223m', 'like', '%'.$this->search.'%')->orWhere('penta31223m', 'like', '%'.$this->search.'%')->orWhere('penta41223m', 'like', '%'.$this->search.'%')->orWhere('polio11223m', 'like', '%'.$this->search.'%')->orWhere('polio21223m', 'like', '%'.$this->search.'%')->orWhere('polio31223m', 'like', '%'.$this->search.'%')->orWhere('polio41223m', 'like', '%'.$this->search.'%')->orWhere('influenzau1223m', 'like', '%'.$this->search.'%')->orWhere('penta12a3', 'like', '%'.$this->search.'%')->orWhere('penta22a4', 'like', '%'.$this->search.'%')->orWhere('penta32a5', 'like', '%'.$this->search.'%')->orWhere('penta42a6', 'like', '%'.$this->search.'%')->orWhere('polio12a7', 'like', '%'.$this->search.'%')->orWhere('polio22a8', 'like', '%'.$this->search.'%')->orWhere('polio32a9', 'like', '%'.$this->search.'%')->orWhere('polio42a10', 'like', '%'.$this->search.'%')->orWhere('srp12a11', 'like', '%'.$this->search.'%')->orWhere('srp22a12', 'like', '%'.$this->search.'%')->orWhere('antiamarilica2a13', 'like', '%'.$this->search.'%')->orWhere('penta54', 'like', '%'.$this->search.'%')->orWhere('polio54', 'like', '%'.$this->search.'%')->orWhere('srp14', 'like', '%'.$this->search.'%')->orWhere('srp24', 'like', '%'.$this->search.'%')->orWhere('antiamarilica4', 'like', '%'.$this->search.'%')->orWhere('dt1', 'like', '%'.$this->search.'%')->orWhere('dt2', 'like', '%'.$this->search.'%')->orWhere('dt3', 'like', '%'.$this->search.'%')->orWhere('dt4', 'like', '%'.$this->search.'%')->orWhere('dt5', 'like', '%'.$this->search.'%')->orWhere('hepb1tsalud', 'like', '%'.$this->search.'%')->orWhere('hepb2tsalud', 'like', '%'.$this->search.'%')->orWhere('hepb3tsalud', 'like', '%'.$this->search.'%')->orWhere('hepb1tvih', 'like', '%'.$this->search.'%')->orWhere('hepb2tvih', 'like', '%'.$this->search.'%')->orWhere('hepb3tvih', 'like', '%'.$this->search.'%')->orWhere('influenzam60', 'like', '%'.$this->search.'%')->orWhere('influenzaenfcron', 'like', '%'.$this->search.'%')->orWhere('influenzaembarazadas', 'like', '%'.$this->search.'%')->orWhere('influenzatsalud', 'like', '%'.$this->search.'%')->orWhere('vph1', 'like', '%'.$this->search.'%')->orWhere('vph2', 'like', '%'.$this->search.'%')->latest()->paginate($this->paginate);
        return view('livewire.cuadernos.c10d-live', [
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
$this->sexo= $model->sexo;
$this->fnacimiento= $model->fnacimiento;
$this->anos= $model->años;
$this->meses= $model->meses;
$this->dias= $model->dias;
$this->bcgm1= $model->bcgm1;
$this->penta1m1= $model->penta1m1;
$this->penta2m1= $model->penta2m1;
$this->penta3m1= $model->penta3m1;
$this->polio1m1= $model->polio1m1;
$this->polio2m1= $model->polio2m1;
$this->polio3m1= $model->polio3m1;
$this->antirotavir1m1= $model->antirotavir1m1;
$this->antirotavir2m1= $model->antirotavir2m1;
$this->antineumococo1m1= $model->antineumococo1m1;
$this->antineumococo2m1= $model->antineumococo2m1;
$this->antineumococo3m1= $model->antineumococo3m1;
$this->influenza1m1= $model->influenza1m1;
$this->influenza2m1= $model->influenza2m1;
$this->srp11223m= $model->srp11223m;
$this->srp21223m= $model->srp21223m;
$this->antiamarilica1223m= $model->antiamarilica1223m;
$this->penta11223m= $model->penta11223m;
$this->penta21223m= $model->penta21223m;
$this->penta31223m= $model->penta31223m;
$this->penta41223m= $model->penta41223m;
$this->polio11223m= $model->polio11223m;
$this->polio21223m= $model->polio21223m;
$this->polio31223m= $model->polio31223m;
$this->polio41223m= $model->polio41223m;
$this->influenzau1223m= $model->influenzau1223m;
$this->penta12a3= $model->penta12a3;
$this->penta22a4= $model->penta22a4;
$this->penta32a5= $model->penta32a5;
$this->penta42a6= $model->penta42a6;
$this->polio12a7= $model->polio12a7;
$this->polio22a8= $model->polio22a8;
$this->polio32a9= $model->polio32a9;
$this->polio42a10= $model->polio42a10;
$this->srp12a11= $model->srp12a11;
$this->srp22a12= $model->srp22a12;
$this->antiamarilica2a13= $model->antiamarilica2a13;
$this->penta54= $model->penta54;
$this->polio54= $model->polio54;
$this->srp14= $model->srp14;
$this->srp24= $model->srp24;
$this->antiamarilica4= $model->antiamarilica4;
$this->dt1= $model->dt1;
$this->dt2= $model->dt2;
$this->dt3= $model->dt3;
$this->dt4= $model->dt4;
$this->dt5= $model->dt5;
$this->hepb1tsalud= $model->hepb1tsalud;
$this->hepb2tsalud= $model->hepb2tsalud;
$this->hepb3tsalud= $model->hepb3tsalud;
$this->hepb1tvih= $model->hepb1tvih;
$this->hepb2tvih= $model->hepb2tvih;
$this->hepb3tvih= $model->hepb3tvih;
$this->influenzam60= $model->influenzam60;
$this->influenzaenfcron= $model->influenzaenfcron;
$this->influenzaembarazadas= $model->influenzaembarazadas;
$this->influenzatsalud= $model->influenzatsalud;
$this->vph1= $model->vph1;
$this->vph2= $model->vph2;


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
$model->sexo= $this->sexo;
$model->fnacimiento= $this->fnacimiento;
$model->anos= $this->anos;
$model->meses= $this->meses;
$model->dias= $this->dias;
$model->bcgm1= $this->bcgm1;
$model->penta1m1= $this->penta1m1;
$model->penta2m1= $this->penta2m1;
$model->penta3m1= $this->penta3m1;
$model->polio1m1= $this->polio1m1;
$model->polio2m1= $this->polio2m1;
$model->polio3m1= $this->polio3m1;
$model->antirotavir1m1= $this->antirotavir1m1;
$model->antirotavir2m1= $this->antirotavir2m1;
$model->antineumococo1m1= $this->antineumococo1m1;
$model->antineumococo2m1= $this->antineumococo2m1;
$model->antineumococo3m1= $this->antineumococo3m1;
$model->influenza1m1= $this->influenza1m1;
$model->influenza2m1= $this->influenza2m1;
$model->srp11223m= $this->srp11223m;
$model->srp21223m= $this->srp21223m;
$model->antiamarilica1223m= $this->antiamarilica1223m;
$model->penta11223m= $this->penta11223m;
$model->penta21223m= $this->penta21223m;
$model->penta31223m= $this->penta31223m;
$model->penta41223m= $this->penta41223m;
$model->polio11223m= $this->polio11223m;
$model->polio21223m= $this->polio21223m;
$model->polio31223m= $this->polio31223m;
$model->polio41223m= $this->polio41223m;
$model->influenzau1223m= $this->influenzau1223m;
$model->penta12a3= $this->penta12a3;
$model->penta22a4= $this->penta22a4;
$model->penta32a5= $this->penta32a5;
$model->penta42a6= $this->penta42a6;
$model->polio12a7= $this->polio12a7;
$model->polio22a8= $this->polio22a8;
$model->polio32a9= $this->polio32a9;
$model->polio42a10= $this->polio42a10;
$model->srp12a11= $this->srp12a11;
$model->srp22a12= $this->srp22a12;
$model->antiamarilica2a13= $this->antiamarilica2a13;
$model->penta54= $this->penta54;
$model->polio54= $this->polio54;
$model->srp14= $this->srp14;
$model->srp24= $this->srp24;
$model->antiamarilica4= $this->antiamarilica4;
$model->dt1= $this->dt1;
$model->dt2= $this->dt2;
$model->dt3= $this->dt3;
$model->dt4= $this->dt4;
$model->dt5= $this->dt5;
$model->hepb1tsalud= $this->hepb1tsalud;
$model->hepb2tsalud= $this->hepb2tsalud;
$model->hepb3tsalud= $this->hepb3tsalud;
$model->hepb1tvih= $this->hepb1tvih;
$model->hepb2tvih= $this->hepb2tvih;
$model->hepb3tvih= $this->hepb3tvih;
$model->influenzam60= $this->influenzam60;
$model->influenzaenfcron= $this->influenzaenfcron;
$model->influenzaembarazadas= $this->influenzaembarazadas;
$model->influenzatsalud= $this->influenzatsalud;
$model->vph1= $this->vph1;
$model->vph2= $this->vph2;
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
$this->sexo= "";
$this->fnacimiento= "";
$this->anos= "";
$this->meses= "";
$this->dias= "";
$this->bcgm1= "";
$this->penta1m1= "";
$this->penta2m1= "";
$this->penta3m1= "";
$this->polio1m1= "";
$this->polio2m1= "";
$this->polio3m1= "";
$this->antirotavir1m1= "";
$this->antirotavir2m1= "";
$this->antineumococo1m1= "";
$this->antineumococo2m1= "";
$this->antineumococo3m1= "";
$this->influenza1m1= "";
$this->influenza2m1= "";
$this->srp11223m= "";
$this->srp21223m= "";
$this->antiamarilica1223m= "";
$this->penta11223m= "";
$this->penta21223m= "";
$this->penta31223m= "";
$this->penta41223m= "";
$this->polio11223m= "";
$this->polio21223m= "";
$this->polio31223m= "";
$this->polio41223m= "";
$this->influenzau1223m= "";
$this->penta12a3= "";
$this->penta22a4= "";
$this->penta32a5= "";
$this->penta42a6= "";
$this->polio12a7= "";
$this->polio22a8= "";
$this->polio32a9= "";
$this->polio42a10= "";
$this->srp12a11= "";
$this->srp22a12= "";
$this->antiamarilica2a13= "";
$this->penta54= "";
$this->polio54= "";
$this->srp14= "";
$this->srp24= "";
$this->antiamarilica4= "";
$this->dt1= "";
$this->dt2= "";
$this->dt3= "";
$this->dt4= "";
$this->dt5= "";
$this->hepb1tsalud= "";
$this->hepb2tsalud= "";
$this->hepb3tsalud= "";
$this->hepb1tvih= "";
$this->hepb2tvih= "";
$this->hepb3tvih= "";
$this->influenzam60= "";
$this->influenzaenfcron= "";
$this->influenzaembarazadas= "";
$this->influenzatsalud= "";
$this->vph1= "";
$this->vph2= "";

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
$model->sexo= $this->sexo;
$model->fnacimiento= $this->fnacimiento;
$model->anos= $this->anos;
$model->meses= $this->meses;
$model->dias= $this->dias;
$model->bcgm1= $this->bcgm1;
$model->penta1m1= $this->penta1m1;
$model->penta2m1= $this->penta2m1;
$model->penta3m1= $this->penta3m1;
$model->polio1m1= $this->polio1m1;
$model->polio2m1= $this->polio2m1;
$model->polio3m1= $this->polio3m1;
$model->antirotavir1m1= $this->antirotavir1m1;
$model->antirotavir2m1= $this->antirotavir2m1;
$model->antineumococo1m1= $this->antineumococo1m1;
$model->antineumococo2m1= $this->antineumococo2m1;
$model->antineumococo3m1= $this->antineumococo3m1;
$model->influenza1m1= $this->influenza1m1;
$model->influenza2m1= $this->influenza2m1;
$model->srp11223m= $this->srp11223m;
$model->srp21223m= $this->srp21223m;
$model->antiamarilica1223m= $this->antiamarilica1223m;
$model->penta11223m= $this->penta11223m;
$model->penta21223m= $this->penta21223m;
$model->penta31223m= $this->penta31223m;
$model->penta41223m= $this->penta41223m;
$model->polio11223m= $this->polio11223m;
$model->polio21223m= $this->polio21223m;
$model->polio31223m= $this->polio31223m;
$model->polio41223m= $this->polio41223m;
$model->influenzau1223m= $this->influenzau1223m;
$model->penta12a3= $this->penta12a3;
$model->penta22a4= $this->penta22a4;
$model->penta32a5= $this->penta32a5;
$model->penta42a6= $this->penta42a6;
$model->polio12a7= $this->polio12a7;
$model->polio22a8= $this->polio22a8;
$model->polio32a9= $this->polio32a9;
$model->polio42a10= $this->polio42a10;
$model->srp12a11= $this->srp12a11;
$model->srp22a12= $this->srp22a12;
$model->antiamarilica2a13= $this->antiamarilica2a13;
$model->penta54= $this->penta54;
$model->polio54= $this->polio54;
$model->srp14= $this->srp14;
$model->srp24= $this->srp24;
$model->antiamarilica4= $this->antiamarilica4;
$model->dt1= $this->dt1;
$model->dt2= $this->dt2;
$model->dt3= $this->dt3;
$model->dt4= $this->dt4;
$model->dt5= $this->dt5;
$model->hepb1tsalud= $this->hepb1tsalud;
$model->hepb2tsalud= $this->hepb2tsalud;
$model->hepb3tsalud= $this->hepb3tsalud;
$model->hepb1tvih= $this->hepb1tvih;
$model->hepb2tvih= $this->hepb2tvih;
$model->hepb3tvih= $this->hepb3tvih;
$model->influenzam60= $this->influenzam60;
$model->influenzaenfcron= $this->influenzaenfcron;
$model->influenzaembarazadas= $this->influenzaembarazadas;
$model->influenzatsalud= $this->influenzatsalud;
$model->vph1= $this->vph1;
$model->vph2= $this->vph2;
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
