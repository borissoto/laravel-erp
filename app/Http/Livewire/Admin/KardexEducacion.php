<?php

namespace App\Http\Livewire\Admin;

use App\Models\RrhhPostgrado;
use App\Models\User;
use Illuminate\Support\Carbon;
use Livewire\Component;
use Livewire\WithPagination;

class KardexEducacion extends Component
{
    public User $user;

    public $postgrado_id;
    public $postgrado_del_id;

    public $user_id;
    public $tipo_postgrado;
    public $nom_postgrado;
    public $universidad;
    public $fecha_ini;
    public $fecha_fin;


    public $updateMode = false;

    use WithPagination;

    protected $queryString = ['search' => ['except' => '']];

    public $search;
    public $perPage = '5';
    public $campo = null;
    public $order = null;
    public $icon = '-sort';

    protected $paginationTheme = "bootstrap";

    public function updatingSearch(){
        $this->resetPage();
    } 
 
    public function mount($user)
    {
            $this->user=$user;
    }

    public function render()
    {
        $userid = $this->user->id;
        $postgrados = RrhhPostgrado::where('user_id', $userid );
        $postgrados = $postgrados->latest()->paginate($this->perPage);  

        return view('livewire.admin.kardex-educacion', compact('postgrados'));
    }
    
    public function resetInputFields()
    {
        $this->tipo_postgrado = '';
        $this->nom_postgrado = '';
        $this->universidad = '';
        // $this->fecha_ini = '';
        // $this->fecha_fin = '';
        
    }

    public function newEducacion()
    {
        $this->resetInputFields();
    }

    public function storeEducacion()
    {
        // dd($this->lat.' '.$this->long);       
    
        $userid = $this->user->id;

       $this->validate([      
           
        'tipo_postgrado' => 'required',
        'nom_postgrado' => 'required|max:220',
        'universidad' => 'required',        
        'fecha_fin' => 'required',               
                
        ]);   

        RrhhPostgrado::create([   
            'user_id' => $userid,
            'tipo_postgrado' => $this->tipo_postgrado,
            'nom_postgrado' => $this->nom_postgrado,
            'universidad' => $this->universidad,
            'fecha_ini' => $this->fecha_ini, 
            'fecha_fin' => $this->fecha_fin, 
            
        ]);

        // session()->flash('message', 'Usuario creado satisfactoriamente');
        $this->resetInputFields();
        // $this->emit('storeCargo');
        $this->emit('closeKardexEducacionCreate');

    }

    public function editEducacion($id)
    {
        $userid = $this->user->id;

        $this->updateMode = true;
        $postgrado = RrhhPostgrado::where('id',$id)->first(); 
        $this->postgrado_id = $postgrado->id;
        $this->user_id = $userid;
        
        $this->tipo_postgrado = $postgrado->tipo_postgrado;
        $this->nom_postgrado = $postgrado->nom_postgrado;
        $this->universidad = $postgrado->universidad;
        if($postgrado->fecha_ini){
            $this->fecha_ini = Carbon::parse($postgrado->fecha_ini)->format('Y-m-d');
        }else{
            $this->fecha_ini = $postgrado->fecha_ini;
        }
        $this->fecha_fin = Carbon::parse($postgrado->fecha_fin)->format('Y-m-d');

    }


    public function updateEducacion()
    {
        $this->validate([
                      
            'tipo_postgrado' => 'required',
            'nom_postgrado' => 'required|max:220',
            'universidad' => 'required',        
            'fecha_fin' => 'required',       
                       
        ]);

        if ($this->postgrado_id) {
            $postgrado = RrhhPostgrado::find($this->postgrado_id);
            $postgrado->update([                               
                                
                'tipo_postgrado' => $this->tipo_postgrado,
                'nom_postgrado' => $this->nom_postgrado,
                'universidad' => $this->universidad,
                'fecha_ini' => $this->fecha_ini, 
                'fecha_fin' => $this->fecha_fin, 
                
            ]);
            $this->updateMode = false;
            // session()->flash('message', 'Users Updated Successfully.');
            $this->resetInputFields();
            // $this->emit('update');
            $this->emit('closeKardexEducacionUpdate');

        }
    }

    public function deleteEducacion($id)
    {
        if($id){
           $this->postgrado_del_id = $id;
            // session()->flash('message', 'Users Deleted Successfully.');
        }
    }

    public function deleteConfirmEducacion()
    {
        RrhhPostgrado::find($this->postgrado_del_id)->delete();
    }



}