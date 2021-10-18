<div>
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
                @if($brigadas->count())
                <!-- card-header -->
                <div class="card-body pb-1">
                    {{-- <div class="table-responsive"> --}}
                        <table id="example1" class="table table-sm table-bordered table-striped text-sm shadow">
                        <thead>
                            <tr>
                                {{-- <th>N°</th> --}}
                                <th>Id</th>
                                <th>Depto</th>
                                <th>Municipio</th>
                                <th>Brigada</th>
                                <th>Tipo</th>
                                <th>Responsable</th>
                                <th>Integrantes</th>
                                <th>Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($brigadas as $brigada) 
                            <tr>
                                {{-- <td>{{ $user->firstItem()+$loop->index}}</td> --}}
                                <td class="align-middle">{{ $brigada->id}}</td>
                                <td class="align-middle">{{ $brigada->municipio->departamento->nom_departamento}}</td>
                                <td class="align-middle">{{ $brigada->municipio->nom_municipio}}</td>
                                <td class="align-middle">{{ $brigada->nom_brigada}}</td>
                                <td class="align-middle">{{ $brigada->tipo}}</td>
                                <td class="align-middle">{{ $brigada->usuario->name}}</td>
                                <td class="align-middle">{{ $brigada->integrantes}}</td>                              
                                <td width="20px">
                                    <div class="btn-group">
                                    {{-- <button type="button" class="btn btn-secondary">Action</button> --}}
                                    <button type="button" class="btn btn-sm btn-primary dropdown-toggle " data-toggle="dropdown">Acciones
                                        <span class="sr-only">Toggle Dropdown</span>
                                    </button>
                                    <div class="dropdown-menu" style="min-width: 1rem;"  role="menu">                                        
                                        <a class="dropdown-item" href="{{route('role.edit', $brigada)}}">Editar</a>
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
                            Mostrando {{ $brigadas->firstItem() }} to {{ $brigadas->lastItem() }} de {{$brigadas->total()}} registros.
                        </div>                                     
                    {{-- </div> --}}
                </div>
    
                <div class="card-footer">
                   
                    <div class="d-flex justify-content-end">
                        {{$brigadas->links()}}                   
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
