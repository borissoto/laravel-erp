<?php

namespace App\Http\Livewire\Admin;

use App\Models\RrhhAntigeno;
use Livewire\Component;

use Livewire\WithPagination;

class AntigenoIndex extends Component
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

        $antigenos = RrhhAntigeno::whereRelation('municipio', 'nom_municipio', 'LIKE', '%' . $this->search . '%')        
        ->orWhere('prueba','LIKE', '%' . $this->search . '%')
        ->orWhere('tipo','LIKE', '%' . $this->search . '%')
        ->paginate($this->perPage);

        return view('livewire.admin.antigeno-index', compact('antigenos'));
    }
}
