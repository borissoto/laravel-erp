<?php

namespace App\Http\Livewire\Admin;

use App\Models\RrhhBaja;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Livewire\WithPagination;

class KardexBaja extends Component
{

    public $user;

    public $baja_id;
    public $baja_del_id;

        
    public $tipo;
    public $causa_probable;
    public $factor_riesgo;
    public $obs;
    public $fecha_ini;
    public $fecha_fin;

    public $user_id;
    public $user_estado;

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
        // $this->user=$user;
        // Ya no se usa typed properties como User $user
        $this->user = User::find($user->id);
    }

    protected $listeners = ['updateEstado' => 'render'];

    public function render()
    {

        $userid = $this->user->id;
        $bajas = RrhhBaja::where('user_id', $userid );

        $bajas = $bajas->latest()->paginate($this->perPage); 

        return view('livewire.admin.kardex-baja', compact('bajas'));
    }

    public function resetInputFields()
    {     
        $this->tipo = '';
        $this->causa_probable = '';
        $this->factor_riesgo = '';
        $this->obs = '';
                
    }

    public function newBaja()
    {
        $this->resetInputFields();
    }

    public function storeBaja()
    {
       
    
        $userid = $this->user->id;
        // $this->supervisor_id = Auth::user()->id;

       $this->validate([      
       
        'tipo' => 'required',
        'causa_probable' => 'required',
        // 'factor_riesgo' => 'required',
        // 'obs' => 'required',
        'fecha_ini' => 'required',
        'fecha_fin' => 'required',
                
        ]);   

        RrhhBaja::create([   

            'user_id' => $userid,
            
            'tipo' => $this->tipo,
            'causa_probable' => $this->causa_probable,
            'factor_riesgo' => $this->factor_riesgo,
            'obs' => $this->obs,
            'fecha_ini' => $this->fecha_ini,
            'fecha_fin' => $this->fecha_fin,                    
            
        ]);

        // session()->flash('message', 'Usuario creado satisfactoriamente');
        $this->resetInputFields();
        // $this->emit('storeCargo');
        $this->emit('closeKardexBajaCreate');

    }


    public function editBaja($id)
    {
        $userid = $this->user->id;
        $this->updateMode = true;

        $baja = RrhhBaja::where('id',$id)->first(); 

        $this->baja_id = $baja->id;
        $this->user_id = $userid;     
        
        $this->tipo = $baja->tipo;
        $this->causa_probable = $baja->causa_probable;
        $this->factor_riesgo = $baja->factor_riesgo;
        $this->obs = $baja->obs;
        $this->fecha_ini = Carbon::parse($baja->fecha_ini)->format('Y-m-d');
        $this->fecha_fin = Carbon::parse($baja->fecha_fin)->format('Y-m-d');             

    }

    
    public function updateBaja()
    {
        $this->validate([
           
                      
            // 'user_id' => 'required',
            'tipo' => 'required',
            'causa_probable' => 'required',
            // 'factor_riesgo' => 'required',
            // 'obs' => 'required',
            'fecha_ini' => 'required',
            'fecha_fin' => 'required',
            
         
                       
        ]);

        if ($this->baja_id) {
            $baja = RrhhBaja::find($this->baja_id);
            $baja->update([                                             
              
                'tipo' => $this->tipo,
                'causa_probable' => $this->causa_probable,
                'factor_riesgo' => $this->factor_riesgo,
                'obs' => $this->obs,
                'fecha_ini' => $this->fecha_ini,
                'fecha_fin' => $this->fecha_fin,       
                
            ]);
            $this->updateMode = false;
            // session()->flash('message', 'Users Updated Successfully.');
            $this->resetInputFields();
            // $this->emit('update');
            $this->emit('closeKardexBajaUpdate');

        }
    }

    public function deleteBaja($id)
    {
        if($id){
           $this->baja_del_id = $id;
            // session()->flash('message', 'Users Deleted Successfully.');
        }
    }

    public function deleteConfirmBaja()
    {
        RrhhBaja::find($this->baja_del_id)->delete();
    }


    public function editEstado()
    {
        $this->user_estado = $this->user->estado;       
            
    }
    
    public function updateEstadoBaja()
    {

        $user = User::find($this->user->id);
        if($user){
            $user->update([
                'estado' => $this->user_estado,            
            ]);

            $this->emit('updateEstado');
    
            $this->emit('closeKardexBajaEstadoUpdate');

        }

    }




}
