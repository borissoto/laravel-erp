<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateC6Table extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('c6', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('establecimiento')->nullable();
            $table->unsignedBigInteger('medico')->nullable();
            $table->dateTime('fecha')->nullable();
            $table->string('hclin', 10)->nullable();
            $table->string('asegurado', 10)->nullable();
            $table->string('apellidosynombres', 250)->nullable();
            $table->string('sexo', 10)->nullable();
            $table->string('fechanac', 10)->nullable();
            $table->string('años', 10)->nullable();
            $table->string('meses', 10)->nullable();
            $table->string('dias', 10)->nullable();
            $table->string('ingreso', 10)->nullable();
            $table->string('tratamiento', 60)->nullable();
            $table->string('egreso', 15)->nullable();
            $table->string('sitegreso', 20)->nullable();
            $table->string('fallecimiento', 10)->nullable();
            $table->string('inyectables', 10)->nullable();
            $table->string('sueros', 10)->nullable();
            $table->string('curacionessuturas', 10)->nullable();
            $table->string('referidoa', 250)->nullable();
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
        Schema::dropIfExists('c6');
    }
}
