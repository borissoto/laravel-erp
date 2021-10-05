<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRrhhAntigenosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rrhh_antigenos', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('adm_municipio_id')->nullable();
            $table->foreign('adm_municipio_id')->references('id')->on('adm_municipios')->onDelete('set null');
            $table->unsignedBigInteger('rrhh_brigada_id')->nullable();
            $table->foreign('rrhh_brigada_id')->references('id')->on('rrhh_brigadas')->onDelete('set null');
            $table->string('prueba')->nullable();
            $table->string('tipo')->nullable();
            $table->integer('muestras')->nullable();
            $table->integer('positivos')->nullable();
            $table->integer('negativos')->nullable();
            $table->integer('referencias')->nullable();
            $table->integer('kits')->nullable();
            $table->integer('canastas')->nullable();
            $table->dateTime('fecha')->nullable();
            $table->integer('user_id')->nullable();            
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
        Schema::dropIfExists('rrhh_antigenos');
    }
}
