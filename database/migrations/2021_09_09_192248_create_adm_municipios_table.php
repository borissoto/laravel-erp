<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAdmMunicipiosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('adm_municipios', function (Blueprint $table) {
            $table->id();
            $table->integer('adm_departamento_id');
            $table->unsignedBigInteger('cod_red');
            $table->string('nom_provincia');
            $table->string('nom_municipio');            
            $table->integer('cod_municipio');            
            $table->timestamps();
            $table->SoftDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('adm_municipios');
    }
}
