<?php

namespace App\Http\Livewire\Admin;

use App\Models\User;
use Livewire\Component;

use Livewire\WithPagination;

class RolesIndex extends Component
{

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

        $users = User::where('name','LIKE', "%{$this->search}%")
                        ->orWhere('nombres','LIKE', '%' . $this->search . '%')
                        ->orWhere('ap_paterno','LIKE', '%' . $this->search . '%')
                        ->orWhere('ap_materno','LIKE', '%' . $this->search . '%')
                        ->orWhere('ci','LIKE', '%' . $this->search . '%')
                        ->paginate($this->perPage);
        return view('livewire.admin.roles-index', compact('users'));
    }
}
 