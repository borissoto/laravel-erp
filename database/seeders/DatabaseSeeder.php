<?php

namespace Database\Seeders;

use App\Models\WebCategoria;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Storage;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Storage::makeDirectory('articulos');

        // \App\Models\User::factory(10)->create();
        $this->call(AdmDepartamentoSeeder::class);

        $this->call(AdmMunicipiosTableSeeder::class);
        $this->call(UsersTableSeeder::class);
        $this->call(AdmEstablecimientosTableSeeder::class);
        $this->call(AdmRedesTableSeeder::class);

        $this->call(AdmUnidadesSeeder::class);        
        $this->call(AdmCargosTableSeeder::class);

        $this->call(RoleSeeder::class);

        $this->call(ModelHasRolesTableSeeder::class);
        $this->call(RrhhBrigadasTableSeeder::class);

        WebCategoria::factory(4)->create();
        $this->call(WebArticulosSeeder::class);
    }
}
