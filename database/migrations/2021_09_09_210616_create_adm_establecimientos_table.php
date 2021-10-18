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
            $table->unsignedBigInteger('adm_departamento_id');            
            $table->unsignedBigInteger('adm_municipio_id')->nullable();
            $table->foreign('adm_municipio_id')->references('id')->on('adm_municipios')->onDelete('set null');
            $table->integer('cod_red')->nullable();
            $table->string('tipo')->nullable();
            $table->string('nom_establecimiento')->nullable();
            $table->string('subsector')->nullable();
            $table->string('ambito')->nullable();
            $table->string('dependencia')->nullable();
            $table->string('nivel')->nullable();
            $table->string('codsnis')->nullable();
            $table->decimal('lat',10,8)->nullable();
            $table->decimal('long',11,8)->nullable();
            $table->string('soaps')->nullable();            
            $table->integer('estado')->nullable();
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
