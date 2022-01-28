<?php

namespace App\Http\Livewire\Almacen;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\AlmComprobante as Model;
use Carbon\Carbon;

class ComprobanteIndex extends Component
{
    public $showComponents = false;
    public $flag = 0;

    use WithPagination;
    protected $paginationTheme = "bootstrap";

    public $paginate = 10;

    public $corte;
    public $fecha;
    public $nro_factura;
    public $numero;
    public $obs;
    public $proveedor;
    public $seccion;
    public $modalidad_ingreso;   
    public $user_id;


    public $mode = 'create';

    public $showForm = false;

    public $primaryId = null;

    public $search;

    public $showConfirmDeletePopup = false;

    protected $rules = [
        // 'corte' => 'required',
        'fecha' => 'required',
        'nro_factura' => 'required',
        // 'numero' => 'required',
        'obs' => 'required',
        'proveedor' => 'required',
        // 'seccion' => 'required',
        'modalidad_ingreso' => 'required',        
        // 'user_id' => 'required',

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
        $model = Model::where('corte', 'like', '%'.$this->search.'%')->
        orWhere('fecha', 'like', '%'.$this->search.'%')->
        orWhere('nro_factura', 'like', '%'.$this->search.'%')->
        orWhere('numero', 'like', '%'.$this->search.'%')->
        orWhere('obs', 'like', '%'.$this->search.'%')->orWhere('proveedor', 'like', '%'.$this->search.'%')->
        orWhere('seccion', 'like', '%'.$this->search.'%')->orWhere('modalidad_ingreso', 'like', '%'.$this->search.'%')->        
        orWhere('user_id', 'like', '%'.$this->search.'%')->latest()->paginate($this->paginate);
        return view('livewire.almacen.comprobante-index', [
            'rows'=> $model
        ]);
    }


    public function create ()
    {
        $this->mode = 'create';
        $this->resetForm();
        $this->showForm = true;
        $this->showComponents = false;
        $this->flag = 0;

        $this->emit("showForm");
    }


    public function edit($primaryId)
    {
        $this->showComponents = false;
        $this->flag = 0;
        $this->mode = 'update';
        $this->primaryId = $primaryId;
        $model = Model::find($primaryId);

        // $this->corte= $model->corte;
        $this->fecha= Carbon::parse($model->fecha)->format('Y-m-d');
        $this->nro_factura= $model->nro_factura;
        // $this->numero= $model->numero;
        $this->obs= $model->obs;
        $this->proveedor= $model->proveedor;
        // $this->seccion= $model->seccion;
        $this->modalidad_ingreso= $model->modalidad_ingreso;        
        // $this->user_id= $model->user_id;


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

            //  $model->corte= $this->corte;
            $model->fecha= $this->fecha;
            $model->nro_factura= $this->nro_factura;
            // $model->numero= $this->numero;
            $model->obs= $this->obs;
            $model->proveedor= $this->proveedor;
            // $model->seccion= $this->seccion;
            $model->modalidad_ingreso= $this->modalidad_ingreso;
            
            $model->user_id= auth()->user()->id;
            $model->save();
            $comprobanteId = $model->id;

            // $this->resetForm();
            // $this->emit("hideForm");
            // session()->flash('message', 'Registro Guardado Exitosamente');
            // $this->showForm = false;
            $this->emit('comprobanteId', $comprobanteId);
            $this->showComponents = true;
            $this->flag = 1;

    }

    public function resetForm()
    {
        $this->corte= "";
        $this->fecha= "";
        $this->nro_factura= "";
        $this->numero= "";
        $this->obs= "";
        $this->proveedor= "";
        $this->seccion= "";
        $this->modalidad_ingreso= "";      
        $this->user_id= "";

    }


    public function update()
    {
          $this->validate();

          $model = Model::find($this->primaryId);

                // $model->corte= $this->corte;
                $model->fecha= $this->fecha;
                $model->nro_factura= $this->nro_factura;
                // $model->numero= $this->numero;
                $model->obs= $this->obs;
                $model->proveedor= $this->proveedor;
                // $model->seccion= $this->seccion;
                $model->modalidad_ingreso= $this->modalidad_ingreso;

                // $model->user_id= $this->user_id;
                $model->save();
                $comprobanteId = $model->id;

        $this->resetForm();
        $this->emit("hideForm");
        session()->flash('message', 'Registro Actualizado Exitosamente');
        $this->emit('comprobanteId', $comprobanteId);
        $this->showComponents = true;
        $this->flag = 1;
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
