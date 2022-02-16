<?php

namespace App\Http\Livewire\Admin;

use App\Exports\UsersExport;
use App\Models\AdmDepartamento;
use App\Models\AdmEstablecimiento;
use App\Models\AdmMunicipio;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;
use Livewire\WithPagination;
use Illuminate\Support\Str;
use Maatwebsite\Excel\Facades\Excel;
use Symfony\Component\HttpFoundation\Response;
use Spatie\Permission\Models\Role;

class RrhhIndex extends Component
{

    public $name;
    public $email;    
    public $password;
    public $profile_photo_path;    
    public $adm_establecimiento_id;
    public $nombres;
    public $ap_paterno;
    public $ap_materno;
    public $ci;   
    public $adm_departamento_id;
    public $sexo;
    public $fecha_nac;
    public $telefono;
    public $domicilio;
    public $item;
    public $incorporacion;
    public $universidad;
    public $grado;
    public $docente;
    public $obs;
    public $estado;
    public $rol;
    public $roles;

    // public $departamentos;
    // public $municipios;
    // public $establecimientos;

    // public $selectedDepartamento;
    // public $selectedMunicipio;
    // public $selectedEstablecimiento;


    use WithPagination;

    protected $queryString = ['search' => ['except' => '']];

    public $search;
    public $perPage = '10';
    public $campo = null;
    public $order = null;
    public $icon = '-sort';

    public $cargocampo = null;
    // public $showModal = 'hidden';

    protected $paginationTheme = "bootstrap";

    // public function mount($selectedEstablecimiento = null)
    // {
    //     $this->departamentos = AdmDepartamento::all();
    //     $this->municipios = collect();
    //     $this->establecimientos = collect();
    //     $this->selectedEstablecimiento = $selectedEstablecimiento;

    //     if(!is_null($selectedEstablecimiento)){
    //         $establecimiento = AdmEstablecimiento::with('municipio.departamento')->find($selectedEstablecimiento);
    //         if($establecimiento){
    //             $this->establecimientos = AdmEstablecimiento::where('adm_municipio_id', $establecimiento->adm_municipio_id)->get();
    //             $this->municipios = AdmMunicipio::where('adm_departamento_id', $establecimiento->municipio->adm_departamento_id)->get();
    //             $this->selectedDepartamento = $establecimiento->municipio->adm_departamento_id;
    //             $this->selectedMunicipio = $establecimiento->adm_municipio_id;
    //         }
    //     }

    // }

    public function mount()
    {
        $this->roles = Role::all();
    }

    public function updatingSearch(){
        $this->resetPage();
    }

    public function render()
    {
        if(auth()->user()->establecimiento){
            $nivel = auth()->user()->establecimiento->municipio->departamento->id;
            $users = User::whereRelation('establecimiento.municipio.departamento', 'id', '=', $nivel);
        }


        $users = User::whereRelation('establecimiento', 'nom_establecimiento', 'LIKE', '%' . $this->search . '%')
        ->orWhereRelation('establecimiento.municipio', 'nom_municipio', 'LIKE', '%' . $this->search . '%')
        ->orWhereRelation('establecimiento.municipio.departamento', 'nom_departamento', 'LIKE', '%' . $this->search . '%')
        // ->orWhereRelation('establecimiento.municipio.departamento', 'id', '=', $nivel)
        ->orWhere('name', 'LIKE', '%' . $this->search . '%')
        ->orWhere('nombres','LIKE', '%' . $this->search . '%')
        ->orWhere('ap_paterno','LIKE', '%' . $this->search . '%')
        ->orWhere('ap_materno','LIKE', '%' . $this->search . '%')
        ->orWhere('ci','LIKE', '%' . $this->search . '%');

        

        if ($this->campo && $this->order) {
            $users = $users->orderBy($this->campo, $this->order);
        }

        if ($this->cargocampo && $this->order) {
            $users = $users->whereRelation('cargos', 'nom_cargo')->orderBy('nom_cargo', $this->order);
        }

        $users = $users->latest()->paginate($this->perPage);

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

    public function cargo($cargo)
    {      
        if($cargo !== $this->cargocampo){
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
        $this->cargocampo = $cargo;
    }


    // public function updatedSelectedDepartamento($departamento)
    // {
    //     $this->municipios = AdmMunicipio::where('adm_departamento_id', $departamento)->get();
    //     $this->selectedMunicipio = NULL;
    // }

    //  public function updatedSelectedMunicipio($value)
    // {
    //     $this->establecimientos = AdmEstablecimiento::where('adm_municipio_id', $value)->get();
    //     $this->establecimiento = $this->establecimientos->first()->id ?? null;
    // }

    //  public function updatedSelectedMunicipio($municipio)
    // {
    //     if(!is_null($municipio)){
    //         $this->establecimientos = AdmEstablecimiento::where('adm_municipio_id', $municipio)->get();
    //     }
        
    // }

    // public function showModal(User $user)    
    // {
    //     $this->emit('showModal', $user);
    //     // dd($user);
    // }

    public function resetInputFields()
    {
        $this->name = '';
        $this->email = '';
        $this->password = '';
        $this->nombres = '';
        $this->ap_paterno = '';
        $this->ap_materno = '';
        $this->ci = '';
        $this->sexo = '';
        $this->telefono = '';
        $this->domicilio = '';
        $this->item = '';
        $this->incorporacion = '';
        $this->universidad = '';
        $this->grado = '';
        $this->obs = '';
        $this->rol = '';
        

    }

    public function store()
    {
        // dd($this->lat.' '.$this->long);       
        
       $this->validate([           
            
            'name' => 'required|unique:users',
            'email' => 'required|unique:users,email',            
            'password' => 'required|min:6',                                    
            'nombres' => 'required',
            'ap_paterno' => 'required',
            // 'ap_materno' => 'required',
            'adm_departamento_id'=> 'required',
            'ci' => 'required|numeric|between:10000,12000000',                        
            'sexo' => 'required',
            // 'fecha_nac' => 'required',
            'telefono' => 'required',
            'domicilio' => 'required',
            'item' => 'required',
            // 'incorporacion' => 'required',
            'universidad' => 'required',
            'grado' => 'required',
            'rol' => 'required',
            // 'docente' => 'required',
            // 'obs' => 'required',
            // 'estado' => 'required',
        ]);

        $this->password = Hash::make($this->password); 
        $this->name = Str::upper($this->name);

        $user = User::create([           

            'name' => Str::upper($this->name),
            'email' => $this->email,            
            'password' => $this->password,                                    
            'adm_establecimiento_id' => 0,                                    
            'nombres' => Str::upper($this->nombres),
            'ap_paterno' => Str::upper($this->ap_paterno),
            'ap_materno' => Str::upper($this->ap_materno),
            'ci' => $this->ci, 
            'adm_departamento_id' => $this->adm_departamento_id,
            'sexo' => $this->sexo,
            'fecha_nac' => $this->fecha_nac,
            'telefono' => $this->telefono,
            'domicilio' => $this->domicilio,
            'item' => $this->item,
            'incorporacion' => $this->incorporacion,
            'universidad' => $this->universidad,
            'grado' => $this->grado,
            'docente' => $this->docente,
            'obs' => $this->obs,
            'estado' => 1,
            'nivel' => $this->rol,
        ]);

        $roles = Role::all();
        $rol_name = null;
        foreach ($roles as $rol) {
            if($rol->id == $this->rol){
                $rol_name = $rol->name;
            }
        }

        $user->assignRole($rol_name);

       

        // session()->flash('message', 'Usuario creado satisfactoriamente');
        $this->resetInputFields();
        $this->dispatchBrowserEvent('closeRrhhStore');

    }

    public function export($ext)
    {
        abort_if(!in_array($ext, ['csv', 'xlsx', 'pdf']), Response::HTTP_NOT_FOUND);
        
        return Excel::download(new UsersExport, 'usuarios_exportados.' . $ext);
    }
}
