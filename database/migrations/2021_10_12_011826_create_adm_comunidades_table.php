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
            $table->string('nom_comunidad');
            $table->string('pioc');
            $table->string('nacion');
            $table->integer('habitantes');
            $table->integer('familias');
            $table->integer('carpetizacion');
            $table->string('tiempo_viaje');
            $table->decimal('lat',10,8);
            $table->decimal('long',11,8);
            $table->unsignedBigInteger('user_id');            
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
