<div>
    
    @include('livewire.modals.rrhh.create')
    @include('livewire.modals.rrhh.update')
    @if (session()->has('message'))
        <div class="alert alert-success" style="margin-top:30px;">x
          {{ session('message') }}
        </div>
    @endif
    <!-- Main content -->
    <section class="content">
    <div class="container-fluid">
        <div class="row">                 
        <div class="col-12">
            <div class="card">
                <div class="card-header bg-light">
                    <h3 class="card-title"></h3> 
                    {{-- <input wire:model="search" type="form-control" placeholder="Buscar..." > --}}
                    <div class="d-inline-flex ">
                        <select wire:model="perPage" class="form-control-sm text-secondary border-1"> 
                            <option value="5">5 por página</option>
                            <option value="10">10 por página</option>
                            <option value="15">15 por página</option>
                            <option value="25">25 por página</option>
                            <option value="50">50 por página</option>
                            <option value="100">100 por página</option>
                        </select>
                    </div>
                    <button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#rrhhCreate">
                        Nuevo
                      </button>
    
                    <div class="card-tools">
                        <div class="input-group input-group-sm " style="width: 150px;">
                          <input wire:model="search" class="form-control float-right" placeholder="Buscar...">  
                          <div class="input-group-append">
                            <button class="btn btn-default disabled">
                              <i class="fas fa-search"></i>
                            </button>
                          </div>
                        </div>
    
                       
                      </div>
                    
                </div>
                @if($users->count())
                <!-- card-header -->
                <div class="card-body pb-1">
                    {{-- <div class="table-responsive"> --}}
                        <table id="example1" class="table table-sm table-bordered table-striped text-sm shadow">
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>Estado</th>
                                <th>Usuario
                                    <button wire:click="sorteable('name')" class="border-0">
                                        <span class="fa fa{{$campo === 'name' ? $icon : '-sort'}}"></span>                                         
                                    </button>
                                </th>
                                <th>Nombres
                                    <button wire:click="sorteable('nombres')" class="border-0">
                                        <span class="fa fa{{$campo === 'nombres' ? $icon : '-sort'}}"></span>                                         
                                    </button>
                                </th>
                                <th>Ap Paterno
                                    <button wire:click="sorteable('ap_paterno')" class="border-0">
                                        <span class="fa fa{{$campo === 'ap_paterno' ? $icon : '-sort'}}"></span>                                         
                                    </button>
                                </th>
                                <th>Ap Materno
                                    <button wire:click="sorteable('ap_materno')" class="border-0">
                                        <span class="fa fa{{$campo === 'ap_materno' ? $icon : '-sort'}}"></span>                                         
                                    </button>
                                </th>
                                <th>CI</th>
                                <th>Cargo</th>
                                <th>Telefono</th>
                                <th>Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($users as $user) 
                            <tr>
                                <td class="align-middle">{{ $user->id}}</td>
                                <td class="align-middle">{!! $user->estado === 1 ? '<span class="badge bg-success">ACTIVO</span>' : ($user->estado === 2 ?  '<span class="badge bg-warning">BAJA</span>' : '<span class="badge bg-danger">INACTIVO</span>') !!}</td>
                                <td class="align-middle">{{ $user->name}}</td>
                                <td class="align-middle">{{ $user->nombres}}</td>
                                <td class="align-middle">{{ $user->ap_paterno}}</td>
                                <td class="align-middle">{{ $user->ap_materno}}</td>
                                <td class="align-middle">{{ $user->ci}}</td>                               
                                <td class="align-middle">{{ $user->cargos->nom_cargo}}</td>                               
                                <td class="align-middle">{{ $user->telefono}}</td>                               
                                <td width="20px">
                                    <div class="btn-group">
                                      {{-- <button type="button" class="btn btn-secondary">Action</button> --}}
                                      <button type="button" class="btn btn-sm btn-primary dropdown-toggle " data-toggle="dropdown">Acciones
                                        <span class="sr-only">Toggle Dropdown</span>
                                      </button>
                                      <div class="dropdown-menu dropdown-menu-right" style="min-width: 1rem;" role="menu">
                                        {{-- wire:click="showModal({{$user->id}})" --}}
                                      {{-- <a class="dropdown-item" wire:click="showModal({{$user->id}})"  href="javascript:void(0">Ver</a> --}}
                                        <a class="dropdown-item" href="{{ route('rrhh.kardex.index', $user->id)}}">Ver Kardex</a>
                                        {{-- <a class="dropdown-item" href="{{ route('rrhh.edit', $user->id)}}">Editar</a>
                                        <a class="dropdown-item" href="#"></a>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item" data-toggle="modal" data-target="#modal-default" href="#">Asignar EESS</a>
                                        <a class="dropdown-item" href="#">Brigada</a> --}}
                                      </div>
                                    </div>
                                    {{-- <a href="{{ route('rrhh.view', $user->id)}}" class="btn btn-secondary btn-light" title="Ver"><i class="fa fa-eye" aria-hidden="true"></i></a>      
                                    <a href="{{ route('rrhh.edit', $user->id)}}" class="btn btn-secondary btn-light" title="Editar"><i class="fa fa-pencil" aria-hidden="true"></i></a>      
                                    <button type="button" class="btn btn-rounded btn-info" data-toggle="modal" data-target="#view-rrhh" >	Modal</button> --}}
                        
                                    {{-- <a href="" class="btn btn-secondary btn-light" title="Eliminar"><i class="fa fa-trash" aria-hidden="true"></i></a>       --}}
                                  </td>                           
                            </tr>
                            @endforeach                         
                            </tbody>                       
                        </table>
                        <div class="d-flex justify-content-start text-muted text-sm">
                            Mostrando del {{ $users->firstItem() }} al {{ $users->lastItem() }} de {{$users->total()}} registros.
                        </div>                                     
                    {{-- </div> --}}
                </div>
    
                <div class="card-footer">
                   
                    <div class="d-flex justify-content-end">
                        {{$users->links()}}                   
                    </div>
                </div>
                <!-- card-body -->
                @else
                    <div class="card-body">
                        <h5>No hay registros</h5>
                    </div>
                @endif
    
            </div>
            <!-- card -->          
                    
        </div>
        <!-- /.col -->
        </div>
        <!-- /.row -->
    
        <!-- Modal -->
    </div>
    </section>
    <!-- /.content -->
</div>