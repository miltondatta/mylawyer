<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class SubscriptionItemsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('subscription_items')->delete();
        
        
        
    }
}