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
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->foreignId('current_team_id')->nullable();
            $table->string('profile_photo_path', 2048)->nullable();
            $table->string('nombres')->nullable();;    
            $table->string('ap_paterno')->nullable();;    
            $table->string('ap_materno')->nullable();    
            $table->string('ci')->nullable();;    
            $table->foreignId('adm_departamento_id')->nullable();;    
            $table->timestamp('fecha_nac')->nullable();    
            $table->string('telefono')->nullable();;    
            $table->string('domicilio')->nullable();;    
            $table->string('item')->nullable();;                  
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
