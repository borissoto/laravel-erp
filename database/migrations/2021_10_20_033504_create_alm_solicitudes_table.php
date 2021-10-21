<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAlmSolicitudesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('alm_solicitudes', function (Blueprint $table) {
            $table->id();
            $table->string('area')->nullable();
            $table->integer('boleta')->nullable();
            $table->string('cargo')->nullable();
            $table->string('estado')->nullable();
            $table->dateTime('fecha_entrega')->nullable();
            $table->dateTime('fecha_solicitud')->nullable();
            $table->integer('impresion')->nullable();
            $table->boolean('imprimido')->nullable();
            $table->text('justificativo')->nullable();
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
        Schema::dropIfExists('alm_solicitudes');
    }
}
