<?php

namespace Database\Seeders;

use App\Models\AlmSubgrupo;
use Illuminate\Database\Seeder;

class AlmSubgruposSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $s1 = new AlmSubgrupo();
        $s1->id = "1";
        $s1->descrip = "MATERIALES DE ESCRITORIO";        
        $s1->alm_partida_id = 1;                    
        $s1->save();
        
        $s2 = new AlmSubgrupo();
        $s2->id = "2";
        $s2->descrip = "MATERIALES DE LIMPIEZA";        
        $s2->alm_partida_id = 1;                    
        $s2->save();
        
        $s3 = new AlmSubgrupo();
        $s3->id = "3";
        $s3->descrip = "OTROS REPUESTOS";        
        $s3->alm_partida_id = 1;                    
        $s3->save();
        
        $s4 = new AlmSubgrupo();
        $s4->id = "4";
        $s4->descrip = "LLANTAS Y NEUMATICOS";        
        $s4->alm_partida_id = 1;                    
        $s4->save();
        
        $s5 = new AlmSubgrupo();
        $s5->id = "5";
        $s5->descrip = "INSTRUMENTAL MENOR QUIRURGICO";        
        $s5->alm_partida_id = 1;                    
        $s5->save();
        
        $s6 = new AlmSubgrupo();
        $s6->id = "6";
        $s6->descrip = "MATERIAL DE IMPRENTA (LIBROS MANUELAS Y REVISTAS)";        
        $s6->alm_partida_id = 1;                    
        $s6->save();
        
        $s7 = new AlmSubgrupo();
        $s7->id = "7";
        $s7->descrip = "PAPEL";        
        $s7->alm_partida_id = 1;                    
        $s7->save();
        
        $s8 = new AlmSubgrupo();
        $s8->id = "8";
        $s8->descrip = "PRENDAS DE VESTIR";        
        $s8->alm_partida_id = 1;                    
        $s8->save();
        
        $s9 = new AlmSubgrupo();
        $s9->id = "9";
        $s9->descrip = "ARTES GRAFICAS";        
        $s9->alm_partida_id = 1;                    
        $s9->save();
        
        $s10 = new AlmSubgrupo();
        $s10->id = "10";
        $s10->descrip = "MATERIAL ELECTRICO";        
        $s10->alm_partida_id = 1;                    
        $s10->save();
        
        $s11 = new AlmSubgrupo();
        $s11->id = "11";
        $s11->descrip = "IMPRESION";        
        $s11->alm_partida_id = 1;                    
        $s11->save();
        
    }
}
