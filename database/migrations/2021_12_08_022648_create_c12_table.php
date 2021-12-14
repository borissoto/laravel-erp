<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateC12Table extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('c12', function (Blueprint $table) {
            $table->id();
            $table->string('establecimiento', 60)->nullable();
            $table->string('medico', 10)->nullable();
            $table->string('fconsulta', 10)->nullable();
            $table->string('hclin', 10)->nullable();
            $table->string('asegurado', 10)->nullable();
            $table->string('apellidosynombres', 60)->nullable();
            $table->string('riada', 10)->nullable();
            $table->string('riadapersonasafectadas', 10)->nullable();
            $table->string('riadafallecidos', 10)->nullable();
            $table->string('heladagranizonevada', 10)->nullable();
            $table->string('heladagranizonevadaafectados', 10)->nullable();
            $table->string('heladagranizonevadafallecidos', 10)->nullable();
            $table->string('incendio', 10)->nullable();
            $table->string('incendioafectados', 10)->nullable();
            $table->string('incendiofallecidos', 10)->nullable();
            $table->string('deslizamientosismoterremoto', 10)->nullable();
            $table->string('deslizamientosismoterremotoafectados', 10)->nullable();
            $table->string('deslizamientosismoterremotofallecidas', 10)->nullable();
            $table->string('inundacion', 10)->nullable();
            $table->string('inundacionafectados', 10)->nullable();
            $table->string('inundacionfallecidos', 10)->nullable();
            $table->string('otros', 10)->nullable();
            $table->string('otrosafectados', 10)->nullable();
            $table->string('otrosfallecidos', 10)->nullable();
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
        Schema::dropIfExists('c12');
    }
}
