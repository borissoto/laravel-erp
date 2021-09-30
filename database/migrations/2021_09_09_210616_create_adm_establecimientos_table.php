<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAdmEstablecimientosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('adm_establecimientos', function (Blueprint $table) {
            $table->id();
            $table->integer('adm_departamento_id');            
            $table->unsignedBigInteger('adm_municipio_id')->nullable();
            $table->foreign('adm_municipio_id')->references('id')->on('adm_municipios')->onDelete('set null');
            $table->integer('cod_red');
            $table->string('tipo');
            $table->string('nom_establecimiento');
            $table->string('subsector');
            $table->string('ambito');
            $table->string('dependencia');
            $table->string('nivel');
            $table->string('codsnis');
            $table->decimal('lat',10,8);
            $table->decimal('long',11,8);
            $table->string('soaps');            
            $table->integer('estado');
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
        Schema::dropIfExists('adm_establecimientos');
    }
}
