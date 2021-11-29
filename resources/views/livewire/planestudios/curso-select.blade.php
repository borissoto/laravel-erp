<div>
    @if (session()->has('message'))
        <div class="flex mx-auto">
            <div class="alert alert-success">
                <span class="inline-block align-middle mr-8">
                <b class="capitalize">{{ __('Success') }}!</b> {{ session('message') }}
                </span>
                <button wire:click="clearFlash()"
                        class="float-right btn-xs btn btn-outline-success">
                    <span>×</span>
                </button>
            </div>
        </div>
    @endif
    <div>
        <div class="row">
            <div class="col-md-3">
                <input wire:model="search"
                       class="form-control"
                       id="search" type="text" name="search" wire:model="search" required="required"
                       autofocus="autofocus"/>
            </div>
            {{-- <div class="col-md-9 float-right">
                <button type="button"
                        class="btn btn-primary float-right"
                        wire:click="create">
                   {{ __('Nuevo Tema') }}
                </button>
            </div> --}}
        </div>
    </div>
    <div class="flex row card" style="color: steelblue">
            <div class="card-body">
                <table width="100%" class="table table-sm table-bordered table-striped text-sm">
                    <thead>
                    <tr>

                        <th>Residenciaa</th>
                        <th>Modulo</th>
                        <th>Tema </th>
                        <th>Jefe de Enseñanza</th>
                        <th>Instructor</th>
                        <th>
                            <span>Ver</span>
                        </th>
                    </tr>
                    </thead>
                    <tbody>
                    @forelse($rows as $row)<tr> 
                        <td>{{ $row->modulo->residencia->nom_residencia.' ('.$row->modulo->residencia->gestion_ini.' '.$row->modulo->residencia->mes_ini.' - '.$row->modulo->residencia->gestion_fin.' '.$row->modulo->residencia->mes_fin.')' }}</td>
                        <td>{{ $row->modulo->nom_modulo}}</td>
                        <td>{{ $row->nom_curso}}</td>
                        <td>{{ $row->usuario->nombres.' '.$row->usuario->ap_paterno.' '.$row->usuario->ap_materno}}</td>
                        <td>{{ $row->instructor ? $row->docinstructor->nombres.' '.$row->docinstructor->ap_paterno.' '.$row->docinstructor->ap_materno : 'N/A'}}</td>
                        <td class="align-middle">
                            <a href="#" class="text-primary" wire:click.prevent="selectedCurso({{ $row->id }})">                              
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-journal-check" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd" d="M10.854 6.146a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 1 1 .708-.708L7.5 8.793l2.646-2.647a.5.5 0 0 1 .708 0z"/>
                                    <path d="M3 0h10a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2v-1h1v1a1 1 0 0 0 1 1h10a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H3a1 1 0 0 0-1 1v1H1V2a2 2 0 0 1 2-2z"/>
                                    <path d="M1 5v-.5a.5.5 0 0 1 1 0V5h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1zm0 3v-.5a.5.5 0 0 1 1 0V8h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1zm0 3v-.5a.5.5 0 0 1 1 0v.5h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1z"/>  
                                </svg>
                            </a>                          
                         
                            </td></tr>@empty  <tr><td>0 Registros Econtrados</td></tr>   @endforelse

                    </tbody>
                </table>
                <div class="p-2">
                    {{ $rows->links() }}
                </div>
        </div>
    </div>
   
</div>
