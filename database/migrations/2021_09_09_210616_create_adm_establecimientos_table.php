<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAdmEstablecimientosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('adm_establecimientos', function (Blueprint $table) {
            $table->id();
            $table->integer('adm_departamento_id');
            $table->integer('adm_provincia_id');
            $table->integer('adm_municipio_id');
            $table->integer('adm_red_id');          
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
        Schema::dropIfExists('adm_establecimientos');
    }
}
