<?php

namespace App\Http\Livewire\Admin;

use App\Models\RrhhVacuna;
use Livewire\Component;
use Livewire\WithPagination;

class VacunaIndex extends Component
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
        $vacunas = RrhhVacuna::where('marca','LIKE', '%' . $this->search . '%')      
        ->orWhere('dosis1','LIKE', '%' . $this->search . '%')
        ->orWhere('dosis2','LIKE', '%' . $this->search . '%')
        ->paginate($this->perPage);

        return view('livewire.admin.vacuna-index', compact('vacunas'));
    }
}
