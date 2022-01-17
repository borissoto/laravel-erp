<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePeCursosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pe_cursos', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('pe_residencia_id')->nullable();
            $table->foreign('pe_residencia_id')->references('id')->on('pe_residencias')->onDelete('set null');
            $table->string('modulo')->nullable();
            $table->string('nom_materia')->nullable();
            $table->string('cod_materia')->nullable();
            $table->decimal('nota_max')->nullable();            
            $table->foreignId('user_id')->nullable()->constrained()->onDelete('set null'); // id docente
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
        Schema::dropIfExists('pe_cursos');
    }
}
