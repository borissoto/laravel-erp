<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRrhhBajasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rrhh_bajas', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->nullable()->constrained()->onDelete('set null');
            $table->string('tipo'); //Ej Accidente, covid, embarazo, enfermedad, etc
            $table->string('causa_probable'); // causa probable de la baja, diabetes hipertension
            $table->string('factor_riesgo'); // factor o  que complica su situacion ej gestacion niño adulto
            $table->string('obs'); 
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
        Schema::dropIfExists('rrhh_bajas');
    }
}
