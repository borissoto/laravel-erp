<?php

namespace App\Http\Livewire\Admin;

use App\Models\RrhhComisiones;
use Carbon\Carbon;
use Livewire\Component;
use Livewire\WithPagination;

class ComisionIndex extends Component
{

    public $comision_id;
    public $comision_del_id;

    public $tipo_comision;
    public $descripcion;
    public $viaticos;
    public $lugar;
    public $fecha_ini;
    public $fecha_fin;

    public $updateMode = false;

    use WithPagination;

    protected $queryString = ['search' => ['except' => '']];

    public $search;
    public $perPage = '10';

    protected $paginationTheme = "bootstrap";

    public function updatingSearch(){
        $this->resetPage();
    }

    public function render()
    {
        
        $comisiones = RrhhComisiones::where('descripcion','LIKE', '%' . $this->search . '%')        
        ->latest()->paginate($this->perPage);

        return view('livewire.admin.comision-index', compact('comisiones'));
    }

    public function resetInputFields()
    {     
        
        $this->tipo_comision = '';
        $this->descripcion = '';
        $this->viaticos = '';
        $this->lugar = '';
        // $this->fecha_ini = '';
        // $this->fecha_fin = '';
                
    }

    public function newComision()
    {
        $this->resetInputFields();
    }

    public function storeComision()
    {
        
       // $this->supervisor_id = Auth::user()->id;

       $this->validate([      

        'tipo_comision' => 'required',
        'descripcion' => 'required',
        'viaticos' => 'required',
        'lugar' => 'required',
        'fecha_ini' => 'required',
        'fecha_fin' => 'required',
                
        ]);   

        RrhhComisiones::create([   

            'user_id' => auth()->user()->id,
            
            'tipo_comision' => $this->tipo_comision,
            'descripcion' => $this->descripcion,
            'viaticos' => $this->viaticos,
            'lugar' => $this->lugar,
            'fecha_ini' => $this->fecha_ini,
            'fecha_fin' => $this->fecha_fin,                    
            
        ]);

        // session()->flash('message', 'Usuario creado satisfactoriamente');
        $this->resetInputFields();
        // $this->emit('storeCargo');
        $this->emit('closeComisionCreate');

    }

    
    public function editComision($id)
    {
        $this->updateMode = true;
        $comision = RrhhComisiones::where('id',$id)->first();   
        
        $this->comision_id = $comision->id;

        $this->tipo_comision = $comision->tipo_comision;
        $this->descripcion = $comision->descripcion;
        $this->viaticos = $comision->viaticos;
        $this->lugar = $comision->lugar;
        $this->fecha_ini = Carbon::parse($comision->fecha_ini)->format('Y-m-d');
        $this->fecha_fin = Carbon::parse($comision->fecha_fin)->format('Y-m-d');            
        
    }

    public function updateComision()
    {
        $this->validate([

            'tipo_comision' => 'required',
            'descripcion' => 'required',
            'viaticos' => 'required',
            'lugar' => 'required',
            'fecha_ini' => 'required',
            'fecha_fin' => 'required',
            
        ]);

        if ($this->comision_id) {
            $comision = RrhhComisiones::find($this->comision_id);
            $comision->update([                                             

                'tipo_comision' => $this->tipo_comision,
                'descripcion' => $this->descripcion,
                'viaticos' => $this->viaticos,
                'lugar' => $this->lugar,
                'fecha_ini' => $this->fecha_ini,
                'fecha_fin' => $this->fecha_fin,    
                
            ]);
            $this->updateMode = false;
            // session()->flash('message', 'Users Updated Successfully.');
            $this->resetInputFields();
            // $this->emit('update');
            $this->emit('closeComisionUpdate');

        }
    }

    public function deleteComision($id)
    {
        if($id){
           $this->comision_del_id = $id;
            // session()->flash('message', 'Users Deleted Successfully.');
        }
    }

    public function deleteConfirmComision()
    {
        RrhhComisiones::find($this->comision_del_id)->delete();
    }




}
