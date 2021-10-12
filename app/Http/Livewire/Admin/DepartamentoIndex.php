<?php

namespace App\Http\Livewire\Admin;

use App\Models\AdmDepartamento;
use Livewire\Component;
use Livewire\WithPagination;

class DepartamentoIndex extends Component
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

        $departamentos = AdmDepartamento::where('nom_departamento','LIKE', '%' . $this->search . '%')
        ->orWhere('abreviatura','LIKE', '%' . $this->search . '%')
        ->paginate($this->perPage);

        return view('livewire.admin.departamento-index', compact('departamentos'));
    }
}
