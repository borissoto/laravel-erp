<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAdmRedesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('adm_redes', function (Blueprint $table) {
            $table->id();
            $table->integer('adm_departamento_id');
            $table->integer('cod_municipio');
            $table->integer('cod_red');
            $table->string('nom_red');
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
        Schema::dropIfExists('adm_redes');
    }
}
