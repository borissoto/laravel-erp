<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAdmComunidadesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('adm_comunidades', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('adm_establecimiento_id')->nullable();
            $table->foreign('adm_establecimiento_id')->references('id')->on('adm_establecimientos')->onDelete('set null');
            $table->string('nom_comunidad')->nullable();
            $table->string('pioc')->nullable();
            $table->string('nacion')->nullable();
            $table->integer('habitantes')->nullable();
            $table->integer('familias')->nullable();
            $table->integer('carpetizacion')->nullable();
            $table->string('tiempo_viaje')->nullable();
            $table->decimal('lat',10,8)->nullable();
            $table->decimal('long',11,8)->nullable();
            $table->unsignedBigInteger('user_id')->nullable();            
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
        Schema::dropIfExists('adm_comunidades');
    }
}
