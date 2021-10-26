<?php

namespace Database\Seeders;

use App\Models\AlmPartida;
use Illuminate\Database\Seeder;

class AlmPartidasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
       $p1 = new AlmPartida();
       $p1->id = "1";
       $p1->descrip = "MATERIALES Y SUMINISTROS";        
       $p1->detalle = "Comprende la adquisicion de articulos, materiales y bienes que se consumen o cambien de valor durante la gestion";        
       $p1->numero = 30000;        
       $p1->save();
    }}