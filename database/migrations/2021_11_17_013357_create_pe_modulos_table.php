<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePeModulosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pe_modulos', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('pe_residencia_id')->nullable();
            $table->foreign('pe_residencia_id')->references('id')->on('pe_residencias')->onDelete('set null');
            $table->string('nom_modulo')->nullable();
            $table->decimal('porcentaje')->nullable();
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
        Schema::dropIfExists('pe_modulos');
    }
}
