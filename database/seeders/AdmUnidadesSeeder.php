<?php

namespace Database\Seeders;

use App\Models\AdmUnidades;
use Illuminate\Database\Seeder;

class AdmUnidadesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $unidad1 = new AdmUnidades();        
        $unidad1->id=1;
        $unidad1->nom_unidad = "IMPLEMENTACION SAFCI";
        $unidad1->sigla = "IMPL";
        $unidad1->save();

        $unidad2 = new AdmUnidades();        
        $unidad2->id=2;
        $unidad2->nom_unidad = "FORMACION SAFCI";
        $unidad2->sigla = "FORM";
        $unidad2->save();

        $unidad3 = new AdmUnidades();        
        $unidad3->id=3;
        $unidad3->nom_unidad = "ADMINISTRACION SAFCI";
        $unidad3->sigla = "ADMI";
        $unidad3->save();
    }
}
