<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateC4Table extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('c4', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('establecimiento')->nullable();
            $table->unsignedBigInteger('medico')->nullable();
            $table->datetime('fecha')->nullable();
            $table->string('hclin', 10)->nullable();
            $table->string('noasegurado', 10)->nullable();
            $table->string('apellidosynombres', 250)->nullable();
            $table->string('sexo', 10)->nullable();
            $table->string('nacimiento', 12)->nullable();
            $table->string('años', 10)->nullable();
            $table->string('meses', 10)->nullable();
            $table->string('dias', 10)->nullable();
            $table->string('bja', 10)->nullable();
            $table->string('peso', 10)->nullable();
            $table->string('talla', 10)->nullable();
            $table->string('control', 100)->nullable();
            $table->string('pesotalla', 160)->nullable();
            $table->string('tallaedad', 160)->nullable();
            $table->string('hierro', 100)->nullable();
            $table->string('vitaa', 100)->nullable();
            $table->string('zinc', 100)->nullable();
            $table->string('mebendazol', 100)->nullable();
            $table->string('conselact', 10)->nullable();
            $table->string('lactancia', 10)->nullable();
            $table->string('consealimentacion', 10)->nullable();
            $table->string('alcomplementariomenores1', 10)->nullable();
            $table->string('alcomplementario1a', 10)->nullable();
            $table->string('motricidadgruesa', 10)->nullable();
            $table->string('motricidadfina', 10)->nullable();
            $table->string('audicionlenguaje', 10)->nullable();
            $table->string('personalsocial', 10)->nullable();
            $table->string('consultaexterna', 50)->nullable();
            $table->string('diagnostico', 500)->nullable();
            $table->string('cie', 500)->nullable();
            $table->string('tratamiento', 500)->nullable();
            $table->string('responsable', 250)->nullable();
            $table->string('inyectable', 80)->nullable();
            $table->string('sueros', 80)->nullable();
            $table->string('sutcur', 80)->nullable();
            $table->string('otrasactividades', 80)->nullable();
            $table->string('mortalidad', 80)->nullable();
            $table->string('refycontra', 80)->nullable();
            $table->string('refde', 80)->nullable();
            $table->string('refa', 80)->nullable();
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
        Schema::dropIfExists('c4');
    }
}
