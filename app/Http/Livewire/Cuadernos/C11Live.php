<?php

namespace App\Http\Livewire\Cuadernos;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\C11 as Model;


class C11Live extends Component
{
    use WithPagination;
    protected $paginationTheme = "bootstrap";

    public $paginate = 10;

    public $establecimiento;
   public $medico;
   public $fconsulta;
   public $hclin;
   public $asegurado;
   public $apellidosynombres;
   public $sexo;
   public $fnacimiento;
   public $vihpreconsejeriam;
   public $vihpreconsejeriaf;
   public $vihprapidaembf;
   public $vihprapidam;
   public $vihprapidaf;
   public $tbsintomaticosrm;
   public $tbsintomaticosrf;
   public $tbpbaarnuevosposm;
   public $tbpbaarnuevosposf;
   public $tbpbaarnuevosnegm;
   public $tbpbaarnuevosnegf;
   public $tbtbextrapnm;
   public $tbtbextrapnf;
   public $tbesqim;
   public $tbesqif;
   public $tbesqiim;
   public $tbesqiif;
   public $tbesqiiim;
   public $tbesqiiif;
   public $tbquimiprofilaxism5m;
   public $tbquimiprofilaxism5f;
   public $tbbaarposnuevoscuradosm;
   public $tbbaarposnuevoscuradosf;
   public $tbttopausibacilarinim;
   public $tbttopausibacilarinif;
   public $tbttomultibacilarinim;
   public $tbttomultibacilarinif;
   public $malariamuestrasvivaxm;
   public $malariamuestrasvivaxf;
   public $malariamuestrasfalciparumm;
   public $malariamuestrasfalciparumf;
   public $malariaconfirmadosvivaxm;
   public $malariaconfirmadosvivaxf;
   public $malariaconfirmadosfalciparumm;
   public $malariaconfirmadosfalciparumf;
   public $malariattovivaxm;
   public $malariattovivaxf;
   public $malariattofalciparumm;
   public $malariattofalciparumf;
   public $malariattosospechavivaxm;
   public $malariattosospechavivaxf;
   public $malariattosospechafalciparumm;
   public $malariattosospechafalciparumf;
   public $malariattoantes48hrsiniciosintomasvivaxm;
   public $malariattoantes48hrsiniciosintomasvivaxf;
   public $malariattoantes48hrsiniciosintomasfalciparumm;
   public $malariattoantes48hrsiniciosintomasfalciparumf;
   public $chagasttornam1ainiciadm;
   public $chagasttornam1ainiciadf;
   public $chagasttornam1aconcluidom;
   public $chagasttornam1aconcluidof;
   public $chagastto1am5ainiciadm;
   public $chagastto1am5ainiciadf;
   public $chagastto1am5aconcluidom;
   public $chagastto1am5aconcluidof;
   public $chagastto5am15ainiciadm;
   public $chagastto5am15ainiciadf;
   public $chagastto5am15aconcluidom;
   public $chagastto5am15aconcluidof;
   public $chagastto15amasiniciadm;
   public $chagastto15amasiniciadf;
   public $chagastto15amasconcluidom;
   public $chagastto15amasconcluidof;
   public $chagasttomujeresostpartoinf;
   public $chagasttomujeresostpartoconf;
   public $chagasviviendaseval;
   public $chagasviviendasposi;
   public $chagasviviendasroc;
   public $vectoresviviendasevalentomol;
   public $vectoresviviendasposi;
   public $vectoresttoleishiniciadof;
   public $vectoresttoleishiniciadom;
   public $vectoresttoleishconclm;
   public $vectoresttoleishconclf;
   public $vectoresttoleishmucoinim;
   public $vectoresttoleishmucoinif;
   public $vectoresttoleishmucoconm;
   public $vectoresttoleishmucoconf;
   public $vectoresttoleishmucocutainim;
   public $vectoresttoleishmucocutainif;
   public $vectoresttoleishmucocutaconm;
   public $vectoresttoleishmucocutaconf;
   public $vectoresttoleishviscinim;
   public $vectoresttoleishviscinif;
   public $vectoresttoleishvisconm;
   public $vectoresttoleishvisconf;


    public $mode = 'create';

    public $showForm = false;

    public $primaryId = null;

    public $search;

    public $showConfirmDeletePopup = false;

    protected $rules = [
'establecimiento' => 'required',
'medico' => 'required',
'fconsulta' => 'required',
'hclin' => 'required',
'asegurado' => 'required',
'apellidosynombres' => 'required',
'sexo' => 'required',
'fnacimiento' => 'required',
'vihpreconsejeriam' => 'required',
'vihpreconsejeriaf' => 'required',
'vihprapidaembf' => 'required',
'vihprapidam' => 'required',
'vihprapidaf' => 'required',
'tbsintomaticosrm' => 'required',
'tbsintomaticosrf' => 'required',
'tbpbaarnuevosposm' => 'required',
'tbpbaarnuevosposf' => 'required',
'tbpbaarnuevosnegm' => 'required',
'tbpbaarnuevosnegf' => 'required',
'tbtbextrapnm' => 'required',
'tbtbextrapnf' => 'required',
'tbesqim' => 'required',
'tbesqif' => 'required',
'tbesqiim' => 'required',
'tbesqiif' => 'required',
'tbesqiiim' => 'required',
'tbesqiiif' => 'required',
'tbquimiprofilaxism5m' => 'required',
'tbquimiprofilaxism5f' => 'required',
'tbbaarposnuevoscuradosm' => 'required',
'tbbaarposnuevoscuradosf' => 'required',
'tbttopausibacilarinim' => 'required',
'tbttopausibacilarinif' => 'required',
'tbttomultibacilarinim' => 'required',
'tbttomultibacilarinif' => 'required',
'malariamuestrasvivaxm' => 'required',
'malariamuestrasvivaxf' => 'required',
'malariamuestrasfalciparumm' => 'required',
'malariamuestrasfalciparumf' => 'required',
'malariaconfirmadosvivaxm' => 'required',
'malariaconfirmadosvivaxf' => 'required',
'malariaconfirmadosfalciparumm' => 'required',
'malariaconfirmadosfalciparumf' => 'required',
'malariattovivaxm' => 'required',
'malariattovivaxf' => 'required',
'malariattofalciparumm' => 'required',
'malariattofalciparumf' => 'required',
'malariattosospechavivaxm' => 'required',
'malariattosospechavivaxf' => 'required',
'malariattosospechafalciparumm' => 'required',
'malariattosospechafalciparumf' => 'required',
'malariattoantes48hrsiniciosintomasvivaxm' => 'required',
'malariattoantes48hrsiniciosintomasvivaxf' => 'required',
'malariattoantes48hrsiniciosintomasfalciparumm' => 'required',
'malariattoantes48hrsiniciosintomasfalciparumf' => 'required',
'chagasttornam1ainiciadm' => 'required',
'chagasttornam1ainiciadf' => 'required',
'chagasttornam1aconcluidom' => 'required',
'chagasttornam1aconcluidof' => 'required',
'chagastto1am5ainiciadm' => 'required',
'chagastto1am5ainiciadf' => 'required',
'chagastto1am5aconcluidom' => 'required',
'chagastto1am5aconcluidof' => 'required',
'chagastto5am15ainiciadm' => 'required',
'chagastto5am15ainiciadf' => 'required',
'chagastto5am15aconcluidom' => 'required',
'chagastto5am15aconcluidof' => 'required',
'chagastto15amasiniciadm' => 'required',
'chagastto15amasiniciadf' => 'required',
'chagastto15amasconcluidom' => 'required',
'chagastto15amasconcluidof' => 'required',
'chagasttomujeresostpartoinf' => 'required',
'chagasttomujeresostpartoconf' => 'required',
'chagasviviendaseval' => 'required',
'chagasviviendasposi' => 'required',
'chagasviviendasroc' => 'required',
'vectoresviviendasevalentomol' => 'required',
'vectoresviviendasposi' => 'required',
'vectoresttoleishiniciadof' => 'required',
'vectoresttoleishiniciadom' => 'required',
'vectoresttoleishconclm' => 'required',
'vectoresttoleishconclf' => 'required',
'vectoresttoleishmucoinim' => 'required',
'vectoresttoleishmucoinif' => 'required',
'vectoresttoleishmucoconm' => 'required',
'vectoresttoleishmucoconf' => 'required',
'vectoresttoleishmucocutainim' => 'required',
'vectoresttoleishmucocutainif' => 'required',
'vectoresttoleishmucocutaconm' => 'required',
'vectoresttoleishmucocutaconf' => 'required',
'vectoresttoleishviscinim' => 'required',
'vectoresttoleishviscinif' => 'required',
'vectoresttoleishvisconm' => 'required',
'vectoresttoleishvisconf' => 'required',

];



    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function updatingSearch()
    {
        $this->resetPage();
    }

    public function render()
    {
        $model = Model::where('establecimiento', 'like', '%'.$this->search.'%')->orWhere('medico', 'like', '%'.$this->search.'%')->orWhere('fconsulta', 'like', '%'.$this->search.'%')->orWhere('hclin', 'like', '%'.$this->search.'%')->orWhere('asegurado', 'like', '%'.$this->search.'%')->orWhere('apellidosynombres', 'like', '%'.$this->search.'%')->orWhere('sexo', 'like', '%'.$this->search.'%')->orWhere('fnacimiento', 'like', '%'.$this->search.'%')->orWhere('vihpreconsejeriam', 'like', '%'.$this->search.'%')->orWhere('vihpreconsejeriaf', 'like', '%'.$this->search.'%')->orWhere('vihprapidaembf', 'like', '%'.$this->search.'%')->orWhere('vihprapidam', 'like', '%'.$this->search.'%')->orWhere('vihprapidaf', 'like', '%'.$this->search.'%')->orWhere('tbsintomaticosrm', 'like', '%'.$this->search.'%')->orWhere('tbsintomaticosrf', 'like', '%'.$this->search.'%')->orWhere('tbpbaarnuevosposm', 'like', '%'.$this->search.'%')->orWhere('tbpbaarnuevosposf', 'like', '%'.$this->search.'%')->orWhere('tbpbaarnuevosnegm', 'like', '%'.$this->search.'%')->orWhere('tbpbaarnuevosnegf', 'like', '%'.$this->search.'%')->orWhere('tbtbextrapnm', 'like', '%'.$this->search.'%')->orWhere('tbtbextrapnf', 'like', '%'.$this->search.'%')->orWhere('tbesqim', 'like', '%'.$this->search.'%')->orWhere('tbesqif', 'like', '%'.$this->search.'%')->orWhere('tbesqiim', 'like', '%'.$this->search.'%')->orWhere('tbesqiif', 'like', '%'.$this->search.'%')->orWhere('tbesqiiim', 'like', '%'.$this->search.'%')->orWhere('tbesqiiif', 'like', '%'.$this->search.'%')->orWhere('tbquimiprofilaxism5m', 'like', '%'.$this->search.'%')->orWhere('tbquimiprofilaxism5f', 'like', '%'.$this->search.'%')->orWhere('tbbaarposnuevoscuradosm', 'like', '%'.$this->search.'%')->orWhere('tbbaarposnuevoscuradosf', 'like', '%'.$this->search.'%')->orWhere('tbttopausibacilarinim', 'like', '%'.$this->search.'%')->orWhere('tbttopausibacilarinif', 'like', '%'.$this->search.'%')->orWhere('tbttomultibacilarinim', 'like', '%'.$this->search.'%')->orWhere('tbttomultibacilarinif', 'like', '%'.$this->search.'%')->orWhere('malariamuestrasvivaxm', 'like', '%'.$this->search.'%')->orWhere('malariamuestrasvivaxf', 'like', '%'.$this->search.'%')->orWhere('malariamuestrasfalciparumm', 'like', '%'.$this->search.'%')->orWhere('malariamuestrasfalciparumf', 'like', '%'.$this->search.'%')->orWhere('malariaconfirmadosvivaxm', 'like', '%'.$this->search.'%')->orWhere('malariaconfirmadosvivaxf', 'like', '%'.$this->search.'%')->orWhere('malariaconfirmadosfalciparumm', 'like', '%'.$this->search.'%')->orWhere('malariaconfirmadosfalciparumf', 'like', '%'.$this->search.'%')->orWhere('malariattovivaxm', 'like', '%'.$this->search.'%')->orWhere('malariattovivaxf', 'like', '%'.$this->search.'%')->orWhere('malariattofalciparumm', 'like', '%'.$this->search.'%')->orWhere('malariattofalciparumf', 'like', '%'.$this->search.'%')->orWhere('malariattosospechavivaxm', 'like', '%'.$this->search.'%')->orWhere('malariattosospechavivaxf', 'like', '%'.$this->search.'%')->orWhere('malariattosospechafalciparumm', 'like', '%'.$this->search.'%')->orWhere('malariattosospechafalciparumf', 'like', '%'.$this->search.'%')->orWhere('malariattoantes48hrsiniciosintomasvivaxm', 'like', '%'.$this->search.'%')->orWhere('malariattoantes48hrsiniciosintomasvivaxf', 'like', '%'.$this->search.'%')->orWhere('malariattoantes48hrsiniciosintomasfalciparumm', 'like', '%'.$this->search.'%')->orWhere('malariattoantes48hrsiniciosintomasfalciparumf', 'like', '%'.$this->search.'%')->orWhere('chagasttornam1ainiciadm', 'like', '%'.$this->search.'%')->orWhere('chagasttornam1ainiciadf', 'like', '%'.$this->search.'%')->orWhere('chagasttornam1aconcluidom', 'like', '%'.$this->search.'%')->orWhere('chagasttornam1aconcluidof', 'like', '%'.$this->search.'%')->orWhere('chagastto1am5ainiciadm', 'like', '%'.$this->search.'%')->orWhere('chagastto1am5ainiciadf', 'like', '%'.$this->search.'%')->orWhere('chagastto1am5aconcluidom', 'like', '%'.$this->search.'%')->orWhere('chagastto1am5aconcluidof', 'like', '%'.$this->search.'%')->orWhere('chagastto5am15ainiciadm', 'like', '%'.$this->search.'%')->orWhere('chagastto5am15ainiciadf', 'like', '%'.$this->search.'%')->orWhere('chagastto5am15aconcluidom', 'like', '%'.$this->search.'%')->orWhere('chagastto5am15aconcluidof', 'like', '%'.$this->search.'%')->orWhere('chagastto15amasiniciadm', 'like', '%'.$this->search.'%')->orWhere('chagastto15amasiniciadf', 'like', '%'.$this->search.'%')->orWhere('chagastto15amasconcluidom', 'like', '%'.$this->search.'%')->orWhere('chagastto15amasconcluidof', 'like', '%'.$this->search.'%')->orWhere('chagasttomujeresostpartoinf', 'like', '%'.$this->search.'%')->orWhere('chagasttomujeresostpartoconf', 'like', '%'.$this->search.'%')->orWhere('chagasviviendaseval', 'like', '%'.$this->search.'%')->orWhere('chagasviviendasposi', 'like', '%'.$this->search.'%')->orWhere('chagasviviendasroc', 'like', '%'.$this->search.'%')->orWhere('vectoresviviendasevalentomol', 'like', '%'.$this->search.'%')->orWhere('vectoresviviendasposi', 'like', '%'.$this->search.'%')->orWhere('vectoresttoleishiniciadof', 'like', '%'.$this->search.'%')->orWhere('vectoresttoleishiniciadom', 'like', '%'.$this->search.'%')->orWhere('vectoresttoleishconclm', 'like', '%'.$this->search.'%')->orWhere('vectoresttoleishconclf', 'like', '%'.$this->search.'%')->orWhere('vectoresttoleishmucoinim', 'like', '%'.$this->search.'%')->orWhere('vectoresttoleishmucoinif', 'like', '%'.$this->search.'%')->orWhere('vectoresttoleishmucoconm', 'like', '%'.$this->search.'%')->orWhere('vectoresttoleishmucoconf', 'like', '%'.$this->search.'%')->orWhere('vectoresttoleishmucocutainim', 'like', '%'.$this->search.'%')->orWhere('vectoresttoleishmucocutainif', 'like', '%'.$this->search.'%')->orWhere('vectoresttoleishmucocutaconm', 'like', '%'.$this->search.'%')->orWhere('vectoresttoleishmucocutaconf', 'like', '%'.$this->search.'%')->orWhere('vectoresttoleishviscinim', 'like', '%'.$this->search.'%')->orWhere('vectoresttoleishviscinif', 'like', '%'.$this->search.'%')->orWhere('vectoresttoleishvisconm', 'like', '%'.$this->search.'%')->orWhere('vectoresttoleishvisconf', 'like', '%'.$this->search.'%')->latest()->paginate($this->paginate);
        return view('livewire.cuadernos.c11-live', [
            'rows'=> $model
        ]);
    }


    public function create ()
    {
        $this->mode = 'create';
        $this->resetForm();
        $this->showForm = true;

        $this->emit("showForm");
    }


    public function edit($primaryId)
    {
        $this->mode = 'update';
        $this->primaryId = $primaryId;
        $model = Model::find($primaryId);

        $this->establecimiento= $model->establecimiento;
$this->medico= $model->medico;
$this->fconsulta= $model->fconsulta;
$this->hclin= $model->hclin;
$this->asegurado= $model->asegurado;
$this->apellidosynombres= $model->apellidosynombres;
$this->sexo= $model->sexo;
$this->fnacimiento= $model->fnacimiento;
$this->vihpreconsejeriam= $model->vihpreconsejeriam;
$this->vihpreconsejeriaf= $model->vihpreconsejeriaf;
$this->vihprapidaembf= $model->vihprapidaembf;
$this->vihprapidam= $model->vihprapidam;
$this->vihprapidaf= $model->vihprapidaf;
$this->tbsintomaticosrm= $model->tbsintomaticosrm;
$this->tbsintomaticosrf= $model->tbsintomaticosrf;
$this->tbpbaarnuevosposm= $model->tbpbaarnuevosposm;
$this->tbpbaarnuevosposf= $model->tbpbaarnuevosposf;
$this->tbpbaarnuevosnegm= $model->tbpbaarnuevosnegm;
$this->tbpbaarnuevosnegf= $model->tbpbaarnuevosnegf;
$this->tbtbextrapnm= $model->tbtbextrapnm;
$this->tbtbextrapnf= $model->tbtbextrapnf;
$this->tbesqim= $model->tbesqim;
$this->tbesqif= $model->tbesqif;
$this->tbesqiim= $model->tbesqiim;
$this->tbesqiif= $model->tbesqiif;
$this->tbesqiiim= $model->tbesqiiim;
$this->tbesqiiif= $model->tbesqiiif;
$this->tbquimiprofilaxism5m= $model->tbquimiprofilaxism5m;
$this->tbquimiprofilaxism5f= $model->tbquimiprofilaxism5f;
$this->tbbaarposnuevoscuradosm= $model->tbbaarposnuevoscuradosm;
$this->tbbaarposnuevoscuradosf= $model->tbbaarposnuevoscuradosf;
$this->tbttopausibacilarinim= $model->tbttopausibacilarinim;
$this->tbttopausibacilarinif= $model->tbttopausibacilarinif;
$this->tbttomultibacilarinim= $model->tbttomultibacilarinim;
$this->tbttomultibacilarinif= $model->tbttomultibacilarinif;
$this->malariamuestrasvivaxm= $model->malariamuestrasvivaxm;
$this->malariamuestrasvivaxf= $model->malariamuestrasvivaxf;
$this->malariamuestrasfalciparumm= $model->malariamuestrasfalciparumm;
$this->malariamuestrasfalciparumf= $model->malariamuestrasfalciparumf;
$this->malariaconfirmadosvivaxm= $model->malariaconfirmadosvivaxm;
$this->malariaconfirmadosvivaxf= $model->malariaconfirmadosvivaxf;
$this->malariaconfirmadosfalciparumm= $model->malariaconfirmadosfalciparumm;
$this->malariaconfirmadosfalciparumf= $model->malariaconfirmadosfalciparumf;
$this->malariattovivaxm= $model->malariattovivaxm;
$this->malariattovivaxf= $model->malariattovivaxf;
$this->malariattofalciparumm= $model->malariattofalciparumm;
$this->malariattofalciparumf= $model->malariattofalciparumf;
$this->malariattosospechavivaxm= $model->malariattosospechavivaxm;
$this->malariattosospechavivaxf= $model->malariattosospechavivaxf;
$this->malariattosospechafalciparumm= $model->malariattosospechafalciparumm;
$this->malariattosospechafalciparumf= $model->malariattosospechafalciparumf;
$this->malariattoantes48hrsiniciosintomasvivaxm= $model->malariattoantes48hrsiniciosintomasvivaxm;
$this->malariattoantes48hrsiniciosintomasvivaxf= $model->malariattoantes48hrsiniciosintomasvivaxf;
$this->malariattoantes48hrsiniciosintomasfalciparumm= $model->malariattoantes48hrsiniciosintomasfalciparumm;
$this->malariattoantes48hrsiniciosintomasfalciparumf= $model->malariattoantes48hrsiniciosintomasfalciparumf;
$this->chagasttornam1ainiciadm= $model->chagasttornam1ainiciadm;
$this->chagasttornam1ainiciadf= $model->chagasttornam1ainiciadf;
$this->chagasttornam1aconcluidom= $model->chagasttornam1aconcluidom;
$this->chagasttornam1aconcluidof= $model->chagasttornam1aconcluidof;
$this->chagastto1am5ainiciadm= $model->chagastto1am5ainiciadm;
$this->chagastto1am5ainiciadf= $model->chagastto1am5ainiciadf;
$this->chagastto1am5aconcluidom= $model->chagastto1am5aconcluidom;
$this->chagastto1am5aconcluidof= $model->chagastto1am5aconcluidof;
$this->chagastto5am15ainiciadm= $model->chagastto5am15ainiciadm;
$this->chagastto5am15ainiciadf= $model->chagastto5am15ainiciadf;
$this->chagastto5am15aconcluidom= $model->chagastto5am15aconcluidom;
$this->chagastto5am15aconcluidof= $model->chagastto5am15aconcluidof;
$this->chagastto15amasiniciadm= $model->chagastto15amasiniciadm;
$this->chagastto15amasiniciadf= $model->chagastto15amasiniciadf;
$this->chagastto15amasconcluidom= $model->chagastto15amasconcluidom;
$this->chagastto15amasconcluidof= $model->chagastto15amasconcluidof;
$this->chagasttomujeresostpartoinf= $model->chagasttomujeresostpartoinf;
$this->chagasttomujeresostpartoconf= $model->chagasttomujeresostpartoconf;
$this->chagasviviendaseval= $model->chagasviviendaseval;
$this->chagasviviendasposi= $model->chagasviviendasposi;
$this->chagasviviendasroc= $model->chagasviviendasroc;
$this->vectoresviviendasevalentomol= $model->vectoresviviendasevalentomol;
$this->vectoresviviendasposi= $model->vectoresviviendasposi;
$this->vectoresttoleishiniciadof= $model->vectoresttoleishiniciadof;
$this->vectoresttoleishiniciadom= $model->vectoresttoleishiniciadom;
$this->vectoresttoleishconclm= $model->vectoresttoleishconclm;
$this->vectoresttoleishconclf= $model->vectoresttoleishconclf;
$this->vectoresttoleishmucoinim= $model->vectoresttoleishmucoinim;
$this->vectoresttoleishmucoinif= $model->vectoresttoleishmucoinif;
$this->vectoresttoleishmucoconm= $model->vectoresttoleishmucoconm;
$this->vectoresttoleishmucoconf= $model->vectoresttoleishmucoconf;
$this->vectoresttoleishmucocutainim= $model->vectoresttoleishmucocutainim;
$this->vectoresttoleishmucocutainif= $model->vectoresttoleishmucocutainif;
$this->vectoresttoleishmucocutaconm= $model->vectoresttoleishmucocutaconm;
$this->vectoresttoleishmucocutaconf= $model->vectoresttoleishmucocutaconf;
$this->vectoresttoleishviscinim= $model->vectoresttoleishviscinim;
$this->vectoresttoleishviscinif= $model->vectoresttoleishviscinif;
$this->vectoresttoleishvisconm= $model->vectoresttoleishvisconm;
$this->vectoresttoleishvisconf= $model->vectoresttoleishvisconf;


        $this->emit("showForm");
        $this->showForm = true;
    }

    public function closeForm()
    {
        $this->showForm = false;

        $this->emit("hideForm");
    }

    public function store()
    {
          $this->validate();

          $model = new Model();

             $model->establecimiento= $this->establecimiento;
$model->medico= $this->medico;
$model->fconsulta= $this->fconsulta;
$model->hclin= $this->hclin;
$model->asegurado= $this->asegurado;
$model->apellidosynombres= $this->apellidosynombres;
$model->sexo= $this->sexo;
$model->fnacimiento= $this->fnacimiento;
$model->vihpreconsejeriam= $this->vihpreconsejeriam;
$model->vihpreconsejeriaf= $this->vihpreconsejeriaf;
$model->vihprapidaembf= $this->vihprapidaembf;
$model->vihprapidam= $this->vihprapidam;
$model->vihprapidaf= $this->vihprapidaf;
$model->tbsintomaticosrm= $this->tbsintomaticosrm;
$model->tbsintomaticosrf= $this->tbsintomaticosrf;
$model->tbpbaarnuevosposm= $this->tbpbaarnuevosposm;
$model->tbpbaarnuevosposf= $this->tbpbaarnuevosposf;
$model->tbpbaarnuevosnegm= $this->tbpbaarnuevosnegm;
$model->tbpbaarnuevosnegf= $this->tbpbaarnuevosnegf;
$model->tbtbextrapnm= $this->tbtbextrapnm;
$model->tbtbextrapnf= $this->tbtbextrapnf;
$model->tbesqim= $this->tbesqim;
$model->tbesqif= $this->tbesqif;
$model->tbesqiim= $this->tbesqiim;
$model->tbesqiif= $this->tbesqiif;
$model->tbesqiiim= $this->tbesqiiim;
$model->tbesqiiif= $this->tbesqiiif;
$model->tbquimiprofilaxism5m= $this->tbquimiprofilaxism5m;
$model->tbquimiprofilaxism5f= $this->tbquimiprofilaxism5f;
$model->tbbaarposnuevoscuradosm= $this->tbbaarposnuevoscuradosm;
$model->tbbaarposnuevoscuradosf= $this->tbbaarposnuevoscuradosf;
$model->tbttopausibacilarinim= $this->tbttopausibacilarinim;
$model->tbttopausibacilarinif= $this->tbttopausibacilarinif;
$model->tbttomultibacilarinim= $this->tbttomultibacilarinim;
$model->tbttomultibacilarinif= $this->tbttomultibacilarinif;
$model->malariamuestrasvivaxm= $this->malariamuestrasvivaxm;
$model->malariamuestrasvivaxf= $this->malariamuestrasvivaxf;
$model->malariamuestrasfalciparumm= $this->malariamuestrasfalciparumm;
$model->malariamuestrasfalciparumf= $this->malariamuestrasfalciparumf;
$model->malariaconfirmadosvivaxm= $this->malariaconfirmadosvivaxm;
$model->malariaconfirmadosvivaxf= $this->malariaconfirmadosvivaxf;
$model->malariaconfirmadosfalciparumm= $this->malariaconfirmadosfalciparumm;
$model->malariaconfirmadosfalciparumf= $this->malariaconfirmadosfalciparumf;
$model->malariattovivaxm= $this->malariattovivaxm;
$model->malariattovivaxf= $this->malariattovivaxf;
$model->malariattofalciparumm= $this->malariattofalciparumm;
$model->malariattofalciparumf= $this->malariattofalciparumf;
$model->malariattosospechavivaxm= $this->malariattosospechavivaxm;
$model->malariattosospechavivaxf= $this->malariattosospechavivaxf;
$model->malariattosospechafalciparumm= $this->malariattosospechafalciparumm;
$model->malariattosospechafalciparumf= $this->malariattosospechafalciparumf;
$model->malariattoantes48hrsiniciosintomasvivaxm= $this->malariattoantes48hrsiniciosintomasvivaxm;
$model->malariattoantes48hrsiniciosintomasvivaxf= $this->malariattoantes48hrsiniciosintomasvivaxf;
$model->malariattoantes48hrsiniciosintomasfalciparumm= $this->malariattoantes48hrsiniciosintomasfalciparumm;
$model->malariattoantes48hrsiniciosintomasfalciparumf= $this->malariattoantes48hrsiniciosintomasfalciparumf;
$model->chagasttornam1ainiciadm= $this->chagasttornam1ainiciadm;
$model->chagasttornam1ainiciadf= $this->chagasttornam1ainiciadf;
$model->chagasttornam1aconcluidom= $this->chagasttornam1aconcluidom;
$model->chagasttornam1aconcluidof= $this->chagasttornam1aconcluidof;
$model->chagastto1am5ainiciadm= $this->chagastto1am5ainiciadm;
$model->chagastto1am5ainiciadf= $this->chagastto1am5ainiciadf;
$model->chagastto1am5aconcluidom= $this->chagastto1am5aconcluidom;
$model->chagastto1am5aconcluidof= $this->chagastto1am5aconcluidof;
$model->chagastto5am15ainiciadm= $this->chagastto5am15ainiciadm;
$model->chagastto5am15ainiciadf= $this->chagastto5am15ainiciadf;
$model->chagastto5am15aconcluidom= $this->chagastto5am15aconcluidom;
$model->chagastto5am15aconcluidof= $this->chagastto5am15aconcluidof;
$model->chagastto15amasiniciadm= $this->chagastto15amasiniciadm;
$model->chagastto15amasiniciadf= $this->chagastto15amasiniciadf;
$model->chagastto15amasconcluidom= $this->chagastto15amasconcluidom;
$model->chagastto15amasconcluidof= $this->chagastto15amasconcluidof;
$model->chagasttomujeresostpartoinf= $this->chagasttomujeresostpartoinf;
$model->chagasttomujeresostpartoconf= $this->chagasttomujeresostpartoconf;
$model->chagasviviendaseval= $this->chagasviviendaseval;
$model->chagasviviendasposi= $this->chagasviviendasposi;
$model->chagasviviendasroc= $this->chagasviviendasroc;
$model->vectoresviviendasevalentomol= $this->vectoresviviendasevalentomol;
$model->vectoresviviendasposi= $this->vectoresviviendasposi;
$model->vectoresttoleishiniciadof= $this->vectoresttoleishiniciadof;
$model->vectoresttoleishiniciadom= $this->vectoresttoleishiniciadom;
$model->vectoresttoleishconclm= $this->vectoresttoleishconclm;
$model->vectoresttoleishconclf= $this->vectoresttoleishconclf;
$model->vectoresttoleishmucoinim= $this->vectoresttoleishmucoinim;
$model->vectoresttoleishmucoinif= $this->vectoresttoleishmucoinif;
$model->vectoresttoleishmucoconm= $this->vectoresttoleishmucoconm;
$model->vectoresttoleishmucoconf= $this->vectoresttoleishmucoconf;
$model->vectoresttoleishmucocutainim= $this->vectoresttoleishmucocutainim;
$model->vectoresttoleishmucocutainif= $this->vectoresttoleishmucocutainif;
$model->vectoresttoleishmucocutaconm= $this->vectoresttoleishmucocutaconm;
$model->vectoresttoleishmucocutaconf= $this->vectoresttoleishmucocutaconf;
$model->vectoresttoleishviscinim= $this->vectoresttoleishviscinim;
$model->vectoresttoleishviscinif= $this->vectoresttoleishviscinif;
$model->vectoresttoleishvisconm= $this->vectoresttoleishvisconm;
$model->vectoresttoleishvisconf= $this->vectoresttoleishvisconf;
 $model->save();

          $this->resetForm();
          $this->emit("hideForm");
          session()->flash('message', 'Record Saved Successfully');
          $this->showForm = false;

    }

    public function resetForm()
    {
        $this->establecimiento= "";
$this->medico= "";
$this->fconsulta= "";
$this->hclin= "";
$this->asegurado= "";
$this->apellidosynombres= "";
$this->sexo= "";
$this->fnacimiento= "";
$this->vihpreconsejeriam= "";
$this->vihpreconsejeriaf= "";
$this->vihprapidaembf= "";
$this->vihprapidam= "";
$this->vihprapidaf= "";
$this->tbsintomaticosrm= "";
$this->tbsintomaticosrf= "";
$this->tbpbaarnuevosposm= "";
$this->tbpbaarnuevosposf= "";
$this->tbpbaarnuevosnegm= "";
$this->tbpbaarnuevosnegf= "";
$this->tbtbextrapnm= "";
$this->tbtbextrapnf= "";
$this->tbesqim= "";
$this->tbesqif= "";
$this->tbesqiim= "";
$this->tbesqiif= "";
$this->tbesqiiim= "";
$this->tbesqiiif= "";
$this->tbquimiprofilaxism5m= "";
$this->tbquimiprofilaxism5f= "";
$this->tbbaarposnuevoscuradosm= "";
$this->tbbaarposnuevoscuradosf= "";
$this->tbttopausibacilarinim= "";
$this->tbttopausibacilarinif= "";
$this->tbttomultibacilarinim= "";
$this->tbttomultibacilarinif= "";
$this->malariamuestrasvivaxm= "";
$this->malariamuestrasvivaxf= "";
$this->malariamuestrasfalciparumm= "";
$this->malariamuestrasfalciparumf= "";
$this->malariaconfirmadosvivaxm= "";
$this->malariaconfirmadosvivaxf= "";
$this->malariaconfirmadosfalciparumm= "";
$this->malariaconfirmadosfalciparumf= "";
$this->malariattovivaxm= "";
$this->malariattovivaxf= "";
$this->malariattofalciparumm= "";
$this->malariattofalciparumf= "";
$this->malariattosospechavivaxm= "";
$this->malariattosospechavivaxf= "";
$this->malariattosospechafalciparumm= "";
$this->malariattosospechafalciparumf= "";
$this->malariattoantes48hrsiniciosintomasvivaxm= "";
$this->malariattoantes48hrsiniciosintomasvivaxf= "";
$this->malariattoantes48hrsiniciosintomasfalciparumm= "";
$this->malariattoantes48hrsiniciosintomasfalciparumf= "";
$this->chagasttornam1ainiciadm= "";
$this->chagasttornam1ainiciadf= "";
$this->chagasttornam1aconcluidom= "";
$this->chagasttornam1aconcluidof= "";
$this->chagastto1am5ainiciadm= "";
$this->chagastto1am5ainiciadf= "";
$this->chagastto1am5aconcluidom= "";
$this->chagastto1am5aconcluidof= "";
$this->chagastto5am15ainiciadm= "";
$this->chagastto5am15ainiciadf= "";
$this->chagastto5am15aconcluidom= "";
$this->chagastto5am15aconcluidof= "";
$this->chagastto15amasiniciadm= "";
$this->chagastto15amasiniciadf= "";
$this->chagastto15amasconcluidom= "";
$this->chagastto15amasconcluidof= "";
$this->chagasttomujeresostpartoinf= "";
$this->chagasttomujeresostpartoconf= "";
$this->chagasviviendaseval= "";
$this->chagasviviendasposi= "";
$this->chagasviviendasroc= "";
$this->vectoresviviendasevalentomol= "";
$this->vectoresviviendasposi= "";
$this->vectoresttoleishiniciadof= "";
$this->vectoresttoleishiniciadom= "";
$this->vectoresttoleishconclm= "";
$this->vectoresttoleishconclf= "";
$this->vectoresttoleishmucoinim= "";
$this->vectoresttoleishmucoinif= "";
$this->vectoresttoleishmucoconm= "";
$this->vectoresttoleishmucoconf= "";
$this->vectoresttoleishmucocutainim= "";
$this->vectoresttoleishmucocutainif= "";
$this->vectoresttoleishmucocutaconm= "";
$this->vectoresttoleishmucocutaconf= "";
$this->vectoresttoleishviscinim= "";
$this->vectoresttoleishviscinif= "";
$this->vectoresttoleishvisconm= "";
$this->vectoresttoleishvisconf= "";

    }


    public function update()
    {
          $this->validate();

          $model = Model::find($this->primaryId);

             $model->establecimiento= $this->establecimiento;
$model->medico= $this->medico;
$model->fconsulta= $this->fconsulta;
$model->hclin= $this->hclin;
$model->asegurado= $this->asegurado;
$model->apellidosynombres= $this->apellidosynombres;
$model->sexo= $this->sexo;
$model->fnacimiento= $this->fnacimiento;
$model->vihpreconsejeriam= $this->vihpreconsejeriam;
$model->vihpreconsejeriaf= $this->vihpreconsejeriaf;
$model->vihprapidaembf= $this->vihprapidaembf;
$model->vihprapidam= $this->vihprapidam;
$model->vihprapidaf= $this->vihprapidaf;
$model->tbsintomaticosrm= $this->tbsintomaticosrm;
$model->tbsintomaticosrf= $this->tbsintomaticosrf;
$model->tbpbaarnuevosposm= $this->tbpbaarnuevosposm;
$model->tbpbaarnuevosposf= $this->tbpbaarnuevosposf;
$model->tbpbaarnuevosnegm= $this->tbpbaarnuevosnegm;
$model->tbpbaarnuevosnegf= $this->tbpbaarnuevosnegf;
$model->tbtbextrapnm= $this->tbtbextrapnm;
$model->tbtbextrapnf= $this->tbtbextrapnf;
$model->tbesqim= $this->tbesqim;
$model->tbesqif= $this->tbesqif;
$model->tbesqiim= $this->tbesqiim;
$model->tbesqiif= $this->tbesqiif;
$model->tbesqiiim= $this->tbesqiiim;
$model->tbesqiiif= $this->tbesqiiif;
$model->tbquimiprofilaxism5m= $this->tbquimiprofilaxism5m;
$model->tbquimiprofilaxism5f= $this->tbquimiprofilaxism5f;
$model->tbbaarposnuevoscuradosm= $this->tbbaarposnuevoscuradosm;
$model->tbbaarposnuevoscuradosf= $this->tbbaarposnuevoscuradosf;
$model->tbttopausibacilarinim= $this->tbttopausibacilarinim;
$model->tbttopausibacilarinif= $this->tbttopausibacilarinif;
$model->tbttomultibacilarinim= $this->tbttomultibacilarinim;
$model->tbttomultibacilarinif= $this->tbttomultibacilarinif;
$model->malariamuestrasvivaxm= $this->malariamuestrasvivaxm;
$model->malariamuestrasvivaxf= $this->malariamuestrasvivaxf;
$model->malariamuestrasfalciparumm= $this->malariamuestrasfalciparumm;
$model->malariamuestrasfalciparumf= $this->malariamuestrasfalciparumf;
$model->malariaconfirmadosvivaxm= $this->malariaconfirmadosvivaxm;
$model->malariaconfirmadosvivaxf= $this->malariaconfirmadosvivaxf;
$model->malariaconfirmadosfalciparumm= $this->malariaconfirmadosfalciparumm;
$model->malariaconfirmadosfalciparumf= $this->malariaconfirmadosfalciparumf;
$model->malariattovivaxm= $this->malariattovivaxm;
$model->malariattovivaxf= $this->malariattovivaxf;
$model->malariattofalciparumm= $this->malariattofalciparumm;
$model->malariattofalciparumf= $this->malariattofalciparumf;
$model->malariattosospechavivaxm= $this->malariattosospechavivaxm;
$model->malariattosospechavivaxf= $this->malariattosospechavivaxf;
$model->malariattosospechafalciparumm= $this->malariattosospechafalciparumm;
$model->malariattosospechafalciparumf= $this->malariattosospechafalciparumf;
$model->malariattoantes48hrsiniciosintomasvivaxm= $this->malariattoantes48hrsiniciosintomasvivaxm;
$model->malariattoantes48hrsiniciosintomasvivaxf= $this->malariattoantes48hrsiniciosintomasvivaxf;
$model->malariattoantes48hrsiniciosintomasfalciparumm= $this->malariattoantes48hrsiniciosintomasfalciparumm;
$model->malariattoantes48hrsiniciosintomasfalciparumf= $this->malariattoantes48hrsiniciosintomasfalciparumf;
$model->chagasttornam1ainiciadm= $this->chagasttornam1ainiciadm;
$model->chagasttornam1ainiciadf= $this->chagasttornam1ainiciadf;
$model->chagasttornam1aconcluidom= $this->chagasttornam1aconcluidom;
$model->chagasttornam1aconcluidof= $this->chagasttornam1aconcluidof;
$model->chagastto1am5ainiciadm= $this->chagastto1am5ainiciadm;
$model->chagastto1am5ainiciadf= $this->chagastto1am5ainiciadf;
$model->chagastto1am5aconcluidom= $this->chagastto1am5aconcluidom;
$model->chagastto1am5aconcluidof= $this->chagastto1am5aconcluidof;
$model->chagastto5am15ainiciadm= $this->chagastto5am15ainiciadm;
$model->chagastto5am15ainiciadf= $this->chagastto5am15ainiciadf;
$model->chagastto5am15aconcluidom= $this->chagastto5am15aconcluidom;
$model->chagastto5am15aconcluidof= $this->chagastto5am15aconcluidof;
$model->chagastto15amasiniciadm= $this->chagastto15amasiniciadm;
$model->chagastto15amasiniciadf= $this->chagastto15amasiniciadf;
$model->chagastto15amasconcluidom= $this->chagastto15amasconcluidom;
$model->chagastto15amasconcluidof= $this->chagastto15amasconcluidof;
$model->chagasttomujeresostpartoinf= $this->chagasttomujeresostpartoinf;
$model->chagasttomujeresostpartoconf= $this->chagasttomujeresostpartoconf;
$model->chagasviviendaseval= $this->chagasviviendaseval;
$model->chagasviviendasposi= $this->chagasviviendasposi;
$model->chagasviviendasroc= $this->chagasviviendasroc;
$model->vectoresviviendasevalentomol= $this->vectoresviviendasevalentomol;
$model->vectoresviviendasposi= $this->vectoresviviendasposi;
$model->vectoresttoleishiniciadof= $this->vectoresttoleishiniciadof;
$model->vectoresttoleishiniciadom= $this->vectoresttoleishiniciadom;
$model->vectoresttoleishconclm= $this->vectoresttoleishconclm;
$model->vectoresttoleishconclf= $this->vectoresttoleishconclf;
$model->vectoresttoleishmucoinim= $this->vectoresttoleishmucoinim;
$model->vectoresttoleishmucoinif= $this->vectoresttoleishmucoinif;
$model->vectoresttoleishmucoconm= $this->vectoresttoleishmucoconm;
$model->vectoresttoleishmucoconf= $this->vectoresttoleishmucoconf;
$model->vectoresttoleishmucocutainim= $this->vectoresttoleishmucocutainim;
$model->vectoresttoleishmucocutainif= $this->vectoresttoleishmucocutainif;
$model->vectoresttoleishmucocutaconm= $this->vectoresttoleishmucocutaconm;
$model->vectoresttoleishmucocutaconf= $this->vectoresttoleishmucocutaconf;
$model->vectoresttoleishviscinim= $this->vectoresttoleishviscinim;
$model->vectoresttoleishviscinif= $this->vectoresttoleishviscinif;
$model->vectoresttoleishvisconm= $this->vectoresttoleishvisconm;
$model->vectoresttoleishvisconf= $this->vectoresttoleishvisconf;
 $model->save();

          $this->resetForm();
         $this->emit("hideForm");
         session()->flash('message', 'Record Updated Successfully');
    }

    public function confirmDelete($primaryId)
    {
        $this->primaryId = $primaryId;
        $this->showConfirmDeletePopup = true;
        $this->emit('showConfirmDelete');
    }

    public function hideConfirmationModal()
    {
        $this->emit('hideConfirmDelete');
    }

    public function destroy()
    {
        Model::find($this->primaryId)->delete();
        $this->showConfirmDeletePopup = false;
        $this->emit('hideConfirmDelete');
        session()->flash('message', 'Record Deleted Successfully');
    }

    public function clearFlash()
    {
        session()->forget('message');
    }

}
