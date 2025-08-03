<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class LawFirmTagTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('law_firm_tag')->delete();
        
        \DB::table('law_firm_tag')->insert(array (
            0 => 
            array (
                'id' => 1,
                'law_firm_id' => 5,
                'tag_id' => 1,
            ),
            1 => 
            array (
                'id' => 2,
                'law_firm_id' => 5,
                'tag_id' => 3,
            ),
            2 => 
            array (
                'id' => 3,
                'law_firm_id' => 3,
                'tag_id' => 4,
            ),
            3 => 
            array (
                'id' => 4,
                'law_firm_id' => 3,
                'tag_id' => 5,
            ),
            4 => 
            array (
                'id' => 5,
                'law_firm_id' => 3,
                'tag_id' => 3,
            ),
        ));
        
        
    }
}