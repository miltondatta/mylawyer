<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class PricingPlansTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('pricing_plans')->delete();
        
        \DB::table('pricing_plans')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'Micky Mouse',
                'description' => '<p>Bronze some information</p>',
                'type' => 'lawyer',
                'tagline' => 'Test Tagline For Micky Mouse',
                'image' => '/images/subscriptions/1673035867Screenshot from 2022-12-11 00-50-51.png',
                'color' => '#bc9494',
                'stripe_plan' => NULL,
                'price' => 0.0,
                'slug' => 'micky-mouse-1',
                'sort_order' => NULL,
                'is_active' => 0,
                'is_default' => 1,
                'is_paid' => 0,
                'created_at' => '2023-01-06 20:11:07',
                'updated_at' => '2023-10-04 16:49:15',
                'deleted_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'Basic',
                'description' => '<p>Basic</p>',
                'type' => 'law_firm',
                'tagline' => NULL,
                'image' => NULL,
                'color' => '#000000',
                'stripe_plan' => NULL,
                'price' => 0.0,
                'slug' => 'basic-2',
                'sort_order' => NULL,
                'is_active' => 1,
                'is_default' => 1,
                'is_paid' => 0,
                'created_at' => '2023-02-13 15:40:24',
                'updated_at' => '2023-03-15 22:23:04',
                'deleted_at' => NULL,
            ),
            2 => 
            array (
                'id' => 49,
                'name' => 'Silver',
                'description' => '<p>silver</p>',
                'type' => 'lawyer',
                'tagline' => NULL,
                'image' => NULL,
                'color' => NULL,
                'stripe_plan' => NULL,
                'price' => 0.0,
                'slug' => 'silver',
                'sort_order' => NULL,
                'is_active' => 1,
                'is_default' => 0,
                'is_paid' => 0,
                'created_at' => '2023-02-13 16:42:20',
                'updated_at' => '2023-02-14 15:32:50',
                'deleted_at' => NULL,
            ),
            3 => 
            array (
                'id' => 50,
                'name' => 'Gold',
                'description' => '<p>gold</p>',
                'type' => 'lawyer',
                'tagline' => NULL,
                'image' => '/images/subscriptions/63efba60307d7.png',
                'color' => NULL,
                'stripe_plan' => NULL,
                'price' => 0.0,
                'slug' => 'gold',
                'sort_order' => NULL,
                'is_active' => 1,
                'is_default' => 0,
                'is_paid' => 0,
                'created_at' => '2023-02-17 17:19:17',
                'updated_at' => '2023-02-17 17:33:20',
                'deleted_at' => NULL,
            ),
            4 => 
            array (
                'id' => 51,
                'name' => 'Platinum',
                'description' => '<p>platinum</p>',
                'type' => 'lawyer',
                'tagline' => NULL,
                'image' => '/images/subscriptions/63efba60307d7.png',
                'color' => NULL,
                'stripe_plan' => NULL,
                'price' => 0.0,
                'slug' => 'platinum',
                'sort_order' => NULL,
                'is_active' => 1,
                'is_default' => 0,
                'is_paid' => 0,
                'created_at' => '2023-02-17 17:19:17',
                'updated_at' => '2023-02-17 17:33:20',
                'deleted_at' => NULL,
            ),
            5 => 
            array (
                'id' => 52,
                'name' => 'silver',
                'description' => 'ok',
                'type' => NULL,
                'tagline' => NULL,
                'image' => NULL,
                'color' => NULL,
                'stripe_plan' => 'price_1MkY0VHTAHWwyrB6Vl3f8ZIT',
                'price' => 50.0,
                'slug' => 'silver-52',
                'sort_order' => NULL,
                'is_active' => 1,
                'is_default' => 0,
                'is_paid' => 1,
                'created_at' => '2023-03-13 21:15:11',
                'updated_at' => '2023-03-13 21:15:11',
                'deleted_at' => NULL,
            ),
            6 => 
            array (
                'id' => 53,
                'name' => 'gold',
                'description' => 'Ok',
                'type' => 'lawyer',
                'tagline' => NULL,
                'image' => NULL,
                'color' => '#000000',
                'stripe_plan' => 'price_1MkPGfHTAHWwyrB6thyCbJXk',
                'price' => 50.0,
                'slug' => 'gold-53',
                'sort_order' => NULL,
                'is_active' => 1,
                'is_default' => 0,
                'is_paid' => 1,
                'created_at' => '2023-03-13 21:15:11',
                'updated_at' => '2023-11-02 18:42:13',
                'deleted_at' => NULL,
            ),
            7 => 
            array (
                'id' => 54,
                'name' => 'Platinum',
                'description' => 'Platinum Membership',
                'type' => NULL,
                'tagline' => NULL,
                'image' => NULL,
                'color' => NULL,
                'stripe_plan' => 'price_1MtCVpHTAHWwyrB6y9w1pYFi',
                'price' => 99.99,
                'slug' => 'platinum-54',
                'sort_order' => NULL,
                'is_active' => 1,
                'is_default' => 0,
                'is_paid' => 1,
                'created_at' => '2023-09-12 19:53:23',
                'updated_at' => '2023-09-12 19:53:24',
                'deleted_at' => NULL,
            ),
        ));
        
        
    }
}