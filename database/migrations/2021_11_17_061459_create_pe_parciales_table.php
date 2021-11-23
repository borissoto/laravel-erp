<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePeParcialesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pe_parciales', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('pe_curso_id')->nullable();
            $table->foreign('pe_curso_id')->references('id')->on('pe_cursos')->onDelete('set null');
            $table->unsignedBigInteger('parent_id')->nullable();
            $table->integer('is_children')->nullable();
            $table->string('gestion')->nullable();
            $table->string('nom_parcial')->nullable();
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
        Schema::dropIfExists('pe_parciales');
    }
}
