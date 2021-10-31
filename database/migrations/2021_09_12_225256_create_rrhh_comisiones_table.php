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
            $table->unsignedBigInteger('adm_departamento_id');
            $table->string('cite')->nullable();
            $table->string('descripcion')->nullable();
            $table->string('solicitud')->nullable();
            $table->string('lugar')->nullable();
            $table->timestamp('fecha_ini')->nullable(); // fecha de la anuencia
            $table->timestamp('fecha_fin')->nullable(); // fecha de la anuencia
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
