<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAlmSubgruposTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('alm_subgrupos', function (Blueprint $table) {
            $table->id();
            $table->string('descrip')->nullable();
            $table->unsignedBigInteger('alm_partida_id')->nullable();
            $table->foreign('alm_partida_id')->references('id')->on('alm_partidas')->onDelete('set null');
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
        Schema::dropIfExists('alm_subgrupos');
    }
}
