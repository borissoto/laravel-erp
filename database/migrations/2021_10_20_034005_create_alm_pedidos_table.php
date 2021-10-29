<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAlmPedidosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('alm_pedidos', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('alm_articulo_id')->nullable();
            $table->foreign('alm_articulo_id')->references('id')->on('alm_articulos')->onDelete('set null');
            $table->decimal('cantidad')->nullable();
            $table->boolean('devuelto')->nullable();
            $table->timestamp('fecha_devol')->nullable();
            $table->unsignedBigInteger('alm_solicitudes_id')->nullable();
            $table->foreign('alm_solicitudes_id')->references('id')->on('alm_solicitudes')->onDelete('set null');
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
        Schema::dropIfExists('alm_pedidos');
    }
}
