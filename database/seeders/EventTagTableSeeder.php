<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class EventTagTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('event_tag')->delete();
        
        \DB::table('event_tag')->insert(array (
            0 => 
            array (
                'id' => 13,
                'event_id' => 19,
                'tag_id' => 1,
            ),
            1 => 
            array (
                'id' => 14,
                'event_id' => 19,
                'tag_id' => 3,
            ),
            2 => 
            array (
                'id' => 15,
                'event_id' => 20,
                'tag_id' => 3,
            ),
            3 => 
            array (
                'id' => 16,
                'event_id' => 21,
                'tag_id' => 3,
            ),
            4 => 
            array (
                'id' => 17,
                'event_id' => 22,
                'tag_id' => 3,
            ),
            5 => 
            array (
                'id' => 22,
                'event_id' => 24,
                'tag_id' => 4,
            ),
            6 => 
            array (
                'id' => 23,
                'event_id' => 24,
                'tag_id' => 3,
            ),
            7 => 
            array (
                'id' => 24,
                'event_id' => 24,
                'tag_id' => 1,
            ),
            8 => 
            array (
                'id' => 25,
                'event_id' => 24,
                'tag_id' => 6,
            ),
            9 => 
            array (
                'id' => 26,
                'event_id' => 25,
                'tag_id' => 3,
            ),
            10 => 
            array (
                'id' => 27,
                'event_id' => 25,
                'tag_id' => 4,
            ),
            11 => 
            array (
                'id' => 28,
                'event_id' => 25,
                'tag_id' => 1,
            ),
            12 => 
            array (
                'id' => 29,
                'event_id' => 25,
                'tag_id' => 6,
            ),
            13 => 
            array (
                'id' => 30,
                'event_id' => 26,
                'tag_id' => 1,
            ),
            14 => 
            array (
                'id' => 31,
                'event_id' => 26,
                'tag_id' => 3,
            ),
            15 => 
            array (
                'id' => 32,
                'event_id' => 26,
                'tag_id' => 5,
            ),
            16 => 
            array (
                'id' => 33,
                'event_id' => 26,
                'tag_id' => 6,
            ),
            17 => 
            array (
                'id' => 34,
                'event_id' => 208,
                'tag_id' => 1,
            ),
            18 => 
            array (
                'id' => 35,
                'event_id' => 208,
                'tag_id' => 3,
            ),
            19 => 
            array (
                'id' => 36,
                'event_id' => 208,
                'tag_id' => 4,
            ),
            20 => 
            array (
                'id' => 37,
                'event_id' => 208,
                'tag_id' => 5,
            ),
            21 => 
            array (
                'id' => 38,
                'event_id' => 209,
                'tag_id' => 1,
            ),
            22 => 
            array (
                'id' => 39,
                'event_id' => 209,
                'tag_id' => 3,
            ),
            23 => 
            array (
                'id' => 40,
                'event_id' => 209,
                'tag_id' => 4,
            ),
            24 => 
            array (
                'id' => 41,
                'event_id' => 209,
                'tag_id' => 5,
            ),
            25 => 
            array (
                'id' => 42,
                'event_id' => 209,
                'tag_id' => 6,
            ),
            26 => 
            array (
                'id' => 43,
                'event_id' => 177,
                'tag_id' => 3,
            ),
            27 => 
            array (
                'id' => 44,
                'event_id' => 177,
                'tag_id' => 4,
            ),
            28 => 
            array (
                'id' => 45,
                'event_id' => 177,
                'tag_id' => 1,
            ),
            29 => 
            array (
                'id' => 46,
                'event_id' => 177,
                'tag_id' => 5,
            ),
            30 => 
            array (
                'id' => 47,
                'event_id' => 177,
                'tag_id' => 6,
            ),
            31 => 
            array (
                'id' => 48,
                'event_id' => 172,
                'tag_id' => 4,
            ),
            32 => 
            array (
                'id' => 49,
                'event_id' => 172,
                'tag_id' => 1,
            ),
            33 => 
            array (
                'id' => 50,
                'event_id' => 172,
                'tag_id' => 6,
            ),
            34 => 
            array (
                'id' => 51,
                'event_id' => 172,
                'tag_id' => 3,
            ),
            35 => 
            array (
                'id' => 52,
                'event_id' => 172,
                'tag_id' => 5,
            ),
            36 => 
            array (
                'id' => 53,
                'event_id' => 167,
                'tag_id' => 3,
            ),
            37 => 
            array (
                'id' => 54,
                'event_id' => 167,
                'tag_id' => 4,
            ),
            38 => 
            array (
                'id' => 55,
                'event_id' => 167,
                'tag_id' => 1,
            ),
            39 => 
            array (
                'id' => 56,
                'event_id' => 167,
                'tag_id' => 6,
            ),
            40 => 
            array (
                'id' => 57,
                'event_id' => 167,
                'tag_id' => 5,
            ),
            41 => 
            array (
                'id' => 58,
                'event_id' => 210,
                'tag_id' => 1,
            ),
            42 => 
            array (
                'id' => 59,
                'event_id' => 210,
                'tag_id' => 3,
            ),
            43 => 
            array (
                'id' => 60,
                'event_id' => 210,
                'tag_id' => 4,
            ),
            44 => 
            array (
                'id' => 61,
                'event_id' => 210,
                'tag_id' => 5,
            ),
            45 => 
            array (
                'id' => 62,
                'event_id' => 210,
                'tag_id' => 6,
            ),
        ));
        
        
    }
}