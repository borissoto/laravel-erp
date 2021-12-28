<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->nullable();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->foreignId('current_team_id')->nullable();
            $table->string('profile_photo_path', 2048)->nullable();
            $table->integer('nivel')->nullable();  
            $table->unsignedBigInteger('adm_establecimiento_id')->nullable();
            $table->string('nombres')->nullable();  
            $table->string('ap_paterno')->nullable();
            $table->string('ap_materno')->nullable();    
            $table->string('ci')->nullable(); 
            // $table->foreignId('adm_departamento_id')->nullable()->constrained()->onDelete('set null');    
            $table->unsignedBigInteger('adm_departamento_id')->nullable();    
            $table->string('sexo')->nullable();
            $table->datetime('fecha_nac')->nullable();
            $table->string('telefono')->nullable();
            $table->string('domicilio')->nullable();
            $table->string('item')->nullable();
            $table->timestamp('incorporacion')->nullable();
            $table->string('universidad')->nullable();              
            $table->string('grado')->nullable();              
            $table->string('docente')->nullable();              
            $table->string('obs')->nullable();
            $table->integer('estado')->nullable();
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
        Schema::dropIfExists('users');
    }
}
