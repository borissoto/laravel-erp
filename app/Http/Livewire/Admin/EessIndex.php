<?php

namespace App\Http\Livewire\Admin;

use App\Models\AdmEstablecimiento;
use Livewire\Component;
use Livewire\WithPagination;

class EessIndex extends Component
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

        $establecimientos = AdmEstablecimiento::where('nom_establecimiento', 'LIKE', '%' . $this->search . '%')
        ->orWhere('tipo','LIKE', '%' . $this->search . '%')
        ->orWhere('nivel','LIKE', '%' . $this->search . '%')
        ->orWhere('codsnis','LIKE', '%' . $this->search . '%');        

        if ($this->campo && $this->order) {
            $establecimientos = $establecimientos->orderBy($this->campo, $this->order);
        }
        
        $establecimientos = $establecimientos->paginate($this->perPage);

        return view('livewire.admin.eess-index', compact('establecimientos'));
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
