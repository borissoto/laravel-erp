<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\RrhhComisionUser as Model;
use App\Models\User;

class ComisionuserIndex extends Component
{

    protected $listeners = [ 'comisionUser' => 'createComision', 'comisionId' => 'getComisionId' ];
    public $comisionId;

    use WithPagination;
    protected $paginationTheme = "bootstrap";


    public $paginate = 10;

    public $user_id;
   public $rrhh_comisiones_id;
   public $userId;


    public $mode = 'create';

    public $showForm = false;

    public $primaryId = null;
    public $deleteId = null;

    public $search;

    public $showConfirmDeletePopup = false;

    protected $rules = [
        'user_id' => 'number',
        // 'rrhh_comisiones_id' => 'required',

];

public function getComisionId($comId){
    // $comprobante = AlmComprobante::find($compId);
    // dd($compId);
    
    $this->comisionId = $comId;
}

public function createComision($userId)
{

    $user = User::find($userId);
    $this->userId = $user->id;
    // $this->articuloDesc = $user->descrip;

    $this->mode = 'create';
    $this->resetForm();
    // $this->showForm = true;

    $this->emit("showComisionUser");
    // $this->emit("showForm");
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
        $model = Model::where('user_id', 'like', '%'.$this->search.'%');
        $model = Model::where('rrhh_comisiones_id', '=', $this->comisionId)->latest()->paginate($this->paginate);
        return view('livewire.admin.comisionuser-index', [
            'rows'=> $model
        ]);
    }


    // public function create ()
    // {
    //     $this->mode = 'create';
    //     $this->resetForm();
    //     $this->showForm = true;

    //     $this->emit("showForm");
    // }


    public function edit($primaryId)
    {
        $this->mode = 'update';
        $this->primaryId = $primaryId;
        $model = Model::find($primaryId);

        $this->user_id= $model->user_id;
$this->rrhh_comisiones_id= $model->rrhh_comisiones_id;


        $this->emit("showForm");
        $this->showForm = true;
    }

    public function closeForm()
    {
        $this->showForm = false;

        // $this->emit("hideForm");
        $this->emit("hideComisionUser");
    }

    public function store()
    {
          $this->validate();

          $model = new Model();

             $model->user_id= $this->userId;
             $model->rrhh_comisiones_id= $this->comisionId;
             $model->save();

          $this->resetForm();
          $this->emit("hideComisionUser");
          session()->flash('message', 'Registro Guardado Exitosamente');
        //   $this->showForm = false;

    }

    public function resetForm()
    {
        $this->user_id= "";
        $this->rrhh_comisiones_id= "";

    }


    public function update()
    {
        $this->validate();

        $model = Model::find($this->primaryId);

        $model->user_id= $this->user_id;
        $model->rrhh_comisiones_id= $this->comisionId;
        $model->save();

        $this->resetForm();
        $this->emit("hideComisionUser");
        session()->flash('message', 'Registro Actualizado Exitosamente');
    }

    public function confirmDeleteComisionUser($deleteId)
    {
        // dd($primaryId);
        $this->deleteId = $deleteId;
        // dd($this->primaryId);
        $this->showConfirmDeletePopup = true;
        $this->emit('showDeleteComisionUser');
    }

    public function hideConfirmationModal()
    {
        $this->emit('hideDeleteComisionUser');
    }

    public function destroyComisionuser()
    {
        // dd($this->delteId);
        Model::find($this->deleteId)->delete();
        $this->showConfirmDeletePopup = false;
        $this->emit('hideDeleteComisionUser');
        session()->flash('message', 'Registro Eliminado Exitosamente');
    }
    
    public function closeDeleteForm()
    {
        $this->showForm = false;

        // $this->emit("hideForm");
        $this->emit("hideDeleteComisionUser");
    }

    public function clearFlash()
    {
        session()->forget('message');
    }

}
