<div>
    @if (session()->has('message'))
        <div class="flex mx-auto">
            <div class="alert alert-success">
                <span class="inline-block align-middle mr-8">
                <b class="capitalize">{{ __('Success') }}!</b> {{ session('message') }}
                </span>
                <button wire:click="clearFlash()"
                        class="float-right btn-xs btn btn-outline-light">
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
            <div class="col-md-9 float-right">
                <button type="button"
                        class="btn btn-primary float-right"
                        wire:click="create">
                   {{ __('Nuevo Registro') }}
                </button>
            </div>
        </div>
    </div>
    <div class="flex row card">
            <div class="card-body">
                <table width="100%" class="table table-sm table-bordered table-striped text-sm">
                    <thead>
                    <tr>

                        <th>EESS
                            </th>

<th>MEDICO
                            </th>

<th>FCONSULTA
                            </th>

<th>HCLIN
                            </th>

<th>ASEGURADO
                            </th>

<th>APELLIDOSYNOMBRES
                            </th>

<th>SEXO
                            </th>

<th>FNACIMIENTO
                            </th>

<th>ANOS
                            </th>

<th>MESES
                            </th>

<th>DIAS
                            </th>

<th>BCGM1
                            </th>

<th>PENTA1M1
                            </th>

<th>PENTA2M1
                            </th>

<th>PENTA3M1
                            </th>

<th>POLIO1M1
                            </th>

<th>POLIO2M1
                            </th>

<th>POLIO3M1
                            </th>

<th>ANTIROTAVIR1M1
                            </th>

<th>ANTIROTAVIR2M1
                            </th>

<th>ANTINEUMOCOCO1M1
                            </th>

<th>ANTINEUMOCOCO2M1
                            </th>

<th>ANTINEUMOCOCO3M1
                            </th>

<th>INFLUENZA1M1
                            </th>

<th>INFLUENZA2M1
                            </th>

<th>SRP11223M
                            </th>

<th>SRP21223M
                            </th>

<th>ANTIAMARILICA1223M
                            </th>

<th>PENTA11223M
                            </th>

<th>PENTA21223M
                            </th>

<th>PENTA31223M
                            </th>

<th>PENTA41223M
                            </th>

<th>POLIO11223M
                            </th>

<th>POLIO21223M
                            </th>

<th>POLIO31223M
                            </th>

<th>POLIO41223M
                            </th>

<th>INFLUENZAU1223M
                            </th>

<th>PENTA12A3
                            </th>

<th>PENTA22A4
                            </th>

<th>PENTA32A5
                            </th>

<th>PENTA42A6
                            </th>

<th>POLIO12A7
                            </th>

<th>POLIO22A8
                            </th>

<th>POLIO32A9
                            </th>

<th>POLIO42A10
                            </th>

<th>SRP12A11
                            </th>

<th>SRP22A12
                            </th>

<th>ANTIAMARILICA2A13
                            </th>

<th>PENTA54
                            </th>

<th>POLIO54
                            </th>

<th>SRP14
                            </th>

<th>SRP24
                            </th>

<th>ANTIAMARILICA4
                            </th>

<th>DT1
                            </th>

<th>DT2
                            </th>

<th>DT3
                            </th>

<th>DT4
                            </th>

<th>DT5
                            </th>

<th>HEPB1TSALUD
                            </th>

<th>HEPB2TSALUD
                            </th>

<th>HEPB3TSALUD
                            </th>

<th>HEPB1TVIH
                            </th>

<th>HEPB2TVIH
                            </th>

<th>HEPB3TVIH
                            </th>

<th>INFLUENZAM60
                            </th>

<th>INFLUENZAENFCRON
                            </th>

<th>INFLUENZAEMBARAZADAS
                            </th>

<th>INFLUENZATSALUD
                            </th>

<th>VPH1
                            </th>

<th>VPH2
                            </th>



                        <th scope="col">
                            <span class="sr-only">Actions</span>
                        </th>
                    </tr>
                    </thead>
                    <tbody>
                    @forelse($rows as $row)
<tr> <td>{{ $row->establecimiento}}</td>

 <td>{{ $row->medico}}</td>

 <td>{{ $row->fconsulta}}</td>

 <td>{{ $row->hclin}}</td>

 <td>{{ $row->asegurado}}</td>

 <td>{{ $row->apellidosynombres}}</td>

 <td>{{ $row->sexo}}</td>

 <td>{{ $row->fnacimiento}}</td>

 <td>{{ $row->anos}}</td>

 <td>{{ $row->meses}}</td>

 <td>{{ $row->dias}}</td>

 <td>{{ $row->bcgm1}}</td>

 <td>{{ $row->penta1m1}}</td>

 <td>{{ $row->penta2m1}}</td>

 <td>{{ $row->penta3m1}}</td>

 <td>{{ $row->polio1m1}}</td>

 <td>{{ $row->polio2m1}}</td>

 <td>{{ $row->polio3m1}}</td>

 <td>{{ $row->antirotavir1m1}}</td>

 <td>{{ $row->antirotavir2m1}}</td>

 <td>{{ $row->antineumococo1m1}}</td>

 <td>{{ $row->antineumococo2m1}}</td>

 <td>{{ $row->antineumococo3m1}}</td>

 <td>{{ $row->influenza1m1}}</td>

 <td>{{ $row->influenza2m1}}</td>

 <td>{{ $row->srp11223m}}</td>

 <td>{{ $row->srp21223m}}</td>

 <td>{{ $row->antiamarilica1223m}}</td>

 <td>{{ $row->penta11223m}}</td>

 <td>{{ $row->penta21223m}}</td>

 <td>{{ $row->penta31223m}}</td>

 <td>{{ $row->penta41223m}}</td>

 <td>{{ $row->polio11223m}}</td>

 <td>{{ $row->polio21223m}}</td>

 <td>{{ $row->polio31223m}}</td>

 <td>{{ $row->polio41223m}}</td>

 <td>{{ $row->influenzau1223m}}</td>

 <td>{{ $row->penta12a3}}</td>

 <td>{{ $row->penta22a4}}</td>

 <td>{{ $row->penta32a5}}</td>

 <td>{{ $row->penta42a6}}</td>

 <td>{{ $row->polio12a7}}</td>

 <td>{{ $row->polio22a8}}</td>

 <td>{{ $row->polio32a9}}</td>

 <td>{{ $row->polio42a10}}</td>

 <td>{{ $row->srp12a11}}</td>

 <td>{{ $row->srp22a12}}</td>

 <td>{{ $row->antiamarilica2a13}}</td>

 <td>{{ $row->penta54}}</td>

 <td>{{ $row->polio54}}</td>

 <td>{{ $row->srp14}}</td>

 <td>{{ $row->srp24}}</td>

 <td>{{ $row->antiamarilica4}}</td>

 <td>{{ $row->dt1}}</td>

 <td>{{ $row->dt2}}</td>

 <td>{{ $row->dt3}}</td>

 <td>{{ $row->dt4}}</td>

 <td>{{ $row->dt5}}</td>

 <td>{{ $row->hepb1tsalud}}</td>

 <td>{{ $row->hepb2tsalud}}</td>

 <td>{{ $row->hepb3tsalud}}</td>

 <td>{{ $row->hepb1tvih}}</td>

 <td>{{ $row->hepb2tvih}}</td>

 <td>{{ $row->hepb3tvih}}</td>

 <td>{{ $row->influenzam60}}</td>

 <td>{{ $row->influenzaenfcron}}</td>

 <td>{{ $row->influenzaembarazadas}}</td>

 <td>{{ $row->influenzatsalud}}</td>

 <td>{{ $row->vph1}}</td>

 <td>{{ $row->vph2}}</td>

<td>
                                <a href="#" class="text-primary" wire:click.prevent="edit({{ $row->id }})">
<svg xmlns="http://www.w3.org/2000/svg" style="width:20px; height: 20px;" viewBox="0 0 20 20" fill="currentColor">
  <path d="M17.414 2.586a2 2 0 00-2.828 0L7 10.172V13h2.828l7.586-7.586a2 2 0 000-2.828z" />
  <path fill-rule="evenodd" d="M2 6a2 2 0 012-2h4a1 1 0 010 2H4v10h10v-4a1 1 0 112 0v4a2 2 0 01-2 2H4a2 2 0 01-2-2V6z" clip-rule="evenodd" />
</svg>
</a>
                                <a href="#" class="text-danger" wire:click.prevent="confirmDelete({{ $row->id }})"> <svg xmlns="http://www.w3.org/2000/svg" style="width:20px; height: 20px;" viewBox="0 0 20 20" fill="currentColor">
                                        <path fill-rule="evenodd" d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z" clip-rule="evenodd" />
                                    </svg></a>
                            </td></tr>@empty  <tr><td>No Existen Registros</td></tr>   @endforelse

                    </tbody>
                </table>
                <div class="p-2">
                    {{ $rows->links() }}
                </div>
        </div>


    </div>


    {{--    create / edit form --}}

       <div class="modal fade" wire:ignore.self id="showForm" tabindex="-1" role="dialog" aria-labelledby="showFormLabel" aria-hidden="true">
           <div class="modal-dialog" role="document">
               <div class="modal-content">
                   <div class="modal-header">
                       <h5 class="modal-title" id="showFormLabel"> {{ $mode == 'create' ? 'Nuevo Registro' : 'Actualizar Registro ' }}</h5>
                       <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                           <span aria-hidden="true">&times;</span>
                       </button>
                   </div>
                   <div class="modal-body">
                        <div class='form-group'><label for='establecimiento'>Establecimiento</label><input type='text' class='form-control @error('establecimiento')  is-invalid @enderror' wire:model='establecimiento'>@error('establecimiento')<div class='invalid-feedback'>{{ $message }}</div>@enderror</div>
<div class='form-group'><label for='medico'>Medico</label><input type='text' class='form-control @error('medico')  is-invalid @enderror' wire:model='medico'>@error('medico')<div class='invalid-feedback'>{{ $message }}</div>@enderror</div>
<div class='form-group'><label for='fconsulta'>Fconsulta</label><input type='text' class='form-control @error('fconsulta')  is-invalid @enderror' wire:model='fconsulta'>@error('fconsulta')<div class='invalid-feedback'>{{ $message }}</div>@enderror</div>
<div class='form-group'><label for='hclin'>Hclin</label><input type='text' class='form-control @error('hclin')  is-invalid @enderror' wire:model='hclin'>@error('hclin')<div class='invalid-feedback'>{{ $message }}</div>@enderror</div>
<div class='form-group'><label for='asegurado'>Asegurado</label><input type='text' class='form-control @error('asegurado')  is-invalid @enderror' wire:model='asegurado'>@error('asegurado')<div class='invalid-feedback'>{{ $message }}</div>@enderror</div>
<div class='form-group'><label for='apellidosynombres'>Apellidosynombres</label><input type='text' class='form-control @error('apellidosynombres')  is-invalid @enderror' wire:model='apellidosynombres'>@error('apellidosynombres')<div class='invalid-feedback'>{{ $message }}</div>@enderror</div>
<div class='form-group'><label for='sexo'>Sexo</label><input type='text' class='form-control @error('sexo')  is-invalid @enderror' wire:model='sexo'>@error('sexo')<div class='invalid-feedback'>{{ $message }}</div>@enderror</div>
<div class='form-group'><label for='fnacimiento'>Fnacimiento</label><input type='text' class='form-control @error('fnacimiento')  is-invalid @enderror' wire:model='fnacimiento'>@error('fnacimiento')<div class='invalid-feedback'>{{ $message }}</div>@enderror</div>
<div class='form-group'><label for='años'>Anos</label><input type='text' class='form-control @error('años')  is-invalid @enderror' wire:model='años'>@error('años')<div class='invalid-feedback'>{{ $message }}</div>@enderror</div>
<div class='form-group'><label for='meses'>Meses</label><input type='text' class='form-control @error('meses')  is-invalid @enderror' wire:model='meses'>@error('meses')<div class='invalid-feedback'>{{ $message }}</div>@enderror</div>
<div class='form-group'><label for='dias'>Dias</label><input type='text' class='form-control @error('dias')  is-invalid @enderror' wire:model='dias'>@error('dias')<div class='invalid-feedback'>{{ $message }}</div>@enderror</div>
<div class='form-group'><label for='bcgm1'>Bcgm1</label><input type='text' class='form-control @error('bcgm1')  is-invalid @enderror' wire:model='bcgm1'>@error('bcgm1')<div class='invalid-feedback'>{{ $message }}</div>@enderror</div>
<div class='form-group'><label for='penta1m1'>Penta1m1</label><input type='text' class='form-control @error('penta1m1')  is-invalid @enderror' wire:model='penta1m1'>@error('penta1m1')<div class='invalid-feedback'>{{ $message }}</div>@enderror</div>
<div class='form-group'><label for='penta2m1'>Penta2m1</label><input type='text' class='form-control @error('penta2m1')  is-invalid @enderror' wire:model='penta2m1'>@error('penta2m1')<div class='invalid-feedback'>{{ $message }}</div>@enderror</div>
<div class='form-group'><label for='penta3m1'>Penta3m1</label><input type='text' class='form-control @error('penta3m1')  is-invalid @enderror' wire:model='penta3m1'>@error('penta3m1')<div class='invalid-feedback'>{{ $message }}</div>@enderror</div>
<div class='form-group'><label for='polio1m1'>Polio1m1</label><input type='text' class='form-control @error('polio1m1')  is-invalid @enderror' wire:model='polio1m1'>@error('polio1m1')<div class='invalid-feedback'>{{ $message }}</div>@enderror</div>
<div class='form-group'><label for='polio2m1'>Polio2m1</label><input type='text' class='form-control @error('polio2m1')  is-invalid @enderror' wire:model='polio2m1'>@error('polio2m1')<div class='invalid-feedback'>{{ $message }}</div>@enderror</div>
<div class='form-group'><label for='polio3m1'>Polio3m1</label><input type='text' class='form-control @error('polio3m1')  is-invalid @enderror' wire:model='polio3m1'>@error('polio3m1')<div class='invalid-feedback'>{{ $message }}</div>@enderror</div>
<div class='form-group'><label for='antirotavir1m1'>Antirotavir1m1</label><input type='text' class='form-control @error('antirotavir1m1')  is-invalid @enderror' wire:model='antirotavir1m1'>@error('antirotavir1m1')<div class='invalid-feedback'>{{ $message }}</div>@enderror</div>
<div class='form-group'><label for='antirotavir2m1'>Antirotavir2m1</label><input type='text' class='form-control @error('antirotavir2m1')  is-invalid @enderror' wire:model='antirotavir2m1'>@error('antirotavir2m1')<div class='invalid-feedback'>{{ $message }}</div>@enderror</div>
<div class='form-group'><label for='antineumococo1m1'>Antineumococo1m1</label><input type='text' class='form-control @error('antineumococo1m1')  is-invalid @enderror' wire:model='antineumococo1m1'>@error('antineumococo1m1')<div class='invalid-feedback'>{{ $message }}</div>@enderror</div>
<div class='form-group'><label for='antineumococo2m1'>Antineumococo2m1</label><input type='text' class='form-control @error('antineumococo2m1')  is-invalid @enderror' wire:model='antineumococo2m1'>@error('antineumococo2m1')<div class='invalid-feedback'>{{ $message }}</div>@enderror</div>
<div class='form-group'><label for='antineumococo3m1'>Antineumococo3m1</label><input type='text' class='form-control @error('antineumococo3m1')  is-invalid @enderror' wire:model='antineumococo3m1'>@error('antineumococo3m1')<div class='invalid-feedback'>{{ $message }}</div>@enderror</div>
<div class='form-group'><label for='influenza1m1'>Influenza1m1</label><input type='text' class='form-control @error('influenza1m1')  is-invalid @enderror' wire:model='influenza1m1'>@error('influenza1m1')<div class='invalid-feedback'>{{ $message }}</div>@enderror</div>
<div class='form-group'><label for='influenza2m1'>Influenza2m1</label><input type='text' class='form-control @error('influenza2m1')  is-invalid @enderror' wire:model='influenza2m1'>@error('influenza2m1')<div class='invalid-feedback'>{{ $message }}</div>@enderror</div>
<div class='form-group'><label for='srp11223m'>Srp11223m</label><input type='text' class='form-control @error('srp11223m')  is-invalid @enderror' wire:model='srp11223m'>@error('srp11223m')<div class='invalid-feedback'>{{ $message }}</div>@enderror</div>
<div class='form-group'><label for='srp21223m'>Srp21223m</label><input type='text' class='form-control @error('srp21223m')  is-invalid @enderror' wire:model='srp21223m'>@error('srp21223m')<div class='invalid-feedback'>{{ $message }}</div>@enderror</div>
<div class='form-group'><label for='antiamarilica1223m'>Antiamarilica1223m</label><input type='text' class='form-control @error('antiamarilica1223m')  is-invalid @enderror' wire:model='antiamarilica1223m'>@error('antiamarilica1223m')<div class='invalid-feedback'>{{ $message }}</div>@enderror</div>
<div class='form-group'><label for='penta11223m'>Penta11223m</label><input type='text' class='form-control @error('penta11223m')  is-invalid @enderror' wire:model='penta11223m'>@error('penta11223m')<div class='invalid-feedback'>{{ $message }}</div>@enderror</div>
<div class='form-group'><label for='penta21223m'>Penta21223m</label><input type='text' class='form-control @error('penta21223m')  is-invalid @enderror' wire:model='penta21223m'>@error('penta21223m')<div class='invalid-feedback'>{{ $message }}</div>@enderror</div>
<div class='form-group'><label for='penta31223m'>Penta31223m</label><input type='text' class='form-control @error('penta31223m')  is-invalid @enderror' wire:model='penta31223m'>@error('penta31223m')<div class='invalid-feedback'>{{ $message }}</div>@enderror</div>
<div class='form-group'><label for='penta41223m'>Penta41223m</label><input type='text' class='form-control @error('penta41223m')  is-invalid @enderror' wire:model='penta41223m'>@error('penta41223m')<div class='invalid-feedback'>{{ $message }}</div>@enderror</div>
<div class='form-group'><label for='polio11223m'>Polio11223m</label><input type='text' class='form-control @error('polio11223m')  is-invalid @enderror' wire:model='polio11223m'>@error('polio11223m')<div class='invalid-feedback'>{{ $message }}</div>@enderror</div>
<div class='form-group'><label for='polio21223m'>Polio21223m</label><input type='text' class='form-control @error('polio21223m')  is-invalid @enderror' wire:model='polio21223m'>@error('polio21223m')<div class='invalid-feedback'>{{ $message }}</div>@enderror</div>
<div class='form-group'><label for='polio31223m'>Polio31223m</label><input type='text' class='form-control @error('polio31223m')  is-invalid @enderror' wire:model='polio31223m'>@error('polio31223m')<div class='invalid-feedback'>{{ $message }}</div>@enderror</div>
<div class='form-group'><label for='polio41223m'>Polio41223m</label><input type='text' class='form-control @error('polio41223m')  is-invalid @enderror' wire:model='polio41223m'>@error('polio41223m')<div class='invalid-feedback'>{{ $message }}</div>@enderror</div>
<div class='form-group'><label for='influenzau1223m'>Influenzau1223m</label><input type='text' class='form-control @error('influenzau1223m')  is-invalid @enderror' wire:model='influenzau1223m'>@error('influenzau1223m')<div class='invalid-feedback'>{{ $message }}</div>@enderror</div>
<div class='form-group'><label for='penta12a3'>Penta12a3</label><input type='text' class='form-control @error('penta12a3')  is-invalid @enderror' wire:model='penta12a3'>@error('penta12a3')<div class='invalid-feedback'>{{ $message }}</div>@enderror</div>
<div class='form-group'><label for='penta22a4'>Penta22a4</label><input type='text' class='form-control @error('penta22a4')  is-invalid @enderror' wire:model='penta22a4'>@error('penta22a4')<div class='invalid-feedback'>{{ $message }}</div>@enderror</div>
<div class='form-group'><label for='penta32a5'>Penta32a5</label><input type='text' class='form-control @error('penta32a5')  is-invalid @enderror' wire:model='penta32a5'>@error('penta32a5')<div class='invalid-feedback'>{{ $message }}</div>@enderror</div>
<div class='form-group'><label for='penta42a6'>Penta42a6</label><input type='text' class='form-control @error('penta42a6')  is-invalid @enderror' wire:model='penta42a6'>@error('penta42a6')<div class='invalid-feedback'>{{ $message }}</div>@enderror</div>
<div class='form-group'><label for='polio12a7'>Polio12a7</label><input type='text' class='form-control @error('polio12a7')  is-invalid @enderror' wire:model='polio12a7'>@error('polio12a7')<div class='invalid-feedback'>{{ $message }}</div>@enderror</div>
<div class='form-group'><label for='polio22a8'>Polio22a8</label><input type='text' class='form-control @error('polio22a8')  is-invalid @enderror' wire:model='polio22a8'>@error('polio22a8')<div class='invalid-feedback'>{{ $message }}</div>@enderror</div>
<div class='form-group'><label for='polio32a9'>Polio32a9</label><input type='text' class='form-control @error('polio32a9')  is-invalid @enderror' wire:model='polio32a9'>@error('polio32a9')<div class='invalid-feedback'>{{ $message }}</div>@enderror</div>
<div class='form-group'><label for='polio42a10'>Polio42a10</label><input type='text' class='form-control @error('polio42a10')  is-invalid @enderror' wire:model='polio42a10'>@error('polio42a10')<div class='invalid-feedback'>{{ $message }}</div>@enderror</div>
<div class='form-group'><label for='srp12a11'>Srp12a11</label><input type='text' class='form-control @error('srp12a11')  is-invalid @enderror' wire:model='srp12a11'>@error('srp12a11')<div class='invalid-feedback'>{{ $message }}</div>@enderror</div>
<div class='form-group'><label for='srp22a12'>Srp22a12</label><input type='text' class='form-control @error('srp22a12')  is-invalid @enderror' wire:model='srp22a12'>@error('srp22a12')<div class='invalid-feedback'>{{ $message }}</div>@enderror</div>
<div class='form-group'><label for='antiamarilica2a13'>Antiamarilica2a13</label><input type='text' class='form-control @error('antiamarilica2a13')  is-invalid @enderror' wire:model='antiamarilica2a13'>@error('antiamarilica2a13')<div class='invalid-feedback'>{{ $message }}</div>@enderror</div>
<div class='form-group'><label for='penta54'>Penta54</label><input type='text' class='form-control @error('penta54')  is-invalid @enderror' wire:model='penta54'>@error('penta54')<div class='invalid-feedback'>{{ $message }}</div>@enderror</div>
<div class='form-group'><label for='polio54'>Polio54</label><input type='text' class='form-control @error('polio54')  is-invalid @enderror' wire:model='polio54'>@error('polio54')<div class='invalid-feedback'>{{ $message }}</div>@enderror</div>
<div class='form-group'><label for='srp14'>Srp14</label><input type='text' class='form-control @error('srp14')  is-invalid @enderror' wire:model='srp14'>@error('srp14')<div class='invalid-feedback'>{{ $message }}</div>@enderror</div>
<div class='form-group'><label for='srp24'>Srp24</label><input type='text' class='form-control @error('srp24')  is-invalid @enderror' wire:model='srp24'>@error('srp24')<div class='invalid-feedback'>{{ $message }}</div>@enderror</div>
<div class='form-group'><label for='antiamarilica4'>Antiamarilica4</label><input type='text' class='form-control @error('antiamarilica4')  is-invalid @enderror' wire:model='antiamarilica4'>@error('antiamarilica4')<div class='invalid-feedback'>{{ $message }}</div>@enderror</div>
<div class='form-group'><label for='dt1'>Dt1</label><input type='text' class='form-control @error('dt1')  is-invalid @enderror' wire:model='dt1'>@error('dt1')<div class='invalid-feedback'>{{ $message }}</div>@enderror</div>
<div class='form-group'><label for='dt2'>Dt2</label><input type='text' class='form-control @error('dt2')  is-invalid @enderror' wire:model='dt2'>@error('dt2')<div class='invalid-feedback'>{{ $message }}</div>@enderror</div>
<div class='form-group'><label for='dt3'>Dt3</label><input type='text' class='form-control @error('dt3')  is-invalid @enderror' wire:model='dt3'>@error('dt3')<div class='invalid-feedback'>{{ $message }}</div>@enderror</div>
<div class='form-group'><label for='dt4'>Dt4</label><input type='text' class='form-control @error('dt4')  is-invalid @enderror' wire:model='dt4'>@error('dt4')<div class='invalid-feedback'>{{ $message }}</div>@enderror</div>
<div class='form-group'><label for='dt5'>Dt5</label><input type='text' class='form-control @error('dt5')  is-invalid @enderror' wire:model='dt5'>@error('dt5')<div class='invalid-feedback'>{{ $message }}</div>@enderror</div>
<div class='form-group'><label for='hepb1tsalud'>Hepb1tsalud</label><input type='text' class='form-control @error('hepb1tsalud')  is-invalid @enderror' wire:model='hepb1tsalud'>@error('hepb1tsalud')<div class='invalid-feedback'>{{ $message }}</div>@enderror</div>
<div class='form-group'><label for='hepb2tsalud'>Hepb2tsalud</label><input type='text' class='form-control @error('hepb2tsalud')  is-invalid @enderror' wire:model='hepb2tsalud'>@error('hepb2tsalud')<div class='invalid-feedback'>{{ $message }}</div>@enderror</div>
<div class='form-group'><label for='hepb3tsalud'>Hepb3tsalud</label><input type='text' class='form-control @error('hepb3tsalud')  is-invalid @enderror' wire:model='hepb3tsalud'>@error('hepb3tsalud')<div class='invalid-feedback'>{{ $message }}</div>@enderror</div>
<div class='form-group'><label for='hepb1tvih'>Hepb1tvih</label><input type='text' class='form-control @error('hepb1tvih')  is-invalid @enderror' wire:model='hepb1tvih'>@error('hepb1tvih')<div class='invalid-feedback'>{{ $message }}</div>@enderror</div>
<div class='form-group'><label for='hepb2tvih'>Hepb2tvih</label><input type='text' class='form-control @error('hepb2tvih')  is-invalid @enderror' wire:model='hepb2tvih'>@error('hepb2tvih')<div class='invalid-feedback'>{{ $message }}</div>@enderror</div>
<div class='form-group'><label for='hepb3tvih'>Hepb3tvih</label><input type='text' class='form-control @error('hepb3tvih')  is-invalid @enderror' wire:model='hepb3tvih'>@error('hepb3tvih')<div class='invalid-feedback'>{{ $message }}</div>@enderror</div>
<div class='form-group'><label for='influenzam60'>Influenzam60</label><input type='text' class='form-control @error('influenzam60')  is-invalid @enderror' wire:model='influenzam60'>@error('influenzam60')<div class='invalid-feedback'>{{ $message }}</div>@enderror</div>
<div class='form-group'><label for='influenzaenfcron'>Influenzaenfcron</label><input type='text' class='form-control @error('influenzaenfcron')  is-invalid @enderror' wire:model='influenzaenfcron'>@error('influenzaenfcron')<div class='invalid-feedback'>{{ $message }}</div>@enderror</div>
<div class='form-group'><label for='influenzaembarazadas'>Influenzaembarazadas</label><input type='text' class='form-control @error('influenzaembarazadas')  is-invalid @enderror' wire:model='influenzaembarazadas'>@error('influenzaembarazadas')<div class='invalid-feedback'>{{ $message }}</div>@enderror</div>
<div class='form-group'><label for='influenzatsalud'>Influenzatsalud</label><input type='text' class='form-control @error('influenzatsalud')  is-invalid @enderror' wire:model='influenzatsalud'>@error('influenzatsalud')<div class='invalid-feedback'>{{ $message }}</div>@enderror</div>
<div class='form-group'><label for='vph1'>Vph1</label><input type='text' class='form-control @error('vph1')  is-invalid @enderror' wire:model='vph1'>@error('vph1')<div class='invalid-feedback'>{{ $message }}</div>@enderror</div>
<div class='form-group'><label for='vph2'>Vph2</label><input type='text' class='form-control @error('vph2')  is-invalid @enderror' wire:model='vph2'>@error('vph2')<div class='invalid-feedback'>{{ $message }}</div>@enderror</div>

                   </div>
                   <div class="modal-footer">
                       <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                       <button type="button" @if($mode == 'create') wire:click="store()" @else wire:click="update()" @endif  class="btn btn-primary">
                         {{ $mode == 'create' ? 'Guardar' : 'Actualizar' }}
                       </button>
                   </div>
               </div>
           </div>
       </div>
    {{--    /create /edit form--}}


    {{--    delete popup--}}
    <div wire:ignore>
            <div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="deleteModal" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Eliminar Registro</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                           Esta segur@ de eliminar el registro?
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                            <button type="button" wire:click="destroy()" class="btn btn-danger">Eliminar</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    {{--    /delete popup--}}
</div>
