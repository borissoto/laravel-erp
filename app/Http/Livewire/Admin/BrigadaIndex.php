<?php

namespace App\Http\Livewire\Admin;

use App\Models\RrhhBrigada;
use Livewire\Component;

use Livewire\WithPagination;

class BrigadaIndex extends Component
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
        $brigadas = RrhhBrigada::whereRelation('municipio', 'nom_municipio', 'LIKE', '%' . $this->search . '%')
        ->orWhereRelation('usuario', 'name', 'LIKE', '%' . $this->search . '%')
        ->orWhere('nom_brigada','LIKE', '%' . $this->search . '%')
        ->orWhere('tipo','LIKE', '%' . $this->search . '%')
        ->paginate($this->perPage);


        return view('livewire.admin.brigada-index', compact('brigadas'));
    }
}
