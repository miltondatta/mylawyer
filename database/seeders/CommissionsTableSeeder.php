<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class CommissionsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('commissions')->delete();
        
        \DB::table('commissions')->insert(array (
            0 => 
            array (
                'id' => 13,
                'appointment_type_id' => 1,
                'rate' => 20.0,
                'commission_type' => 'percentage',
                'created_at' => '2024-02-22 12:44:31',
                'updated_at' => '2024-02-22 12:44:31',
            ),
            1 => 
            array (
                'id' => 14,
                'appointment_type_id' => 2,
                'rate' => 20.0,
                'commission_type' => 'fixed_rate',
                'created_at' => '2024-02-22 12:44:31',
                'updated_at' => '2024-02-22 12:44:31',
            ),
            2 => 
            array (
                'id' => 15,
                'appointment_type_id' => 3,
                'rate' => 20.0,
                'commission_type' => 'fixed_rate',
                'created_at' => '2024-02-22 12:44:31',
                'updated_at' => '2024-02-22 12:44:31',
            ),
        ));
        
        
    }
}