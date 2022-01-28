<?php

namespace App\Http\Livewire\Almacen;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\AlmArticulo as Model;
use App\Models\AlmMedida;
use App\Models\AlmSubgrupo;
use Illuminate\Support\Str;

class ArticuloLectura extends Component
{
    use WithPagination;

    public $paginate = 5;
    
    public $subgrupos;    
    public $alm_subgrupo_id;
    
    public $alm_unidad_id;
    public $unidades;
       
    
    public $marca;
    public $codigo;
    public $clase;
    public $descrip;
    public $existencia_min;
    public $user_id;


    public $mode = 'create';

    public $showForm = false;

    public $primaryId = null;

    public $search;

    public $showConfirmDeletePopup = false;

    protected $rules = [
        'clase' => 'required',
        'descrip' => 'required',
        // 'existencia_min' => 'required',
        'alm_subgrupo_id' => 'required',
        // 'codigo' => 'required',
        'alm_unidad_id' => 'required',
        // 'user_id' => 'required',
    ];



    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    protected $paginationTheme = "bootstrap";

    public function updatingSearch()
    {
        $this->resetPage();
    }

    public function mount()
    {
        $this->unidades = AlmMedida::all();
        $this->subgrupos = AlmSubgrupo::all();
    }

    public function render()
    {
        $model = Model::where('clase', 'like', '%'.$this->search.'%')->
        orWhere('descrip', 'like', '%'.$this->search.'%')->
        // orWhere('existencia_min', 'like', '%'.$this->search.'%')->
        orWhere('alm_subgrupo_id', 'like', '%'.$this->search.'%')->
        orWhere('codigo', 'like', '%'.$this->search.'%')->        
        orWhere('user_id', 'like', '%'.$this->search.'%')->latest()->paginate($this->paginate);
        return view('livewire.almacen.articulo-lectura', [
            'rows'=> $model
        ]);
    }


    public function create()
    {
        $this->mode = 'create';
        $this->resetForm();
        // $this->showForm = true;

        // $this->emit("showForm");
    }


    public function edit($primaryId)
    {
        $this->mode = 'update';
        $this->primaryId = $primaryId;
        $model = Model::find($primaryId);

        $this->codigo= $model->codigo;
        $this->descrip= $model->descrip;
        $this->alm_unidad_id= $model->alm_unidad_id;
        $this->marca= $model->marca;
        // $this->existencia_min= $model->existencia_min;
        $this->clase= $model->clase;
        $this->alm_subgrupo_id= $model->alm_subgrupo_id;
        $this->user_id= $model->user_id;


        $this->emit("showForm");
        $this->showForm = true;
    }

    public function closeForm()
    {
        // $this->showForm = false;

         $this->emit("articuloAdd");
    }

    public function store()
    {
        $this->validate();

        $model = new Model();

        $model->codigo= $this->codigo;
        $model->descrip= Str::upper($this->descrip);
        $model->alm_unidad_id= $this->alm_unidad_id;
        $model->marca= $this->marca;
        $model->existencia_min= $this->existencia_min;
        $model->clase= $this->clase;
        $model->alm_subgrupo_id= $this->alm_subgrupo_id;
        $model->user_id= auth()->user()->id;
        $model->save();

          $this->resetForm();
          $this->emit("articuloAdd");
          session()->flash('message', 'Registro Guardado Exitosamente');
        //   $this->showForm = false;

    }

    public function resetForm()
    {
        $this->codigo= "";
        $this->descrip= "";
        $this->alm_unidad_id= "";
        $this->marca= "";
        $this->existencia_min= "";
        $this->alm_subgrupo_id= "";
        $this->clase= "";
        


    }


    public function update()
    {
          $this->validate();

          $model = Model::find($this->primaryId);

            $model->codigo= $this->codigo;
            $model->descrip= $this->descrip;
            $model->alm_unidad_id= $this->alm_unidad_id;
            $model->marca= $this->marca;
            // $model->existencia_min= $this->existencia_min;
            $model->clase= $this->clase;
            $model->alm_subgrupo_id= $this->alm_subgrupo_id;            
            $model->save();

          $this->resetForm();
         $this->emit("hideForm");
         session()->flash('message', 'Registro Actualizado Exitosamente');
    }

    // public function confirmDelete($primaryId)
    // {
    //     $this->primaryId = $primaryId;
    //     $this->showConfirmDeletePopup = true;
    //     $this->emit('showConfirmDelete');
    // }

    public function hideConfirmationModal()
    {
        $this->emit('hideConfirmDelete');
    }

    // public function destroy()
    // {
    //     Model::find($this->primaryId)->delete();
    //     $this->showConfirmDeletePopup = false;
    //     $this->emit('hideConfirmDelete');
    //     session()->flash('message', 'Registro Eliminado Exitosamente');
    // }

    public function clearFlash()
    {
        session()->forget('message');
    }

    public function selectedArticulo($primaryId)
    {
        $this->primaryId = $primaryId;       
        $this->emit('ingreso', $this->primaryId);
    }

}
