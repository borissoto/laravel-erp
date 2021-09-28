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
            $table->integer('adm_municipio_id');
            $table->string('nom_brigada');
            $table->string('tipo');
            $table->string('user_id');
            $table->integer('integrantes');                    
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
