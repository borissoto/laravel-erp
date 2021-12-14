<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateC3Table extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('c3', function (Blueprint $table) {
            $table->id();            
            $table->unsignedBigInteger('establecimiento')->nullable();
            $table->unsignedBigInteger('medico')->nullable();
            $table->dateTime('fecha')->nullable();
            $table->string('hclin', 8)->nullable();
            $table->string('noasegurado', 10)->nullable();
            $table->string('apellidosynombre', 250)->nullable();
            $table->string('sexo', 10)->nullable();
            $table->string('nacimiento', 12)->nullable();
            $table->string('años', 3)->nullable();
            $table->string('meses', 2)->nullable();
            $table->string('dias', 2)->nullable();
            $table->string('orientacion', 30)->nullable();
            $table->string('anticonceptivos', 250)->nullable();
            $table->string('insumos', 10)->nullable();
            $table->string('naturales', 250)->nullable();
            $table->string('pap', 2)->nullable();
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
        Schema::dropIfExists('c3');
    }
}
