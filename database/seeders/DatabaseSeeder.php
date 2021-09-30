<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $this->call(AdmDepartamentoSeeder::class);

        $this->call(AdmMunicipiosTableSeeder::class);
        $this->call(UsersTableSeeder::class);
        $this->call(AdmEstablecimientosTableSeeder::class);
        $this->call(AdmRedesTableSeeder::class);

        $this->call(AdmUnidadesSeeder::class);
        $this->call(AdmCargosTableSeeder::class);
    }
}
