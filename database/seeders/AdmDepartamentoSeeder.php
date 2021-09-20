<?php

namespace Database\Seeders;

use App\Models\AdmDepartamento;
use Illuminate\Database\Seeder;

class AdmDepartamentoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $dep1 = new AdmDepartamento();
        $dep1->nom_departamento = "Beni";
        $dep1->abreviatura = "BE";
        $dep1->save();
        
        $dep2 = new AdmDepartamento();
        $dep2->nom_departamento = "Chuquisaca";
        $dep2->abreviatura = "CH";
        $dep2->save();

        $dep3 = new AdmDepartamento();
        $dep3->nom_departamento = "Cochabamba";
        $dep3->abreviatura = "CB";
        $dep3->save();

        $dep4 = new AdmDepartamento();
        $dep4->nom_departamento = "La Paz";
        $dep4->abreviatura = "LP";
        $dep4->save();

        $dep5 = new AdmDepartamento();
        $dep5->nom_departamento = "Oruro";
        $dep5->abreviatura = "OR";
        $dep5->save();

        $dep6 = new AdmDepartamento();
        $dep6->nom_departamento = "Pando";
        $dep6->abreviatura = "PD";
        $dep6->save();

        $dep7 = new AdmDepartamento();
        $dep7->nom_departamento = "Potosi";
        $dep7->abreviatura = "PT";
        $dep7->save();

        $dep8 = new AdmDepartamento();
        $dep8->nom_departamento = "Santa Cruz";
        $dep8->abreviatura = "SC";
        $dep8->save();

        $dep9 = new AdmDepartamento();
        $dep9->nom_departamento = "Tarija";
        $dep9->abreviatura = "TJ";
        $dep9->save();

    }
}
