<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ContactsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('contacts')->delete();
        
        \DB::table('contacts')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'Contact',
                'email' => 'Contact@gg.com',
                'phone' => '31231231',
                'message' => 'ljksdfjksdgdh kjsdfh skjdfhs skjdfh sdkh f',
                'created_at' => '2023-09-19 11:17:43',
                'updated_at' => '2023-09-19 11:17:43',
                'deleted_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'Name',
                'email' => 'Name@ss.com',
                'phone' => '234234234234',
                'message' => 'sadfsdfsdfdsf',
                'created_at' => '2023-09-19 11:19:29',
                'updated_at' => '2023-09-19 11:19:29',
                'deleted_at' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'In',
                'email' => 'In@gg.com',
                'phone' => '23423423',
                'message' => 'sdnbfsfbgsfsj kdjhjkdfh kdfhg',
                'created_at' => '2023-09-19 11:20:09',
                'updated_at' => '2023-09-19 11:20:09',
                'deleted_at' => NULL,
            ),
            3 => 
            array (
                'id' => 4,
                'name' => 'Faizan',
                'email' => 'fazfaizan22@gmail.com',
                'phone' => '03143923536',
                'message' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.',
                'created_at' => '2023-11-02 15:06:33',
                'updated_at' => '2023-11-02 15:06:33',
                'deleted_at' => NULL,
            ),
            4 => 
            array (
                'id' => 5,
                'name' => 'Faizan',
                'email' => 'fazfaizan22@gmail.com',
                'phone' => '232232',
                'message' => 'eQWEQWEQWEQWEQWEQWEQWE',
                'created_at' => '2023-11-02 15:07:38',
                'updated_at' => '2023-11-02 15:07:38',
                'deleted_at' => NULL,
            ),
            5 => 
            array (
                'id' => 6,
                'name' => 'Faizan',
                'email' => 'fazfaizan22@gmail.com',
                'phone' => '232232',
                'message' => 'eQWEQWEQWEQWEQWEQWEQWE',
                'created_at' => '2023-11-02 15:47:11',
                'updated_at' => '2023-11-02 15:47:11',
                'deleted_at' => NULL,
            ),
            6 => 
            array (
                'id' => 7,
                'name' => 'jack deen',
                'email' => 'jack@gmail.com',
                'phone' => '121211 1121',
            'message' => '"The Total Lawyers section currently lists 5 active lawyers within the system, as indicated by the accompanying dashboard image (dashboard-image-1.png). Moving on to Total Users, there are presently 8 registered users on the platform, as depicted by the associated image (total-users.png). As for Total Subscriptions, there are currently no active subscriptions at this time.

In addition, the system boasts a total of 92 upcoming events, all ready to be showcased on the dashboard for easy access and reference. The Total Appointments stand at 53, showcasing the busy schedule of consultations and meetings. Furthermore, the platform serves a total of 8 customers who rely on the services provided."',
                'created_at' => '2023-11-02 17:05:37',
                'updated_at' => '2023-11-02 17:05:37',
                'deleted_at' => NULL,
            ),
            7 => 
            array (
                'id' => 8,
                'name' => 'sdas',
                'email' => 'faizan@gmail.com',
                'phone' => '121212',
                'message' => 'asdaddsadsdadad',
                'created_at' => '2023-11-02 18:38:35',
                'updated_at' => '2023-11-02 18:38:35',
                'deleted_at' => NULL,
            ),
        ));
        
        
    }
}