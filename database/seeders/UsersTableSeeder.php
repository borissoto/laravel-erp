<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('users')->delete();
        
        \DB::table('users')->insert(array (
            0 => 
            array (
                'id' => 3412,
                'name' => 'ADMINISTRADOR',
                'email' => 'ADMIN@PROGRAMA.COM',
                'email_verified_at' => NULL,                
                'password' => '$2a$12$NT23t/AToIrPCBclAAATOuOSkMf28y8c2ouso930TChFZR.9p8Pga', //123456
                'two_factor_secret' => '',
                'two_factor_recovery_codes' => '',
                'remember_token' => '',
                'current_team_id' => NULL,
                'profile_photo_path' => '',
                'nivel' => 1,
                'adm_establecimiento_id' => NULL,
                'nombres' => '0',
                'ap_paterno' => '0',
                'ap_materno' => '',
                'ci' => '0',
                'adm_departamento_id' => 1,
                'sexo' => 'MASCULINO',
                'fecha_nac' => NULL,
                'telefono' => '0',
                'domicilio' => '0',
                'item' => '0',
                'incorporacion' => NULL,
                'universidad' => 'U.M.S.A.',
                'grado' => 'ADMIN',
                'docente' => 'EDPERM',
                'obs' => '0',
                'estado' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
        ));
    }
}