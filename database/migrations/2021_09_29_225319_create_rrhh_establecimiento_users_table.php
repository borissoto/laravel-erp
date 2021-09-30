<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRrhhEstablecimientoUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rrhh_establecimiento_users', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('adm_establecimiento_id')->nullable();
            $table->unsignedBigInteger('user_id')->nullable();
            $table->foreign('adm_establecimiento_id')->references('id')->on('adm_establecimientos')->onDelete('set null');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('set null');
            $table->integer('estado');
            $table->timestamp('fecha_ini')->nullable();
            $table->timestamp('fecha_fin')->nullable();
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
        Schema::dropIfExists('rrhh_establecimiento_users');
    }
}
