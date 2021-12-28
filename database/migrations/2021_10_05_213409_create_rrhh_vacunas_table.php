<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRrhhVacunasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rrhh_vacunas', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('adm_municipio_id')->nullable();            
            $table->unsignedBigInteger('rrhh_brigada_id')->nullable();
            $table->foreign('rrhh_brigada_id')->references('id')->on('rrhh_brigadas')->onDelete('set null');            
            $table->string('marca')->nullable();            
            $table->integer('dosis1')->nullable()->default('0');
            $table->integer('dosis2')->nullable()->default('0');
            $table->integer('dosis3')->nullable()->default('0');            
            $table->integer('esavis')->nullable();            
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
        Schema::dropIfExists('rrhh_vacunas');
    }
}
