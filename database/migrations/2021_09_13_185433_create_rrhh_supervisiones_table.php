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
            $table->foreignId('users_id'); // id supervisor
            $table->integer('supervisado_id'); //users_id
            $table->integer('puntaje');
            $table->string('desempeno');  
            $table->string('poa');            
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
