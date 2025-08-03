<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class PasswordResetsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('password_resets')->delete();
        
        \DB::table('password_resets')->insert(array (
            0 => 
            array (
                'email' => 'mbilalnaeem5@gmail.com',
                'token' => '0Lsskbep253V1YmRR8kxL9X6C9G6Zg7eaGcsH9nr9EqUS1U7KXsH4spfPa6CW0fC',
                'created_at' => '2023-01-07 19:09:51',
            ),
            1 => 
            array (
                'email' => 'sheddy@gmail.com',
                'token' => '5qeHJplSZrXUTLnfYJFvi4L0B2ZOSgCULdCxhpTa2Jk3NqsnUsMf0Eggl3VIsA5T',
                'created_at' => '2023-05-03 17:18:40',
            ),
            2 => 
            array (
                'email' => 'jack@gmail.com',
                'token' => '9p14etPUEKg28hxFOQzh3Oa6aJfVUGh8U27bFZSfNFzitBKPfioymdWAQ8KMiXsC',
                'created_at' => '2023-10-02 19:56:40',
            ),
            3 => 
            array (
                'email' => 'mono@gmail.com',
                'token' => 'qIdE74VKqISwjoE4WLrVvY2zoIMwtF9XcpWAMxt5FK9ezlu8V28SNWwgoCndEMC5',
                'created_at' => '2023-10-04 16:07:57',
            ),
            4 => 
            array (
                'email' => 'ahsan.mono@gmail.com',
                'token' => 'wnfiEJBbe9AmfCqehWKHtKKnkG6Xr9GN2vZ7DOP7itXtel6dG0Tdje27DgXZhTy5',
                'created_at' => '2023-10-12 12:42:43',
            ),
        ));
        
        
    }
}