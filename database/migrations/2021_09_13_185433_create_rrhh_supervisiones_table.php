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
            $table->unsignedBigInteger('supervisado_id'); //user_id
            $table->timestamp('fecha')->nullable();
            $table->integer('puntaje');
            $table->string('accion');  
            $table->string('poa');            
            $table->string('justificacion');            
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
