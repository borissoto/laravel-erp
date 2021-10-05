<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRrhhBrigadasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rrhh_brigadas', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->nullable()->constrained()->onDelete('set null');
            $table->string('nom_brigada');
            $table->string('tipo')->nullable();
            $table->unsignedBigInteger('adm_municipio_id')->nullable();
            $table->foreign('adm_municipio_id')->references('id')->on('adm_municipios')->onDelete('set null');
            $table->integer('integrantes')->nullable();;                    
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
        Schema::dropIfExists('rrhh_brigadas');
    }
}