<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AdmRedesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        DB::table('adm_redes')->delete();
        
        DB::table('adm_redes')->insert(array (
            0 => 
            array (
                'id' => 1,
                'adm_departamento_id' => 7,
                'cod_municipio' => 90202,
                'cod_red' => 93,
                'nom_red' => 'III GONZALO MORENO       ',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'adm_departamento_id' => 7,
                'cod_municipio' => 90301,
                'cod_red' => 93,
                'nom_red' => 'III GONZALO MORENO       ',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
                'adm_departamento_id' => 7,
                'cod_municipio' => 90501,
                'cod_red' => 93,
                'nom_red' => 'III GONZALO MORENO       ',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            3 => 
            array (
                'id' => 4,
                'adm_departamento_id' => 7,
                'cod_municipio' => 90502,
                'cod_red' => 93,
                'nom_red' => 'III GONZALO MORENO       ',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            4 => 
            array (
                'id' => 5,
                'adm_departamento_id' => 7,
                'cod_municipio' => 90503,
                'cod_red' => 93,
                'nom_red' => 'III GONZALO MORENO       ',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            5 => 
            array (
                'id' => 6,
                'adm_departamento_id' => 7,
                'cod_municipio' => 90201,
                'cod_red' => 92,
                'nom_red' => 'II PUERTO RICO           ',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            6 => 
            array (
                'id' => 7,
                'adm_departamento_id' => 7,
                'cod_municipio' => 90302,
                'cod_red' => 92,
                'nom_red' => 'II PUERTO RICO           ',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            7 => 
            array (
                'id' => 8,
                'adm_departamento_id' => 7,
                'cod_municipio' => 90303,
                'cod_red' => 92,
                'nom_red' => 'II PUERTO RICO           ',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            8 => 
            array (
                'id' => 9,
                'adm_departamento_id' => 7,
                'cod_municipio' => 90401,
                'cod_red' => 92,
                'nom_red' => 'II PUERTO RICO           ',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            9 => 
            array (
                'id' => 10,
                'adm_departamento_id' => 7,
                'cod_municipio' => 90402,
                'cod_red' => 92,
                'nom_red' => 'II PUERTO RICO           ',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            10 => 
            array (
                'id' => 11,
                'adm_departamento_id' => 7,
                'cod_municipio' => 90101,
                'cod_red' => 91,
                'nom_red' => 'I COBIJA                 ',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            11 => 
            array (
                'id' => 12,
                'adm_departamento_id' => 7,
                'cod_municipio' => 90102,
                'cod_red' => 91,
                'nom_red' => 'I COBIJA                 ',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            12 => 
            array (
                'id' => 13,
                'adm_departamento_id' => 7,
                'cod_municipio' => 90103,
                'cod_red' => 91,
                'nom_red' => 'I COBIJA                 ',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            13 => 
            array (
                'id' => 14,
                'adm_departamento_id' => 7,
                'cod_municipio' => 90104,
                'cod_red' => 91,
                'nom_red' => 'I COBIJA                 ',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            14 => 
            array (
                'id' => 15,
                'adm_departamento_id' => 7,
                'cod_municipio' => 90203,
                'cod_red' => 91,
                'nom_red' => 'I COBIJA                 ',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            15 => 
            array (
                'id' => 16,
                'adm_departamento_id' => 6,
                'cod_municipio' => 60402,
                'cod_red' => 90,
                'nom_red' => 'YUNCHARA                 ',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            16 => 
            array (
                'id' => 17,
                'adm_departamento_id' => 6,
                'cod_municipio' => 60301,
                'cod_red' => 89,
                'nom_red' => 'YACUIBA                  ',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            17 => 
            array (
                'id' => 18,
                'adm_departamento_id' => 6,
                'cod_municipio' => 60303,
                'cod_red' => 88,
                'nom_red' => 'VILLA MONTES             ',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            18 => 
            array (
                'id' => 19,
                'adm_departamento_id' => 6,
                'cod_municipio' => 60401,
                'cod_red' => 87,
            'nom_red' => 'URIONDO (A. CONCEPCION)  ',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            19 => 
            array (
                'id' => 20,
                'adm_departamento_id' => 6,
                'cod_municipio' => 60101,
                'cod_red' => 86,
                'nom_red' => 'TARIJA - CERCADO         ',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            20 => 
            array (
                'id' => 21,
                'adm_departamento_id' => 6,
                'cod_municipio' => 60501,
                'cod_red' => 85,
                'nom_red' => 'SAN LORENZO              ',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            21 => 
            array (
                'id' => 22,
                'adm_departamento_id' => 6,
                'cod_municipio' => 60201,
                'cod_red' => 84,
                'nom_red' => 'PADCAYA                  ',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            22 => 
            array (
                'id' => 23,
                'adm_departamento_id' => 6,
                'cod_municipio' => 60601,
                'cod_red' => 83,
                'nom_red' => 'ENTRE RIOS               ',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            23 => 
            array (
                'id' => 24,
                'adm_departamento_id' => 6,
                'cod_municipio' => 60502,
                'cod_red' => 82,
                'nom_red' => 'EL PUENTE                ',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            24 => 
            array (
                'id' => 25,
                'adm_departamento_id' => 6,
                'cod_municipio' => 60302,
                'cod_red' => 81,
                'nom_red' => 'CARAPARI                 ',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            25 => 
            array (
                'id' => 26,
                'adm_departamento_id' => 6,
                'cod_municipio' => 60202,
                'cod_red' => 80,
                'nom_red' => 'BERMEJO                  ',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            26 => 
            array (
                'id' => 27,
                'adm_departamento_id' => 4,
                'cod_municipio' => 31401,
                'cod_red' => 79,
                'nom_red' => 'PUNATA                   ',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            27 => 
            array (
                'id' => 28,
                'adm_departamento_id' => 4,
                'cod_municipio' => 31402,
                'cod_red' => 79,
                'nom_red' => 'PUNATA                   ',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            28 => 
            array (
                'id' => 29,
                'adm_departamento_id' => 4,
                'cod_municipio' => 31403,
                'cod_red' => 79,
                'nom_red' => 'PUNATA                   ',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            29 => 
            array (
                'id' => 30,
                'adm_departamento_id' => 4,
                'cod_municipio' => 31404,
                'cod_red' => 79,
                'nom_red' => 'PUNATA                   ',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            30 => 
            array (
                'id' => 31,
                'adm_departamento_id' => 4,
                'cod_municipio' => 31405,
                'cod_red' => 79,
                'nom_red' => 'PUNATA                   ',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            31 => 
            array (
                'id' => 32,
                'adm_departamento_id' => 4,
                'cod_municipio' => 31601,
                'cod_red' => 79,
                'nom_red' => 'PUNATA                   ',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            32 => 
            array (
                'id' => 33,
                'adm_departamento_id' => 4,
                'cod_municipio' => 31301,
                'cod_red' => 78,
                'nom_red' => 'MIZQUE                   ',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            33 => 
            array (
                'id' => 34,
                'adm_departamento_id' => 4,
                'cod_municipio' => 31302,
                'cod_red' => 78,
                'nom_red' => 'MIZQUE                   ',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            34 => 
            array (
                'id' => 35,
                'adm_departamento_id' => 4,
                'cod_municipio' => 31303,
                'cod_red' => 78,
                'nom_red' => 'MIZQUE                   ',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            35 => 
            array (
                'id' => 36,
                'adm_departamento_id' => 4,
                'cod_municipio' => 31304,
                'cod_red' => 78,
                'nom_red' => 'MIZQUE                   ',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            36 => 
            array (
                'id' => 37,
                'adm_departamento_id' => 4,
                'cod_municipio' => 31204,
                'cod_red' => 77,
                'nom_red' => 'IVIRGARZAMA              ',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            37 => 
            array (
                'id' => 38,
                'adm_departamento_id' => 4,
                'cod_municipio' => 31205,
                'cod_red' => 77,
                'nom_red' => 'IVIRGARZAMA              ',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            38 => 
            array (
                'id' => 39,
                'adm_departamento_id' => 4,
                'cod_municipio' => 31206,
                'cod_red' => 77,
                'nom_red' => 'IVIRGARZAMA              ',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            39 => 
            array (
                'id' => 40,
                'adm_departamento_id' => 4,
                'cod_municipio' => 31201,
                'cod_red' => 76,
                'nom_red' => 'TOTORA                   ',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            40 => 
            array (
                'id' => 41,
                'adm_departamento_id' => 4,
                'cod_municipio' => 31202,
                'cod_red' => 76,
                'nom_red' => 'TOTORA                   ',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            41 => 
            array (
                'id' => 42,
                'adm_departamento_id' => 4,
                'cod_municipio' => 31203,
                'cod_red' => 76,
                'nom_red' => 'TOTORA                   ',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            42 => 
            array (
                'id' => 43,
                'adm_departamento_id' => 4,
                'cod_municipio' => 31101,
                'cod_red' => 75,
                'nom_red' => 'TAPACARI                 ',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            43 => 
            array (
                'id' => 44,
                'adm_departamento_id' => 4,
                'cod_municipio' => 31003,
                'cod_red' => 74,
                'nom_red' => 'VILLA TUNARI             ',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            44 => 
            array (
                'id' => 45,
                'adm_departamento_id' => 4,
                'cod_municipio' => 31602,
                'cod_red' => 74,
                'nom_red' => 'VILLA TUNARI             ',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            45 => 
            array (
                'id' => 46,
                'adm_departamento_id' => 4,
                'cod_municipio' => 31003,
                'cod_red' => 73,
                'nom_red' => 'RED INDIGENA DE SALUD    ',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            46 => 
            array (
                'id' => 47,
                'adm_departamento_id' => 4,
                'cod_municipio' => 31204,
                'cod_red' => 73,
                'nom_red' => 'RED INDIGENA DE SALUD    ',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            47 => 
            array (
                'id' => 48,
                'adm_departamento_id' => 4,
                'cod_municipio' => 31001,
                'cod_red' => 72,
                'nom_red' => 'SACABA                   ',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            48 => 
            array (
                'id' => 49,
                'adm_departamento_id' => 4,
                'cod_municipio' => 31002,
                'cod_red' => 72,
                'nom_red' => 'SACABA                   ',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            49 => 
            array (
                'id' => 50,
                'adm_departamento_id' => 4,
                'cod_municipio' => 30901,
                'cod_red' => 71,
                'nom_red' => 'QUILLACOLLO              ',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            50 => 
            array (
                'id' => 51,
                'adm_departamento_id' => 4,
                'cod_municipio' => 30902,
                'cod_red' => 71,
                'nom_red' => 'QUILLACOLLO              ',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            51 => 
            array (
                'id' => 52,
                'adm_departamento_id' => 4,
                'cod_municipio' => 30903,
                'cod_red' => 71,
                'nom_red' => 'QUILLACOLLO              ',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            52 => 
            array (
                'id' => 53,
                'adm_departamento_id' => 4,
                'cod_municipio' => 30904,
                'cod_red' => 71,
                'nom_red' => 'QUILLACOLLO              ',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            53 => 
            array (
                'id' => 54,
                'adm_departamento_id' => 4,
                'cod_municipio' => 30905,
                'cod_red' => 71,
                'nom_red' => 'QUILLACOLLO              ',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            54 => 
            array (
                'id' => 55,
                'adm_departamento_id' => 4,
                'cod_municipio' => 30801,
                'cod_red' => 70,
                'nom_red' => 'TARATA                   ',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            55 => 
            array (
                'id' => 56,
                'adm_departamento_id' => 4,
                'cod_municipio' => 30802,
                'cod_red' => 70,
                'nom_red' => 'TARATA                   ',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            56 => 
            array (
                'id' => 57,
                'adm_departamento_id' => 4,
                'cod_municipio' => 30803,
                'cod_red' => 70,
                'nom_red' => 'TARATA                   ',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            57 => 
            array (
                'id' => 58,
                'adm_departamento_id' => 4,
                'cod_municipio' => 30601,
                'cod_red' => 69,
                'nom_red' => 'CAPINOTA                 ',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            58 => 
            array (
                'id' => 59,
                'adm_departamento_id' => 4,
                'cod_municipio' => 30602,
                'cod_red' => 69,
                'nom_red' => 'CAPINOTA                 ',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            59 => 
            array (
                'id' => 60,
                'adm_departamento_id' => 4,
                'cod_municipio' => 30701,
                'cod_red' => 69,
                'nom_red' => 'CAPINOTA                 ',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            60 => 
            array (
                'id' => 61,
                'adm_departamento_id' => 4,
                'cod_municipio' => 30702,
                'cod_red' => 69,
                'nom_red' => 'CAPINOTA                 ',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            61 => 
            array (
                'id' => 62,
                'adm_departamento_id' => 4,
                'cod_municipio' => 30703,
                'cod_red' => 69,
                'nom_red' => 'CAPINOTA                 ',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            62 => 
            array (
                'id' => 63,
                'adm_departamento_id' => 4,
                'cod_municipio' => 31501,
                'cod_red' => 69,
                'nom_red' => 'CAPINOTA                 ',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            63 => 
            array (
                'id' => 64,
                'adm_departamento_id' => 4,
                'cod_municipio' => 30501,
                'cod_red' => 68,
                'nom_red' => 'PUNATA                   ',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            64 => 
            array (
                'id' => 65,
                'adm_departamento_id' => 4,
                'cod_municipio' => 30502,
                'cod_red' => 68,
                'nom_red' => 'PUNATA                   ',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            65 => 
            array (
                'id' => 66,
                'adm_departamento_id' => 4,
                'cod_municipio' => 30401,
                'cod_red' => 67,
                'nom_red' => 'TARATA                   ',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            66 => 
            array (
                'id' => 67,
                'adm_departamento_id' => 4,
                'cod_municipio' => 30402,
                'cod_red' => 67,
                'nom_red' => 'TARATA                   ',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            67 => 
            array (
                'id' => 68,
                'adm_departamento_id' => 4,
                'cod_municipio' => 30403,
                'cod_red' => 67,
                'nom_red' => 'TARATA                   ',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            68 => 
            array (
                'id' => 69,
                'adm_departamento_id' => 4,
                'cod_municipio' => 30404,
                'cod_red' => 67,
                'nom_red' => 'TARATA                   ',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            69 => 
            array (
                'id' => 70,
                'adm_departamento_id' => 4,
                'cod_municipio' => 30302,
                'cod_red' => 66,
                'nom_red' => 'QUILLACOLLO              ',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            70 => 
            array (
                'id' => 71,
                'adm_departamento_id' => 4,
                'cod_municipio' => 30303,
                'cod_red' => 66,
                'nom_red' => 'QUILLACOLLO              ',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            71 => 
            array (
                'id' => 72,
                'adm_departamento_id' => 4,
                'cod_municipio' => 30301,
                'cod_red' => 65,
                'nom_red' => 'INDEPENDENCIA            ',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            72 => 
            array (
                'id' => 73,
                'adm_departamento_id' => 4,
                'cod_municipio' => 30201,
                'cod_red' => 64,
                'nom_red' => 'AIQUILE                  ',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            73 => 
            array (
                'id' => 74,
                'adm_departamento_id' => 4,
                'cod_municipio' => 30202,
                'cod_red' => 64,
                'nom_red' => 'AIQUILE                  ',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            74 => 
            array (
                'id' => 75,
                'adm_departamento_id' => 4,
                'cod_municipio' => 30203,
                'cod_red' => 64,
                'nom_red' => 'AIQUILE                  ',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            75 => 
            array (
                'id' => 76,
                'adm_departamento_id' => 4,
                'cod_municipio' => 30101,
                'cod_red' => 63,
            'nom_red' => 'CBBA (SUD)               ',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            76 => 
            array (
                'id' => 77,
                'adm_departamento_id' => 4,
                'cod_municipio' => 30101,
                'cod_red' => 62,
            'nom_red' => 'CBBA (NORTE)             ',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            77 => 
            array (
                'id' => 78,
                'adm_departamento_id' => 4,
                'cod_municipio' => 30101,
                'cod_red' => 61,
            'nom_red' => 'CBBA (HOSPITALES)        ',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            78 => 
            array (
                'id' => 79,
                'adm_departamento_id' => 3,
                'cod_municipio' => 51501,
                'cod_red' => 60,
                'nom_red' => 'VILLAZON                 ',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            79 => 
            array (
                'id' => 80,
                'adm_departamento_id' => 3,
                'cod_municipio' => 50901,
                'cod_red' => 59,
                'nom_red' => 'UYUNI                    ',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            80 => 
            array (
                'id' => 81,
                'adm_departamento_id' => 3,
                'cod_municipio' => 50902,
                'cod_red' => 59,
                'nom_red' => 'UYUNI                    ',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            81 => 
            array (
                'id' => 82,
                'adm_departamento_id' => 3,
                'cod_municipio' => 51201,
                'cod_red' => 59,
                'nom_red' => 'UYUNI                    ',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            82 => 
            array (
                'id' => 83,
                'adm_departamento_id' => 3,
                'cod_municipio' => 51401,
                'cod_red' => 59,
                'nom_red' => 'UYUNI                    ',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            83 => 
            array (
                'id' => 84,
                'adm_departamento_id' => 3,
                'cod_municipio' => 51402,
                'cod_red' => 59,
                'nom_red' => 'UYUNI                    ',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            84 => 
            array (
                'id' => 85,
                'adm_departamento_id' => 3,
                'cod_municipio' => 51601,
                'cod_red' => 59,
                'nom_red' => 'UYUNI                    ',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            85 => 
            array (
                'id' => 86,
                'adm_departamento_id' => 3,
                'cod_municipio' => 50201,
                'cod_red' => 58,
                'nom_red' => 'UNCIA                    ',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            86 => 
            array (
                'id' => 87,
                'adm_departamento_id' => 3,
                'cod_municipio' => 50202,
                'cod_red' => 58,
                'nom_red' => 'UNCIA                    ',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            87 => 
            array (
                'id' => 88,
                'adm_departamento_id' => 3,
                'cod_municipio' => 50203,
                'cod_red' => 58,
                'nom_red' => 'UNCIA                    ',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            88 => 
            array (
                'id' => 89,
                'adm_departamento_id' => 3,
                'cod_municipio' => 50204,
                'cod_red' => 58,
                'nom_red' => 'UNCIA                    ',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            89 => 
            array (
                'id' => 90,
                'adm_departamento_id' => 3,
                'cod_municipio' => 50801,
                'cod_red' => 57,
                'nom_red' => 'TUPIZA                   ',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            90 => 
            array (
                'id' => 91,
                'adm_departamento_id' => 3,
                'cod_municipio' => 50802,
                'cod_red' => 57,
                'nom_red' => 'TUPIZA                   ',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            91 => 
            array (
                'id' => 92,
                'adm_departamento_id' => 3,
                'cod_municipio' => 51001,
                'cod_red' => 57,
                'nom_red' => 'TUPIZA                   ',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            92 => 
            array (
                'id' => 93,
                'adm_departamento_id' => 3,
                'cod_municipio' => 51002,
                'cod_red' => 57,
                'nom_red' => 'TUPIZA                   ',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            93 => 
            array (
                'id' => 94,
                'adm_departamento_id' => 3,
                'cod_municipio' => 51003,
                'cod_red' => 57,
                'nom_red' => 'TUPIZA                   ',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            94 => 
            array (
                'id' => 95,
                'adm_departamento_id' => 3,
                'cod_municipio' => 50501,
                'cod_red' => 56,
                'nom_red' => 'SACACA                   ',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            95 => 
            array (
                'id' => 96,
                'adm_departamento_id' => 3,
                'cod_municipio' => 50502,
                'cod_red' => 56,
                'nom_red' => 'SACACA                   ',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            96 => 
            array (
                'id' => 97,
                'adm_departamento_id' => 3,
                'cod_municipio' => 50701,
                'cod_red' => 56,
                'nom_red' => 'SACACA                   ',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            97 => 
            array (
                'id' => 98,
                'adm_departamento_id' => 3,
                'cod_municipio' => 50702,
                'cod_red' => 56,
                'nom_red' => 'SACACA                   ',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            98 => 
            array (
                'id' => 99,
                'adm_departamento_id' => 3,
                'cod_municipio' => 51301,
                'cod_red' => 56,
                'nom_red' => 'SACACA                   ',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            99 => 
            array (
                'id' => 100,
                'adm_departamento_id' => 3,
                'cod_municipio' => 51302,
                'cod_red' => 56,
                'nom_red' => 'SACACA                   ',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            100 => 
            array (
                'id' => 101,
                'adm_departamento_id' => 3,
                'cod_municipio' => 51101,
                'cod_red' => 55,
                'nom_red' => 'PUNA                     ',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            101 => 
            array (
                'id' => 102,
                'adm_departamento_id' => 3,
                'cod_municipio' => 51102,
                'cod_red' => 55,
                'nom_red' => 'PUNA                     ',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            102 => 
            array (
                'id' => 103,
                'adm_departamento_id' => 3,
                'cod_municipio' => 51103,
                'cod_red' => 55,
                'nom_red' => 'PUNA                     ',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            103 => 
            array (
                'id' => 104,
                'adm_departamento_id' => 3,
                'cod_municipio' => 50101,
                'cod_red' => 54,
            'nom_red' => 'POTOSI (URBANO)          ',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            104 => 
            array (
                'id' => 105,
                'adm_departamento_id' => 3,
                'cod_municipio' => 50102,
                'cod_red' => 53,
            'nom_red' => 'POTOSI (RURAL)           ',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            105 => 
            array (
                'id' => 106,
                'adm_departamento_id' => 3,
                'cod_municipio' => 50103,
                'cod_red' => 53,
            'nom_red' => 'POTOSI (RURAL)           ',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            106 => 
            array (
                'id' => 107,
                'adm_departamento_id' => 3,
                'cod_municipio' => 50104,
                'cod_red' => 53,
            'nom_red' => 'POTOSI (RURAL)           ',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            107 => 
            array (
                'id' => 108,
                'adm_departamento_id' => 3,
                'cod_municipio' => 50303,
                'cod_red' => 53,
            'nom_red' => 'POTOSI (RURAL)           ',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            108 => 
            array (
                'id' => 109,
                'adm_departamento_id' => 3,
                'cod_municipio' => 51202,
                'cod_red' => 53,
            'nom_red' => 'POTOSI (RURAL)           ',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            109 => 
            array (
                'id' => 110,
                'adm_departamento_id' => 3,
                'cod_municipio' => 51203,
                'cod_red' => 53,
            'nom_red' => 'POTOSI (RURAL)           ',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            110 => 
            array (
                'id' => 111,
                'adm_departamento_id' => 3,
                'cod_municipio' => 50401,
                'cod_red' => 52,
                'nom_red' => 'OCURI                    ',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            111 => 
            array (
                'id' => 112,
                'adm_departamento_id' => 3,
                'cod_municipio' => 50402,
                'cod_red' => 52,
                'nom_red' => 'OCURI                    ',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            112 => 
            array (
                'id' => 113,
                'adm_departamento_id' => 3,
                'cod_municipio' => 50403,
                'cod_red' => 52,
                'nom_red' => 'OCURI                    ',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            113 => 
            array (
                'id' => 114,
                'adm_departamento_id' => 3,
                'cod_municipio' => 50404,
                'cod_red' => 52,
                'nom_red' => 'OCURI                    ',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            114 => 
            array (
                'id' => 115,
                'adm_departamento_id' => 3,
                'cod_municipio' => 50601,
                'cod_red' => 51,
                'nom_red' => 'COTAGAITA                ',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            115 => 
            array (
                'id' => 116,
                'adm_departamento_id' => 3,
                'cod_municipio' => 50602,
                'cod_red' => 51,
                'nom_red' => 'COTAGAITA                ',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            116 => 
            array (
                'id' => 117,
                'adm_departamento_id' => 3,
                'cod_municipio' => 50301,
                'cod_red' => 50,
                'nom_red' => 'BETANZOS                 ',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            117 => 
            array (
                'id' => 118,
                'adm_departamento_id' => 3,
                'cod_municipio' => 50302,
                'cod_red' => 50,
                'nom_red' => 'BETANZOS                 ',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            118 => 
            array (
                'id' => 119,
                'adm_departamento_id' => 2,
                'cod_municipio' => 40101,
                'cod_red' => 49,
            'nom_red' => 'RED URBANA (1)           ',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            119 => 
            array (
                'id' => 120,
                'adm_departamento_id' => 2,
                'cod_municipio' => 41502,
                'cod_red' => 48,
                'nom_red' => 'RED OCCIDENTE            ',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            120 => 
            array (
                'id' => 121,
                'adm_departamento_id' => 2,
                'cod_municipio' => 41503,
                'cod_red' => 48,
                'nom_red' => 'RED OCCIDENTE            ',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            121 => 
            array (
                'id' => 122,
                'adm_departamento_id' => 2,
                'cod_municipio' => 40501,
                'cod_red' => 47,
                'nom_red' => 'RED OCCIDENTE            ',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            122 => 
            array (
                'id' => 123,
                'adm_departamento_id' => 2,
                'cod_municipio' => 40502,
                'cod_red' => 47,
                'nom_red' => 'RED OCCIDENTE            ',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            123 => 
            array (
                'id' => 124,
                'adm_departamento_id' => 2,
                'cod_municipio' => 40503,
                'cod_red' => 47,
                'nom_red' => 'RED OCCIDENTE            ',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            124 => 
            array (
                'id' => 125,
                'adm_departamento_id' => 2,
                'cod_municipio' => 40504,
                'cod_red' => 47,
                'nom_red' => 'RED OCCIDENTE            ',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            125 => 
            array (
                'id' => 126,
                'adm_departamento_id' => 2,
                'cod_municipio' => 40505,
                'cod_red' => 47,
                'nom_red' => 'RED OCCIDENTE            ',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            126 => 
            array (
                'id' => 127,
                'adm_departamento_id' => 2,
                'cod_municipio' => 40901,
                'cod_red' => 47,
                'nom_red' => 'RED OCCIDENTE            ',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            127 => 
            array (
                'id' => 128,
                'adm_departamento_id' => 2,
                'cod_municipio' => 40902,
                'cod_red' => 47,
                'nom_red' => 'RED OCCIDENTE            ',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            128 => 
            array (
                'id' => 129,
                'adm_departamento_id' => 2,
                'cod_municipio' => 40903,
                'cod_red' => 47,
                'nom_red' => 'RED OCCIDENTE            ',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            129 => 
            array (
                'id' => 130,
                'adm_departamento_id' => 2,
                'cod_municipio' => 41501,
                'cod_red' => 47,
                'nom_red' => 'RED OCCIDENTE            ',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            130 => 
            array (
                'id' => 131,
                'adm_departamento_id' => 2,
                'cod_municipio' => 40601,
                'cod_red' => 46,
            'nom_red' => 'RED MINERA (2)           ',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            131 => 
            array (
                'id' => 132,
                'adm_departamento_id' => 2,
                'cod_municipio' => 40603,
                'cod_red' => 46,
            'nom_red' => 'RED MINERA (2)           ',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            132 => 
            array (
                'id' => 133,
                'adm_departamento_id' => 2,
                'cod_municipio' => 40701,
                'cod_red' => 46,
            'nom_red' => 'RED MINERA (2)           ',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            133 => 
            array (
                'id' => 134,
                'adm_departamento_id' => 2,
                'cod_municipio' => 40702,
                'cod_red' => 46,
            'nom_red' => 'RED MINERA (2)           ',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            134 => 
            array (
                'id' => 135,
                'adm_departamento_id' => 2,
                'cod_municipio' => 40103,
                'cod_red' => 45,
            'nom_red' => 'RED CUENCA POOPO (3)     ',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            135 => 
            array (
                'id' => 136,
                'adm_departamento_id' => 2,
                'cod_municipio' => 40301,
                'cod_red' => 45,
            'nom_red' => 'RED CUENCA POOPO (3)     ',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            136 => 
            array (
                'id' => 137,
                'adm_departamento_id' => 2,
                'cod_municipio' => 40302,
                'cod_red' => 45,
            'nom_red' => 'RED CUENCA POOPO (3)     ',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            137 => 
            array (
                'id' => 138,
                'adm_departamento_id' => 2,
                'cod_municipio' => 40402,
                'cod_red' => 45,
            'nom_red' => 'RED CUENCA POOPO (3)     ',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            138 => 
            array (
                'id' => 139,
                'adm_departamento_id' => 2,
                'cod_municipio' => 41001,
                'cod_red' => 45,
            'nom_red' => 'RED CUENCA POOPO (3)     ',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            139 => 
            array (
                'id' => 140,
                'adm_departamento_id' => 2,
                'cod_municipio' => 41201,
                'cod_red' => 45,
            'nom_red' => 'RED CUENCA POOPO (3)     ',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            140 => 
            array (
                'id' => 141,
                'adm_departamento_id' => 2,
                'cod_municipio' => 41202,
                'cod_red' => 45,
            'nom_red' => 'RED CUENCA POOPO (3)     ',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            141 => 
            array (
                'id' => 142,
                'adm_departamento_id' => 2,
                'cod_municipio' => 40102,
                'cod_red' => 44,
                'nom_red' => 'NORTE ORURO              ',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            142 => 
            array (
                'id' => 143,
                'adm_departamento_id' => 2,
                'cod_municipio' => 40104,
                'cod_red' => 44,
                'nom_red' => 'NORTE ORURO              ',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            143 => 
            array (
                'id' => 144,
                'adm_departamento_id' => 2,
                'cod_municipio' => 40401,
                'cod_red' => 44,
                'nom_red' => 'NORTE ORURO              ',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            144 => 
            array (
                'id' => 145,
                'adm_departamento_id' => 2,
                'cod_municipio' => 41101,
                'cod_red' => 44,
                'nom_red' => 'NORTE ORURO              ',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            145 => 
            array (
                'id' => 146,
                'adm_departamento_id' => 2,
                'cod_municipio' => 41301,
                'cod_red' => 44,
                'nom_red' => 'NORTE ORURO              ',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            146 => 
            array (
                'id' => 147,
                'adm_departamento_id' => 2,
                'cod_municipio' => 41601,
                'cod_red' => 44,
                'nom_red' => 'NORTE ORURO              ',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            147 => 
            array (
                'id' => 148,
                'adm_departamento_id' => 2,
                'cod_municipio' => 40201,
                'cod_red' => 43,
                'nom_red' => 'AZANAQUE                 ',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            148 => 
            array (
                'id' => 149,
                'adm_departamento_id' => 2,
                'cod_municipio' => 40202,
                'cod_red' => 43,
                'nom_red' => 'AZANAQUE                 ',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            149 => 
            array (
                'id' => 150,
                'adm_departamento_id' => 2,
                'cod_municipio' => 40602,
                'cod_red' => 43,
                'nom_red' => 'AZANAQUE                 ',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            150 => 
            array (
                'id' => 151,
                'adm_departamento_id' => 2,
                'cod_municipio' => 40801,
                'cod_red' => 43,
                'nom_red' => 'AZANAQUE                 ',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            151 => 
            array (
                'id' => 152,
                'adm_departamento_id' => 2,
                'cod_municipio' => 40802,
                'cod_red' => 43,
                'nom_red' => 'AZANAQUE                 ',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            152 => 
            array (
                'id' => 153,
                'adm_departamento_id' => 2,
                'cod_municipio' => 41401,
                'cod_red' => 43,
                'nom_red' => 'AZANAQUE                 ',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            153 => 
            array (
                'id' => 154,
                'adm_departamento_id' => 1,
                'cod_municipio' => 21001,
                'cod_red' => 42,
                'nom_red' => 'RED RURAL 15             ',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            154 => 
            array (
                'id' => 155,
                'adm_departamento_id' => 1,
                'cod_municipio' => 21002,
                'cod_red' => 42,
                'nom_red' => 'RED RURAL 15             ',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            155 => 
            array (
                'id' => 156,
                'adm_departamento_id' => 1,
                'cod_municipio' => 21003,
                'cod_red' => 42,
                'nom_red' => 'RED RURAL 15             ',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            156 => 
            array (
                'id' => 157,
                'adm_departamento_id' => 1,
                'cod_municipio' => 21004,
                'cod_red' => 42,
                'nom_red' => 'RED RURAL 15             ',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            157 => 
            array (
                'id' => 158,
                'adm_departamento_id' => 1,
                'cod_municipio' => 21005,
                'cod_red' => 42,
                'nom_red' => 'RED RURAL 15             ',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            158 => 
            array (
                'id' => 159,
                'adm_departamento_id' => 1,
                'cod_municipio' => 21006,
                'cod_red' => 42,
                'nom_red' => 'RED RURAL 15             ',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            159 => 
            array (
                'id' => 160,
                'adm_departamento_id' => 1,
                'cod_municipio' => 20901,
                'cod_red' => 41,
                'nom_red' => 'RED RURAL 14             ',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            160 => 
            array (
                'id' => 161,
                'adm_departamento_id' => 1,
                'cod_municipio' => 20903,
                'cod_red' => 41,
                'nom_red' => 'RED RURAL 14             ',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            161 => 
            array (
                'id' => 162,
                'adm_departamento_id' => 1,
                'cod_municipio' => 20904,
                'cod_red' => 41,
                'nom_red' => 'RED RURAL 14             ',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            162 => 
            array (
                'id' => 163,
                'adm_departamento_id' => 1,
                'cod_municipio' => 20905,
                'cod_red' => 41,
                'nom_red' => 'RED RURAL 14             ',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            163 => 
            array (
                'id' => 164,
                'adm_departamento_id' => 1,
                'cod_municipio' => 20306,
                'cod_red' => 40,
                'nom_red' => 'RED RURAL 13             ',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            164 => 
            array (
                'id' => 165,
                'adm_departamento_id' => 1,
                'cod_municipio' => 20902,
                'cod_red' => 40,
                'nom_red' => 'RED RURAL 13             ',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            165 => 
            array (
                'id' => 166,
                'adm_departamento_id' => 1,
                'cod_municipio' => 21303,
                'cod_red' => 40,
                'nom_red' => 'RED RURAL 13             ',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            166 => 
            array (
                'id' => 167,
                'adm_departamento_id' => 1,
                'cod_municipio' => 21304,
                'cod_red' => 40,
                'nom_red' => 'RED RURAL 13             ',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            167 => 
            array (
                'id' => 168,
                'adm_departamento_id' => 1,
                'cod_municipio' => 21306,
                'cod_red' => 40,
                'nom_red' => 'RED RURAL 13             ',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            168 => 
            array (
                'id' => 169,
                'adm_departamento_id' => 1,
                'cod_municipio' => 21307,
                'cod_red' => 40,
                'nom_red' => 'RED RURAL 13             ',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            169 => 
            array (
                'id' => 170,
                'adm_departamento_id' => 1,
                'cod_municipio' => 20308,
                'cod_red' => 39,
                'nom_red' => 'RED RURAL 12             ',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            170 => 
            array (
                'id' => 171,
                'adm_departamento_id' => 1,
                'cod_municipio' => 21301,
                'cod_red' => 39,
                'nom_red' => 'RED RURAL 12             ',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            171 => 
            array (
                'id' => 172,
                'adm_departamento_id' => 1,
                'cod_municipio' => 21302,
                'cod_red' => 39,
                'nom_red' => 'RED RURAL 12             ',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            172 => 
            array (
                'id' => 173,
                'adm_departamento_id' => 1,
                'cod_municipio' => 21305,
                'cod_red' => 39,
                'nom_red' => 'RED RURAL 12             ',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            173 => 
            array (
                'id' => 174,
                'adm_departamento_id' => 1,
                'cod_municipio' => 21801,
                'cod_red' => 39,
                'nom_red' => 'RED RURAL 12             ',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            174 => 
            array (
                'id' => 175,
                'adm_departamento_id' => 1,
                'cod_municipio' => 21802,
                'cod_red' => 39,
                'nom_red' => 'RED RURAL 12             ',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            175 => 
            array (
                'id' => 176,
                'adm_departamento_id' => 1,
                'cod_municipio' => 21803,
                'cod_red' => 39,
                'nom_red' => 'RED RURAL 12             ',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            176 => 
            array (
                'id' => 177,
                'adm_departamento_id' => 1,
                'cod_municipio' => 20802,
                'cod_red' => 38,
                'nom_red' => 'RED RURAL  9             ',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            177 => 
            array (
                'id' => 178,
                'adm_departamento_id' => 1,
                'cod_municipio' => 20803,
                'cod_red' => 38,
                'nom_red' => 'RED RURAL  9             ',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            178 => 
            array (
                'id' => 179,
                'adm_departamento_id' => 1,
                'cod_municipio' => 20804,
                'cod_red' => 38,
                'nom_red' => 'RED RURAL  9             ',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            179 => 
            array (
                'id' => 180,
                'adm_departamento_id' => 1,
                'cod_municipio' => 20805,
                'cod_red' => 38,
                'nom_red' => 'RED RURAL  9             ',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            180 => 
            array (
                'id' => 181,
                'adm_departamento_id' => 1,
                'cod_municipio' => 20806,
                'cod_red' => 38,
                'nom_red' => 'RED RURAL  9             ',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            181 => 
            array (
                'id' => 182,
                'adm_departamento_id' => 1,
                'cod_municipio' => 20807,
                'cod_red' => 38,
                'nom_red' => 'RED RURAL  9             ',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            182 => 
            array (
                'id' => 183,
                'adm_departamento_id' => 1,
                'cod_municipio' => 21202,
                'cod_red' => 38,
                'nom_red' => 'RED RURAL  9             ',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            183 => 
            array (
                'id' => 184,
                'adm_departamento_id' => 1,
                'cod_municipio' => 21101,
                'cod_red' => 37,
                'nom_red' => 'RED RURAL  8             ',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            184 => 
            array (
                'id' => 185,
                'adm_departamento_id' => 1,
                'cod_municipio' => 21102,
                'cod_red' => 37,
                'nom_red' => 'RED RURAL  8             ',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            185 => 
            array (
                'id' => 186,
                'adm_departamento_id' => 1,
                'cod_municipio' => 21103,
                'cod_red' => 37,
                'nom_red' => 'RED RURAL  8             ',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            186 => 
            array (
                'id' => 187,
                'adm_departamento_id' => 1,
                'cod_municipio' => 21105,
                'cod_red' => 37,
                'nom_red' => 'RED RURAL  8             ',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            187 => 
            array (
                'id' => 188,
                'adm_departamento_id' => 1,
                'cod_municipio' => 21401,
                'cod_red' => 37,
                'nom_red' => 'RED RURAL  8             ',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            188 => 
            array (
                'id' => 189,
                'adm_departamento_id' => 1,
                'cod_municipio' => 21402,
                'cod_red' => 37,
                'nom_red' => 'RED RURAL  8             ',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            189 => 
            array (
                'id' => 190,
                'adm_departamento_id' => 1,
                'cod_municipio' => 20602,
                'cod_red' => 36,
                'nom_red' => 'RED RURAL  7             ',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            190 => 
            array (
                'id' => 191,
                'adm_departamento_id' => 1,
                'cod_municipio' => 20606,
                'cod_red' => 36,
                'nom_red' => 'RED RURAL  7             ',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            191 => 
            array (
                'id' => 192,
                'adm_departamento_id' => 1,
                'cod_municipio' => 20607,
                'cod_red' => 36,
                'nom_red' => 'RED RURAL  7             ',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            192 => 
            array (
                'id' => 193,
                'adm_departamento_id' => 1,
                'cod_municipio' => 20608,
                'cod_red' => 36,
                'nom_red' => 'RED RURAL  7             ',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            193 => 
            array (
                'id' => 194,
                'adm_departamento_id' => 1,
                'cod_municipio' => 21104,
                'cod_red' => 36,
                'nom_red' => 'RED RURAL  7             ',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            194 => 
            array (
                'id' => 195,
                'adm_departamento_id' => 1,
                'cod_municipio' => 22001,
                'cod_red' => 36,
                'nom_red' => 'RED RURAL  7             ',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            195 => 
            array (
                'id' => 196,
                'adm_departamento_id' => 1,
                'cod_municipio' => 22002,
                'cod_red' => 36,
                'nom_red' => 'RED RURAL  7             ',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            196 => 
            array (
                'id' => 197,
                'adm_departamento_id' => 1,
                'cod_municipio' => 21201,
                'cod_red' => 35,
                'nom_red' => 'RED RURAL  5             ',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            197 => 
            array (
                'id' => 198,
                'adm_departamento_id' => 1,
                'cod_municipio' => 21203,
                'cod_red' => 35,
                'nom_red' => 'RED RURAL  5             ',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            198 => 
            array (
                'id' => 199,
                'adm_departamento_id' => 1,
                'cod_municipio' => 21204,
                'cod_red' => 35,
                'nom_red' => 'RED RURAL  5             ',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            199 => 
            array (
                'id' => 200,
                'adm_departamento_id' => 1,
                'cod_municipio' => 21701,
                'cod_red' => 35,
                'nom_red' => 'RED RURAL  5             ',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            200 => 
            array (
                'id' => 201,
                'adm_departamento_id' => 1,
                'cod_municipio' => 21702,
                'cod_red' => 35,
                'nom_red' => 'RED RURAL  5             ',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            201 => 
            array (
                'id' => 202,
                'adm_departamento_id' => 1,
                'cod_municipio' => 21703,
                'cod_red' => 35,
                'nom_red' => 'RED RURAL  5             ',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            202 => 
            array (
                'id' => 203,
                'adm_departamento_id' => 1,
                'cod_municipio' => 20401,
                'cod_red' => 34,
                'nom_red' => 'RED RURAL  3             ',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            203 => 
            array (
                'id' => 204,
                'adm_departamento_id' => 1,
                'cod_municipio' => 20402,
                'cod_red' => 34,
                'nom_red' => 'RED RURAL  3             ',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            204 => 
            array (
                'id' => 205,
                'adm_departamento_id' => 1,
                'cod_municipio' => 20403,
                'cod_red' => 34,
                'nom_red' => 'RED RURAL  3             ',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            205 => 
            array (
                'id' => 206,
                'adm_departamento_id' => 1,
                'cod_municipio' => 20404,
                'cod_red' => 34,
                'nom_red' => 'RED RURAL  3             ',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            206 => 
            array (
                'id' => 207,
                'adm_departamento_id' => 1,
                'cod_municipio' => 20405,
                'cod_red' => 34,
                'nom_red' => 'RED RURAL  3             ',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            207 => 
            array (
                'id' => 208,
                'adm_departamento_id' => 1,
                'cod_municipio' => 20501,
                'cod_red' => 33,
                'nom_red' => 'RED RURAL  2             ',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            208 => 
            array (
                'id' => 209,
                'adm_departamento_id' => 1,
                'cod_municipio' => 20502,
                'cod_red' => 33,
                'nom_red' => 'RED RURAL  2             ',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            209 => 
            array (
                'id' => 210,
                'adm_departamento_id' => 1,
                'cod_municipio' => 20503,
                'cod_red' => 33,
                'nom_red' => 'RED RURAL  2             ',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            210 => 
            array (
                'id' => 211,
                'adm_departamento_id' => 1,
                'cod_municipio' => 20701,
                'cod_red' => 33,
                'nom_red' => 'RED RURAL  2             ',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            211 => 
            array (
                'id' => 212,
                'adm_departamento_id' => 1,
                'cod_municipio' => 20702,
                'cod_red' => 33,
                'nom_red' => 'RED RURAL  2             ',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            212 => 
            array (
                'id' => 213,
                'adm_departamento_id' => 1,
                'cod_municipio' => 21601,
                'cod_red' => 33,
                'nom_red' => 'RED RURAL  2             ',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            213 => 
            array (
                'id' => 214,
                'adm_departamento_id' => 1,
                'cod_municipio' => 21602,
                'cod_red' => 33,
                'nom_red' => 'RED RURAL  2             ',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            214 => 
            array (
                'id' => 215,
                'adm_departamento_id' => 1,
                'cod_municipio' => 21502,
                'cod_red' => 32,
                'nom_red' => 'RED RURAL  1             ',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            215 => 
            array (
                'id' => 216,
                'adm_departamento_id' => 1,
                'cod_municipio' => 21501,
                'cod_red' => 32,
                'nom_red' => 'RED RURAL  1             ',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            216 => 
            array (
                'id' => 217,
                'adm_departamento_id' => 1,
                'cod_municipio' => 20307,
                'cod_red' => 31,
                'nom_red' => 'RED RURAL 11             ',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            217 => 
            array (
                'id' => 218,
                'adm_departamento_id' => 1,
                'cod_municipio' => 21901,
                'cod_red' => 31,
                'nom_red' => 'RED RURAL 11             ',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            218 => 
            array (
                'id' => 219,
                'adm_departamento_id' => 1,
                'cod_municipio' => 21902,
                'cod_red' => 31,
                'nom_red' => 'RED RURAL 11             ',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            219 => 
            array (
                'id' => 220,
                'adm_departamento_id' => 1,
                'cod_municipio' => 20301,
                'cod_red' => 31,
                'nom_red' => 'RED RURAL 11             ',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            220 => 
            array (
                'id' => 221,
                'adm_departamento_id' => 1,
                'cod_municipio' => 20302,
                'cod_red' => 31,
                'nom_red' => 'RED RURAL 11             ',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            221 => 
            array (
                'id' => 222,
                'adm_departamento_id' => 1,
                'cod_municipio' => 20303,
                'cod_red' => 31,
                'nom_red' => 'RED RURAL 11             ',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            222 => 
            array (
                'id' => 223,
                'adm_departamento_id' => 1,
                'cod_municipio' => 20304,
                'cod_red' => 31,
                'nom_red' => 'RED RURAL 11             ',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            223 => 
            array (
                'id' => 224,
                'adm_departamento_id' => 1,
                'cod_municipio' => 20305,
                'cod_red' => 31,
                'nom_red' => 'RED RURAL 11             ',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            224 => 
            array (
                'id' => 225,
                'adm_departamento_id' => 1,
                'cod_municipio' => 20601,
                'cod_red' => 30,
                'nom_red' => 'RED RURAL  4             ',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            225 => 
            array (
                'id' => 226,
                'adm_departamento_id' => 1,
                'cod_municipio' => 20603,
                'cod_red' => 30,
                'nom_red' => 'RED RURAL  4             ',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            226 => 
            array (
                'id' => 227,
                'adm_departamento_id' => 1,
                'cod_municipio' => 20604,
                'cod_red' => 30,
                'nom_red' => 'RED RURAL  4             ',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            227 => 
            array (
                'id' => 228,
                'adm_departamento_id' => 1,
                'cod_municipio' => 20605,
                'cod_red' => 30,
                'nom_red' => 'RED RURAL  4             ',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            228 => 
            array (
                'id' => 229,
                'adm_departamento_id' => 1,
                'cod_municipio' => 20201,
                'cod_red' => 30,
                'nom_red' => 'RED RURAL  4             ',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            229 => 
            array (
                'id' => 230,
                'adm_departamento_id' => 1,
                'cod_municipio' => 20202,
                'cod_red' => 30,
                'nom_red' => 'RED RURAL  4             ',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            230 => 
            array (
                'id' => 231,
                'adm_departamento_id' => 1,
                'cod_municipio' => 20203,
                'cod_red' => 30,
                'nom_red' => 'RED RURAL  4             ',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            231 => 
            array (
                'id' => 232,
                'adm_departamento_id' => 1,
                'cod_municipio' => 20204,
                'cod_red' => 30,
                'nom_red' => 'RED RURAL  4             ',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            232 => 
            array (
                'id' => 233,
                'adm_departamento_id' => 1,
                'cod_municipio' => 20205,
                'cod_red' => 30,
                'nom_red' => 'RED RURAL  4             ',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            233 => 
            array (
                'id' => 234,
                'adm_departamento_id' => 1,
                'cod_municipio' => 20206,
                'cod_red' => 30,
                'nom_red' => 'RED RURAL  4             ',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            234 => 
            array (
                'id' => 235,
                'adm_departamento_id' => 1,
                'cod_municipio' => 20105,
                'cod_red' => 29,
                'nom_red' => 'RED LOTES Y SERVICIOS    ',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            235 => 
            array (
                'id' => 236,
                'adm_departamento_id' => 1,
                'cod_municipio' => 20105,
                'cod_red' => 28,
                'nom_red' => 'RED LOS ANDES            ',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            236 => 
            array (
                'id' => 237,
                'adm_departamento_id' => 1,
                'cod_municipio' => 20105,
                'cod_red' => 27,
                'nom_red' => 'RED DE SALUD SENKATA     ',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            237 => 
            array (
                'id' => 238,
                'adm_departamento_id' => 1,
                'cod_municipio' => 20105,
                'cod_red' => 26,
                'nom_red' => 'RED COREA                ',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            238 => 
            array (
                'id' => 239,
                'adm_departamento_id' => 1,
                'cod_municipio' => 20105,
                'cod_red' => 25,
                'nom_red' => 'RED BOLIVIANO HOLANDES   ',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            239 => 
            array (
                'id' => 240,
                'adm_departamento_id' => 1,
                'cod_municipio' => 20105,
                'cod_red' => 24,
                'nom_red' => 'HOSP.TERCER NIVEL EL ALTO',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            240 => 
            array (
                'id' => 241,
                'adm_departamento_id' => 1,
                'cod_municipio' => 20801,
                'cod_red' => 23,
                'nom_red' => 'RED RURAL  6             ',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            241 => 
            array (
                'id' => 242,
                'adm_departamento_id' => 1,
                'cod_municipio' => 20102,
                'cod_red' => 23,
                'nom_red' => 'RED RURAL  6             ',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            242 => 
            array (
                'id' => 243,
                'adm_departamento_id' => 1,
                'cod_municipio' => 20103,
                'cod_red' => 23,
                'nom_red' => 'RED RURAL  6             ',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            243 => 
            array (
                'id' => 244,
                'adm_departamento_id' => 1,
                'cod_municipio' => 20104,
                'cod_red' => 23,
                'nom_red' => 'RED RURAL  6             ',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            244 => 
            array (
                'id' => 245,
                'adm_departamento_id' => 1,
                'cod_municipio' => 20101,
                'cod_red' => 22,
                'nom_red' => 'RED - 5 SUR              ',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            245 => 
            array (
                'id' => 246,
                'adm_departamento_id' => 1,
                'cod_municipio' => 20101,
                'cod_red' => 21,
            'nom_red' => 'RED - 4 ESTE (N)         ',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            246 => 
            array (
                'id' => 247,
                'adm_departamento_id' => 1,
                'cod_municipio' => 20101,
                'cod_red' => 20,
                'nom_red' => 'RED - 3 NORTE CENTRAL    ',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            247 => 
            array (
                'id' => 248,
                'adm_departamento_id' => 1,
                'cod_municipio' => 20101,
                'cod_red' => 19,
                'nom_red' => 'RED - 2 NOR OESTE        ',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            248 => 
            array (
                'id' => 249,
                'adm_departamento_id' => 1,
                'cod_municipio' => 20101,
                'cod_red' => 18,
                'nom_red' => 'RED - 1 SUR OESTE        ',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            249 => 
            array (
                'id' => 250,
                'adm_departamento_id' => 5,
                'cod_municipio' => 10701,
                'cod_red' => 17,
                'nom_red' => 'RED DE SALUD VI CAMARGO  ',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            250 => 
            array (
                'id' => 251,
                'adm_departamento_id' => 5,
                'cod_municipio' => 10702,
                'cod_red' => 17,
                'nom_red' => 'RED DE SALUD VI CAMARGO  ',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            251 => 
            array (
                'id' => 252,
                'adm_departamento_id' => 5,
                'cod_municipio' => 10703,
                'cod_red' => 17,
                'nom_red' => 'RED DE SALUD VI CAMARGO  ',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            252 => 
            array (
                'id' => 253,
                'adm_departamento_id' => 5,
                'cod_municipio' => 10704,
                'cod_red' => 17,
                'nom_red' => 'RED DE SALUD VI CAMARGO  ',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            253 => 
            array (
                'id' => 254,
                'adm_departamento_id' => 5,
                'cod_municipio' => 10901,
                'cod_red' => 17,
                'nom_red' => 'RED DE SALUD VI CAMARGO  ',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            254 => 
            array (
                'id' => 255,
                'adm_departamento_id' => 5,
                'cod_municipio' => 10902,
                'cod_red' => 17,
                'nom_red' => 'RED DE SALUD VI CAMARGO  ',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            255 => 
            array (
                'id' => 256,
                'adm_departamento_id' => 5,
                'cod_municipio' => 10903,
                'cod_red' => 17,
                'nom_red' => 'RED DE SALUD VI CAMARGO  ',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            256 => 
            array (
                'id' => 257,
                'adm_departamento_id' => 5,
                'cod_municipio' => 10601,
                'cod_red' => 16,
                'nom_red' => 'RED DE SALUD II TARABUCO ',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            257 => 
            array (
                'id' => 258,
                'adm_departamento_id' => 5,
                'cod_municipio' => 10602,
                'cod_red' => 16,
                'nom_red' => 'RED DE SALUD II TARABUCO ',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            258 => 
            array (
                'id' => 259,
                'adm_departamento_id' => 1,
                'cod_municipio' => 20101,
                'cod_red' => 16,
                'nom_red' => 'HOSP.TERCER NIVEL        ',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            259 => 
            array (
                'id' => 260,
                'adm_departamento_id' => 5,
                'cod_municipio' => 10501,
                'cod_red' => 15,
                'nom_red' => 'RED DE SALUD V MONTEAGUDO',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            260 => 
            array (
                'id' => 261,
                'adm_departamento_id' => 5,
                'cod_municipio' => 10502,
                'cod_red' => 15,
                'nom_red' => 'RED DE SALUD V MONTEAGUDO',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            261 => 
            array (
                'id' => 262,
                'adm_departamento_id' => 5,
                'cod_municipio' => 11001,
                'cod_red' => 15,
                'nom_red' => 'RED DE SALUD V MONTEAGUDO',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            262 => 
            array (
                'id' => 263,
                'adm_departamento_id' => 5,
                'cod_municipio' => 11002,
                'cod_red' => 15,
                'nom_red' => 'RED DE SALUD V MONTEAGUDO',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            263 => 
            array (
                'id' => 264,
                'adm_departamento_id' => 5,
                'cod_municipio' => 11003,
                'cod_red' => 15,
                'nom_red' => 'RED DE SALUD V MONTEAGUDO',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            264 => 
            array (
                'id' => 265,
                'adm_departamento_id' => 5,
                'cod_municipio' => 10301,
                'cod_red' => 14,
                'nom_red' => 'RED DE SALUD II TARABUCO ',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            265 => 
            array (
                'id' => 266,
                'adm_departamento_id' => 5,
                'cod_municipio' => 10302,
                'cod_red' => 14,
                'nom_red' => 'RED DE SALUD II TARABUCO ',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            266 => 
            array (
                'id' => 267,
                'adm_departamento_id' => 5,
                'cod_municipio' => 10303,
                'cod_red' => 14,
                'nom_red' => 'RED DE SALUD II TARABUCO ',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            267 => 
            array (
                'id' => 268,
                'adm_departamento_id' => 5,
                'cod_municipio' => 10304,
                'cod_red' => 14,
                'nom_red' => 'RED DE SALUD II TARABUCO ',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            268 => 
            array (
                'id' => 269,
                'adm_departamento_id' => 5,
                'cod_municipio' => 10401,
                'cod_red' => 14,
                'nom_red' => 'RED DE SALUD III PADILLA ',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            269 => 
            array (
                'id' => 270,
                'adm_departamento_id' => 5,
                'cod_municipio' => 10402,
                'cod_red' => 14,
                'nom_red' => 'RED DE SALUD III PADILLA ',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            270 => 
            array (
                'id' => 271,
                'adm_departamento_id' => 5,
                'cod_municipio' => 10404,
                'cod_red' => 14,
                'nom_red' => 'RED DE SALUD III PADILLA ',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            271 => 
            array (
                'id' => 272,
                'adm_departamento_id' => 5,
                'cod_municipio' => 10405,
                'cod_red' => 14,
                'nom_red' => 'RED DE SALUD III PADILLA ',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            272 => 
            array (
                'id' => 273,
                'adm_departamento_id' => 5,
                'cod_municipio' => 10801,
                'cod_red' => 14,
                'nom_red' => 'RED DE SALUD III PADILLA ',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            273 => 
            array (
                'id' => 274,
                'adm_departamento_id' => 5,
                'cod_municipio' => 10201,
                'cod_red' => 13,
                'nom_red' => 'RED DE SALUD IV AZURDUY  ',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            274 => 
            array (
                'id' => 275,
                'adm_departamento_id' => 5,
                'cod_municipio' => 10202,
                'cod_red' => 13,
                'nom_red' => 'RED DE SALUD IV AZURDUY  ',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            275 => 
            array (
                'id' => 276,
                'adm_departamento_id' => 5,
                'cod_municipio' => 10403,
                'cod_red' => 13,
                'nom_red' => 'RED DE SALUD IV AZURDUY  ',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            276 => 
            array (
                'id' => 277,
                'adm_departamento_id' => 5,
                'cod_municipio' => 10102,
                'cod_red' => 12,
                'nom_red' => 'RED DE SALUD VII RURAL   ',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            277 => 
            array (
                'id' => 278,
                'adm_departamento_id' => 5,
                'cod_municipio' => 10103,
                'cod_red' => 12,
                'nom_red' => 'RED DE SALUD VII RURAL   ',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            278 => 
            array (
                'id' => 279,
                'adm_departamento_id' => 5,
                'cod_municipio' => 10101,
                'cod_red' => 11,
                'nom_red' => 'RED I - HOSP 3ER NIVEL   ',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            279 => 
            array (
                'id' => 280,
                'adm_departamento_id' => 5,
                'cod_municipio' => 10101,
                'cod_red' => 10,
                'nom_red' => 'RED I - HOSP 2DO NIVEL   ',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            280 => 
            array (
                'id' => 281,
                'adm_departamento_id' => 5,
                'cod_municipio' => 10101,
                'cod_red' => 9,
                'nom_red' => 'RED VII-DISTRITO 9       ',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            281 => 
            array (
                'id' => 282,
                'adm_departamento_id' => 5,
                'cod_municipio' => 10101,
                'cod_red' => 8,
                'nom_red' => 'RED VII-DISTRITO 8       ',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            282 => 
            array (
                'id' => 283,
                'adm_departamento_id' => 5,
                'cod_municipio' => 10101,
                'cod_red' => 7,
                'nom_red' => 'RED VII-DISTRITO 7       ',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            283 => 
            array (
                'id' => 284,
                'adm_departamento_id' => 5,
                'cod_municipio' => 10101,
                'cod_red' => 6,
                'nom_red' => 'RED I - DISTRITO 6       ',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            284 => 
            array (
                'id' => 285,
                'adm_departamento_id' => 5,
                'cod_municipio' => 10101,
                'cod_red' => 5,
                'nom_red' => 'RED I - DISTRITO 5       ',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            285 => 
            array (
                'id' => 286,
                'adm_departamento_id' => 5,
                'cod_municipio' => 10101,
                'cod_red' => 4,
                'nom_red' => 'RED I - DISTRITO 4       ',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            286 => 
            array (
                'id' => 287,
                'adm_departamento_id' => 5,
                'cod_municipio' => 10101,
                'cod_red' => 3,
                'nom_red' => 'RED I - DISTRITO 3       ',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            287 => 
            array (
                'id' => 288,
                'adm_departamento_id' => 5,
                'cod_municipio' => 10101,
                'cod_red' => 2,
                'nom_red' => 'RED I - DISTRITO 2       ',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            288 => 
            array (
                'id' => 289,
                'adm_departamento_id' => 5,
                'cod_municipio' => 10101,
                'cod_red' => 1,
                'nom_red' => 'RED I - DISTRITO 1       ',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            289 => 
            array (
                'id' => 290,
                'adm_departamento_id' => 9,
                'cod_municipio' => 71201,
                'cod_red' => 108,
                'nom_red' => 'ANGEL SANDOVAL           ',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            290 => 
            array (
                'id' => 291,
                'adm_departamento_id' => 9,
                'cod_municipio' => 70501,
                'cod_red' => 109,
                'nom_red' => 'CHIQUITOS                ',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            291 => 
            array (
                'id' => 292,
                'adm_departamento_id' => 9,
                'cod_municipio' => 70502,
                'cod_red' => 109,
                'nom_red' => 'CHIQUITOS                ',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            292 => 
            array (
                'id' => 293,
                'adm_departamento_id' => 9,
                'cod_municipio' => 70503,
                'cod_red' => 109,
                'nom_red' => 'CHIQUITOS                ',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            293 => 
            array (
                'id' => 294,
                'adm_departamento_id' => 9,
                'cod_municipio' => 70701,
                'cod_red' => 110,
                'nom_red' => 'CORDILLERA               ',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            294 => 
            array (
                'id' => 295,
                'adm_departamento_id' => 9,
                'cod_municipio' => 70702,
                'cod_red' => 110,
                'nom_red' => 'CORDILLERA               ',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            295 => 
            array (
                'id' => 296,
                'adm_departamento_id' => 9,
                'cod_municipio' => 70703,
                'cod_red' => 110,
                'nom_red' => 'CORDILLERA               ',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            296 => 
            array (
                'id' => 297,
                'adm_departamento_id' => 9,
                'cod_municipio' => 70704,
                'cod_red' => 110,
                'nom_red' => 'CORDILLERA               ',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            297 => 
            array (
                'id' => 298,
                'adm_departamento_id' => 9,
                'cod_municipio' => 70705,
                'cod_red' => 110,
                'nom_red' => 'CORDILLERA               ',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            298 => 
            array (
                'id' => 299,
                'adm_departamento_id' => 9,
                'cod_municipio' => 70706,
                'cod_red' => 110,
                'nom_red' => 'CORDILLERA               ',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            299 => 
            array (
                'id' => 300,
                'adm_departamento_id' => 9,
                'cod_municipio' => 70707,
                'cod_red' => 110,
                'nom_red' => 'CORDILLERA               ',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            300 => 
            array (
                'id' => 301,
                'adm_departamento_id' => 9,
                'cod_municipio' => 70901,
                'cod_red' => 111,
                'nom_red' => 'FLORIDA                  ',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            301 => 
            array (
                'id' => 302,
                'adm_departamento_id' => 9,
                'cod_municipio' => 70902,
                'cod_red' => 111,
                'nom_red' => 'FLORIDA                  ',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            302 => 
            array (
                'id' => 303,
                'adm_departamento_id' => 9,
                'cod_municipio' => 70903,
                'cod_red' => 111,
                'nom_red' => 'FLORIDA                  ',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            303 => 
            array (
                'id' => 304,
                'adm_departamento_id' => 9,
                'cod_municipio' => 70904,
                'cod_red' => 111,
                'nom_red' => 'FLORIDA                  ',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            304 => 
            array (
                'id' => 305,
                'adm_departamento_id' => 9,
                'cod_municipio' => 71401,
                'cod_red' => 112,
                'nom_red' => 'GERMAN BUSH              ',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            305 => 
            array (
                'id' => 306,
                'adm_departamento_id' => 9,
                'cod_municipio' => 71402,
                'cod_red' => 112,
                'nom_red' => 'GERMAN BUSH              ',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            306 => 
            array (
                'id' => 307,
                'adm_departamento_id' => 9,
                'cod_municipio' => 71403,
                'cod_red' => 112,
                'nom_red' => 'GERMAN BUSH              ',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            307 => 
            array (
                'id' => 308,
                'adm_departamento_id' => 9,
                'cod_municipio' => 71501,
                'cod_red' => 113,
                'nom_red' => 'GUARAYOS                 ',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            308 => 
            array (
                'id' => 309,
                'adm_departamento_id' => 9,
                'cod_municipio' => 71502,
                'cod_red' => 113,
                'nom_red' => 'GUARAYOS                 ',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            309 => 
            array (
                'id' => 310,
                'adm_departamento_id' => 9,
                'cod_municipio' => 71503,
                'cod_red' => 113,
                'nom_red' => 'GUARAYOS                 ',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            310 => 
            array (
                'id' => 311,
                'adm_departamento_id' => 9,
                'cod_municipio' => 70101,
                'cod_red' => 103,
            'nom_red' => 'HOSPITALES (URB.)        ',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            311 => 
            array (
                'id' => 312,
                'adm_departamento_id' => 9,
                'cod_municipio' => 70401,
                'cod_red' => 114,
                'nom_red' => 'ICHILO                   ',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            312 => 
            array (
                'id' => 313,
                'adm_departamento_id' => 9,
                'cod_municipio' => 70402,
                'cod_red' => 114,
                'nom_red' => 'ICHILO                   ',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            313 => 
            array (
                'id' => 314,
                'adm_departamento_id' => 9,
                'cod_municipio' => 70403,
                'cod_red' => 114,
                'nom_red' => 'ICHILO                   ',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            314 => 
            array (
                'id' => 315,
                'adm_departamento_id' => 9,
                'cod_municipio' => 70404,
                'cod_red' => 114,
                'nom_red' => 'ICHILO                   ',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            315 => 
            array (
                'id' => 316,
                'adm_departamento_id' => 9,
                'cod_municipio' => 71301,
                'cod_red' => 115,
                'nom_red' => 'MANUEL MARIA CABALLERO   ',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            316 => 
            array (
                'id' => 317,
                'adm_departamento_id' => 9,
                'cod_municipio' => 71302,
                'cod_red' => 115,
                'nom_red' => 'MANUEL MARIA CABALLERO   ',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            317 => 
            array (
                'id' => 318,
                'adm_departamento_id' => 9,
                'cod_municipio' => 71101,
                'cod_red' => 116,
                'nom_red' => 'ÑUFLO DE CHAVEZ          ',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            318 => 
            array (
                'id' => 319,
                'adm_departamento_id' => 9,
                'cod_municipio' => 71102,
                'cod_red' => 116,
                'nom_red' => 'ÑUFLO DE CHAVEZ          ',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            319 => 
            array (
                'id' => 320,
                'adm_departamento_id' => 9,
                'cod_municipio' => 71103,
                'cod_red' => 116,
                'nom_red' => 'ÑUFLO DE CHAVEZ          ',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            320 => 
            array (
                'id' => 321,
                'adm_departamento_id' => 9,
                'cod_municipio' => 71104,
                'cod_red' => 116,
                'nom_red' => 'ÑUFLO DE CHAVEZ          ',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            321 => 
            array (
                'id' => 322,
                'adm_departamento_id' => 9,
                'cod_municipio' => 71105,
                'cod_red' => 116,
                'nom_red' => 'ÑUFLO DE CHAVEZ          ',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            322 => 
            array (
                'id' => 323,
                'adm_departamento_id' => 9,
                'cod_municipio' => 71106,
                'cod_red' => 116,
                'nom_red' => 'ÑUFLO DE CHAVEZ          ',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            323 => 
            array (
                'id' => 324,
                'adm_departamento_id' => 9,
                'cod_municipio' => 71001,
                'cod_red' => 117,
                'nom_red' => 'OBISPO SANTISTEVAN       ',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            324 => 
            array (
                'id' => 325,
                'adm_departamento_id' => 9,
                'cod_municipio' => 71002,
                'cod_red' => 117,
                'nom_red' => 'OBISPO SANTISTEVAN       ',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            325 => 
            array (
                'id' => 326,
                'adm_departamento_id' => 9,
                'cod_municipio' => 71003,
                'cod_red' => 117,
                'nom_red' => 'OBISPO SANTISTEVAN       ',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            326 => 
            array (
                'id' => 327,
                'adm_departamento_id' => 9,
                'cod_municipio' => 71004,
                'cod_red' => 117,
                'nom_red' => 'OBISPO SANTISTEVAN       ',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            327 => 
            array (
                'id' => 328,
                'adm_departamento_id' => 9,
                'cod_municipio' => 71005,
                'cod_red' => 117,
                'nom_red' => 'OBISPO SANTISTEVAN       ',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            328 => 
            array (
                'id' => 329,
                'adm_departamento_id' => 9,
                'cod_municipio' => 70102,
                'cod_red' => 118,
                'nom_red' => 'RED ANDRES IBAÑEZ        ',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            329 => 
            array (
                'id' => 330,
                'adm_departamento_id' => 9,
                'cod_municipio' => 70103,
                'cod_red' => 118,
                'nom_red' => 'RED ANDRES IBAÑEZ        ',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            330 => 
            array (
                'id' => 331,
                'adm_departamento_id' => 9,
                'cod_municipio' => 70104,
                'cod_red' => 118,
                'nom_red' => 'RED ANDRES IBAÑEZ        ',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            331 => 
            array (
                'id' => 332,
                'adm_departamento_id' => 9,
                'cod_municipio' => 70105,
                'cod_red' => 118,
                'nom_red' => 'RED ANDRES IBAÑEZ        ',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            332 => 
            array (
                'id' => 333,
                'adm_departamento_id' => 9,
                'cod_municipio' => 70101,
                'cod_red' => 104,
                'nom_red' => 'RED CENTRO               ',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            333 => 
            array (
                'id' => 334,
                'adm_departamento_id' => 9,
                'cod_municipio' => 70101,
                'cod_red' => 105,
                'nom_red' => 'RED ESTE                 ',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            334 => 
            array (
                'id' => 335,
                'adm_departamento_id' => 9,
                'cod_municipio' => 70101,
                'cod_red' => 106,
                'nom_red' => 'RED NORTE                ',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            335 => 
            array (
                'id' => 336,
                'adm_departamento_id' => 9,
                'cod_municipio' => 70101,
                'cod_red' => 107,
                'nom_red' => 'RED SUD                  ',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            336 => 
            array (
                'id' => 337,
                'adm_departamento_id' => 9,
                'cod_municipio' => 70601,
                'cod_red' => 119,
                'nom_red' => 'SARA                     ',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            337 => 
            array (
                'id' => 338,
                'adm_departamento_id' => 9,
                'cod_municipio' => 70602,
                'cod_red' => 119,
                'nom_red' => 'SARA                     ',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            338 => 
            array (
                'id' => 339,
                'adm_departamento_id' => 9,
                'cod_municipio' => 70603,
                'cod_red' => 119,
                'nom_red' => 'SARA                     ',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            339 => 
            array (
                'id' => 340,
                'adm_departamento_id' => 9,
                'cod_municipio' => 70801,
                'cod_red' => 120,
                'nom_red' => 'VALLEGRANDE              ',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            340 => 
            array (
                'id' => 341,
                'adm_departamento_id' => 9,
                'cod_municipio' => 70802,
                'cod_red' => 120,
                'nom_red' => 'VALLEGRANDE              ',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            341 => 
            array (
                'id' => 342,
                'adm_departamento_id' => 9,
                'cod_municipio' => 70803,
                'cod_red' => 120,
                'nom_red' => 'VALLEGRANDE              ',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            342 => 
            array (
                'id' => 343,
                'adm_departamento_id' => 9,
                'cod_municipio' => 70804,
                'cod_red' => 120,
                'nom_red' => 'VALLEGRANDE              ',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            343 => 
            array (
                'id' => 344,
                'adm_departamento_id' => 9,
                'cod_municipio' => 70805,
                'cod_red' => 120,
                'nom_red' => 'VALLEGRANDE              ',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            344 => 
            array (
                'id' => 345,
                'adm_departamento_id' => 9,
                'cod_municipio' => 70301,
                'cod_red' => 121,
                'nom_red' => 'VELASCO                  ',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            345 => 
            array (
                'id' => 346,
                'adm_departamento_id' => 9,
                'cod_municipio' => 70302,
                'cod_red' => 121,
                'nom_red' => 'VELASCO                  ',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            346 => 
            array (
                'id' => 347,
                'adm_departamento_id' => 9,
                'cod_municipio' => 70303,
                'cod_red' => 121,
                'nom_red' => 'VELASCO                  ',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            347 => 
            array (
                'id' => 348,
                'adm_departamento_id' => 9,
                'cod_municipio' => 70201,
                'cod_red' => 122,
                'nom_red' => 'WARNES                   ',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            348 => 
            array (
                'id' => 349,
                'adm_departamento_id' => 9,
                'cod_municipio' => 70202,
                'cod_red' => 122,
                'nom_red' => 'WARNES                   ',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            349 => 
            array (
                'id' => 350,
                'adm_departamento_id' => 8,
                'cod_municipio' => 80101,
                'cod_red' => 94,
                'nom_red' => '01 TRINIDAD              ',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            350 => 
            array (
                'id' => 351,
                'adm_departamento_id' => 8,
                'cod_municipio' => 80102,
                'cod_red' => 94,
                'nom_red' => '01 TRINIDAD              ',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            351 => 
            array (
                'id' => 352,
                'adm_departamento_id' => 8,
                'cod_municipio' => 80601,
                'cod_red' => 94,
                'nom_red' => '01 TRINIDAD              ',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            352 => 
            array (
                'id' => 353,
                'adm_departamento_id' => 8,
                'cod_municipio' => 80602,
                'cod_red' => 94,
                'nom_red' => '01 TRINIDAD              ',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            353 => 
            array (
                'id' => 354,
                'adm_departamento_id' => 8,
                'cod_municipio' => 80501,
                'cod_red' => 95,
                'nom_red' => '02 MOXOS                 ',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            354 => 
            array (
                'id' => 355,
                'adm_departamento_id' => 8,
                'cod_municipio' => 80801,
                'cod_red' => 96,
                'nom_red' => '03 ITENEZ                ',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            355 => 
            array (
                'id' => 356,
                'adm_departamento_id' => 8,
                'cod_municipio' => 80802,
                'cod_red' => 96,
                'nom_red' => '03 ITENEZ                ',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            356 => 
            array (
                'id' => 357,
                'adm_departamento_id' => 8,
                'cod_municipio' => 80803,
                'cod_red' => 96,
                'nom_red' => '03 ITENEZ                ',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            357 => 
            array (
                'id' => 358,
                'adm_departamento_id' => 8,
                'cod_municipio' => 80701,
                'cod_red' => 97,
                'nom_red' => '04 MAMORE                ',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            358 => 
            array (
                'id' => 359,
                'adm_departamento_id' => 8,
                'cod_municipio' => 80702,
                'cod_red' => 97,
                'nom_red' => '04 MAMORE                ',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            359 => 
            array (
                'id' => 360,
                'adm_departamento_id' => 8,
                'cod_municipio' => 80703,
                'cod_red' => 97,
                'nom_red' => '04 MAMORE                ',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            360 => 
            array (
                'id' => 361,
                'adm_departamento_id' => 8,
                'cod_municipio' => 80401,
                'cod_red' => 98,
                'nom_red' => '05 YACUMA                ',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            361 => 
            array (
                'id' => 362,
                'adm_departamento_id' => 8,
                'cod_municipio' => 80402,
                'cod_red' => 98,
                'nom_red' => '05 YACUMA                ',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            362 => 
            array (
                'id' => 363,
                'adm_departamento_id' => 8,
                'cod_municipio' => 80301,
                'cod_red' => 99,
                'nom_red' => '06 BALLIVIAN             ',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            363 => 
            array (
                'id' => 364,
                'adm_departamento_id' => 8,
                'cod_municipio' => 80303,
                'cod_red' => 99,
                'nom_red' => '06 BALLIVIAN             ',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            364 => 
            array (
                'id' => 365,
                'adm_departamento_id' => 8,
                'cod_municipio' => 80304,
                'cod_red' => 99,
                'nom_red' => '06 BALLIVIAN             ',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            365 => 
            array (
                'id' => 366,
                'adm_departamento_id' => 8,
                'cod_municipio' => 80201,
                'cod_red' => 100,
                'nom_red' => '07 RIBERALTA             ',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            366 => 
            array (
                'id' => 367,
                'adm_departamento_id' => 8,
                'cod_municipio' => 80202,
                'cod_red' => 101,
                'nom_red' => '08 GUAYARAMERIN          ',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            367 => 
            array (
                'id' => 368,
                'adm_departamento_id' => 8,
                'cod_municipio' => 80302,
                'cod_red' => 102,
                'nom_red' => '09 SAN BORJA             ',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
        ));
        
        
    }
}