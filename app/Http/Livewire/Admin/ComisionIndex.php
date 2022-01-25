<?php

namespace App\Http\Livewire\Admin;

use App\Models\RrhhComisiones as Model;
use App\Models\RrhhComisionUser;
use App\Models\User;
use Carbon\Carbon;
use Livewire\Component;
use Livewire\WithPagination;
use Illuminate\Support\Str;
use Barryvdh\DomPDF\Facade as PDF;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\View;

class ComisionIndex extends Component
{

    public $showComponents = false;
    public $flag = 0;

    public $comision_id;
    public $comision_del_id;

    public $cite;
    public $adm_departamento_id;
    public $nota_interna;
    public $descripcion;
    public $lugar;
    public $fecha_ini;
    public $fecha_fin;
    public $user_id;
    
    public $tipo_comision;
    public $viaticos;
    public $mode = 'create';

    public $showForm = false;

    public $primaryId = null;
    
    public $updateMode = false;

    use WithPagination;

    protected $queryString = ['search' => ['except' => '']];

    public $search;
    public $perPage = '10';

    protected $paginationTheme = "bootstrap";

    public $showConfirmDeletePopup = false;

    protected $rules = [
     
        'cite' => 'required',
        'adm_departamento_id' => 'required',
        'nota_interna' => 'required',
        'descripcion' => 'required',
        'lugar' => 'required',
        'fecha_ini' => 'required',
        'fecha_fin' => 'required',

    ];

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function updatingSearch(){
        $this->resetPage();
    }

    public function render()
    {
        
        $comisiones = Model::where('descripcion','LIKE', '%' . $this->search . '%')        
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

    public function resetForm()
    {
        $this->tipo_comision = '';
        $this->descripcion = '';
        $this->viaticos = '';
        $this->lugar = '';

    }

    public function newComision()
    {
        $this->resetInputFields();
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

    public function store()
    {
        
       // $this->supervisor_id = Auth::user()->id;

       $this->validate([      

        // 'tipo_comision' => 'required',
        'descripcion' => 'required',
        // 'viaticos' => 'required',
        'lugar' => 'required',
        'fecha_ini' => 'required',
        'fecha_fin' => 'required',
                
        ]);   
        $model = new Model();

        // RrhhComisiones::create([   

        //     'user_id' => auth()->user()->id,
            
        //     'cite' => $this->cite,
        //     'adm_departamento_id' => $this->adm_departamento_id,
        //     'nota_interna' => $this->nota_interna,
        //     'descripcion' => $this->descripcion,
        //     'lugar' => $this->lugar,
        //     'fecha_ini' => $this->fecha_ini,
        //     'fecha_fin' => $this->fecha_fin,                    
            
        // ]);

        $model->cite= $this->cite;
        $model->adm_departamento_id= $this->adm_departamento_id;
        $model->nota_interna= $this->nota_interna;
        $model->descripcion= $this->descripcion;
        $model->lugar= $this->lugar;
        $model->fecha_ini= $this->fecha_ini;
        $model->fecha_fin= $this->fecha_fin;
      
        
        $model->user_id= auth()->user()->id;
        $model->save();
        $comisionId = $model->id;

        // session()->flash('message', 'Usuario creado satisfactoriamente');
        $this->resetInputFields();
        // $this->emit('storeCargo');
        // $this->emit('closeComisionCreate');
        $this->emit('comisionId', $comisionId);
        $this->showComponents = true;
        $this->flag = 1;

    }

    
    public function edit($primaryId)
    {
        // $this->updateMode = true;
        // $comision = RrhhComisiones::where('id',$id)->first();   
        
        $this->showComponents = false;
        $this->flag = 0;
        $this->mode = 'update';
        $this->primaryId = $primaryId;

        $model = Model::find($primaryId);
        $this->cite = $model->cite;
        $this->adm_departamento_id = $model->adm_departamento_id;
        $this->nota_interna = $model->nota_interna;
        $this->descripcion = Str::upper($model->descripcion);
        $this->lugar = Str::upper($model->lugar);
        $this->fecha_ini = Carbon::parse($model->fecha_ini)->format('Y-m-d');
        $this->fecha_fin = Carbon::parse($model->fecha_fin)->format('Y-m-d');            
        
        
        $this->emit("showForm");
        $this->showForm = true;    
    }

    public function closeForm()
    {
        $this->showForm = false;

        $this->emit("hideForm");
    }

    public function update()
    {
        $this->validate([

            
            'descripcion' => 'required',            
            'lugar' => 'required',
            'fecha_ini' => 'required',
            'fecha_fin' => 'required',
            
        ]);

        // if ($this->comision_id) {
        //     $comision = RrhhComisiones::find($this->comision_id);
        //     $comision->update([                                             

        //         'tipo_comision' => $this->tipo_comision,
        //         'descripcion' => $this->descripcion,
        //         'viaticos' => $this->viaticos,
        //         'lugar' => $this->lugar,
        //         'fecha_ini' => $this->fecha_ini,
        //         'fecha_fin' => $this->fecha_fin,    
                
        //     ]);
        //     $this->updateMode = false;
        //     // session()->flash('message', 'Users Updated Successfully.');
        //     $this->resetInputFields();
        //     // $this->emit('update');
        //     $this->emit('closeComisionUpdate');

        // }
        $model = Model::find($this->primaryId);

        $model->cite= $this->cite;
        $model->adm_departamento_id= $this->adm_departamento_id;
        $model->nota_interna= $this->nota_interna;
        $model->descripcion= Str::upper($this->descripcion);
        $model->lugar= Str::upper($this->lugar);
        $model->fecha_ini= $this->fecha_ini;
        $model->fecha_fin= $this->fecha_fin;      
               
        $model->save();
        $comisionId = $model->id;

        // session()->flash('message', 'Usuario creado satisfactoriamente');
        // $this->resetInputFields();
        // $this->emit('storeCargo');
        // $this->emit('closeComisionCreate');
        $this->emit('comisionId', $comisionId);
        $this->showComponents = true;
        $this->flag = 1;
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
        Model::find($this->comision_del_id)->delete();
    }



    public function sendPrint($primaryId)
    {

        $model = Model::find($primaryId);
        $users = RrhhComisionUser::where('rrhh_comisiones_id', '=', $primaryId )->get();
        
        $var = [             
            'com' => $model,
            'users' => $users,
        ];

        // $layout = View::make('livewire.reportes.anuencia', array('com'=>$model, 'users'=>$users)); 
        
        // $pdf = App::make('dompdf.wrapper');
        // $pdf->loadHTML($layout->render());
        // return $pdf->stream();
        // return $pdf->download('anunecia.pdf');
        return response()->streamDownload(
            function () use($var) { 
                // $pdf = PDF::loadView('livewire.reportes.anuencia', array('com'=>$model, 'users'=>$users))->output();
                // $pdf = App::make('dompdf.wrapper');
                $pdf = PDF::loadView('livewire.reportes.reporte_anuencia', compact('var'));
                echo $pdf->stream();
            }, "anuencia.pdf"
        );
    }

}
