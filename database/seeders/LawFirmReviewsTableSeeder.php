<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class LawFirmReviewsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('law_firm_reviews')->delete();
        
        \DB::table('law_firm_reviews')->insert(array (
            0 => 
            array (
                'id' => 1,
                'law_firm_id' => 1,
                'customer_id' => 4,
                'rating' => 3.0,
                'experience' => 3.0,
                'communication' => 2.0,
                'service' => 0.0,
                'comment' => 'Good communitcation',
                'is_active' => 1,
                'is_approved' => 0,
                'is_featured' => 0,
                'created_at' => '2023-10-03 15:28:17',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'law_firm_id' => 1,
                'customer_id' => 3,
                'rating' => 4.0,
                'experience' => 3.0,
                'communication' => 2.0,
                'service' => 0.0,
                'comment' => 'Good , Nice ',
                'is_active' => 1,
                'is_approved' => 0,
                'is_featured' => 0,
                'created_at' => '2023-10-03 15:28:17',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
                'law_firm_id' => 1,
                'customer_id' => 4,
                'rating' => 3.5,
                'experience' => 3.0,
                'communication' => 2.0,
                'service' => 0.0,
                'comment' => 'Good communitcation and Work',
                'is_active' => 1,
                'is_approved' => 0,
                'is_featured' => 0,
                'created_at' => '2023-10-03 15:28:17',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            3 => 
            array (
                'id' => 4,
                'law_firm_id' => 1,
                'customer_id' => 8,
                'rating' => 4.0,
                'experience' => 3.0,
                'communication' => 2.0,
                'service' => 0.0,
                'comment' => 'Good , Nice ',
                'is_active' => 1,
                'is_approved' => 0,
                'is_featured' => 0,
                'created_at' => '2023-10-03 15:28:17',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
        ));
        
        
    }
}