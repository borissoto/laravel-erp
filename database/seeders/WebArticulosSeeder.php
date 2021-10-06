<?php

namespace Database\Seeders;

use App\Models\WebArticulo;
use App\Models\WebImage;
use Illuminate\Database\Seeder;

class WebArticulosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $articulos = WebArticulo::factory(20)->create();

        foreach ($articulos as $articulo ) {
            WebImage::factory(1)->create([
                'imageable_id'=> $articulo->id,
                'imageable_type' => WebArticulo::class,
            ]);
        }
    }
}
