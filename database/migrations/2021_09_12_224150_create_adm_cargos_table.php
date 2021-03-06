<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAdmCargosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('adm_cargos', function (Blueprint $table) {
            $table->id();            
            $table->foreignId('user_id')->nullable()->constrained()->onDelete('set null');
            $table->integer('estado');
            $table->string('nom_cargo');
            $table->string('descripcion')->nullable();
            $table->unsignedBigInteger('adm_unidades_id')->nullable();
            $table->foreign('adm_unidades_id')->references('id')->on('adm_unidades')->onDelete('set null');
            $table->timestamp('incorporacion')->nullable();      
            $table->timestamps();
            $table->SoftDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('adm_cargos');
    }
}
