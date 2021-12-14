<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateC11Table extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('c11', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('establecimiento')->nullable();
            $table->unsignedBigInteger('medico')->nullable();
            $table->dateTime('fconsulta')->nullable();
            $table->string('hclin', 10)->nullable();
            $table->string('asegurado', 10)->nullable();
            $table->string('apellidosynombres', 60)->nullable();
            $table->string('sexo', 10)->nullable();
            $table->string('fnacimiento', 10)->nullable();
            $table->string('vihpreconsejeriam', 10)->nullable();
            $table->string('vihpreconsejeriaf', 10)->nullable();
            $table->string('vihprapidaembf', 10)->nullable();
            $table->string('vihprapidam', 10)->nullable();
            $table->string('vihprapidaf', 10)->nullable();
            $table->string('tbsintomaticosrm', 10)->nullable();
            $table->string('tbsintomaticosrf', 10)->nullable();
            $table->string('tbpbaarnuevosposm', 10)->nullable();
            $table->string('tbpbaarnuevosposf', 10)->nullable();
            $table->string('tbpbaarnuevosnegm', 10)->nullable();
            $table->string('tbpbaarnuevosnegf', 10)->nullable();
            $table->string('tbtbextrapnm', 10)->nullable();
            $table->string('tbtbextrapnf', 10)->nullable();
            $table->string('tbesqim', 10)->nullable();
            $table->string('tbesqif', 10)->nullable();
            $table->string('tbesqiim', 10)->nullable();
            $table->string('tbesqiif', 10)->nullable();
            $table->string('tbesqiiim', 10)->nullable();
            $table->string('tbesqiiif', 10)->nullable();
            $table->string('tbquimiprofilaxism5m', 10)->nullable();
            $table->string('tbquimiprofilaxism5f', 10)->nullable();
            $table->string('tbbaarposnuevoscuradosm', 10)->nullable();
            $table->string('tbbaarposnuevoscuradosf', 10)->nullable();
            $table->string('tbttopausibacilarinim', 10)->nullable();
            $table->string('tbttopausibacilarinif', 10)->nullable();
            $table->string('tbttomultibacilarinim', 10)->nullable();
            $table->string('tbttomultibacilarinif', 10)->nullable();
            $table->string('malariamuestrasvivaxm', 10)->nullable();
            $table->string('malariamuestrasvivaxf', 10)->nullable();
            $table->string('malariamuestrasfalciparumm', 10)->nullable();
            $table->string('malariamuestrasfalciparumf', 10)->nullable();
            $table->string('malariaconfirmadosvivaxm', 10)->nullable();
            $table->string('malariaconfirmadosvivaxf', 10)->nullable();
            $table->string('malariaconfirmadosfalciparumm', 10)->nullable();
            $table->string('malariaconfirmadosfalciparumf', 10)->nullable();
            $table->string('malariattovivaxm', 10)->nullable();
            $table->string('malariattovivaxf', 10)->nullable();
            $table->string('malariattofalciparumm', 10)->nullable();
            $table->string('malariattofalciparumf', 10)->nullable();
            $table->string('malariattosospechavivaxm', 10)->nullable();
            $table->string('malariattosospechavivaxf', 10)->nullable();
            $table->string('malariattosospechafalciparumm', 10)->nullable();
            $table->string('malariattosospechafalciparumf', 10)->nullable();
            $table->string('malariattoantes48hrsiniciosintomasvivaxm', 10)->nullable();
            $table->string('malariattoantes48hrsiniciosintomasvivaxf', 10)->nullable();
            $table->string('malariattoantes48hrsiniciosintomasfalciparumm', 10)->nullable();
            $table->string('malariattoantes48hrsiniciosintomasfalciparumf', 10)->nullable();
            $table->string('chagasttornam1ainiciadm', 10)->nullable();
            $table->string('chagasttornam1ainiciadf', 10)->nullable();
            $table->string('chagasttornam1aconcluidom', 10)->nullable();
            $table->string('chagasttornam1aconcluidof', 10)->nullable();
            $table->string('chagastto1am5ainiciadm', 10)->nullable();
            $table->string('chagastto1am5ainiciadf', 10)->nullable();
            $table->string('chagastto1am5aconcluidom', 10)->nullable();
            $table->string('chagastto1am5aconcluidof', 10)->nullable();
            $table->string('chagastto5am15ainiciadm', 10)->nullable();
            $table->string('chagastto5am15ainiciadf', 10)->nullable();
            $table->string('chagastto5am15aconcluidom', 10)->nullable();
            $table->string('chagastto5am15aconcluidof', 10)->nullable();
            $table->string('chagastto15amasiniciadm', 10)->nullable();
            $table->string('chagastto15amasiniciadf', 10)->nullable();
            $table->string('chagastto15amasconcluidom', 10)->nullable();
            $table->string('chagastto15amasconcluidof', 10)->nullable();
            $table->string('chagasttomujeresostpartoinf', 10)->nullable();
            $table->string('chagasttomujeresostpartoconf', 10)->nullable();
            $table->string('chagasviviendaseval', 10)->nullable();
            $table->string('chagasviviendasposi', 10)->nullable();
            $table->string('chagasviviendasroc', 10)->nullable();
            $table->string('vectoresviviendasevalentomol', 10)->nullable();
            $table->string('vectoresviviendasposi', 10)->nullable();
            $table->string('vectoresttoleishiniciadof', 10)->nullable();
            $table->string('vectoresttoleishiniciadom', 10)->nullable();
            $table->string('vectoresttoleishconclm', 10)->nullable();
            $table->string('vectoresttoleishconclf', 10)->nullable();
            $table->string('vectoresttoleishmucoinim', 10)->nullable();
            $table->string('vectoresttoleishmucoinif', 10)->nullable();
            $table->string('vectoresttoleishmucoconm', 10)->nullable();
            $table->string('vectoresttoleishmucoconf', 10)->nullable();
            $table->string('vectoresttoleishmucocutainim', 10)->nullable();
            $table->string('vectoresttoleishmucocutainif', 10)->nullable();
            $table->string('vectoresttoleishmucocutaconm', 10)->nullable();
            $table->string('vectoresttoleishmucocutaconf', 10)->nullable();
            $table->string('vectoresttoleishviscinim', 10)->nullable();
            $table->string('vectoresttoleishviscinif', 10)->nullable();
            $table->string('vectoresttoleishvisconm', 10)->nullable();
            $table->string('vectoresttoleishvisconf', 10)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('c11');
    }
}
