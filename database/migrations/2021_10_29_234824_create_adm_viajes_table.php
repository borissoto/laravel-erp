<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAdmViajesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('adm_viajes', function (Blueprint $table) {
            $table->id();
            $table->string('cite')->nullable();
            $table->string('lugar')->nullable();
            $table->unsignedBigInteger('adm_departamento_id')->nullable();
            $table->string('adm_poa_id')->nullable();
            $table->dateTime('fecha_salida')->nullable();
            $table->dateTime('fecha_retorno')->nullable();
            $table->integer('duracion')->nullable();
            $table->string('transporte')->nullable();
            $table->string('estado')->nullable();
            $table->foreignId('user_id')->nullable()->constrained()->onDelete('set null');
            $table->unsignedBigInteger('coordinador_id');
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
        Schema::dropIfExists('adm_viajes');
    }
}
