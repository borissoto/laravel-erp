<?php

namespace App\Http\Livewire\Admin;

use App\Models\AdmRedes;
use Livewire\Component;
use Livewire\WithPagination;

class RedesIndex extends Component
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
        $redes = AdmRedes::whereRelation('departamento', 'nom_departamento', 'LIKE', '%' . $this->search . '%')
        ->orWhere('nom_red','LIKE', '%' . $this->search . '%')
        ->orWhere('cod_red','LIKE', '%' . $this->search . '%')
        ->orWhere('cod_municipio','LIKE', '%' . $this->search . '%')        
        ->paginate($this->perPage);

        return view('livewire.admin.redes-index', compact('redes'));
    }
}
