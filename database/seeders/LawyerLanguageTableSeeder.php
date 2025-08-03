<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class LawyerLanguageTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('lawyer_language')->delete();
        
        \DB::table('lawyer_language')->insert(array (
            0 => 
            array (
                'id' => 2,
                'lawyer_id' => 21,
                'all_language_id' => 1,
            ),
            1 => 
            array (
                'id' => 3,
                'lawyer_id' => 23,
                'all_language_id' => 1,
            ),
            2 => 
            array (
                'id' => 4,
                'lawyer_id' => 22,
                'all_language_id' => 12,
            ),
            3 => 
            array (
                'id' => 5,
                'lawyer_id' => 22,
                'all_language_id' => 1,
            ),
            4 => 
            array (
                'id' => 6,
                'lawyer_id' => 22,
                'all_language_id' => 7,
            ),
            5 => 
            array (
                'id' => 7,
                'lawyer_id' => 22,
                'all_language_id' => 16,
            ),
            6 => 
            array (
                'id' => 8,
                'lawyer_id' => 28,
                'all_language_id' => 1,
            ),
            7 => 
            array (
                'id' => 9,
                'lawyer_id' => 28,
                'all_language_id' => 6,
            ),
            8 => 
            array (
                'id' => 10,
                'lawyer_id' => 28,
                'all_language_id' => 42,
            ),
            9 => 
            array (
                'id' => 11,
                'lawyer_id' => 27,
                'all_language_id' => 1,
            ),
            10 => 
            array (
                'id' => 15,
                'lawyer_id' => 25,
                'all_language_id' => 18,
            ),
            11 => 
            array (
                'id' => 16,
                'lawyer_id' => 25,
                'all_language_id' => 1,
            ),
            12 => 
            array (
                'id' => 17,
                'lawyer_id' => 25,
                'all_language_id' => 127,
            ),
            13 => 
            array (
                'id' => 18,
                'lawyer_id' => 25,
                'all_language_id' => 6,
            ),
            14 => 
            array (
                'id' => 19,
                'lawyer_id' => 26,
                'all_language_id' => 11,
            ),
            15 => 
            array (
                'id' => 20,
                'lawyer_id' => 26,
                'all_language_id' => 23,
            ),
            16 => 
            array (
                'id' => 21,
                'lawyer_id' => 26,
                'all_language_id' => 36,
            ),
            17 => 
            array (
                'id' => 22,
                'lawyer_id' => 26,
                'all_language_id' => 48,
            ),
            18 => 
            array (
                'id' => 23,
                'lawyer_id' => 26,
                'all_language_id' => 1,
            ),
            19 => 
            array (
                'id' => 24,
                'lawyer_id' => 2,
                'all_language_id' => 1,
            ),
            20 => 
            array (
                'id' => 25,
                'lawyer_id' => 8,
                'all_language_id' => 1,
            ),
            21 => 
            array (
                'id' => 26,
                'lawyer_id' => 8,
                'all_language_id' => 4,
            ),
            22 => 
            array (
                'id' => 27,
                'lawyer_id' => 13,
                'all_language_id' => 3,
            ),
            23 => 
            array (
                'id' => 28,
                'lawyer_id' => 13,
                'all_language_id' => 1,
            ),
            24 => 
            array (
                'id' => 29,
                'lawyer_id' => 14,
                'all_language_id' => 1,
            ),
            25 => 
            array (
                'id' => 30,
                'lawyer_id' => 14,
                'all_language_id' => 6,
            ),
            26 => 
            array (
                'id' => 31,
                'lawyer_id' => 14,
                'all_language_id' => 42,
            ),
            27 => 
            array (
                'id' => 32,
                'lawyer_id' => 11,
                'all_language_id' => 1,
            ),
            28 => 
            array (
                'id' => 33,
                'lawyer_id' => 11,
                'all_language_id' => 6,
            ),
            29 => 
            array (
                'id' => 34,
                'lawyer_id' => 11,
                'all_language_id' => 42,
            ),
            30 => 
            array (
                'id' => 35,
                'lawyer_id' => 30,
                'all_language_id' => 1,
            ),
            31 => 
            array (
                'id' => 36,
                'lawyer_id' => 29,
                'all_language_id' => 1,
            ),
            32 => 
            array (
                'id' => 37,
                'lawyer_id' => 29,
                'all_language_id' => 42,
            ),
            33 => 
            array (
                'id' => 38,
                'lawyer_id' => 29,
                'all_language_id' => 6,
            ),
            34 => 
            array (
                'id' => 39,
                'lawyer_id' => 33,
                'all_language_id' => 1,
            ),
            35 => 
            array (
                'id' => 42,
                'lawyer_id' => 9,
                'all_language_id' => 1,
            ),
            36 => 
            array (
                'id' => 43,
                'lawyer_id' => 9,
                'all_language_id' => 6,
            ),
            37 => 
            array (
                'id' => 44,
                'lawyer_id' => 9,
                'all_language_id' => 42,
            ),
        ));
        
        
    }
}