<?php

namespace Database\Seeders;

use App\Models\AlmMedida;
use Illuminate\Database\Seeder;

class AlmMedidasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $u1 = new AlmMedida();
        $u1->id = "1";
        $u1->unidad = "PIEZA";        
        $u1->abrev = "PZA";        
        $u1->save();
                
        $u2 = new AlmMedida();
        $u2->id = "2";
        $u2->unidad = "PAQUETE";        
        $u2->abrev = "PAQ";        
        $u2->save();
                
        $u3 = new AlmMedida();
        $u3->id = "3";
        $u3->unidad = "CAJA";        
        $u3->abrev = "CJ";        
        $u3->save();
                
        $u4 = new AlmMedida();
        $u4->id = "4";
        $u4->unidad = "ROLLO";        
        $u4->abrev = "RLL";        
        $u4->save();
                
        $u5 = new AlmMedida();
        $u5->id = "5";
        $u5->unidad = "HOJAS";        
        $u5->abrev = "HJ";        
        $u5->save();
                
        $u6 = new AlmMedida();
        $u6->id = "6";
        $u6->unidad = "TUBO";        
        $u6->abrev = "TB";        
        $u6->save();
                
        $u7 = new AlmMedida();
        $u7->id = "7";
        $u7->unidad = "BLOCK";        
        $u7->abrev = "BLK";        
        $u7->save();
                
        $u8 = new AlmMedida();
        $u8->id = "8";
        $u8->unidad = "METROS";        
        $u8->abrev = "MTS";        
        $u8->save();
                
        $u9 = new AlmMedida();
        $u9->id = "9";
        $u9->unidad = "LITRO";        
        $u9->abrev = "LT";        
        $u9->save();
                
        $u10 = new AlmMedida();
        $u10->id = "10";
        $u10->unidad = "TAMBOR";        
        $u10->abrev = "TAM";        
        $u10->save();
                
        $u11 = new AlmMedida();
        $u11->id = "11";
        $u11->unidad = "FRASCO";        
        $u11->abrev = "FR";        
        $u11->save();
                
        $u12 = new AlmMedida();
        $u12->id = "12";
        $u12->unidad = "BOLSA";        
        $u12->abrev = "BS";        
        $u12->save();
                
        $u13 = new AlmMedida();
        $u13->id = "13";
        $u13->unidad = "KILOGRAMO";        
        $u13->abrev = "KG";        
        $u13->save();
                
        $u14 = new AlmMedida();
        $u14->id = "14";
        $u14->unidad = "BIDON";        
        $u14->abrev = "BN";        
        $u14->save();
                
        $u15 = new AlmMedida();
        $u15->id = "15";
        $u15->unidad = "GALON";        
        $u15->abrev = "GL";        
        $u15->save();
                
        $u16 = new AlmMedida();
        $u16->id = "16";
        $u16->unidad = "QUINTAL";        
        $u16->abrev = "QQ";        
        $u16->save();
                
        $u17 = new AlmMedida();
        $u17->id = "17";
        $u17->unidad = "BALDE";        
        $u17->abrev = "BLDE";        
        $u17->save();
                
        $u18 = new AlmMedida();
        $u18->id = "18";
        $u18->unidad = "AMPOLLA";        
        $u18->abrev = "AM";        
        $u18->save();
                
        $u19 = new AlmMedida();
        $u19->id = "19";
        $u19->unidad = "EQUIPO";        
        $u19->abrev = "EQ";        
        $u19->save();
                
        $u20 = new AlmMedida();
        $u20->id = "20";
        $u20->unidad = "METRO 2";        
        $u20->abrev = "M2";        
        $u20->save();
                
        $u21 = new AlmMedida();
        $u21->id = "21";
        $u21->unidad = "COMPRIMIDO";        
        $u21->abrev = "CP";        
        $u21->save();
                
        $u22 = new AlmMedida();
        $u22->id = "22";
        $u22->unidad = "GRAMOS";        
        $u22->abrev = "GR";        
        $u22->save();
                
        $u23 = new AlmMedida();
        $u23->id = "23";
        $u23->unidad = "LIBRA";        
        $u23->abrev = "LB";        
        $u23->save();
                
        $u24 = new AlmMedida();
        $u24->id = "24";
        $u24->unidad = "MILILITROS";        
        $u24->abrev = "ML";        
        $u24->save();
                
        $u25 = new AlmMedida();
        $u25->id = "25";
        $u25->unidad = "BARRA";        
        $u25->abrev = "BAR";        
        $u25->save();
                
    }
}
