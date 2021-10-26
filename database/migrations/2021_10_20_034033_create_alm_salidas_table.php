<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAlmSalidasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('alm_salidas', function (Blueprint $table) {
            $table->id();
            $table->decimal('cantidad');
            $table->decimal('cantidad_dev');
            $table->unsignedBigInteger('alm_codigo_articulo_id')->nullable();
            $table->foreign('alm_codigo_articulo_id')->references('id')->on('alm_codigo_articulos')->onDelete('set null');
            $table->string('codigo_barras');
            $table->timestamp('fecha_dev')->nullable();
            $table->boolean('impreso');
            $table->string('obs');
            $table->unsignedBigInteger('alm_pedido_id')->nullable();
            $table->foreign('alm_pedido_id')->references('id')->on('alm_pedidos')->onDelete('set null');
            $table->timestamp('rango_ini')->nullable();
            $table->timestamp('rango_fin')->nullable();
            $table->decimal('cantidad_ent');
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
        Schema::dropIfExists('alm_salidas');
    }
}
