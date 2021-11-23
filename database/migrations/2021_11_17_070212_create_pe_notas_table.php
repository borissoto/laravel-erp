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
            $table->unsignedBigInteger('pe_parcial_id')->nullable();
            $table->foreign('pe_parcial_id')->references('id')->on('pe_parciales')->onDelete('set null');
            $table->unsignedBigInteger('pe_residente_id')->nullable();
            $table->foreign('pe_residente_id')->references('id')->on('pe_residentes')->onDelete('set null');
            $table->decimal('nota');           
            $table->timestamp('fecha')->nullable();
            $table->unsignedBigInteger('docente_calificador')->nullable();
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
        Schema::dropIfExists('pe_notas');
    }
}
