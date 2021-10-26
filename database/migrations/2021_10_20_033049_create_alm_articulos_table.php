<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAlmArticulosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('alm_articulos', function (Blueprint $table) {
            $table->id();
            $table->string('codigo')->nullable();
            $table->string('descrip')->nullable();
            $table->unsignedBigInteger('alm_unidad_id')->nullable();
            $table->foreign('alm_unidad_id')->references('id')->on('alm_medidas')->onDelete('set null');
            $table->string('marca')->nullable();
            $table->integer('existencia_min');
            $table->string('clase')->nullable();            
            $table->unsignedBigInteger('alm_subgrupo_id')->nullable();
            $table->foreign('alm_subgrupo_id')->references('id')->on('alm_subgrupos')->onDelete('set null');
            $table->foreignId('user_id')->nullable()->constrained()->onDelete('set null');

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
        Schema::dropIfExists('alm_articulos');
    }
}
