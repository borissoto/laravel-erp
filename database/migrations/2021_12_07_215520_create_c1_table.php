<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateC1Table extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('c1', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('establecimiento')->nullable(); 
            $table->unsignedBigInteger('medico')->nullable(); 
            $table->dateTime('fecha')->nullable(); 
            $table->string('hclin', 10)->nullable(); 
            $table->string('noasegurado', 15)->nullable(); 
            $table->string('apellidosynombre', 250)->nullable(); 
            $table->string('sexo', 2)->nullable(); 
            $table->string('nacimiento',12)->nullable(); 
            $table->string('años', 3)->nullable(); 
            $table->string('meses', 2)->nullable(); 
            $table->string('dias', 2)->nullable(); 
            $table->string('consulta', 20)->nullable(); 
            $table->string('peso', 20)->nullable(); 
            $table->string('talla', 20)->nullable(); 
            $table->string('temp', 20)->nullable(); 
            $table->string('fcard', 20)->nullable(); 
            $table->string('fresp', 20)->nullable(); 
            $table->string('presart', 20)->nullable(); 
            $table->string('nutricion', 8)->nullable(); 
            $table->string('motivo', 1000)->nullable(); 
            $table->string('exfis', 500)->nullable(); 
            $table->string('inyecta', 2)->nullable(); 
            $table->string('sueros', 2)->nullable(); 
            $table->string('suturas', 2)->nullable(); 
            $table->string('otrasact', 2)->nullable(); 
            $table->string('dxdesc', 250)->nullable(); 
            $table->string('dxprin', 250)->nullable(); 
            $table->string('tto', 500)->nullable(); 
            $table->string('mortalidad', 2)->nullable(); 
            $table->string('referencias', 100)->nullable(); 
            $table->string('referido', 80)->nullable(); 
            $table->string('referidoa', 80)->nullable(); 
            $table->string('mayor60', 2)->nullable();             
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
        Schema::dropIfExists('c1');
    }
}
