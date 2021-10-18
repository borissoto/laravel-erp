<div>    
    @include('livewire.modals.kardex.baja-create')
    @include('livewire.modals.kardex.baja-update')
    @include('livewire.modals.kardex.baja-delete')
    @include('livewire.modals.kardex.baja-status')
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
                    <button type="button" wire:click="newBaja()" data-toggle="modal" data-target="#kardexBajaCreate" class="btn btn-success btn-sm ">
                        Nuevo
                      </button>

                     
                    @if($bajas->count())
                    <button type="button" wire:click="editEstado()" data-toggle="modal" data-target="#kardexBajaStatus" class="btn btn-default bg-gradient-secondary btn-sm" >
                    @else    
                    <button type="button" wire:click="editEstado()" data-toggle="modal" data-target="#kardexBajaStatus" class="btn btn-default bg-gradient-secondary btn-sm" disabled>
                    @endif    
                        Estado
                        <span > {!! $user->estado === 1 ? '<span class="badge bg-success">ACTIVO</span>' : ($user->estado === 2 ?  '<span class="badge bg-warning">BAJA</span>' : '<span class="badge bg-danger">INACTIVO</span>') !!}</span>
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
                @if($bajas->count())
                <!-- card-header -->
                <div class="card-body pb-1">
                    {{-- <div class="table-responsive"> --}}
                        <table id="example1" class="table table-sm table-bordered table-striped text-sm">
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>Tipo Baja</th>
                                <th>Causa Probable</th>
                                <th>Factor Riesgo</th>
                                <th>Fecha Inicio</th>
                                <th>Fecha Fin</th>                                
                                
                                <th>Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($bajas as $baja) 
                            <tr>
                                <td class="align-middle">{{ $baja->id }}</td>                                 
                                <td class="align-middle">{{ $baja->tipo}}</td> 
                                <td class="align-middle">{{ $baja->causa_probable}}</td>                                                              
                                <td class="align-middle">{{ $baja->factor_riesgo}}</td>                                
                                <td class="align-middle">{{$baja->fecha_ini? \Carbon\Carbon::parse($baja->fecha_ini)->format('Y-m-d') : 'No Reg' }}</td>
                                <td class="align-middle">{{$baja->fecha_fin? \Carbon\Carbon::parse($baja->fecha_fin)->format('Y-m-d') : 'No Reg' }}</td>
                                
                                <td width="20px">
                                    <div class="btn-group">
                                      {{-- <button type="button" class="btn btn-secondary">Action</button> --}}
                                      <button type="button" class="btn btn-sm btn-primary dropdown-toggle " data-toggle="dropdown">Acciones
                                        <span class="sr-only">Toggle Dropdown</span>
                                      </button>
                                      <div class="dropdown-menu dropdown-menu-right" style="min-width: 1rem;" role="menu">
                                        {{-- wire:click="showModal({{$user->id}})" --}}
                                      {{-- <a class="dropdown-item" wire:click="showModal({{$user->id}})"  href="javascript:void(0">Ver</a> --}}
                                        <a class="dropdown-item" wire:click="editBaja({{ $baja->id }})"  data-toggle="modal" data-target="#kardexBajaUpdate" href="">Editar</a>                                       
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item" wire:click="deleteBaja({{ $baja->id }})"  data-toggle="modal" data-target="#kardexBajaDelete" href="#">Eliminar</a>
                                        
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
                        <div class="d-flex justify-content-start text-muted">
                            Mostrando del {{ $bajas->firstItem() }} al {{ $bajas->lastItem() }} de {{$bajas->total()}} registros.
                        </div>                                     
                    {{-- </div> --}}
                </div>
    
                <div class="card-footer">
                   
                    <div class="d-flex justify-content-end">
                        {{$bajas->links()}}                   
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
