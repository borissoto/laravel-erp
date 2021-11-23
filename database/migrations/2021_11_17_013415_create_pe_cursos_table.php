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
            $table->unsignedBigInteger('pe_modulo_id')->nullable();
            $table->foreign('pe_modulo_id')->references('id')->on('pe_modulos')->onDelete('set null');
            $table->foreignId('user_id')->nullable()->constrained()->onDelete('set null'); // id profesor jefe de enseñanza
            $table->unsignedBigInteger('instructor')->nullable();;
            $table->string('nom_curso')->nullable();;
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
