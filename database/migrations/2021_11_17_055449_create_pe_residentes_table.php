<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePeResidentesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pe_residentes', function (Blueprint $table) {
            $table->id();
            $table->string('nombres')->nullable();  
            $table->string('ap_paterno')->nullable();
            $table->string('ap_materno')->nullable();    
            $table->string('ci')->nullable();             
            $table->unsignedBigInteger('adm_departamento_id')->nullable();    
            $table->string('sexo')->nullable();
            $table->datetime('fecha_nac')->nullable();
            $table->string('telefono')->nullable();
            $table->string('domicilio')->nullable();                        
            $table->string('universidad')->nullable();              
            $table->string('grado')->nullable();                          
            $table->string('obs')->nullable();
            $table->integer('estado')->nullable();            
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
        Schema::dropIfExists('pe_residentes');
    }
}
