<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAlmComprobantesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('alm_comprobantes', function (Blueprint $table) {
            $table->id();
            $table->boolean('corte')->nullable();
            $table->timestamp('fecha')->nullable();
            $table->integer('nro_factura')->nullable();
            $table->integer('numero')->nullable();
            $table->string('obs')->nullable();
            $table->string('proveedor')->nullable();
            $table->string('seccion')->nullable();
            $table->string('modalidad_ingreso')->nullable();
            $table->unsignedBigInteger('alm_doc_almacenes_id')->nullable();
            $table->foreign('alm_doc_almacenes_id')->references('id')->on('alm_doc_almacenes')->onDelete('set null');
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
        Schema::dropIfExists('alm_comprobantes');
    }
}
