<?php

namespace App\Http\Livewire\Almacen;

use App\Models\AlmArticulo;
use App\Models\AlmComprobante;
use Livewire\Component;
use Livewire\WithPagination;
use App\Models\AlmIngreso as Model;
use App\Models\AlmIngreso;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class IngresoIndex extends Component
{

    protected $listeners = [ 'ingreso' => 'createIngreso', 'comprobanteId' => 'getComprobanteId' ];
    public $comprobanteId;
    
    use WithPagination;

    public $paginate = 10;

    public $alm_articulo_id;
    public $cantidad;
    public $alm_comprobante_id;
    public $fecha_venc;
    public $user_id;
    public $valor_total;
    public $precio_unitario;


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
        // 'alm_comprobante_id' => 'required',
        // 'fecha_venc' => 'required',
        // 'user_id' => 'required',
        'valor_total' => 'required',
        // 'precio_unitario' => 'required',

];

    public function getComprobanteId($compId){
        // $comprobante = AlmComprobante::find($compId);
        // dd($compId);
        $this->comprobanteId = $compId;

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
        orWhere('fecha_venc', 'like', '%'.$this->search.'%')->
        orWhere('user_id', 'like', '%'.$this->search.'%')->
        orWhere('valor_total', 'like', '%'.$this->search.'%');

        $model = Model::where('alm_comprobante_id', '=', $this->comprobanteId)->latest()->paginate($this->paginate);
        return view('livewire.almacen.ingreso-index', [
            'rows'=> $model
        ]);
    }   

    public function createIngreso($articuloId)
    {
     
        $articulo = AlmArticulo::find($articuloId);
        $this->articuloId = $articulo->id;
        $this->articuloDesc = $articulo->descrip;
        
        $this->mode = 'create';
        $this->resetForm();
        // $this->showForm = true;

        $this->emit("showIngresoAdd");
        // $this->emit("ingresoAdd");
    }


    public function edit($primaryId)
    {
        $this->mode = 'update';
        $this->primaryId = $primaryId;
        $model = Model::find($primaryId);

        $this->alm_articulo_id= $model->alm_articulo_id;
        $this->cantidad= $model->cantidad;
        $this->alm_comprobante_id= $model->alm_comprobante_id;
        $this->fecha_venc= $model->fecha_venc;
        $this->user_id= $model->user_id;
        $this->valor_total= $model->valor_total;
        $this->precio_unitario= $model->precio_unitario;


        $this->emit("showForm");
        $this->showForm = true;
    }

    public function closeForm()
    {
        $this->showForm = false;

        $this->emit("hideIngresoAdd");
    }

    public function store()
    {
            $this->validate();

            $model = new Model();

            $model->alm_articulo_id= $this->articuloId;
            $model->cantidad= $this->cantidad;
            $model->alm_comprobante_id= $this->comprobanteId;
            $model->fecha_venc= Carbon::now();
            $model->user_id= auth()->user()->id;
            $model->precio_unitario= bcdiv($this->valor_total ,$this->cantidad, 2);
            $model->valor_total= $this->valor_total;
            $model->save();

          $this->resetForm();
          $this->emit("hideIngresoAdd");
        //   session()->flash('message', 'Record Saved Successfully');
        //   $this->showForm = false;

    }

    public function resetForm()
    {
        $this->alm_articulo_id= "";
        $this->cantidad= "";
        $this->alm_comprobante_id= "";
        $this->fecha_venc= "";
        $this->user_id= "";
        $this->valor_total= "";
        $this->precio_unitario= "";

    }


    public function update()
    {
          $this->validate();

          $model = Model::find($this->primaryId);

            $model->alm_articulo_id= $this->articuloId;
            $model->cantidad= $this->cantidad;
            $model->alm_comprobante_id= $this->comprobanteId;
            $model->fecha_venc= Carbon::now();
            $model->user_id= auth()->user()->id;
            $model->precio_unitario= bcdiv($this->valor_total ,$this->cantidad, 2);
            $model->valor_total= $this->valor_total;
            $model->save();

            $this->resetForm();
            $this->emit("hideIngresoAdd");
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
