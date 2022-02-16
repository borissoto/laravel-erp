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

<th>VIHPRECONSEJERIAM
                            </th>

<th>VIHPRECONSEJERIAF
                            </th>

<th>VIHPRAPIDAEMBF
                            </th>

<th>VIHPRAPIDAM
                            </th>

<th>VIHPRAPIDAF
                            </th>

<th>TBSINTOMATICOSRM
                            </th>

<th>TBSINTOMATICOSRF
                            </th>

<th>TBPBAARNUEVOSPOSM
                            </th>

<th>TBPBAARNUEVOSPOSF
                            </th>

<th>TBPBAARNUEVOSNEGM
                            </th>

<th>TBPBAARNUEVOSNEGF
                            </th>

<th>TBTBEXTRAPNM
                            </th>

<th>TBTBEXTRAPNF
                            </th>

<th>TBESQIM
                            </th>

<th>TBESQIF
                            </th>

<th>TBESQIIM
                            </th>

<th>TBESQIIF
                            </th>

<th>TBESQIIIM
                            </th>

<th>TBESQIIIF
                            </th>

<th>TBQUIMIPROFILAXISM5M
                            </th>

<th>TBQUIMIPROFILAXISM5F
                            </th>

<th>TBBAARPOSNUEVOSCURADOSM
                            </th>

<th>TBBAARPOSNUEVOSCURADOSF
                            </th>

<th>TBTTOPAUSIBACILARINIM
                            </th>

<th>TBTTOPAUSIBACILARINIF
                            </th>

<th>TBTTOMULTIBACILARINIM
                            </th>

<th>TBTTOMULTIBACILARINIF
                            </th>

<th>MALARIAMUESTRASVIVAXM
                            </th>

<th>MALARIAMUESTRASVIVAXF
                            </th>

<th>MALARIAMUESTRASFALCIPARUMM
                            </th>

<th>MALARIAMUESTRASFALCIPARUMF
                            </th>

<th>MALARIACONFIRMADOSVIVAXM
                            </th>

<th>MALARIACONFIRMADOSVIVAXF
                            </th>

<th>MALARIACONFIRMADOSFALCIPARUMM
                            </th>

<th>MALARIACONFIRMADOSFALCIPARUMF
                            </th>

<th>MALARIATTOVIVAXM
                            </th>

<th>MALARIATTOVIVAXF
                            </th>

<th>MALARIATTOFALCIPARUMM
                            </th>

<th>MALARIATTOFALCIPARUMF
                            </th>

<th>MALARIATTOSOSPECHAVIVAXM
                            </th>

<th>MALARIATTOSOSPECHAVIVAXF
                            </th>

<th>MALARIATTOSOSPECHAFALCIPARUMM
                            </th>

<th>MALARIATTOSOSPECHAFALCIPARUMF
                            </th>

<th>MALARIATTOANTES48HRSINICIOSINTOMASVIVAXM
                            </th>

<th>MALARIATTOANTES48HRSINICIOSINTOMASVIVAXF
                            </th>

<th>MALARIATTOANTES48HRSINICIOSINTOMASFALCIPARUMM
                            </th>

<th>MALARIATTOANTES48HRSINICIOSINTOMASFALCIPARUMF
                            </th>

<th>CHAGASTTORNAM1AINICIADM
                            </th>

<th>CHAGASTTORNAM1AINICIADF
                            </th>

<th>CHAGASTTORNAM1ACONCLUIDOM
                            </th>

<th>CHAGASTTORNAM1ACONCLUIDOF
                            </th>

<th>CHAGASTTO1AM5AINICIADM
                            </th>

<th>CHAGASTTO1AM5AINICIADF
                            </th>

<th>CHAGASTTO1AM5ACONCLUIDOM
                            </th>

<th>CHAGASTTO1AM5ACONCLUIDOF
                            </th>

<th>CHAGASTTO5AM15AINICIADM
                            </th>

<th>CHAGASTTO5AM15AINICIADF
                            </th>

<th>CHAGASTTO5AM15ACONCLUIDOM
                            </th>

<th>CHAGASTTO5AM15ACONCLUIDOF
                            </th>

<th>CHAGASTTO15AMASINICIADM
                            </th>

<th>CHAGASTTO15AMASINICIADF
                            </th>

<th>CHAGASTTO15AMASCONCLUIDOM
                            </th>

<th>CHAGASTTO15AMASCONCLUIDOF
                            </th>

<th>CHAGASTTOMUJERESOSTPARTOINF
                            </th>

<th>CHAGASTTOMUJERESOSTPARTOCONF
                            </th>

<th>CHAGASVIVIENDASEVAL
                            </th>

<th>CHAGASVIVIENDASPOSI
                            </th>

<th>CHAGASVIVIENDASROC
                            </th>

<th>VECTORESVIVIENDASEVALENTOMOL
                            </th>

<th>VECTORESVIVIENDASPOSI
                            </th>

<th>VECTORESTTOLEISHINICIADOF
                            </th>

<th>VECTORESTTOLEISHINICIADOM
                            </th>

<th>VECTORESTTOLEISHCONCLM
                            </th>

<th>VECTORESTTOLEISHCONCLF
                            </th>

<th>VECTORESTTOLEISHMUCOINIM
                            </th>

<th>VECTORESTTOLEISHMUCOINIF
                            </th>

<th>VECTORESTTOLEISHMUCOCONM
                            </th>

<th>VECTORESTTOLEISHMUCOCONF
                            </th>

<th>VECTORESTTOLEISHMUCOCUTAINIM
                            </th>

<th>VECTORESTTOLEISHMUCOCUTAINIF
                            </th>

<th>VECTORESTTOLEISHMUCOCUTACONM
                            </th>

<th>VECTORESTTOLEISHMUCOCUTACONF
                            </th>

<th>VECTORESTTOLEISHVISCINIM
                            </th>

<th>VECTORESTTOLEISHVISCINIF
                            </th>

<th>VECTORESTTOLEISHVISCONM
                            </th>

<th>VECTORESTTOLEISHVISCONF
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

 <td>{{ $row->vihpreconsejeriam}}</td>

 <td>{{ $row->vihpreconsejeriaf}}</td>

 <td>{{ $row->vihprapidaembf}}</td>

 <td>{{ $row->vihprapidam}}</td>

 <td>{{ $row->vihprapidaf}}</td>

 <td>{{ $row->tbsintomaticosrm}}</td>

 <td>{{ $row->tbsintomaticosrf}}</td>

 <td>{{ $row->tbpbaarnuevosposm}}</td>

 <td>{{ $row->tbpbaarnuevosposf}}</td>

 <td>{{ $row->tbpbaarnuevosnegm}}</td>

 <td>{{ $row->tbpbaarnuevosnegf}}</td>

 <td>{{ $row->tbtbextrapnm}}</td>

 <td>{{ $row->tbtbextrapnf}}</td>

 <td>{{ $row->tbesqim}}</td>

 <td>{{ $row->tbesqif}}</td>

 <td>{{ $row->tbesqiim}}</td>

 <td>{{ $row->tbesqiif}}</td>

 <td>{{ $row->tbesqiiim}}</td>

 <td>{{ $row->tbesqiiif}}</td>

 <td>{{ $row->tbquimiprofilaxism5m}}</td>

 <td>{{ $row->tbquimiprofilaxism5f}}</td>

 <td>{{ $row->tbbaarposnuevoscuradosm}}</td>

 <td>{{ $row->tbbaarposnuevoscuradosf}}</td>

 <td>{{ $row->tbttopausibacilarinim}}</td>

 <td>{{ $row->tbttopausibacilarinif}}</td>

 <td>{{ $row->tbttomultibacilarinim}}</td>

 <td>{{ $row->tbttomultibacilarinif}}</td>

 <td>{{ $row->malariamuestrasvivaxm}}</td>

 <td>{{ $row->malariamuestrasvivaxf}}</td>

 <td>{{ $row->malariamuestrasfalciparumm}}</td>

 <td>{{ $row->malariamuestrasfalciparumf}}</td>

 <td>{{ $row->malariaconfirmadosvivaxm}}</td>

 <td>{{ $row->malariaconfirmadosvivaxf}}</td>

 <td>{{ $row->malariaconfirmadosfalciparumm}}</td>

 <td>{{ $row->malariaconfirmadosfalciparumf}}</td>

 <td>{{ $row->malariattovivaxm}}</td>

 <td>{{ $row->malariattovivaxf}}</td>

 <td>{{ $row->malariattofalciparumm}}</td>

 <td>{{ $row->malariattofalciparumf}}</td>

 <td>{{ $row->malariattosospechavivaxm}}</td>

 <td>{{ $row->malariattosospechavivaxf}}</td>

 <td>{{ $row->malariattosospechafalciparumm}}</td>

 <td>{{ $row->malariattosospechafalciparumf}}</td>

 <td>{{ $row->malariattoantes48hrsiniciosintomasvivaxm}}</td>

 <td>{{ $row->malariattoantes48hrsiniciosintomasvivaxf}}</td>

 <td>{{ $row->malariattoantes48hrsiniciosintomasfalciparumm}}</td>

 <td>{{ $row->malariattoantes48hrsiniciosintomasfalciparumf}}</td>

 <td>{{ $row->chagasttornam1ainiciadm}}</td>

 <td>{{ $row->chagasttornam1ainiciadf}}</td>

 <td>{{ $row->chagasttornam1aconcluidom}}</td>

 <td>{{ $row->chagasttornam1aconcluidof}}</td>

 <td>{{ $row->chagastto1am5ainiciadm}}</td>

 <td>{{ $row->chagastto1am5ainiciadf}}</td>

 <td>{{ $row->chagastto1am5aconcluidom}}</td>

 <td>{{ $row->chagastto1am5aconcluidof}}</td>

 <td>{{ $row->chagastto5am15ainiciadm}}</td>

 <td>{{ $row->chagastto5am15ainiciadf}}</td>

 <td>{{ $row->chagastto5am15aconcluidom}}</td>

 <td>{{ $row->chagastto5am15aconcluidof}}</td>

 <td>{{ $row->chagastto15amasiniciadm}}</td>

 <td>{{ $row->chagastto15amasiniciadf}}</td>

 <td>{{ $row->chagastto15amasconcluidom}}</td>

 <td>{{ $row->chagastto15amasconcluidof}}</td>

 <td>{{ $row->chagasttomujeresostpartoinf}}</td>

 <td>{{ $row->chagasttomujeresostpartoconf}}</td>

 <td>{{ $row->chagasviviendaseval}}</td>

 <td>{{ $row->chagasviviendasposi}}</td>

 <td>{{ $row->chagasviviendasroc}}</td>

 <td>{{ $row->vectoresviviendasevalentomol}}</td>

 <td>{{ $row->vectoresviviendasposi}}</td>

 <td>{{ $row->vectoresttoleishiniciadof}}</td>

 <td>{{ $row->vectoresttoleishiniciadom}}</td>

 <td>{{ $row->vectoresttoleishconclm}}</td>

 <td>{{ $row->vectoresttoleishconclf}}</td>

 <td>{{ $row->vectoresttoleishmucoinim}}</td>

 <td>{{ $row->vectoresttoleishmucoinif}}</td>

 <td>{{ $row->vectoresttoleishmucoconm}}</td>

 <td>{{ $row->vectoresttoleishmucoconf}}</td>

 <td>{{ $row->vectoresttoleishmucocutainim}}</td>

 <td>{{ $row->vectoresttoleishmucocutainif}}</td>

 <td>{{ $row->vectoresttoleishmucocutaconm}}</td>

 <td>{{ $row->vectoresttoleishmucocutaconf}}</td>

 <td>{{ $row->vectoresttoleishviscinim}}</td>

 <td>{{ $row->vectoresttoleishviscinif}}</td>

 <td>{{ $row->vectoresttoleishvisconm}}</td>

 <td>{{ $row->vectoresttoleishvisconf}}</td>

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
<div class='form-group'><label for='vihpreconsejeriam'>Vihpreconsejeriam</label><input type='text' class='form-control @error('vihpreconsejeriam')  is-invalid @enderror' wire:model='vihpreconsejeriam'>@error('vihpreconsejeriam')<div class='invalid-feedback'>{{ $message }}</div>@enderror</div>
<div class='form-group'><label for='vihpreconsejeriaf'>Vihpreconsejeriaf</label><input type='text' class='form-control @error('vihpreconsejeriaf')  is-invalid @enderror' wire:model='vihpreconsejeriaf'>@error('vihpreconsejeriaf')<div class='invalid-feedback'>{{ $message }}</div>@enderror</div>
<div class='form-group'><label for='vihprapidaembf'>Vihprapidaembf</label><input type='text' class='form-control @error('vihprapidaembf')  is-invalid @enderror' wire:model='vihprapidaembf'>@error('vihprapidaembf')<div class='invalid-feedback'>{{ $message }}</div>@enderror</div>
<div class='form-group'><label for='vihprapidam'>Vihprapidam</label><input type='text' class='form-control @error('vihprapidam')  is-invalid @enderror' wire:model='vihprapidam'>@error('vihprapidam')<div class='invalid-feedback'>{{ $message }}</div>@enderror</div>
<div class='form-group'><label for='vihprapidaf'>Vihprapidaf</label><input type='text' class='form-control @error('vihprapidaf')  is-invalid @enderror' wire:model='vihprapidaf'>@error('vihprapidaf')<div class='invalid-feedback'>{{ $message }}</div>@enderror</div>
<div class='form-group'><label for='tbsintomaticosrm'>Tbsintomaticosrm</label><input type='text' class='form-control @error('tbsintomaticosrm')  is-invalid @enderror' wire:model='tbsintomaticosrm'>@error('tbsintomaticosrm')<div class='invalid-feedback'>{{ $message }}</div>@enderror</div>
<div class='form-group'><label for='tbsintomaticosrf'>Tbsintomaticosrf</label><input type='text' class='form-control @error('tbsintomaticosrf')  is-invalid @enderror' wire:model='tbsintomaticosrf'>@error('tbsintomaticosrf')<div class='invalid-feedback'>{{ $message }}</div>@enderror</div>
<div class='form-group'><label for='tbpbaarnuevosposm'>Tbpbaarnuevosposm</label><input type='text' class='form-control @error('tbpbaarnuevosposm')  is-invalid @enderror' wire:model='tbpbaarnuevosposm'>@error('tbpbaarnuevosposm')<div class='invalid-feedback'>{{ $message }}</div>@enderror</div>
<div class='form-group'><label for='tbpbaarnuevosposf'>Tbpbaarnuevosposf</label><input type='text' class='form-control @error('tbpbaarnuevosposf')  is-invalid @enderror' wire:model='tbpbaarnuevosposf'>@error('tbpbaarnuevosposf')<div class='invalid-feedback'>{{ $message }}</div>@enderror</div>
<div class='form-group'><label for='tbpbaarnuevosnegm'>Tbpbaarnuevosnegm</label><input type='text' class='form-control @error('tbpbaarnuevosnegm')  is-invalid @enderror' wire:model='tbpbaarnuevosnegm'>@error('tbpbaarnuevosnegm')<div class='invalid-feedback'>{{ $message }}</div>@enderror</div>
<div class='form-group'><label for='tbpbaarnuevosnegf'>Tbpbaarnuevosnegf</label><input type='text' class='form-control @error('tbpbaarnuevosnegf')  is-invalid @enderror' wire:model='tbpbaarnuevosnegf'>@error('tbpbaarnuevosnegf')<div class='invalid-feedback'>{{ $message }}</div>@enderror</div>
<div class='form-group'><label for='tbtbextrapnm'>Tbtbextrapnm</label><input type='text' class='form-control @error('tbtbextrapnm')  is-invalid @enderror' wire:model='tbtbextrapnm'>@error('tbtbextrapnm')<div class='invalid-feedback'>{{ $message }}</div>@enderror</div>
<div class='form-group'><label for='tbtbextrapnf'>Tbtbextrapnf</label><input type='text' class='form-control @error('tbtbextrapnf')  is-invalid @enderror' wire:model='tbtbextrapnf'>@error('tbtbextrapnf')<div class='invalid-feedback'>{{ $message }}</div>@enderror</div>
<div class='form-group'><label for='tbesqim'>Tbesqim</label><input type='text' class='form-control @error('tbesqim')  is-invalid @enderror' wire:model='tbesqim'>@error('tbesqim')<div class='invalid-feedback'>{{ $message }}</div>@enderror</div>
<div class='form-group'><label for='tbesqif'>Tbesqif</label><input type='text' class='form-control @error('tbesqif')  is-invalid @enderror' wire:model='tbesqif'>@error('tbesqif')<div class='invalid-feedback'>{{ $message }}</div>@enderror</div>
<div class='form-group'><label for='tbesqiim'>Tbesqiim</label><input type='text' class='form-control @error('tbesqiim')  is-invalid @enderror' wire:model='tbesqiim'>@error('tbesqiim')<div class='invalid-feedback'>{{ $message }}</div>@enderror</div>
<div class='form-group'><label for='tbesqiif'>Tbesqiif</label><input type='text' class='form-control @error('tbesqiif')  is-invalid @enderror' wire:model='tbesqiif'>@error('tbesqiif')<div class='invalid-feedback'>{{ $message }}</div>@enderror</div>
<div class='form-group'><label for='tbesqiiim'>Tbesqiiim</label><input type='text' class='form-control @error('tbesqiiim')  is-invalid @enderror' wire:model='tbesqiiim'>@error('tbesqiiim')<div class='invalid-feedback'>{{ $message }}</div>@enderror</div>
<div class='form-group'><label for='tbesqiiif'>Tbesqiiif</label><input type='text' class='form-control @error('tbesqiiif')  is-invalid @enderror' wire:model='tbesqiiif'>@error('tbesqiiif')<div class='invalid-feedback'>{{ $message }}</div>@enderror</div>
<div class='form-group'><label for='tbquimiprofilaxism5m'>Tbquimiprofilaxism5m</label><input type='text' class='form-control @error('tbquimiprofilaxism5m')  is-invalid @enderror' wire:model='tbquimiprofilaxism5m'>@error('tbquimiprofilaxism5m')<div class='invalid-feedback'>{{ $message }}</div>@enderror</div>
<div class='form-group'><label for='tbquimiprofilaxism5f'>Tbquimiprofilaxism5f</label><input type='text' class='form-control @error('tbquimiprofilaxism5f')  is-invalid @enderror' wire:model='tbquimiprofilaxism5f'>@error('tbquimiprofilaxism5f')<div class='invalid-feedback'>{{ $message }}</div>@enderror</div>
<div class='form-group'><label for='tbbaarposnuevoscuradosm'>Tbbaarposnuevoscuradosm</label><input type='text' class='form-control @error('tbbaarposnuevoscuradosm')  is-invalid @enderror' wire:model='tbbaarposnuevoscuradosm'>@error('tbbaarposnuevoscuradosm')<div class='invalid-feedback'>{{ $message }}</div>@enderror</div>
<div class='form-group'><label for='tbbaarposnuevoscuradosf'>Tbbaarposnuevoscuradosf</label><input type='text' class='form-control @error('tbbaarposnuevoscuradosf')  is-invalid @enderror' wire:model='tbbaarposnuevoscuradosf'>@error('tbbaarposnuevoscuradosf')<div class='invalid-feedback'>{{ $message }}</div>@enderror</div>
<div class='form-group'><label for='tbttopausibacilarinim'>Tbttopausibacilarinim</label><input type='text' class='form-control @error('tbttopausibacilarinim')  is-invalid @enderror' wire:model='tbttopausibacilarinim'>@error('tbttopausibacilarinim')<div class='invalid-feedback'>{{ $message }}</div>@enderror</div>
<div class='form-group'><label for='tbttopausibacilarinif'>Tbttopausibacilarinif</label><input type='text' class='form-control @error('tbttopausibacilarinif')  is-invalid @enderror' wire:model='tbttopausibacilarinif'>@error('tbttopausibacilarinif')<div class='invalid-feedback'>{{ $message }}</div>@enderror</div>
<div class='form-group'><label for='tbttomultibacilarinim'>Tbttomultibacilarinim</label><input type='text' class='form-control @error('tbttomultibacilarinim')  is-invalid @enderror' wire:model='tbttomultibacilarinim'>@error('tbttomultibacilarinim')<div class='invalid-feedback'>{{ $message }}</div>@enderror</div>
<div class='form-group'><label for='tbttomultibacilarinif'>Tbttomultibacilarinif</label><input type='text' class='form-control @error('tbttomultibacilarinif')  is-invalid @enderror' wire:model='tbttomultibacilarinif'>@error('tbttomultibacilarinif')<div class='invalid-feedback'>{{ $message }}</div>@enderror</div>
<div class='form-group'><label for='malariamuestrasvivaxm'>Malariamuestrasvivaxm</label><input type='text' class='form-control @error('malariamuestrasvivaxm')  is-invalid @enderror' wire:model='malariamuestrasvivaxm'>@error('malariamuestrasvivaxm')<div class='invalid-feedback'>{{ $message }}</div>@enderror</div>
<div class='form-group'><label for='malariamuestrasvivaxf'>Malariamuestrasvivaxf</label><input type='text' class='form-control @error('malariamuestrasvivaxf')  is-invalid @enderror' wire:model='malariamuestrasvivaxf'>@error('malariamuestrasvivaxf')<div class='invalid-feedback'>{{ $message }}</div>@enderror</div>
<div class='form-group'><label for='malariamuestrasfalciparumm'>Malariamuestrasfalciparumm</label><input type='text' class='form-control @error('malariamuestrasfalciparumm')  is-invalid @enderror' wire:model='malariamuestrasfalciparumm'>@error('malariamuestrasfalciparumm')<div class='invalid-feedback'>{{ $message }}</div>@enderror</div>
<div class='form-group'><label for='malariamuestrasfalciparumf'>Malariamuestrasfalciparumf</label><input type='text' class='form-control @error('malariamuestrasfalciparumf')  is-invalid @enderror' wire:model='malariamuestrasfalciparumf'>@error('malariamuestrasfalciparumf')<div class='invalid-feedback'>{{ $message }}</div>@enderror</div>
<div class='form-group'><label for='malariaconfirmadosvivaxm'>Malariaconfirmadosvivaxm</label><input type='text' class='form-control @error('malariaconfirmadosvivaxm')  is-invalid @enderror' wire:model='malariaconfirmadosvivaxm'>@error('malariaconfirmadosvivaxm')<div class='invalid-feedback'>{{ $message }}</div>@enderror</div>
<div class='form-group'><label for='malariaconfirmadosvivaxf'>Malariaconfirmadosvivaxf</label><input type='text' class='form-control @error('malariaconfirmadosvivaxf')  is-invalid @enderror' wire:model='malariaconfirmadosvivaxf'>@error('malariaconfirmadosvivaxf')<div class='invalid-feedback'>{{ $message }}</div>@enderror</div>
<div class='form-group'><label for='malariaconfirmadosfalciparumm'>Malariaconfirmadosfalciparumm</label><input type='text' class='form-control @error('malariaconfirmadosfalciparumm')  is-invalid @enderror' wire:model='malariaconfirmadosfalciparumm'>@error('malariaconfirmadosfalciparumm')<div class='invalid-feedback'>{{ $message }}</div>@enderror</div>
<div class='form-group'><label for='malariaconfirmadosfalciparumf'>Malariaconfirmadosfalciparumf</label><input type='text' class='form-control @error('malariaconfirmadosfalciparumf')  is-invalid @enderror' wire:model='malariaconfirmadosfalciparumf'>@error('malariaconfirmadosfalciparumf')<div class='invalid-feedback'>{{ $message }}</div>@enderror</div>
<div class='form-group'><label for='malariattovivaxm'>Malariattovivaxm</label><input type='text' class='form-control @error('malariattovivaxm')  is-invalid @enderror' wire:model='malariattovivaxm'>@error('malariattovivaxm')<div class='invalid-feedback'>{{ $message }}</div>@enderror</div>
<div class='form-group'><label for='malariattovivaxf'>Malariattovivaxf</label><input type='text' class='form-control @error('malariattovivaxf')  is-invalid @enderror' wire:model='malariattovivaxf'>@error('malariattovivaxf')<div class='invalid-feedback'>{{ $message }}</div>@enderror</div>
<div class='form-group'><label for='malariattofalciparumm'>Malariattofalciparumm</label><input type='text' class='form-control @error('malariattofalciparumm')  is-invalid @enderror' wire:model='malariattofalciparumm'>@error('malariattofalciparumm')<div class='invalid-feedback'>{{ $message }}</div>@enderror</div>
<div class='form-group'><label for='malariattofalciparumf'>Malariattofalciparumf</label><input type='text' class='form-control @error('malariattofalciparumf')  is-invalid @enderror' wire:model='malariattofalciparumf'>@error('malariattofalciparumf')<div class='invalid-feedback'>{{ $message }}</div>@enderror</div>
<div class='form-group'><label for='malariattosospechavivaxm'>Malariattosospechavivaxm</label><input type='text' class='form-control @error('malariattosospechavivaxm')  is-invalid @enderror' wire:model='malariattosospechavivaxm'>@error('malariattosospechavivaxm')<div class='invalid-feedback'>{{ $message }}</div>@enderror</div>
<div class='form-group'><label for='malariattosospechavivaxf'>Malariattosospechavivaxf</label><input type='text' class='form-control @error('malariattosospechavivaxf')  is-invalid @enderror' wire:model='malariattosospechavivaxf'>@error('malariattosospechavivaxf')<div class='invalid-feedback'>{{ $message }}</div>@enderror</div>
<div class='form-group'><label for='malariattosospechafalciparumm'>Malariattosospechafalciparumm</label><input type='text' class='form-control @error('malariattosospechafalciparumm')  is-invalid @enderror' wire:model='malariattosospechafalciparumm'>@error('malariattosospechafalciparumm')<div class='invalid-feedback'>{{ $message }}</div>@enderror</div>
<div class='form-group'><label for='malariattosospechafalciparumf'>Malariattosospechafalciparumf</label><input type='text' class='form-control @error('malariattosospechafalciparumf')  is-invalid @enderror' wire:model='malariattosospechafalciparumf'>@error('malariattosospechafalciparumf')<div class='invalid-feedback'>{{ $message }}</div>@enderror</div>
<div class='form-group'><label for='malariattoantes48hrsiniciosintomasvivaxm'>Malariattoantes48hrsiniciosintomasvivaxm</label><input type='text' class='form-control @error('malariattoantes48hrsiniciosintomasvivaxm')  is-invalid @enderror' wire:model='malariattoantes48hrsiniciosintomasvivaxm'>@error('malariattoantes48hrsiniciosintomasvivaxm')<div class='invalid-feedback'>{{ $message }}</div>@enderror</div>
<div class='form-group'><label for='malariattoantes48hrsiniciosintomasvivaxf'>Malariattoantes48hrsiniciosintomasvivaxf</label><input type='text' class='form-control @error('malariattoantes48hrsiniciosintomasvivaxf')  is-invalid @enderror' wire:model='malariattoantes48hrsiniciosintomasvivaxf'>@error('malariattoantes48hrsiniciosintomasvivaxf')<div class='invalid-feedback'>{{ $message }}</div>@enderror</div>
<div class='form-group'><label for='malariattoantes48hrsiniciosintomasfalciparumm'>Malariattoantes48hrsiniciosintomasfalciparumm</label><input type='text' class='form-control @error('malariattoantes48hrsiniciosintomasfalciparumm')  is-invalid @enderror' wire:model='malariattoantes48hrsiniciosintomasfalciparumm'>@error('malariattoantes48hrsiniciosintomasfalciparumm')<div class='invalid-feedback'>{{ $message }}</div>@enderror</div>
<div class='form-group'><label for='malariattoantes48hrsiniciosintomasfalciparumf'>Malariattoantes48hrsiniciosintomasfalciparumf</label><input type='text' class='form-control @error('malariattoantes48hrsiniciosintomasfalciparumf')  is-invalid @enderror' wire:model='malariattoantes48hrsiniciosintomasfalciparumf'>@error('malariattoantes48hrsiniciosintomasfalciparumf')<div class='invalid-feedback'>{{ $message }}</div>@enderror</div>
<div class='form-group'><label for='chagasttornam1ainiciadm'>Chagasttornam1ainiciadm</label><input type='text' class='form-control @error('chagasttornam1ainiciadm')  is-invalid @enderror' wire:model='chagasttornam1ainiciadm'>@error('chagasttornam1ainiciadm')<div class='invalid-feedback'>{{ $message }}</div>@enderror</div>
<div class='form-group'><label for='chagasttornam1ainiciadf'>Chagasttornam1ainiciadf</label><input type='text' class='form-control @error('chagasttornam1ainiciadf')  is-invalid @enderror' wire:model='chagasttornam1ainiciadf'>@error('chagasttornam1ainiciadf')<div class='invalid-feedback'>{{ $message }}</div>@enderror</div>
<div class='form-group'><label for='chagasttornam1aconcluidom'>Chagasttornam1aconcluidom</label><input type='text' class='form-control @error('chagasttornam1aconcluidom')  is-invalid @enderror' wire:model='chagasttornam1aconcluidom'>@error('chagasttornam1aconcluidom')<div class='invalid-feedback'>{{ $message }}</div>@enderror</div>
<div class='form-group'><label for='chagasttornam1aconcluidof'>Chagasttornam1aconcluidof</label><input type='text' class='form-control @error('chagasttornam1aconcluidof')  is-invalid @enderror' wire:model='chagasttornam1aconcluidof'>@error('chagasttornam1aconcluidof')<div class='invalid-feedback'>{{ $message }}</div>@enderror</div>
<div class='form-group'><label for='chagastto1am5ainiciadm'>Chagastto1am5ainiciadm</label><input type='text' class='form-control @error('chagastto1am5ainiciadm')  is-invalid @enderror' wire:model='chagastto1am5ainiciadm'>@error('chagastto1am5ainiciadm')<div class='invalid-feedback'>{{ $message }}</div>@enderror</div>
<div class='form-group'><label for='chagastto1am5ainiciadf'>Chagastto1am5ainiciadf</label><input type='text' class='form-control @error('chagastto1am5ainiciadf')  is-invalid @enderror' wire:model='chagastto1am5ainiciadf'>@error('chagastto1am5ainiciadf')<div class='invalid-feedback'>{{ $message }}</div>@enderror</div>
<div class='form-group'><label for='chagastto1am5aconcluidom'>Chagastto1am5aconcluidom</label><input type='text' class='form-control @error('chagastto1am5aconcluidom')  is-invalid @enderror' wire:model='chagastto1am5aconcluidom'>@error('chagastto1am5aconcluidom')<div class='invalid-feedback'>{{ $message }}</div>@enderror</div>
<div class='form-group'><label for='chagastto1am5aconcluidof'>Chagastto1am5aconcluidof</label><input type='text' class='form-control @error('chagastto1am5aconcluidof')  is-invalid @enderror' wire:model='chagastto1am5aconcluidof'>@error('chagastto1am5aconcluidof')<div class='invalid-feedback'>{{ $message }}</div>@enderror</div>
<div class='form-group'><label for='chagastto5am15ainiciadm'>Chagastto5am15ainiciadm</label><input type='text' class='form-control @error('chagastto5am15ainiciadm')  is-invalid @enderror' wire:model='chagastto5am15ainiciadm'>@error('chagastto5am15ainiciadm')<div class='invalid-feedback'>{{ $message }}</div>@enderror</div>
<div class='form-group'><label for='chagastto5am15ainiciadf'>Chagastto5am15ainiciadf</label><input type='text' class='form-control @error('chagastto5am15ainiciadf')  is-invalid @enderror' wire:model='chagastto5am15ainiciadf'>@error('chagastto5am15ainiciadf')<div class='invalid-feedback'>{{ $message }}</div>@enderror</div>
<div class='form-group'><label for='chagastto5am15aconcluidom'>Chagastto5am15aconcluidom</label><input type='text' class='form-control @error('chagastto5am15aconcluidom')  is-invalid @enderror' wire:model='chagastto5am15aconcluidom'>@error('chagastto5am15aconcluidom')<div class='invalid-feedback'>{{ $message }}</div>@enderror</div>
<div class='form-group'><label for='chagastto5am15aconcluidof'>Chagastto5am15aconcluidof</label><input type='text' class='form-control @error('chagastto5am15aconcluidof')  is-invalid @enderror' wire:model='chagastto5am15aconcluidof'>@error('chagastto5am15aconcluidof')<div class='invalid-feedback'>{{ $message }}</div>@enderror</div>
<div class='form-group'><label for='chagastto15amasiniciadm'>Chagastto15amasiniciadm</label><input type='text' class='form-control @error('chagastto15amasiniciadm')  is-invalid @enderror' wire:model='chagastto15amasiniciadm'>@error('chagastto15amasiniciadm')<div class='invalid-feedback'>{{ $message }}</div>@enderror</div>
<div class='form-group'><label for='chagastto15amasiniciadf'>Chagastto15amasiniciadf</label><input type='text' class='form-control @error('chagastto15amasiniciadf')  is-invalid @enderror' wire:model='chagastto15amasiniciadf'>@error('chagastto15amasiniciadf')<div class='invalid-feedback'>{{ $message }}</div>@enderror</div>
<div class='form-group'><label for='chagastto15amasconcluidom'>Chagastto15amasconcluidom</label><input type='text' class='form-control @error('chagastto15amasconcluidom')  is-invalid @enderror' wire:model='chagastto15amasconcluidom'>@error('chagastto15amasconcluidom')<div class='invalid-feedback'>{{ $message }}</div>@enderror</div>
<div class='form-group'><label for='chagastto15amasconcluidof'>Chagastto15amasconcluidof</label><input type='text' class='form-control @error('chagastto15amasconcluidof')  is-invalid @enderror' wire:model='chagastto15amasconcluidof'>@error('chagastto15amasconcluidof')<div class='invalid-feedback'>{{ $message }}</div>@enderror</div>
<div class='form-group'><label for='chagasttomujeresostpartoinf'>Chagasttomujeresostpartoinf</label><input type='text' class='form-control @error('chagasttomujeresostpartoinf')  is-invalid @enderror' wire:model='chagasttomujeresostpartoinf'>@error('chagasttomujeresostpartoinf')<div class='invalid-feedback'>{{ $message }}</div>@enderror</div>
<div class='form-group'><label for='chagasttomujeresostpartoconf'>Chagasttomujeresostpartoconf</label><input type='text' class='form-control @error('chagasttomujeresostpartoconf')  is-invalid @enderror' wire:model='chagasttomujeresostpartoconf'>@error('chagasttomujeresostpartoconf')<div class='invalid-feedback'>{{ $message }}</div>@enderror</div>
<div class='form-group'><label for='chagasviviendaseval'>Chagasviviendaseval</label><input type='text' class='form-control @error('chagasviviendaseval')  is-invalid @enderror' wire:model='chagasviviendaseval'>@error('chagasviviendaseval')<div class='invalid-feedback'>{{ $message }}</div>@enderror</div>
<div class='form-group'><label for='chagasviviendasposi'>Chagasviviendasposi</label><input type='text' class='form-control @error('chagasviviendasposi')  is-invalid @enderror' wire:model='chagasviviendasposi'>@error('chagasviviendasposi')<div class='invalid-feedback'>{{ $message }}</div>@enderror</div>
<div class='form-group'><label for='chagasviviendasroc'>Chagasviviendasroc</label><input type='text' class='form-control @error('chagasviviendasroc')  is-invalid @enderror' wire:model='chagasviviendasroc'>@error('chagasviviendasroc')<div class='invalid-feedback'>{{ $message }}</div>@enderror</div>
<div class='form-group'><label for='vectoresviviendasevalentomol'>Vectoresviviendasevalentomol</label><input type='text' class='form-control @error('vectoresviviendasevalentomol')  is-invalid @enderror' wire:model='vectoresviviendasevalentomol'>@error('vectoresviviendasevalentomol')<div class='invalid-feedback'>{{ $message }}</div>@enderror</div>
<div class='form-group'><label for='vectoresviviendasposi'>Vectoresviviendasposi</label><input type='text' class='form-control @error('vectoresviviendasposi')  is-invalid @enderror' wire:model='vectoresviviendasposi'>@error('vectoresviviendasposi')<div class='invalid-feedback'>{{ $message }}</div>@enderror</div>
<div class='form-group'><label for='vectoresttoleishiniciadof'>Vectoresttoleishiniciadof</label><input type='text' class='form-control @error('vectoresttoleishiniciadof')  is-invalid @enderror' wire:model='vectoresttoleishiniciadof'>@error('vectoresttoleishiniciadof')<div class='invalid-feedback'>{{ $message }}</div>@enderror</div>
<div class='form-group'><label for='vectoresttoleishiniciadom'>Vectoresttoleishiniciadom</label><input type='text' class='form-control @error('vectoresttoleishiniciadom')  is-invalid @enderror' wire:model='vectoresttoleishiniciadom'>@error('vectoresttoleishiniciadom')<div class='invalid-feedback'>{{ $message }}</div>@enderror</div>
<div class='form-group'><label for='vectoresttoleishconclm'>Vectoresttoleishconclm</label><input type='text' class='form-control @error('vectoresttoleishconclm')  is-invalid @enderror' wire:model='vectoresttoleishconclm'>@error('vectoresttoleishconclm')<div class='invalid-feedback'>{{ $message }}</div>@enderror</div>
<div class='form-group'><label for='vectoresttoleishconclf'>Vectoresttoleishconclf</label><input type='text' class='form-control @error('vectoresttoleishconclf')  is-invalid @enderror' wire:model='vectoresttoleishconclf'>@error('vectoresttoleishconclf')<div class='invalid-feedback'>{{ $message }}</div>@enderror</div>
<div class='form-group'><label for='vectoresttoleishmucoinim'>Vectoresttoleishmucoinim</label><input type='text' class='form-control @error('vectoresttoleishmucoinim')  is-invalid @enderror' wire:model='vectoresttoleishmucoinim'>@error('vectoresttoleishmucoinim')<div class='invalid-feedback'>{{ $message }}</div>@enderror</div>
<div class='form-group'><label for='vectoresttoleishmucoinif'>Vectoresttoleishmucoinif</label><input type='text' class='form-control @error('vectoresttoleishmucoinif')  is-invalid @enderror' wire:model='vectoresttoleishmucoinif'>@error('vectoresttoleishmucoinif')<div class='invalid-feedback'>{{ $message }}</div>@enderror</div>
<div class='form-group'><label for='vectoresttoleishmucoconm'>Vectoresttoleishmucoconm</label><input type='text' class='form-control @error('vectoresttoleishmucoconm')  is-invalid @enderror' wire:model='vectoresttoleishmucoconm'>@error('vectoresttoleishmucoconm')<div class='invalid-feedback'>{{ $message }}</div>@enderror</div>
<div class='form-group'><label for='vectoresttoleishmucoconf'>Vectoresttoleishmucoconf</label><input type='text' class='form-control @error('vectoresttoleishmucoconf')  is-invalid @enderror' wire:model='vectoresttoleishmucoconf'>@error('vectoresttoleishmucoconf')<div class='invalid-feedback'>{{ $message }}</div>@enderror</div>
<div class='form-group'><label for='vectoresttoleishmucocutainim'>Vectoresttoleishmucocutainim</label><input type='text' class='form-control @error('vectoresttoleishmucocutainim')  is-invalid @enderror' wire:model='vectoresttoleishmucocutainim'>@error('vectoresttoleishmucocutainim')<div class='invalid-feedback'>{{ $message }}</div>@enderror</div>
<div class='form-group'><label for='vectoresttoleishmucocutainif'>Vectoresttoleishmucocutainif</label><input type='text' class='form-control @error('vectoresttoleishmucocutainif')  is-invalid @enderror' wire:model='vectoresttoleishmucocutainif'>@error('vectoresttoleishmucocutainif')<div class='invalid-feedback'>{{ $message }}</div>@enderror</div>
<div class='form-group'><label for='vectoresttoleishmucocutaconm'>Vectoresttoleishmucocutaconm</label><input type='text' class='form-control @error('vectoresttoleishmucocutaconm')  is-invalid @enderror' wire:model='vectoresttoleishmucocutaconm'>@error('vectoresttoleishmucocutaconm')<div class='invalid-feedback'>{{ $message }}</div>@enderror</div>
<div class='form-group'><label for='vectoresttoleishmucocutaconf'>Vectoresttoleishmucocutaconf</label><input type='text' class='form-control @error('vectoresttoleishmucocutaconf')  is-invalid @enderror' wire:model='vectoresttoleishmucocutaconf'>@error('vectoresttoleishmucocutaconf')<div class='invalid-feedback'>{{ $message }}</div>@enderror</div>
<div class='form-group'><label for='vectoresttoleishviscinim'>Vectoresttoleishviscinim</label><input type='text' class='form-control @error('vectoresttoleishviscinim')  is-invalid @enderror' wire:model='vectoresttoleishviscinim'>@error('vectoresttoleishviscinim')<div class='invalid-feedback'>{{ $message }}</div>@enderror</div>
<div class='form-group'><label for='vectoresttoleishviscinif'>Vectoresttoleishviscinif</label><input type='text' class='form-control @error('vectoresttoleishviscinif')  is-invalid @enderror' wire:model='vectoresttoleishviscinif'>@error('vectoresttoleishviscinif')<div class='invalid-feedback'>{{ $message }}</div>@enderror</div>
<div class='form-group'><label for='vectoresttoleishvisconm'>Vectoresttoleishvisconm</label><input type='text' class='form-control @error('vectoresttoleishvisconm')  is-invalid @enderror' wire:model='vectoresttoleishvisconm'>@error('vectoresttoleishvisconm')<div class='invalid-feedback'>{{ $message }}</div>@enderror</div>
<div class='form-group'><label for='vectoresttoleishvisconf'>Vectoresttoleishvisconf</label><input type='text' class='form-control @error('vectoresttoleishvisconf')  is-invalid @enderror' wire:model='vectoresttoleishvisconf'>@error('vectoresttoleishvisconf')<div class='invalid-feedback'>{{ $message }}</div>@enderror</div>

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
