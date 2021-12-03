<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePeNotasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pe_notas', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->unsignedBigInteger('pe_parcial_id')->nullable();
            $table->foreign('pe_parcial_id')->references('id')->on('pe_parciales')->onDelete('set null');
            $table->unsignedBigInteger('pe_residente_id')->nullable();
            $table->foreign('pe_residente_id')->references('id')->on('pe_residentes')->onDelete('set null');
            $table->decimal('nota')->nullable();           
            $table->decimal('rango_max')->nullable();
            $table->unsignedBigInteger('docente_calificador')->nullable();
                       
            $table->timestamp('fecha')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pe_notas');
    }
}
