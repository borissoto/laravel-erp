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
            $table->unsignedBigInteger('alm_clase_id')->nullable();
            $table->foreign('alm_clase_id')->references('id')->on('alm_clases')->onDelete('set null');
            $table->string('descrip')->nullable();
            $table->integer('existencia_min');
            $table->unsignedBigInteger('alm_subgrupo_id')->nullable();
            $table->foreign('alm_subgrupo_id')->references('id')->on('alm_subgrupos')->onDelete('set null');
            $table->string('ubicacion')->nullable();
            $table->string('unidad')->nullable();
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
