<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAlmIngresosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('alm_ingresos', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('alm_articulo_id')->nullable();
            $table->foreign('alm_articulo_id')->references('id')->on('alm_articulos')->onDelete('set null');
            $table->decimal('cantidad');
            $table->unsignedBigInteger('alm_comprobante_id')->nullable();
            $table->foreign('alm_comprobante_id')->references('id')->on('alm_comprobantes')->onDelete('set null');
            $table->timestamp('fecha_venc');
            $table->foreignId('user_id')->nullable()->constrained()->onDelete('set null');
            $table->decimal('valor_total');
            $table->decimal('precio_unitario');
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
        Schema::dropIfExists('alm_ingresos');
    }
}
