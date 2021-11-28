<?php

namespace App\Http\Livewire\Admin;

use App\Models\RrhhSupervisiones;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Livewire\WithPagination;

class KardexSupervision extends Component
{

    public $user;

    public $supervision_id;
    public $supervision_del_id;

       
    public $supervisor_id;
    public $fecha;
    public $puntaje;
    public $recomendacion;
    public $financiamiento;
    public $justificacion;
    public $obs;

    public $user_id;

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

    public function render()
    {

        $userid = $this->user->id;
        $supervisiones = RrhhSupervisiones::where('user_id', $userid );

        $supervisiones = $supervisiones->latest()->paginate($this->perPage); 

        return view('livewire.admin.kardex-supervision', compact('supervisiones'));
    }


    public function resetInputFields()
    {     
        // $this->fecha = '';
        // $this->puntaje = '';
        $this->recomendacion = '';
        $this->financiamiento = '';
        $this->justificacion = '';
        $this->obs = '';
    }

    public function newSupervision()
    {
        $this->resetInputFields();
    }

    public function storeSupervision()
    {
        // dd($this->lat.' '.$this->long);       
    
        $userid = $this->user->id;
        $this->supervisor_id = Auth::user()->id;

       $this->validate([      
           
        'fecha' => 'required',
        'puntaje' => 'required|numeric|between:1,100',
        // 'recomendacion' => 'required',
        // 'financiamiento' => 'required',
        // 'justificacion' => 'required',
        // 'obs' => 'required',
                
        ]);   

        RrhhSupervisiones::create([   

            'user_id' => $userid,
            'supervisor_id' => $this->supervisor_id,
            'fecha' => $this->fecha,
            'puntaje' => $this->puntaje,
            'recomendacion' => $this->recomendacion,
            'financiamiento' => $this->financiamiento,
            'justificacion' => $this->justificacion,
            'obs' => $this->obs,           
            
        ]);

        // session()->flash('message', 'Usuario creado satisfactoriamente');
        $this->resetInputFields();
        // $this->emit('storeCargo');
        $this->emit('closeKardexSupervisionCreate');

    }


    public function editSupervision($id)
    {
        $userid = $this->user->id;
        $this->supervisor_id = Auth::user()->id;        

        $this->updateMode = true;
        $supervision = RrhhSupervisiones::where('id',$id)->first(); 

        $this->supervision_id = $supervision->id;
        $this->user_id = $userid;     
        
        $this->fecha = Carbon::parse($supervision->fecha)->format('Y-m-d');
        $this->puntaje = $supervision->puntaje;
        $this->recomendacion = $supervision->recomendacion;
        $this->financiamiento = $supervision->financiamiento;
        $this->justificacion = $supervision->justificacion;
        $this->obs = $supervision->obs;        

    }

    
    public function updateSupervision()
    {
        $this->validate([
                      
            // 'user_id' => 'required',
            // 'supervisor_id' => 'required',
            'fecha' => 'required',
            // 'puntaje' => 'required',
            // 'recomendacion' => 'required',
            // 'financiamiento' => 'required',
            // 'justificacion' => 'required',
            // 'obs' => 'required',          
                       
        ]);

        if ($this->supervision_id) {
            $supervision = RrhhSupervisiones::find($this->supervision_id);
            $supervision->update([                               
                                
                'fecha' => $this->fecha,
                'puntaje' => $this->puntaje,
                'recomendacion' => $this->recomendacion,
                'financiamiento' => $this->financiamiento,
                'justificacion' => $this->justificacion,
                'obs' => $this->obs,
                
            ]);
            $this->updateMode = false;
            // session()->flash('message', 'Users Updated Successfully.');
            $this->resetInputFields();
            // $this->emit('update');
            $this->emit('closeKardexSupervisionUpdate');

        }
    }

    public function deleteSupervision($id)
    {
        if($id){
           $this->supervision_del_id = $id;
            // session()->flash('message', 'Users Deleted Successfully.');
        }
    }

    public function deleteConfirmSupervision()
    {
        RrhhSupervisiones::find($this->supervision_del_id)->delete();
    }


}
