<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRrhhRastrillajesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rrhh_rastrillajes', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('adm_municipio_id')->nullable();            
            $table->unsignedBigInteger('rrhh_brigada_id')->nullable();
            $table->foreign('rrhh_brigada_id')->references('id')->on('rrhh_brigadas')->onDelete('set null');
            $table->integer('atendidos')->nullable();
            $table->integer('sospechosos')->nullable();
            $table->integer('confirmados')->nullable();
            $table->integer('contactos')->nullable();
            $table->integer('referidos')->nullable();
            $table->integer('fallecidos')->nullable();   
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
        Schema::dropIfExists('rrhh_rastrillajes');
    }
}
