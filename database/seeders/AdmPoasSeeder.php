<?php

namespace Database\Seeders;

use App\Models\AdmPoa;
use Illuminate\Database\Seeder;

class AdmPoasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $p1 = new AdmPoa();            
        $p1->id = 1;
        $p1->gestiones_id = 2;
        $p1->codigo = "4.1.1 ";
        $p1->operacion = "Gestionar la contratación de personal de apoyo al equipo de Mi Salud, Fortalecimiento a las líneas de acción para Emergencias y Desastres del Programa SAFCI";
        $p1->producto = "Contratos gestionados de RRHH para impulsar la Operativización de la Política SAFCI, en líneas de acción para Emergencias y Desastres del Programa SAFCI";
        $p1->save();

        $p2 = new AdmPoa();            
        $p2->id = 2;
        $p1->gestiones_id = 2;
        $p2->codigo = "4.1.2";
        $p2->operacion = "Desarrollar Suscripción y/o Seguimiento a convenios intergubernativos, con los Gobiernos Autónomos Municipales y TIOCs";
        $p2->producto = "Convenios suscritos con los Gobiernos Autónomos Municipales y TIOCs aportando contrapartes de acuerdo";
        $p2->save();

        $p3 = new AdmPoa();            
        $p3->id = 3;
        $p1->gestiones_id = 2;
        $p3->codigo = "4.1.3";
        $p3->operacion = "Realizar Reuniones de análisis de información, planificación y seguimiento para la Operativización de la Política SAFCI , con los equipos Departamentales, Regionales y Municipales del Programa SAFCI - MI SALUD";
        $p3->producto = "Personal fortalecido en el manejo de información, técnica y administrativa de las reuniones de planificación, seguimiento";
        $p3->save();

        $p4 = new AdmPoa();            
        $p4->id = 4;
        $p1->gestiones_id = 2;
        $p4->codigo = "4.1.4";
        $p4->operacion = "Efectuar Supervisión y Seguimiento a la Operativización de la política SAFCI por el equipo nacional, departamental, regional y municipal";
        $p4->producto = "Seguimientos y supervisiones efectuados en la Operativización de la Política SAFCI en área de influenza de los Médicos SAFCI";
        $p4->save();

        $p5 = new AdmPoa();            
        $p5->id = 5;
        $p1->gestiones_id = 2;
        $p5->codigo = "4.1.5";
        $p5->operacion = "Movilizar al personal del Programa de Atención Primaria integral SAFCI, para la atención de emergencias contingencias y otras actividades, fortaleciendo las líneas de acción. ";
        $p5->producto = "El personal del Programa de Atención Primaria Integral SAFCI, participando en la atención de emergencias, contingencias y otras actividades convocadas por el Programa SAFCI y el Ministerio de Salud y Deportes.";
        $p5->save();

        $p6 = new AdmPoa();            
        $p6->id = 6;
        $p1->gestiones_id = 2;
        $p6->codigo = "4.2.1 ";
        $p6->operacion = "Realizar acompañamiento, seguimiento y evaluación a los médicos residentes por el equipo nacional, departamental y municipal";
        $p6->producto = "Médicos Residentes fortalecidos en contenido de Plan de Estudios.";
        $p6->save();

        $p7 = new AdmPoa();            
        $p7->id = 7;
        $p1->gestiones_id = 2;
        $p7->codigo = "4.2.2";
        $p7->operacion = "Realizar Seguimiento del Equipo Nacional a los Jefes de Enseñanza";
        $p7->producto = "Jefes de Enseñanza fortalecidos en el régimen académico de formación";
        $p7->save();

        $p8 = new AdmPoa();            
        $p8->id = 8;
        $p1->gestiones_id = 2;
        $p8->codigo = "4.2.3";
        $p8->operacion = "Efectuar Curso de epidemiología para los Médicos Residentes SAFCI y personal del Programa SAFCI. ";
        $p8->producto = "Médicos Residentes y Personal del Programa SAFCI fortalecidos en epidemiología.";
        $p8->save();

        $p9 = new AdmPoa();            
        $p9->id = 9;
        $p1->gestiones_id = 2;
        $p9->codigo = "4.2.4";
        $p9->operacion = "Efectuar Curso de proyectos de desarrollo social dirigido a jefes de enseñanza y personal del Programa SAFCI";
        $p9->producto = "Jefes de Enseñanza y Personal del Programa SAFCI fortalecidos en proyectos de desarrollo socia";
        $p9->save();
    }
}
