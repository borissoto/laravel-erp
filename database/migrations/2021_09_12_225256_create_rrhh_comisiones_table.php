<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRrhhComisionesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rrhh_comisiones', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->nullable()->constrained()->onDelete('set null');
            $table->string('tipo_comision');
            $table->string('descripcion');
            $table->string('viaticos');
            $table->string('lugar');
            $table->timestamp('fecha_ini')->nullable(); // fecha de la baja
            $table->timestamp('fecha_fin')->nullable(); // fecha de la baja
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
        Schema::dropIfExists('rrhh_comisiones');
    }
}
