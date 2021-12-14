<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateC9Table extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('c9', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('establecimiento')->nullable();
            $table->unsignedBigInteger('medico')->nullable();
            $table->dateTime('fecha')->nullable();
            $table->string('hclin', 20)->nullable();
            $table->string('asegurado', 20)->nullable();
            $table->string('apellidosynombre', 250)->nullable();
            $table->string('visitasfamiliares', 10)->nullable();
            $table->string('otros', 10)->nullable();
            $table->string('promotores', 10)->nullable();
            $table->string('dirigentes', 10)->nullable();
            $table->string('adultos', 10)->nullable();
            $table->string('jovenes', 10)->nullable();
            $table->string('escolares', 10)->nullable();
            $table->string('reunioneslugar')->nullable();
            $table->string('temaactividad')->nullable();
            $table->string('actividadeducativa', 10)->nullable();
            $table->string('feria', 10)->nullable();
            $table->string('rals', 10)->nullable();
            $table->string('rclsalud', 10)->nullable();
            $table->string('comunidadescai', 10)->nullable();
            $table->string('otro', 10)->nullable();
            $table->string('odontologo', 10)->nullable();
            $table->string('auxiliar', 10)->nullable();
            $table->string('enfermeras', 10)->nullable();
            $table->string('medicos', 10)->nullable();
            $table->string('duracionsupervision', 10)->nullable();
            $table->string('lugar')->nullable();
            $table->string('capacitacion', 10)->nullable();
            $table->string('supervision1', 10)->nullable();
            $table->string('acomunidad', 10)->nullable();
            $table->string('familiasnuevascarpetizadas', 10)->nullable();
            $table->string('carpetizadasconseguimiento', 10)->nullable();
            $table->string('cai', 10)->nullable();
            $table->string('supervision', 10)->nullable();
            $table->string('auditoriasint', 10)->nullable();
            $table->string('autoevaluaciones', 10)->nullable();
            $table->string('quejasusuarios', 10)->nullable();
            $table->string('sugerenciasagradecimientos', 10)->nullable();
            $table->string('visitasfamiliaresplanificadas', 10)->nullable();
            $table->string('muertematernadentro', 10)->nullable();
            $table->string('muertematernafuera', 10)->nullable();
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
        Schema::dropIfExists('c9');
    }
}
