<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAlmPartidasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('alm_partidas', function (Blueprint $table) {
            $table->id();
            $table->string('descrip')->nullable();
            $table->string('detalle')->nullable();
            $table->integer('numero')->nullable();
            $table->integer('partida')->nullable();
            $table->integer('tipo')->nullable();
            $table->boolean('vigente')->nullable();
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
        Schema::dropIfExists('alm_partidas');
    }
}
