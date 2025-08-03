<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class CertificationsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('certifications')->delete();
        
        \DB::table('certifications')->insert(array (
            0 => 
            array (
                'id' => 1,
                'lawyer_id' => 1,
                'law_firm_id' => NULL,
                'name' => 'Law',
                'description' => '<p>asasasasasasasaddaada</p>',
                'is_active' => 1,
                'image' => '/files/lawyer_certifications/1691067767banner design new1.jpg',
                'created_at' => '2023-08-03 16:02:47',
                'updated_at' => '2023-08-03 16:02:47',
                'deleted_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'lawyer_id' => 15,
                'law_firm_id' => NULL,
                'name' => 'Law Specialist',
                'description' => '<p>Test Certification Law Specialist&nbsp;</p>',
                'is_active' => 1,
                'image' => '/files/lawyer_certifications/1691576031Isabella Carrington .jpg',
                'created_at' => '2023-08-09 13:13:51',
                'updated_at' => '2023-08-09 13:13:51',
                'deleted_at' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
                'lawyer_id' => 16,
                'law_firm_id' => NULL,
                'name' => 'certification',
                'description' => '<p>certificationcertificationcertificationcertificationcertificationcertificationcertificationcertificationcertificationcertificationcertification</p>',
                'is_active' => 1,
            'image' => '/files/lawyer_certifications/1695053397download (1).jpeg',
                'created_at' => '2023-09-18 19:09:57',
                'updated_at' => '2023-09-18 19:09:57',
                'deleted_at' => NULL,
            ),
            3 => 
            array (
                'id' => 4,
                'lawyer_id' => 14,
                'law_firm_id' => NULL,
                'name' => 'Lawyer',
                'description' => '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est&nbsp;</p>',
                'is_active' => 1,
                'image' => '/files/lawyer_certifications/1697195788law-template-poster-design_23-2149194024.pdf',
                'created_at' => '2023-10-13 16:16:28',
                'updated_at' => '2023-10-13 16:16:28',
                'deleted_at' => NULL,
            ),
        ));
        
        
    }
}