<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class LawFirmLanguageTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('law_firm_language')->delete();
        
        \DB::table('law_firm_language')->insert(array (
            0 => 
            array (
                'id' => 1,
                'law_firm_id' => 5,
                'all_language_id' => 1,
            ),
            1 => 
            array (
                'id' => 2,
                'law_firm_id' => 3,
                'all_language_id' => 1,
            ),
            2 => 
            array (
                'id' => 3,
                'law_firm_id' => 3,
                'all_language_id' => 2,
            ),
        ));
        
        
    }
}