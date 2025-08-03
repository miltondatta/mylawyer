<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class TestimonialsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('testimonials')->delete();
        
        \DB::table('testimonials')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'Lisa John',
                'description' => '<p>I hired Isabella Carrington to represent me in a complex personal injury case, and I couldn&#39;t be happier with the outcome. His legal expertise and dedication to my case were evident from day one. He explained every step of the process, kept me informed, and fought tirelessly on my behalf. Thanks to John, I received a fair settlement. I highly recommend him to anyone in need of a skilled and compassionate attorney.</p>',
                'slug' => 'lisa-john-1',
                'is_active' => 1,
                'sort_order' => NULL,
                'image' => '/images/testimonials/651d569a96b8c.png',
                'category' => 'Customer',
                'created_at' => '2023-10-04 16:43:25',
                'updated_at' => '2023-10-04 17:12:10',
                'deleted_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'john kane',
                'description' => '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.12</p>',
                'slug' => 'john-kane-2',
                'is_active' => 1,
                'sort_order' => NULL,
                'image' => '/images/testimonials/65426709021d5.png',
                'category' => 'customer',
                'created_at' => '2023-11-01 19:56:09',
                'updated_at' => '2023-11-01 19:57:06',
                'deleted_at' => '2023-11-01 19:57:06',
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'admin',
                'description' => '<p>asdasdasdasdasdas</p>',
                'slug' => 'admin-3',
                'is_active' => 1,
                'sort_order' => NULL,
                'image' => '/images/testimonials/65426ecb68ff7.png',
                'category' => 'customer',
                'created_at' => '2023-11-01 20:29:15',
                'updated_at' => '2023-11-01 20:30:04',
                'deleted_at' => '2023-11-01 20:30:04',
            ),
        ));
        
        
    }
}