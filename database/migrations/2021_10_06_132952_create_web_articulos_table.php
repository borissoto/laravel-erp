<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWebArticulosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('web_articulos', function (Blueprint $table) {
            $table->id();
            $table->string('nom_articulo');
            $table->string('slug');
            $table->text('extracto');
            $table->longText('cuerpo');
            $table->enum('status', [1, 2])->default(1);

            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->unsignedBigInteger('web_categoria_id');
            $table->foreign('web_categoria_id')->references('id')->on('web_categorias')->onDelete('cascade');
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
        Schema::dropIfExists('web_articulos');
    }
}
