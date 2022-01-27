<?php

namespace App\Http\Livewire\Viaje;

use App\Models\AdmDepartamento;
use App\Models\AdmPoa;
use Livewire\Component;
use Livewire\WithPagination;
use App\Models\AdmViaje as Model;
use App\Models\AdmViaje;
use App\Models\User;
use Carbon\Carbon;
use DateTime;
use Barryvdh\DomPDF\Facade as PDF;
use Illuminate\Support\Facades\App;

class ViajeIndex extends Component
{
    public $departamentos;
    public $poas;
    public $coordinadores;

    use WithPagination;

    public $paginate = 10;

    public $cite;
    public $objeto;
    public $lugar;
    public $adm_departamento_id;
    public $adm_poa_id;
    public $fecha_salida;
    public $fecha_retorno;
    public $duracion;
    public $transporte;
    public $estado;
    public $user_id;
    public $coordinador_id;


    public $mode = 'create';

    public $showForm = false;

    public $primaryId = null;

    public $search;

    public $showConfirmDeletePopup = false;

    protected $rules = [
            'cite' => 'required',
            'objeto' => 'required',
            'lugar' => 'required',
            'adm_departamento_id' => 'required',
            'adm_poa_id' => 'required',
            'fecha_salida' => 'required',
            'fecha_retorno' => 'required',
            // 'duracion' => 'required',
            'transporte' => 'required',
            // 'estado' => 'required',
            // 'user_id' => 'required',
            // 'coordinador_id' => 'required',
        ];

    protected $paginationTheme = "bootstrap";

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function updatingSearch()
    {
        $this->resetPage();
    }

    public function mount()
    {
        $this->departamentos = AdmDepartamento::all();
        $this->poas = AdmPoa::all();
        $this->coordinadores = User::where('nivel', 2)->get();
    }

    public function render()
    {
        $model = Model::where('cite', 'like', '%'.$this->search.'%')->
        orWhere('lugar', 'like', '%'.$this->search.'%')->
        orWhere('adm_departamento_id', 'like', '%'.$this->search.'%')->
        orWhere('adm_poa_id', 'like', '%'.$this->search.'%')->
        orWhere('fecha_salida', 'like', '%'.$this->search.'%')->
        orWhere('fecha_retorno', 'like', '%'.$this->search.'%')->
        orWhere('duracion', 'like', '%'.$this->search.'%')->
        orWhere('transporte', 'like', '%'.$this->search.'%')->
        orWhere('estado', 'like', '%'.$this->search.'%')->
        orWhere('user_id', 'like', '%'.$this->search.'%')->
        orWhere('coordinador_id', 'like', '%'.$this->search.'%')->latest()->paginate($this->paginate);
        return view('livewire.viaje.viaje-index', [
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

        $this->cite= $model->cite;
        $this->objeto= $model->objeto;
        $this->lugar= $model->lugar;
        $this->adm_departamento_id= $model->adm_departamento_id;
        $this->adm_poa_id= $model->adm_poa_id;
        $this->fecha_salida= Carbon::parse($model->fecha_salida)->format('Y-m-d');
        $this->fecha_retorno= Carbon::parse($model->fecha_retorno)->format('Y-m-d');
        $this->duracion= $model->duracion;
        $this->transporte= $model->transporte;
        // $this->estado= $model->estado;
        // $this->user_id= $model->user_id;
        $this->coordinador_id= $model->coordinador_id;


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

        $model->cite= $this->cite;
        $model->objeto= $this->objeto;
        $model->lugar= $this->lugar;
        $model->adm_departamento_id= $this->adm_departamento_id;
        $model->adm_poa_id= $this->adm_poa_id;
        $model->fecha_salida= $this->fecha_salida;
        $model->fecha_retorno= $this->fecha_retorno;
        $inicio = new DateTime($this->fecha_salida);
        $fin = new DateTime($this->fecha_retorno);
        $duracion = $fin->diff($inicio);
        $dias = $duracion->format('%a');
        $model->duracion= $dias;
        $model->transporte= $this->transporte;
        $model->estado= 'SOLICITADO';
        $model->user_id= auth()->user()->id;
        $model->coordinador_id= $this->coordinador_id;
        $model->save();

        $this->resetForm();
        $this->emit("hideForm");
        session()->flash('message', 'Record Saved Successfully');
        $this->showForm = false;

    }

    public function resetForm()
    {
        $this->cite= "";
        $this->objeto= "";
        $this->lugar= "";
        $this->adm_departamento_id= "";
        $this->adm_poa_id= "";
        // $this->fecha_salida= "";
        // $this->fecha_retorno= "";
        $this->duracion= "";
        $this->transporte= "";
        // $this->estado= "";
        // $this->user_id= "";
        $this->coordinador_id= "";

    }


    public function update()
    {
        $this->validate();

        $model = Model::find($this->primaryId);

        $model->cite= $this->cite;
        $model->objeto= $this->objeto;
        $model->lugar= $this->lugar;
        $model->adm_departamento_id= $this->adm_departamento_id;
        $model->adm_poa_id= $this->adm_poa_id;
        $model->fecha_salida= $this->fecha_salida;
        $model->fecha_retorno= $this->fecha_retorno;
        // $model->duracion= $this->duracion;
        $inicio = new DateTime($this->fecha_salida);
        $fin = new DateTime($this->fecha_retorno);
        $duracion = $fin->diff($inicio);
        $dias = $duracion->format('%a');
        $model->duracion= $dias;
        
        $model->transporte= $this->transporte;
        $model->estado= 'SOLICITADO';
        $model->user_id= auth()->user()->id;
        $model->coordinador_id= $this->coordinador_id;
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

    public function sendPrint($primaryId)
    {
        
        $model = Model::find($primaryId);
        // $art = AdmViaje::where('id', '=',$this->primaryId )->get();
        // dd($model);
        
        $var = [             
            'viaje' => $model,            
        ];

        // $pdf = PDF::loadView('livewire.reportes.adm_viaje', $var)->output();
        // return $pdf->download('solicitud.pdf');
        // return response()->streamDownload(
        //     fn() => print($pdf),
        //     "viajecomision.pdf" 
        // );
        return response()->streamDownload(
            function () use($var) { 
                // $pdf = PDF::loadView('livewire.reportes.anuencia', array('com'=>$model, 'users'=>$users))->output();
                // $pdf = App::make('dompdf.wrapper');
                $pdf = PDF::loadView('livewire.reportes.reporte_viaje', $var);
                echo $pdf->stream();
            }, "viajecomision.pdf"
        );
    }

}
