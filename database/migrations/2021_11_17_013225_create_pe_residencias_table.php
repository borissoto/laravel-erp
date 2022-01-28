<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePeResidenciasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pe_residencias', function (Blueprint $table) {
            $table->id();
            $table->string('nom_residencia')->nullable();
            $table->integer('nivel')->nullable();
            $table->unsignedBigInteger('adm_departamento_id')->nullable();
            $table->string('gestion_ini')->nullable();
            $table->string('mes_ini')->nullable();
            $table->string('gestion_fin')->nullable();
            $table->string('mes_fin')->nullable();
            $table->string('estado')->nullable();
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
        Schema::dropIfExists('pe_residencias');
    }
}
