<?php

namespace App\Http\Livewire\Admin;

use App\Models\User;
use Livewire\Component;
use Livewire\WithPagination;

class RrhhIndex extends Component
{

    use WithPagination;

    protected $queryString = ['search' => ['except' => '']];

    public $search;
    public $perPage = '10';
    public $campo = null;
    public $order = null;
    public $icon = '-sort';

    protected $paginationTheme = "bootstrap";

    public function updatingSearch(){
        $this->resetPage();
    }

    public function render()
    {

        $users = User::where('name', 'LIKE', '%' . $this->search . '%')
        ->orWhere('nombres','LIKE', '%' . $this->search . '%')
        ->orWhere('ap_paterno','LIKE', '%' . $this->search . '%')
        ->orWhere('ap_materno','LIKE', '%' . $this->search . '%')
        ->orWhere('ci','LIKE', '%' . $this->search . '%');

        if ($this->campo && $this->order) {
            $users = $users->orderBy($this->campo, $this->order);
        }
        $users = $users->paginate($this->perPage);

        return view('livewire.admin.rrhh-index', compact('users'));
    }

    public function sorteable($campo)
    {      
        if($campo !== $this->campo){
            $this->order = null;
        }
        switch($this->order){
            case null:
                $this->order ='asc';
                $this->icon = '-sort-up';
                break;
            case 'asc':
                $this->order = 'desc';
                $this->icon = '-sort-down';
                break;
            case 'desc':
                $this->order = null;
                $this->icon = '-sort';
                break;
        }
        $this->campo = $campo;
    }
}
