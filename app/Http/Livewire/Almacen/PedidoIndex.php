<?php

namespace App\Http\Livewire\Almacen;

use App\Models\AlmArticulo;
use Livewire\Component;
use Livewire\WithPagination;
use App\Models\AlmPedido as Model;
use Carbon\Carbon;


class PedidoIndex extends Component
{

    protected $listeners = [ 'solicitudMat' => 'createSolicitud', 'solicitudId' => 'getSolicitudId' ];
    public $solicitudId;

    use WithPagination;

    public $paginate = 10;

    public $alm_articulo_id;
    public $cantidad;
    public $devuelto;
    public $fecha_devol;
    public $alm_solicitudes_id;

    public $articuloId;
    public $articuloDesc;


    public $mode = 'create';

    public $showForm = false;

    public $primaryId = null;

    public $search;

    public $showConfirmDeletePopup = false;

    protected $rules = [
        // 'alm_articulo_id' => 'required',
        'cantidad' => 'required',
        // 'devuelto' => 'required',
        // 'fecha_devol' => 'required',
        // 'alm_solicitudes_id' => 'required',
    ];

    public function getSolicitudId($solId){
        // $comprobante = AlmComprobante::find($compId);
        // dd($compId);
        $this->solicitudId = $solId;
    }


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
        $model = Model::where('alm_articulo_id', 'like', '%'.$this->search.'%')->
        orWhere('cantidad', 'like', '%'.$this->search.'%')->
        orWhere('devuelto', 'like', '%'.$this->search.'%')->
        orWhere('fecha_devol', 'like', '%'.$this->search.'%');

        $model = Model::where('alm_solicitudes_id', '=', $this->solicitudId)->latest()->paginate($this->paginate);
        return view('livewire.almacen.pedido-index', [
            'rows'=> $model
        ]);
    }


    public function createSolicitud($articuloId)
    {

        $articulo = AlmArticulo::find($articuloId);
        $this->articuloId = $articulo->id;
        $this->articuloDesc = $articulo->descrip;

        $this->mode = 'create';
        $this->resetForm();
        // $this->showForm = true;

        $this->emit("showSolMatAdd");
        // $this->emit("showForm");
    }


    public function edit($primaryId)
    {
        $this->mode = 'update';
        $this->primaryId = $primaryId;
        $model = Model::find($primaryId);

        $this->alm_articulo_id= $model->alm_articulo_id;
        $this->cantidad= $model->cantidad;
        $this->devuelto= $model->devuelto;
        $this->fecha_devol= $model->fecha_devol;
        $this->alm_solicitudes_id= $model->alm_solicitudes_id;


        $this->emit("showForm");
        $this->showForm = true;
    }

    public function closeForm()
    {
        $this->showForm = false;

        // $this->emit("hideForm");
        $this->emit("hideSolMatAdd");
    }

    public function store()
    {
        $this->validate();

        $model = new Model();

        $model->alm_articulo_id= $this->articuloId;
        $model->cantidad= $this->cantidad;
        // $model->devuelto= $this->devuelto;
        // $model->fecha_devol= $this->fecha_devol;
        $model->alm_solicitudes_id= $this->solicitudId;
        $model->save();

        $this->resetForm();
        // $this->emit("hideForm");
        $this->emit("hideSolMatAdd");
        // session()->flash('message', 'Record Saved Successfully');
        // $this->showForm = false;

    }

    public function resetForm()
    {
        $this->alm_articulo_id= "";
        $this->cantidad= "";
        $this->devuelto= "";
        $this->fecha_devol= "";
        $this->alm_solicitudes_id= "";

    }


    public function update()
    {
          $this->validate();

        $model = Model::find($this->primaryId);

        $model->alm_articulo_id= $this->alm_articulo_id;
        $model->cantidad= $this->cantidad;
        $model->devuelto= $this->devuelto;
        $model->fecha_devol= $this->fecha_devol;
        $model->alm_solicitudes_id= $this->alm_solicitudes_id;
        $model->save();

        $this->resetForm();
        $this->emit("hideSolMatAdd");
        // session()->flash('message', 'Record Updated Successfully');
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
