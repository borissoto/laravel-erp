<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAlmCodigoArticulosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('alm_codigo_articulos', function (Blueprint $table) {
            $table->id();
            $table->decimal('cantidad');
            $table->string('codigo_barras');
            $table->integer('disponible');
            $table->unsignedBigInteger('alm_ingreso_id')->nullable();
            $table->foreign('alm_ingreso_id')->references('id')->on('alm_ingresos')->onDelete('set null');
            $table->integer('salidas');
            $table->string('observaciones');
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
        Schema::dropIfExists('alm_codigo_articulos');
    }
}
