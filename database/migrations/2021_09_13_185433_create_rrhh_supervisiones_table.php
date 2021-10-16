<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRrhhSupervisionesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rrhh_supervisiones', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->nullable()->constrained()->onDelete('set null'); // id supervisor
            $table->unsignedBigInteger('supervisor_id'); //user_id
            $table->timestamp('fecha')->nullable();
            $table->integer('puntaje')->nullable();
            $table->string('recomendacion')->nullable();  
            $table->string('financiamiento')->nullable();            
            $table->string('justificacion')->nullable();            
            $table->string('obs')->nullable();            
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
        Schema::dropIfExists('rrhh_supervisiones');
    }
}
