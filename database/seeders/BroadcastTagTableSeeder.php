<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class BroadcastTagTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('broadcast_tag')->delete();
        
        \DB::table('broadcast_tag')->insert(array (
            0 => 
            array (
                'id' => 1,
                'broadcast_id' => 6,
                'tag_id' => 1,
            ),
            1 => 
            array (
                'id' => 2,
                'broadcast_id' => 7,
                'tag_id' => 1,
            ),
            2 => 
            array (
                'id' => 3,
                'broadcast_id' => 8,
                'tag_id' => 3,
            ),
            3 => 
            array (
                'id' => 4,
                'broadcast_id' => 9,
                'tag_id' => 3,
            ),
            4 => 
            array (
                'id' => 5,
                'broadcast_id' => 10,
                'tag_id' => 3,
            ),
            5 => 
            array (
                'id' => 6,
                'broadcast_id' => 11,
                'tag_id' => 3,
            ),
            6 => 
            array (
                'id' => 7,
                'broadcast_id' => 11,
                'tag_id' => 1,
            ),
            7 => 
            array (
                'id' => 8,
                'broadcast_id' => 12,
                'tag_id' => 1,
            ),
            8 => 
            array (
                'id' => 9,
                'broadcast_id' => 12,
                'tag_id' => 3,
            ),
            9 => 
            array (
                'id' => 10,
                'broadcast_id' => 13,
                'tag_id' => 1,
            ),
            10 => 
            array (
                'id' => 11,
                'broadcast_id' => 13,
                'tag_id' => 3,
            ),
            11 => 
            array (
                'id' => 12,
                'broadcast_id' => 14,
                'tag_id' => 1,
            ),
            12 => 
            array (
                'id' => 16,
                'broadcast_id' => 17,
                'tag_id' => 3,
            ),
            13 => 
            array (
                'id' => 17,
                'broadcast_id' => 17,
                'tag_id' => 4,
            ),
            14 => 
            array (
                'id' => 18,
                'broadcast_id' => 17,
                'tag_id' => 5,
            ),
            15 => 
            array (
                'id' => 19,
                'broadcast_id' => 17,
                'tag_id' => 1,
            ),
            16 => 
            array (
                'id' => 20,
                'broadcast_id' => 18,
                'tag_id' => 3,
            ),
            17 => 
            array (
                'id' => 21,
                'broadcast_id' => 18,
                'tag_id' => 4,
            ),
            18 => 
            array (
                'id' => 22,
                'broadcast_id' => 18,
                'tag_id' => 5,
            ),
            19 => 
            array (
                'id' => 23,
                'broadcast_id' => 18,
                'tag_id' => 1,
            ),
            20 => 
            array (
                'id' => 24,
                'broadcast_id' => 19,
                'tag_id' => 4,
            ),
            21 => 
            array (
                'id' => 25,
                'broadcast_id' => 19,
                'tag_id' => 1,
            ),
            22 => 
            array (
                'id' => 26,
                'broadcast_id' => 19,
                'tag_id' => 5,
            ),
            23 => 
            array (
                'id' => 27,
                'broadcast_id' => 19,
                'tag_id' => 3,
            ),
            24 => 
            array (
                'id' => 28,
                'broadcast_id' => 19,
                'tag_id' => 6,
            ),
            25 => 
            array (
                'id' => 29,
                'broadcast_id' => 20,
                'tag_id' => 3,
            ),
            26 => 
            array (
                'id' => 30,
                'broadcast_id' => 20,
                'tag_id' => 1,
            ),
            27 => 
            array (
                'id' => 31,
                'broadcast_id' => 20,
                'tag_id' => 4,
            ),
            28 => 
            array (
                'id' => 32,
                'broadcast_id' => 20,
                'tag_id' => 6,
            ),
            29 => 
            array (
                'id' => 33,
                'broadcast_id' => 20,
                'tag_id' => 5,
            ),
            30 => 
            array (
                'id' => 34,
                'broadcast_id' => 21,
                'tag_id' => 4,
            ),
            31 => 
            array (
                'id' => 35,
                'broadcast_id' => 21,
                'tag_id' => 3,
            ),
            32 => 
            array (
                'id' => 36,
                'broadcast_id' => 21,
                'tag_id' => 1,
            ),
            33 => 
            array (
                'id' => 37,
                'broadcast_id' => 21,
                'tag_id' => 6,
            ),
            34 => 
            array (
                'id' => 38,
                'broadcast_id' => 100,
                'tag_id' => 4,
            ),
            35 => 
            array (
                'id' => 39,
                'broadcast_id' => 100,
                'tag_id' => 5,
            ),
            36 => 
            array (
                'id' => 40,
                'broadcast_id' => 100,
                'tag_id' => 6,
            ),
            37 => 
            array (
                'id' => 41,
                'broadcast_id' => 100,
                'tag_id' => 1,
            ),
            38 => 
            array (
                'id' => 42,
                'broadcast_id' => 100,
                'tag_id' => 3,
            ),
            39 => 
            array (
                'id' => 43,
                'broadcast_id' => 101,
                'tag_id' => 3,
            ),
            40 => 
            array (
                'id' => 44,
                'broadcast_id' => 101,
                'tag_id' => 1,
            ),
            41 => 
            array (
                'id' => 45,
                'broadcast_id' => 101,
                'tag_id' => 5,
            ),
            42 => 
            array (
                'id' => 46,
                'broadcast_id' => 101,
                'tag_id' => 4,
            ),
            43 => 
            array (
                'id' => 47,
                'broadcast_id' => 102,
                'tag_id' => 1,
            ),
        ));
        
        
    }
}