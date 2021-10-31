<?php

namespace Database\Seeders;

use App\Models\Gestiones;
use Illuminate\Database\Seeder;

class GestionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $g1 = new Gestiones();
        $g1->id = "1";
        $g1->gestion = 2021;                
        $g1->is_active = 1;                
        $g1->save();

        $g2 = new Gestiones();
        $g2->id = "2";
        $g2->gestion = 2022;
        $g1->is_active = 0;                 
        $g2->save();

        $g3 = new Gestiones();
        $g3->id = "3";
        $g3->gestion = 2023;
        $g1->is_active = 0;                 
        $g3->save();

        $g4 = new Gestiones();
        $g4->id = "4";
        $g4->gestion = 2024;
        $g4->is_active = 0;                 
        $g4->save();

        $g5 = new Gestiones();
        $g5->id = "5";
        $g5->gestion = 2025;
        $g5->is_active = 0;                 
        $g5->save();
    }
}
