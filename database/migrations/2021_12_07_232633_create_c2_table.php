<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateC2Table extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('c2', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('establecimiento')->nullable();
            $table->unsignedBigInteger('medico')->nullable();
            $table->datetime('fecha')->nullable();
            $table->string('hclin', 8)->nullable();
            $table->string('noasegurado', 10)->nullable();
            $table->string('apellidosynombre', 250)->nullable();
            $table->string('nacimiento', 12)->nullable();
            $table->string('años', 3)->nullable();
            $table->string('meses', 2)->nullable();
            $table->string('dias', 2)->nullable();
            $table->string('beneficio', 30)->nullable();
            $table->string('peso', 10)->nullable();
            $table->string('talla', 6)->nullable();
            $table->string('fum', 12)->nullable();
            $table->string('nutricion', 250)->nullable();
            $table->string('prenatal', 250)->nullable();
            $table->string('4cpn', 250)->nullable();
            $table->string('pap', 2)->nullable();
            $table->string('pappos', 2)->nullable();
            $table->string('ivaa', 2)->nullable();
            $table->string('ivaapos', 2)->nullable();
            $table->string('mamapos', 2)->nullable();
            $table->string('hemorragia1mit', 2)->nullable();
            $table->string('hemorragiaparto', 2)->nullable();
            $table->string('embsepsis', 2)->nullable();
            $table->string('preeclamsiasevera', 2)->nullable();
            $table->string('eclamsia', 2)->nullable();
            $table->string('atencionparto', 250)->nullable();
            $table->string('tipoparto', 15)->nullable();
            $table->string('anestesia', 20)->nullable();
            $table->string('reciennac', 20)->nullable();
            $table->string('partera', 20)->nullable();
            $table->string('partodom', 250)->nullable();
            $table->string('malformacion', 250)->nullable();
            $table->string('mujer1549con4cpn', 250)->nullable();
            $table->string('lactanciainmediata', 2)->nullable();
            $table->string('rnapegoprecoz', 250)->nullable();
            $table->string('controlpostparto', 1000)->nullable();
            $table->string('hierro90', 250)->nullable();
            $table->string('vitap', 2)->nullable();
            $table->string('mortalidadfuera', 2)->nullable();
            $table->string('refcontraref', 20)->nullable();
            $table->string('refde', 100)->nullable();
            $table->string('refa', 100)->nullable();
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
        Schema::dropIfExists('c2');
    }
}
