<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRrhhCalendariosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rrhh_calendarios', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained();
            $table->string('title',100);
            $table->string('descripcion',250)->nullable();
            $table->string('tipo')->nullable(); // tipo de actividad
            $table->dateTime('start');
            $table->dateTime('end');
            $table->integer('allDay');
            $table->string('backgroundColor');
            $table->string('textColor');
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
        Schema::dropIfExists('rrhh_calendarios');
    }
}
