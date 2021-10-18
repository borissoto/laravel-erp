<div>
    @include('livewire.modals.comunidad.create')
    @include('livewire.modals.comunidad.update')
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
                        <button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#comunidadCreate">
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
                    @if($comunidades->count())
                    <!-- card-header -->
                    <div class="card-body pb-1">
                        {{-- <div class="table-responsive"> --}}
                            <table id="example1" class="table table-sm table-bordered table-striped text-sm shadow">
                            <thead>
                                <tr>                                    
                                    <th>Establecimiento
                                        <button wire:click="sorteable('nom_departamento')" class="border-0">
                                            <span class="fa fa{{$campo === 'nom_departamento' ? $icon : '-sort'}}"></span>                                         
                                        </button>
                                    </th>
                                    <th>Comunidad</th>                              
                                    <th>Pioc</th>
                                    <th>Nacion</th>
                                    <th>Habitantes</th>
                                    <th>Familias</th>
                                    <th>Carpetizacion</th>
                                    <th>Tiempo Viaje</th>
                                    <th>Usuario</th>
                                    <th>Acciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($comunidades as $comunidad) 
                                <tr>
                                    <td class="align-middle">{{ $comunidad->establecimiento->nom_establecimiento}}</td>
                                    <td class="align-middle">{{ $comunidad->nom_comunidad}}</td>                                                     
                                    <td class="align-middle">{{ $comunidad->pioc}}</td>                                                     
                                    <td class="align-middle">{{ $comunidad->nacion}}</td>                                                     
                                    <td class="align-middle">{{ $comunidad->habitantes}}</td> 
                                    <td class="align-middle">{{ $comunidad->familias}}</td> 
                                    <td class="align-middle">{{ $comunidad->carpetizacion}}</td> 
                                    <td class="align-middle">{{ $comunidad->tiempo_viaje}}</td> 
                                    <td class="align-middle">{{ $comunidad->usuario->name}}</td> 
                                                           
                                    <td width="20px">
                                        <div class="btn-group">
                                        {{-- <button type="button" class="btn btn-secondary">Action</button> --}}
                                        <button type="button" class="btn btn-sm btn-primary dropdown-toggle " data-toggle="dropdown">Acciones
                                            <span class="sr-only">Toggle Dropdown</span>
                                        </button>
                                        <div class="dropdown-menu dropdown-menu-right" style="min-width: 1rem;"  role="menu">                                        
                                            <button class="dropdown-item" data-toggle="modal" data-target="#comunidadUpdate" wire:click="edit({{ $comunidad->id }})" >Editar</button>
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
                                Mostrando del {{ $comunidades->firstItem() }} al {{ $comunidades->lastItem() }} de {{$comunidades->total()}} registros.
                            </div>                                     
                        {{-- </div> --}}
                    </div>
        
                    <div class="card-footer">
                       
                        <div class="d-flex justify-content-end">
                            {{$comunidades->links()}}                   
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
    
