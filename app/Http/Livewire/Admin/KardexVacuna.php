<?php

namespace App\Http\Livewire\Admin;

use App\Models\RrhhCovidUsuario;
use App\Models\User;
use Carbon\Carbon;
use Livewire\Component;
use Livewire\WithPagination;

class KardexVacuna extends Component
{

    public User $user;

    public $covidu_id;
    public $covidu_del_id;

    public $dosis;
    public $nom_vacuna;    
    public $fecha;
    
       
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
            $this->user=$user;
    }

    public function render()
    {

        $userid = $this->user->id;
        $vacunas = RrhhCovidUsuario::where('user_id', $userid );

        $vacunas = $vacunas->latest()->paginate($this->perPage); 

        return view('livewire.admin.kardex-vacuna', compact('vacunas'));
    }


    public function resetInputFields()
    {     
        $this->dosis = '';
        $this->nom_vacuna = '';    
        // $this->fecha = '';
                
    }

    public function newCovidU()
    {
        $this->resetInputFields();
    }

    public function storeCovidU()
    {
       
    
        $userid = $this->user->id;
        // $this->supervisor_id = Auth::user()->id;

       $this->validate([      
            'dosis' => 'required',
            'nom_vacuna' => 'required',    
            'fecha' => 'required',
                        
        ]);   

        RrhhCovidUsuario::create([   

            'user_id' => $userid,
            
            'dosis' => $this-> dosis,
            'nom_vacuna' => $this->nom_vacuna,    
            'fecha' => $this->fecha,
                            
            
        ]);

        // session()->flash('message', 'Usuario creado satisfactoriamente');
        $this->resetInputFields();
        // $this->emit('storeCargo');
        $this->emit('closeKardexCovidUCreate');

    }

    public function editCovidU($id)
    {
        $userid = $this->user->id;
        $this->updateMode = true;

        $covidu = RrhhCovidUsuario::where('id',$id)->first(); 

        $this->covidu_id = $covidu->id;
        $this->user_id = $userid;     
        
        $this->dosis = $covidu->dosis;
        $this->nom_vacuna = $covidu->nom_vacuna;        
        $this->fecha = Carbon::parse($covidu->fecha)->format('Y-m-d');
        

    }

    
    public function updateCovidU()
    {
        $this->validate([
                                 
            'dosis' => 'required',
            'nom_vacuna' => 'required',    
            'fecha' => 'required',                    
                       
        ]);

        if ($this->covidu_id) {
            $covidu = RrhhCovidUsuario::find($this->covidu_id);
            $covidu->update([                                             
              
                'dosis' => $this->dosis,
                'nom_vacuna' => $this->nom_vacuna,    
                'fecha' => $this->fecha,  
                
            ]);
            $this->updateMode = false;
            // session()->flash('message', 'Users Updated Successfully.');
            $this->resetInputFields();
            // $this->emit('update');
            $this->emit('closeKardexCovidUUpdate');

        }
    }

    public function deleteCovidU($id)
    {
        if($id){
           $this->covidu_del_id = $id;
            // session()->flash('message', 'Users Deleted Successfully.');
        }
    }

    public function deleteConfirmCovidU()
    {
        RrhhCovidUsuario::find($this->covidu_del_id)->delete();
    }

}
