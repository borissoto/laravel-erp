<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateC10fTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('c10f', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('establecimiento')->nullable();
            $table->unsignedBigInteger('medico')->nullable();
            $table->dateTime('fconsulta')->nullable();
            $table->string('hclin', 10)->nullable();
            $table->string('asegurado', 10)->nullable();
            $table->string('apellidosynombres', 60)->nullable();
            $table->string('sexo', 10)->nullable();
            $table->string('fnacimiento', 10)->nullable();
            $table->string('años', 10)->nullable();
            $table->string('meses', 10)->nullable();
            $table->string('dias', 10)->nullable();
            $table->string('bcgm1', 2)->nullable();
            $table->string('penta1m1', 2)->nullable();
            $table->string('penta2m1', 2)->nullable();
            $table->string('penta3m1', 2)->nullable();
            $table->string('polio1m1', 2)->nullable();
            $table->string('polio2m1', 2)->nullable();
            $table->string('polio3m1', 2)->nullable();
            $table->string('antirotavir1m1', 2)->nullable();
            $table->string('antirotavir2m1', 2)->nullable();
            $table->string('antineumococo1m1', 2)->nullable();
            $table->string('antineumococo2m1', 2)->nullable();
            $table->string('antineumococo3m1', 2)->nullable();
            $table->string('influenza1m1', 2)->nullable();
            $table->string('influenza2m1', 2)->nullable();
            $table->string('srp11223m', 2)->nullable();
            $table->string('srp21223m', 2)->nullable();
            $table->string('antiamarilica1223m', 2)->nullable();
            $table->string('penta11223m', 2)->nullable();
            $table->string('penta21223m', 2)->nullable();
            $table->string('penta31223m', 2)->nullable();
            $table->string('penta41223m', 2)->nullable();
            $table->string('polio11223m', 2)->nullable();
            $table->string('polio21223m', 2)->nullable();
            $table->string('polio31223m', 2)->nullable();
            $table->string('polio41223m', 2)->nullable();
            $table->string('influenzau1223m', 2)->nullable();
            $table->string('penta12a3', 2)->nullable();
            $table->string('penta22a4', 2)->nullable();
            $table->string('penta32a5', 2)->nullable();
            $table->string('penta42a6', 2)->nullable();
            $table->string('polio12a7', 2)->nullable();
            $table->string('polio22a8', 2)->nullable();
            $table->string('polio32a9', 2)->nullable();
            $table->string('polio42a10', 2)->nullable();
            $table->string('srp12a11', 2)->nullable();
            $table->string('srp22a12', 2)->nullable();
            $table->string('antiamarilica2a13', 2)->nullable();
            $table->string('penta54', 2)->nullable();
            $table->string('polio54', 2)->nullable();
            $table->string('srp14', 2)->nullable();
            $table->string('srp24', 2)->nullable();
            $table->string('antiamarilica4', 2)->nullable();
            $table->string('dt1', 2)->nullable();
            $table->string('dt2', 2)->nullable();
            $table->string('dt3', 2)->nullable();
            $table->string('dt4', 2)->nullable();
            $table->string('dt5', 2)->nullable();
            $table->string('hepb1tsalud', 2)->nullable();
            $table->string('hepb2tsalud', 2)->nullable();
            $table->string('hepb3tsalud', 2)->nullable();
            $table->string('hepb1tvih', 2)->nullable();
            $table->string('hepb2tvih', 2)->nullable();
            $table->string('hepb3tvih', 2)->nullable();
            $table->string('influenzam60', 2)->nullable();
            $table->string('influenzaenfcron', 2)->nullable();
            $table->string('influenzaembarazadas', 2)->nullable();
            $table->string('influenzatsalud', 2)->nullable();
            $table->string('vph1', 2)->nullable();
            $table->string('vph2', 2)->nullable();

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
        Schema::dropIfExists('c10f');
    }
}
