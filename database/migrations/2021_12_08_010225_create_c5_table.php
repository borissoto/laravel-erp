<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateC5Table extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('c5', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('establecimiento')->nullable();
            $table->unsignedBigInteger('medico')->nullable();
            $table->dateTime('fecha')->nullable();
            $table->string('hclin', 10)->nullable();
            $table->string('asegurado', 10)->nullable();
            $table->string('apellidosynombres', 60)->nullable();
            $table->string('sexo', 10)->nullable();
            $table->string('fechanac', 12)->nullable();
            $table->string('años', 10)->nullable();
            $table->string('meses', 10)->nullable();
            $table->string('dias', 10)->nullable();
            $table->string('peso', 10)->nullable();
            $table->string('talla', 10)->nullable();
            $table->string('temp', 10)->nullable();
            $table->string('fcar', 10)->nullable();
            $table->string('fresp', 10)->nullable();
            $table->string('pa', 10)->nullable();
            $table->string('ingreso', 10)->nullable();
            $table->string('dxingresodes', 100)->nullable();
            $table->string('dxingreso', 100)->nullable();
            $table->string('cirugiamed', 10)->nullable();
            $table->string('anestesia', 10)->nullable();
            $table->string('dxegresodesc', 100)->nullable();
            $table->string('dxegreso', 100)->nullable();
            $table->string('fegreso', 10)->nullable();
            $table->string('estadia', 10)->nullable();
            $table->string('cama', 10)->nullable();
            $table->string('tipoegreso', 10)->nullable();
            $table->string('mortalidad', 10)->nullable();
            $table->string('refycontraref', 10)->nullable();
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
        Schema::dropIfExists('c5');
    }
}
