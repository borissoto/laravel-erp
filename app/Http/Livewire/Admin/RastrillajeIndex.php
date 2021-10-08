<?php

namespace App\Http\Livewire\Admin;

use App\Models\RrhhRastrillaje;
use Livewire\Component;
use Livewire\WithPagination;

class RastrillajeIndex extends Component
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
      
        $rastrillajes = RrhhRastrillaje::where('atendidos','LIKE', '%' . $this->search . '%')      
        ->orWhere('sospechosos','LIKE', '%' . $this->search . '%')
        ->orWhere('confirmados','LIKE', '%' . $this->search . '%')
        ->paginate($this->perPage);



        return view('livewire.admin.rastrillaje-index', compact('rastrillajes'));
    }
}
