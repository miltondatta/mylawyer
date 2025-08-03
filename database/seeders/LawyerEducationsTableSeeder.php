<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class LawyerEducationsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('lawyer_educations')->delete();
        
        \DB::table('lawyer_educations')->insert(array (
            0 => 
            array (
                'id' => 1,
                'lawyer_id' => 2,
                'institute' => 'trigno updated',
                'degree' => 'bscs updated',
                'description' => '<p>trignotrignotrignotrignotrignotrignotrigno</p>',
                'subject' => 'computer updated',
                'from' => '2017-08-16 00:00:00',
                'to' => '2023-08-05 00:00:00',
            'image' => '/files/lawyer_educations/1691225626download (1).jpeg',
                'is_active' => 1,
                'created_at' => '2023-08-05 08:53:46',
                'updated_at' => '2023-08-05 09:00:57',
                'deleted_at' => '2023-08-05 09:00:57',
            ),
            1 => 
            array (
                'id' => 2,
                'lawyer_id' => 15,
                'institute' => 'Law university  of london',
                'degree' => 'LLB',
                'description' => '<p>test educations&nbsp;</p>',
                'subject' => 'Education Law',
                'from' => '2008-08-29 08:19:00',
                'to' => '2014-08-15 09:19:00',
                'image' => '/files/lawyer_educations/1691572788Isabella Carrington .jpg',
                'is_active' => 1,
                'created_at' => '2023-08-09 12:19:48',
                'updated_at' => '2023-08-09 12:19:48',
                'deleted_at' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
                'lawyer_id' => 14,
                'institute' => 'Law Advisor',
                'degree' => 'FSC',
                'description' => '<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged</p>',
                'subject' => 'Lawyer',
                'from' => '2020-09-18 13:29:00',
                'to' => '2023-10-10 13:29:00',
                'image' => '/files/lawyer_educations/1697203874law-template-poster-design_23-2149194024.pdf',
                'is_active' => 1,
                'created_at' => '2023-10-13 18:31:14',
                'updated_at' => '2023-10-13 18:31:14',
                'deleted_at' => NULL,
            ),
        ));
        
        
    }
}