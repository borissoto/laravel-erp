<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePeMatriculacionesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pe_matriculaciones', function (Blueprint $table) {
            $table->id();
            // $table->unsignedBigInteger('pe_residente_id')->nullable();
            // $table->foreign('pe_residente_id')->references('id')->on('pe_residentes')->onDelete('set null');
            $table->unsignedBigInteger('pe_residencia_id')->nullable();
            $table->foreign('pe_residencia_id')->references('id')->on('pe_residencias')->onDelete('set null');
            $table->foreignId('user_id')->nullable()->constrained()->onDelete('set null'); // id estudiante

            

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
        Schema::dropIfExists('pe_matriculaciones');
    }
}
