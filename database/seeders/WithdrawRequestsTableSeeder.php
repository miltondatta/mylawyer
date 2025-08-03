<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class WithdrawRequestsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('withdraw_requests')->delete();
        
        
        
    }
}