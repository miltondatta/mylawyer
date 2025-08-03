<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class RolePermissionsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('role_permissions')->delete();
        
        \DB::table('role_permissions')->insert(array (
            0 => 
            array (
                'id' => 1,
                'display_name' => 'Lawyer Index',
                'permission_code' => 'lawyer.index',
                'display_group' => 'Lawyer',
                'created_at' => '2024-02-22 16:47:43',
                'updated_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'display_name' => 'Add Lawyer',
                'permission_code' => 'lawyer.add',
                'display_group' => 'Lawyer',
                'created_at' => '2024-02-22 16:47:43',
                'updated_at' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
                'display_name' => 'Edit Lawyer',
                'permission_code' => 'lawyer.edit',
                'display_group' => 'Lawyer',
                'created_at' => '2024-02-22 16:47:43',
                'updated_at' => NULL,
            ),
            3 => 
            array (
                'id' => 4,
                'display_name' => 'Delete Lawyer',
                'permission_code' => 'lawyer.delete',
                'display_group' => 'Lawyer',
                'created_at' => '2024-02-22 16:47:43',
                'updated_at' => NULL,
            ),
            4 => 
            array (
                'id' => 5,
                'display_name' => 'Show Lawyer',
                'permission_code' => 'lawyer.show',
                'display_group' => 'Lawyer',
                'created_at' => '2024-02-22 16:47:43',
                'updated_at' => NULL,
            ),
            5 => 
            array (
                'id' => 6,
                'display_name' => 'Approve Lawyer',
                'permission_code' => 'lawyer.approve',
                'display_group' => 'Lawyer',
                'created_at' => '2024-02-22 16:47:43',
                'updated_at' => NULL,
            ),
            6 => 
            array (
                'id' => 7,
                'display_name' => 'Import Lawyer',
                'permission_code' => 'lawyer.import',
                'display_group' => 'Lawyer',
                'created_at' => '2024-02-22 16:47:43',
                'updated_at' => NULL,
            ),
            7 => 
            array (
                'id' => 8,
                'display_name' => 'Export Lawyer',
                'permission_code' => 'lawyer.export',
                'display_group' => 'Lawyer',
                'created_at' => '2024-02-22 16:47:43',
                'updated_at' => NULL,
            ),
            8 => 
            array (
                'id' => 9,
                'display_name' => 'Add Lawyer Education',
                'permission_code' => 'lawyer.add_education',
                'display_group' => 'Lawyer',
                'created_at' => '2024-02-22 16:47:43',
                'updated_at' => NULL,
            ),
            9 => 
            array (
                'id' => 10,
                'display_name' => 'Add Lawyer Certification',
                'permission_code' => 'lawyer.add_certification',
                'display_group' => 'Lawyer',
                'created_at' => '2024-02-22 16:47:43',
                'updated_at' => NULL,
            ),
            10 => 
            array (
                'id' => 11,
                'display_name' => 'Add Lawyer Experience',
                'permission_code' => 'lawyer.add_experience',
                'display_group' => 'Lawyer',
                'created_at' => '2024-02-22 16:47:43',
                'updated_at' => NULL,
            ),
            11 => 
            array (
                'id' => 12,
                'display_name' => 'Add Lawyer Blog',
                'permission_code' => 'lawyer.add_blog',
                'display_group' => 'Lawyer',
                'created_at' => '2024-02-22 16:47:43',
                'updated_at' => NULL,
            ),
            12 => 
            array (
                'id' => 13,
                'display_name' => 'Add Lawyer Event',
                'permission_code' => 'lawyer.add_event',
                'display_group' => 'Lawyer',
                'created_at' => '2024-02-22 16:47:43',
                'updated_at' => NULL,
            ),
            13 => 
            array (
                'id' => 14,
                'display_name' => 'Add Lawyer Archive',
                'permission_code' => 'lawyer.add_archive',
                'display_group' => 'Lawyer',
                'created_at' => '2024-02-22 16:47:43',
                'updated_at' => NULL,
            ),
            14 => 
            array (
                'id' => 15,
                'display_name' => 'Add Lawyer Podcast',
                'permission_code' => 'lawyer.add_podcast',
                'display_group' => 'Lawyer',
                'created_at' => '2024-02-22 16:47:43',
                'updated_at' => NULL,
            ),
            15 => 
            array (
                'id' => 16,
                'display_name' => 'Add Lawyer Media',
                'permission_code' => 'lawyer.add_media',
                'display_group' => 'Lawyer',
                'created_at' => '2024-02-22 16:47:43',
                'updated_at' => NULL,
            ),
            16 => 
            array (
                'id' => 17,
                'display_name' => 'Lawyer Main Category Index',
                'permission_code' => 'lawyer_main_category.index',
                'display_group' => 'Lawyer Main Categories',
                'created_at' => '2024-02-22 16:54:49',
                'updated_at' => NULL,
            ),
            17 => 
            array (
                'id' => 18,
                'display_name' => 'Add Lawyer Main Category',
                'permission_code' => 'lawyer_main_category.add',
                'display_group' => 'Lawyer Main Categories',
                'created_at' => '2024-02-22 16:54:49',
                'updated_at' => NULL,
            ),
            18 => 
            array (
                'id' => 19,
                'display_name' => 'Edit Lawyer Main Category',
                'permission_code' => 'lawyer_main_category.edit',
                'display_group' => 'Lawyer Main Categories',
                'created_at' => '2024-02-22 16:54:49',
                'updated_at' => NULL,
            ),
            19 => 
            array (
                'id' => 20,
                'display_name' => 'Delete Lawyer Main Category',
                'permission_code' => 'lawyer_main_category.delete',
                'display_group' => 'Lawyer Main Categories',
                'created_at' => '2024-02-22 16:54:49',
                'updated_at' => NULL,
            ),
            20 => 
            array (
                'id' => 21,
                'display_name' => 'Show Lawyer Main Category',
                'permission_code' => 'lawyer_main_category.show',
                'display_group' => 'Lawyer Main Categories',
                'created_at' => '2024-02-22 16:54:49',
                'updated_at' => NULL,
            ),
            21 => 
            array (
                'id' => 22,
                'display_name' => 'Import Lawyer Main Category',
                'permission_code' => 'lawyer_main_category.import',
                'display_group' => 'Lawyer Main Categories',
                'created_at' => '2024-02-22 16:54:49',
                'updated_at' => NULL,
            ),
            22 => 
            array (
                'id' => 23,
                'display_name' => 'Export Lawyer Main Category',
                'permission_code' => 'lawyer_main_category.export',
                'display_group' => 'Lawyer Main Categories',
                'created_at' => '2024-02-22 16:54:49',
                'updated_at' => NULL,
            ),
            23 => 
            array (
                'id' => 24,
                'display_name' => 'Lawyer Category Index',
                'permission_code' => 'lawyer_category.index',
                'display_group' => 'Lawyer Categories',
                'created_at' => '2024-02-22 16:57:11',
                'updated_at' => NULL,
            ),
            24 => 
            array (
                'id' => 25,
                'display_name' => 'Add Lawyer Category',
                'permission_code' => 'lawyer_category.add',
                'display_group' => 'Lawyer Categories',
                'created_at' => '2024-02-22 16:57:11',
                'updated_at' => NULL,
            ),
            25 => 
            array (
                'id' => 26,
                'display_name' => 'Edit Lawyer Category',
                'permission_code' => 'lawyer_category.edit',
                'display_group' => 'Lawyer Categories',
                'created_at' => '2024-02-22 16:57:11',
                'updated_at' => NULL,
            ),
            26 => 
            array (
                'id' => 27,
                'display_name' => 'Delete Lawyer Category',
                'permission_code' => 'lawyer_category.delete',
                'display_group' => 'Lawyer Categories',
                'created_at' => '2024-02-22 16:57:11',
                'updated_at' => NULL,
            ),
            27 => 
            array (
                'id' => 28,
                'display_name' => 'Show Lawyer Category',
                'permission_code' => 'lawyer_category.show',
                'display_group' => 'Lawyer Categories',
                'created_at' => '2024-02-22 16:57:11',
                'updated_at' => NULL,
            ),
            28 => 
            array (
                'id' => 29,
                'display_name' => 'Import Lawyer Category',
                'permission_code' => 'lawyer_category.import',
                'display_group' => 'Lawyer Categories',
                'created_at' => '2024-02-22 16:57:11',
                'updated_at' => NULL,
            ),
            29 => 
            array (
                'id' => 30,
                'display_name' => 'Export Lawyer Category',
                'permission_code' => 'lawyer_category.export',
                'display_group' => 'Lawyer Categories',
                'created_at' => '2024-02-22 16:57:11',
                'updated_at' => NULL,
            ),
            30 => 
            array (
                'id' => 31,
                'display_name' => 'Law Firm Index',
                'permission_code' => 'law_firm.index',
                'display_group' => 'Law Firm',
                'created_at' => '2024-02-22 16:59:18',
                'updated_at' => NULL,
            ),
            31 => 
            array (
                'id' => 32,
                'display_name' => 'Add Law Firm',
                'permission_code' => 'law_firm.add',
                'display_group' => 'Law Firm',
                'created_at' => '2024-02-22 16:59:18',
                'updated_at' => NULL,
            ),
            32 => 
            array (
                'id' => 33,
                'display_name' => 'Edit Law Firm',
                'permission_code' => 'law_firm.edit',
                'display_group' => 'Law Firm',
                'created_at' => '2024-02-22 16:59:18',
                'updated_at' => NULL,
            ),
            33 => 
            array (
                'id' => 34,
                'display_name' => 'Delete Law Firm',
                'permission_code' => 'law_firm.delete',
                'display_group' => 'Law Firm',
                'created_at' => '2024-02-22 16:59:18',
                'updated_at' => NULL,
            ),
            34 => 
            array (
                'id' => 35,
                'display_name' => 'Show Law Firm',
                'permission_code' => 'law_firm.show',
                'display_group' => 'Law Firm',
                'created_at' => '2024-02-22 16:59:18',
                'updated_at' => NULL,
            ),
            35 => 
            array (
                'id' => 36,
                'display_name' => 'Approve Law Firm',
                'permission_code' => 'law_firm.approve',
                'display_group' => 'Law Firm',
                'created_at' => '2024-02-22 16:59:18',
                'updated_at' => NULL,
            ),
            36 => 
            array (
                'id' => 37,
                'display_name' => 'Import Law Firm',
                'permission_code' => 'law_firm.import',
                'display_group' => 'Law Firm',
                'created_at' => '2024-02-22 16:59:18',
                'updated_at' => NULL,
            ),
            37 => 
            array (
                'id' => 38,
                'display_name' => 'Export Law Firm',
                'permission_code' => 'law_firm.export',
                'display_group' => 'Law Firm',
                'created_at' => '2024-02-22 16:59:18',
                'updated_at' => NULL,
            ),
            38 => 
            array (
                'id' => 40,
                'display_name' => 'Add Law Firm Certification',
                'permission_code' => 'law_firm.add_certification',
                'display_group' => 'Law Firm',
                'created_at' => '2024-02-22 16:59:18',
                'updated_at' => NULL,
            ),
            39 => 
            array (
                'id' => 42,
                'display_name' => 'Add Law Firm Blog',
                'permission_code' => 'law_firm.add_blog',
                'display_group' => 'Law Firm',
                'created_at' => '2024-02-22 16:59:18',
                'updated_at' => NULL,
            ),
            40 => 
            array (
                'id' => 43,
                'display_name' => 'Add Law Firm Event',
                'permission_code' => 'law_firm.add_event',
                'display_group' => 'Law Firm',
                'created_at' => '2024-02-22 16:59:18',
                'updated_at' => NULL,
            ),
            41 => 
            array (
                'id' => 44,
                'display_name' => 'Add Law Firm Archive',
                'permission_code' => 'law_firm.add_archive',
                'display_group' => 'Law Firm',
                'created_at' => '2024-02-22 16:59:18',
                'updated_at' => NULL,
            ),
            42 => 
            array (
                'id' => 45,
                'display_name' => 'Add Law Firm Podcast',
                'permission_code' => 'law_firm.add_podcast',
                'display_group' => 'Law Firm',
                'created_at' => '2024-02-22 16:59:18',
                'updated_at' => NULL,
            ),
            43 => 
            array (
                'id' => 46,
                'display_name' => 'Add Law Firm Media',
                'permission_code' => 'law_firm.add_media',
                'display_group' => 'Law Firm',
                'created_at' => '2024-02-22 16:59:18',
                'updated_at' => NULL,
            ),
            44 => 
            array (
                'id' => 47,
                'display_name' => 'Law Firm Main Category Index',
                'permission_code' => 'law_firm_main_category.index',
                'display_group' => 'Law Firm Main Categories',
                'created_at' => '2024-02-22 17:01:31',
                'updated_at' => NULL,
            ),
            45 => 
            array (
                'id' => 48,
                'display_name' => 'Add Law Firm Main Category',
                'permission_code' => 'law_firm_main_category.add',
                'display_group' => 'Law Firm Main Categories',
                'created_at' => '2024-02-22 17:01:31',
                'updated_at' => NULL,
            ),
            46 => 
            array (
                'id' => 49,
                'display_name' => 'Edit Law Firm Main Category',
                'permission_code' => 'law_firm_main_category.edit',
                'display_group' => 'Law Firm Main Categories',
                'created_at' => '2024-02-22 17:01:31',
                'updated_at' => NULL,
            ),
            47 => 
            array (
                'id' => 50,
                'display_name' => 'Delete Law Firm Main Category',
                'permission_code' => 'law_firm_main_category.delete',
                'display_group' => 'Law Firm Main Categories',
                'created_at' => '2024-02-22 17:01:31',
                'updated_at' => NULL,
            ),
            48 => 
            array (
                'id' => 51,
                'display_name' => 'Show Law Firm Main Category',
                'permission_code' => 'law_firm_main_category.show',
                'display_group' => 'Law Firm Main Categories',
                'created_at' => '2024-02-22 17:01:31',
                'updated_at' => NULL,
            ),
            49 => 
            array (
                'id' => 52,
                'display_name' => 'Import Law Firm Main Category',
                'permission_code' => 'law_firm_main_category.import',
                'display_group' => 'Law Firm Main Categories',
                'created_at' => '2024-02-22 17:01:31',
                'updated_at' => NULL,
            ),
            50 => 
            array (
                'id' => 53,
                'display_name' => 'Export Law Firm Main Category',
                'permission_code' => 'law_firm_main_category.export',
                'display_group' => 'Law Firm Main Categories',
                'created_at' => '2024-02-22 17:01:31',
                'updated_at' => NULL,
            ),
            51 => 
            array (
                'id' => 54,
                'display_name' => 'Law Firm Category Index',
                'permission_code' => 'law_firm_category.index',
                'display_group' => 'Law Firm Categories',
                'created_at' => '2024-02-22 17:02:51',
                'updated_at' => NULL,
            ),
            52 => 
            array (
                'id' => 55,
                'display_name' => 'Add Law Firm Category',
                'permission_code' => 'law_firm_category.add',
                'display_group' => 'Law Firm Categories',
                'created_at' => '2024-02-22 17:02:51',
                'updated_at' => NULL,
            ),
            53 => 
            array (
                'id' => 56,
                'display_name' => 'Edit Law Firm Category',
                'permission_code' => 'law_firm_category.edit',
                'display_group' => 'Law Firm Categories',
                'created_at' => '2024-02-22 17:02:51',
                'updated_at' => NULL,
            ),
            54 => 
            array (
                'id' => 57,
                'display_name' => 'Delete Law Firm Category',
                'permission_code' => 'law_firm_category.delete',
                'display_group' => 'Law Firm Categories',
                'created_at' => '2024-02-22 17:02:51',
                'updated_at' => NULL,
            ),
            55 => 
            array (
                'id' => 58,
                'display_name' => 'Show Law Firm Category',
                'permission_code' => 'law_firm_category.show',
                'display_group' => 'Law Firm Categories',
                'created_at' => '2024-02-22 17:02:51',
                'updated_at' => NULL,
            ),
            56 => 
            array (
                'id' => 59,
                'display_name' => 'Import Law Firm Category',
                'permission_code' => 'law_firm_category.import',
                'display_group' => 'Law Firm Categories',
                'created_at' => '2024-02-22 17:02:51',
                'updated_at' => NULL,
            ),
            57 => 
            array (
                'id' => 60,
                'display_name' => 'Export Law Firm Category',
                'permission_code' => 'law_firm_category.export',
                'display_group' => 'Law Firm Categories',
                'created_at' => '2024-02-22 17:02:51',
                'updated_at' => NULL,
            ),
            58 => 
            array (
                'id' => 61,
                'display_name' => 'Customer Index',
                'permission_code' => 'customer.index',
                'display_group' => 'Customer',
                'created_at' => '2024-02-22 17:05:49',
                'updated_at' => NULL,
            ),
            59 => 
            array (
                'id' => 62,
                'display_name' => 'Add Customer',
                'permission_code' => 'customer.add',
                'display_group' => 'Customer',
                'created_at' => '2024-02-22 17:05:49',
                'updated_at' => NULL,
            ),
            60 => 
            array (
                'id' => 63,
                'display_name' => 'Edit Customer',
                'permission_code' => 'customer.edit',
                'display_group' => 'Customer',
                'created_at' => '2024-02-22 17:05:49',
                'updated_at' => NULL,
            ),
            61 => 
            array (
                'id' => 64,
                'display_name' => 'Delete Customer',
                'permission_code' => 'customer.delete',
                'display_group' => 'Customer',
                'created_at' => '2024-02-22 17:05:49',
                'updated_at' => NULL,
            ),
            62 => 
            array (
                'id' => 65,
                'display_name' => 'Show Customer',
                'permission_code' => 'customer.show',
                'display_group' => 'Customer',
                'created_at' => '2024-02-22 17:05:49',
                'updated_at' => NULL,
            ),
            63 => 
            array (
                'id' => 66,
                'display_name' => 'Event Index',
                'permission_code' => 'event.index',
                'display_group' => 'Event',
                'created_at' => '2024-02-22 17:15:36',
                'updated_at' => NULL,
            ),
            64 => 
            array (
                'id' => 67,
                'display_name' => 'Add Event',
                'permission_code' => 'event.add',
                'display_group' => 'Event',
                'created_at' => '2024-02-22 17:15:36',
                'updated_at' => NULL,
            ),
            65 => 
            array (
                'id' => 68,
                'display_name' => 'Edit Event',
                'permission_code' => 'event.edit',
                'display_group' => 'Event',
                'created_at' => '2024-02-22 17:15:36',
                'updated_at' => NULL,
            ),
            66 => 
            array (
                'id' => 69,
                'display_name' => 'Delete Event',
                'permission_code' => 'event.delete',
                'display_group' => 'Event',
                'created_at' => '2024-02-22 17:15:36',
                'updated_at' => NULL,
            ),
            67 => 
            array (
                'id' => 70,
                'display_name' => 'Show Event',
                'permission_code' => 'event.show',
                'display_group' => 'Event',
                'created_at' => '2024-02-22 17:15:36',
                'updated_at' => NULL,
            ),
            68 => 
            array (
                'id' => 71,
                'display_name' => 'Approve Event',
                'permission_code' => 'event.approve',
                'display_group' => 'Event',
                'created_at' => '2024-02-22 17:15:36',
                'updated_at' => NULL,
            ),
            69 => 
            array (
                'id' => 72,
                'display_name' => 'Event Category Index',
                'permission_code' => 'event_category.index',
                'display_group' => 'Event Category',
                'created_at' => '2024-02-22 17:17:10',
                'updated_at' => NULL,
            ),
            70 => 
            array (
                'id' => 73,
                'display_name' => 'Add Event Category',
                'permission_code' => 'event_category.add',
                'display_group' => 'Event Category',
                'created_at' => '2024-02-22 17:17:10',
                'updated_at' => NULL,
            ),
            71 => 
            array (
                'id' => 74,
                'display_name' => 'Edit Event Category',
                'permission_code' => 'event_category.edit',
                'display_group' => 'Event Category',
                'created_at' => '2024-02-22 17:17:10',
                'updated_at' => NULL,
            ),
            72 => 
            array (
                'id' => 75,
                'display_name' => 'Delete Event Category',
                'permission_code' => 'event_category.delete',
                'display_group' => 'Event Category',
                'created_at' => '2024-02-22 17:17:10',
                'updated_at' => NULL,
            ),
            73 => 
            array (
                'id' => 76,
                'display_name' => 'Show Event Category',
                'permission_code' => 'event_category.show',
                'display_group' => 'Event Category',
                'created_at' => '2024-02-22 17:17:10',
                'updated_at' => NULL,
            ),
            74 => 
            array (
                'id' => 77,
                'display_name' => 'Booked Appointments Index',
                'permission_code' => 'booked_appointements.index',
                'display_group' => 'Booked Appointments',
                'created_at' => '2024-02-22 17:18:41',
                'updated_at' => NULL,
            ),
            75 => 
            array (
                'id' => 78,
                'display_name' => 'Show Booked Appointments',
                'permission_code' => 'booked_appointements.show',
                'display_group' => 'Booked Appointments',
                'created_at' => '2024-02-22 17:18:41',
                'updated_at' => NULL,
            ),
            76 => 
            array (
                'id' => 79,
                'display_name' => 'Podcast Index',
                'permission_code' => 'podcast.index',
                'display_group' => 'Podcast',
                'created_at' => '2024-02-22 17:19:21',
                'updated_at' => NULL,
            ),
            77 => 
            array (
                'id' => 80,
                'display_name' => 'Add Podcast',
                'permission_code' => 'podcast.add',
                'display_group' => 'Podcast',
                'created_at' => '2024-02-22 17:19:21',
                'updated_at' => NULL,
            ),
            78 => 
            array (
                'id' => 81,
                'display_name' => 'Edit Podcast',
                'permission_code' => 'podcast.edit',
                'display_group' => 'Podcast',
                'created_at' => '2024-02-22 17:19:21',
                'updated_at' => NULL,
            ),
            79 => 
            array (
                'id' => 82,
                'display_name' => 'Delete Podcast',
                'permission_code' => 'podcast.delete',
                'display_group' => 'Podcast',
                'created_at' => '2024-02-22 17:19:21',
                'updated_at' => NULL,
            ),
            80 => 
            array (
                'id' => 83,
                'display_name' => 'Show Podcast',
                'permission_code' => 'podcast.show',
                'display_group' => 'Podcast',
                'created_at' => '2024-02-22 17:20:02',
                'updated_at' => NULL,
            ),
            81 => 
            array (
                'id' => 84,
                'display_name' => 'Podcast Category Index',
                'permission_code' => 'podcast_category.index',
                'display_group' => 'Podcast Category',
                'created_at' => '2024-02-22 17:20:59',
                'updated_at' => NULL,
            ),
            82 => 
            array (
                'id' => 85,
                'display_name' => 'Add Podcast Category',
                'permission_code' => 'podcast_category.add',
                'display_group' => 'Podcast Category',
                'created_at' => '2024-02-22 17:20:59',
                'updated_at' => NULL,
            ),
            83 => 
            array (
                'id' => 86,
                'display_name' => 'Edit Podcast Category',
                'permission_code' => 'podcast_category.edit',
                'display_group' => 'Podcast Category',
                'created_at' => '2024-02-22 17:20:59',
                'updated_at' => NULL,
            ),
            84 => 
            array (
                'id' => 87,
                'display_name' => 'Delete Podcast Category',
                'permission_code' => 'podcast_category.delete',
                'display_group' => 'Podcast Category',
                'created_at' => '2024-02-22 17:20:59',
                'updated_at' => NULL,
            ),
            85 => 
            array (
                'id' => 88,
                'display_name' => 'Show Podcast Category',
                'permission_code' => 'podcast_category.show',
                'display_group' => 'Podcast Category',
                'created_at' => '2024-02-22 17:20:59',
                'updated_at' => NULL,
            ),
            86 => 
            array (
                'id' => 89,
                'display_name' => 'Media Index',
                'permission_code' => 'media.index',
                'display_group' => 'Media',
                'created_at' => '2024-02-22 17:21:33',
                'updated_at' => NULL,
            ),
            87 => 
            array (
                'id' => 90,
                'display_name' => 'Add Media',
                'permission_code' => 'media.add',
                'display_group' => 'Media',
                'created_at' => '2024-02-22 17:21:33',
                'updated_at' => NULL,
            ),
            88 => 
            array (
                'id' => 91,
                'display_name' => 'Edit Media',
                'permission_code' => 'media.edit',
                'display_group' => 'Media',
                'created_at' => '2024-02-22 17:21:33',
                'updated_at' => NULL,
            ),
            89 => 
            array (
                'id' => 92,
                'display_name' => 'Delete Media',
                'permission_code' => 'media.delete',
                'display_group' => 'Media',
                'created_at' => '2024-02-22 17:21:33',
                'updated_at' => NULL,
            ),
            90 => 
            array (
                'id' => 93,
                'display_name' => 'Show Media',
                'permission_code' => 'media.show',
                'display_group' => 'Media',
                'created_at' => '2024-02-22 17:21:33',
                'updated_at' => NULL,
            ),
            91 => 
            array (
                'id' => 94,
                'display_name' => 'Media Category Index',
                'permission_code' => 'media_category.index',
                'display_group' => 'Media Category',
                'created_at' => '2024-02-22 17:22:09',
                'updated_at' => NULL,
            ),
            92 => 
            array (
                'id' => 95,
                'display_name' => 'Media Category Index',
                'permission_code' => 'media_category.index',
                'display_group' => 'Media Category',
                'created_at' => '2024-02-22 17:22:09',
                'updated_at' => NULL,
            ),
            93 => 
            array (
                'id' => 96,
                'display_name' => 'Add Media Category',
                'permission_code' => 'media_category.add',
                'display_group' => 'Media Category',
                'created_at' => '2024-02-22 17:22:09',
                'updated_at' => NULL,
            ),
            94 => 
            array (
                'id' => 97,
                'display_name' => 'Add Media Category',
                'permission_code' => 'media_category.add',
                'display_group' => 'Media Category',
                'created_at' => '2024-02-22 17:22:09',
                'updated_at' => NULL,
            ),
            95 => 
            array (
                'id' => 98,
                'display_name' => 'Edit Media Category',
                'permission_code' => 'media_category.edit',
                'display_group' => 'Media Category',
                'created_at' => '2024-02-22 17:22:09',
                'updated_at' => NULL,
            ),
            96 => 
            array (
                'id' => 99,
                'display_name' => 'Edit Media Category',
                'permission_code' => 'media_category.edit',
                'display_group' => 'Media Category',
                'created_at' => '2024-02-22 17:22:09',
                'updated_at' => NULL,
            ),
            97 => 
            array (
                'id' => 100,
                'display_name' => 'Delete Media Category',
                'permission_code' => 'media_category.delete',
                'display_group' => 'Media Category',
                'created_at' => '2024-02-22 17:22:09',
                'updated_at' => NULL,
            ),
            98 => 
            array (
                'id' => 101,
                'display_name' => 'Delete Media Category',
                'permission_code' => 'media_category.delete',
                'display_group' => 'Media Category',
                'created_at' => '2024-02-22 17:22:09',
                'updated_at' => NULL,
            ),
            99 => 
            array (
                'id' => 102,
                'display_name' => 'Show Media Category',
                'permission_code' => 'media_category.show',
                'display_group' => 'Media Category',
                'created_at' => '2024-02-22 17:22:09',
                'updated_at' => NULL,
            ),
            100 => 
            array (
                'id' => 103,
                'display_name' => 'Show Media Category',
                'permission_code' => 'media_category.show',
                'display_group' => 'Media Category',
                'created_at' => '2024-02-22 17:22:09',
                'updated_at' => NULL,
            ),
            101 => 
            array (
                'id' => 104,
                'display_name' => 'FAQ Index',
                'permission_code' => 'faq.index',
                'display_group' => 'FAQ',
                'created_at' => '2024-02-22 17:24:37',
                'updated_at' => NULL,
            ),
            102 => 
            array (
                'id' => 105,
                'display_name' => 'Add FAQ',
                'permission_code' => 'faq.add',
                'display_group' => 'FAQ',
                'created_at' => '2024-02-22 17:24:37',
                'updated_at' => NULL,
            ),
            103 => 
            array (
                'id' => 106,
                'display_name' => 'Edit FAQ',
                'permission_code' => 'faq.edit',
                'display_group' => 'FAQ',
                'created_at' => '2024-02-22 17:24:37',
                'updated_at' => NULL,
            ),
            104 => 
            array (
                'id' => 107,
                'display_name' => 'Delete FAQ',
                'permission_code' => 'faq.delete',
                'display_group' => 'FAQ',
                'created_at' => '2024-02-22 17:24:37',
                'updated_at' => NULL,
            ),
            105 => 
            array (
                'id' => 108,
                'display_name' => 'Show FAQ',
                'permission_code' => 'faq.show',
                'display_group' => 'FAQ',
                'created_at' => '2024-02-22 17:24:37',
                'updated_at' => NULL,
            ),
            106 => 
            array (
                'id' => 109,
                'display_name' => 'Import FAQ',
                'permission_code' => 'faq.import',
                'display_group' => 'FAQ',
                'created_at' => '2024-02-22 17:24:37',
                'updated_at' => NULL,
            ),
            107 => 
            array (
                'id' => 110,
                'display_name' => 'Export FAQ',
                'permission_code' => 'faq.export',
                'display_group' => 'FAQ',
                'created_at' => '2024-02-22 17:24:37',
                'updated_at' => NULL,
            ),
            108 => 
            array (
                'id' => 111,
                'display_name' => 'FAQ Category Index',
                'permission_code' => 'faq_category.index',
                'display_group' => 'FAQ Category',
                'created_at' => '2024-02-22 17:26:10',
                'updated_at' => NULL,
            ),
            109 => 
            array (
                'id' => 112,
                'display_name' => 'Add FAQ Category',
                'permission_code' => 'faq_category.add',
                'display_group' => 'FAQ Category',
                'created_at' => '2024-02-22 17:26:10',
                'updated_at' => NULL,
            ),
            110 => 
            array (
                'id' => 113,
                'display_name' => 'Edit FAQ Category',
                'permission_code' => 'faq_category.edit',
                'display_group' => 'FAQ Category',
                'created_at' => '2024-02-22 17:26:10',
                'updated_at' => NULL,
            ),
            111 => 
            array (
                'id' => 114,
                'display_name' => 'Delete FAQ Category',
                'permission_code' => 'faq_category.delete',
                'display_group' => 'FAQ Category',
                'created_at' => '2024-02-22 17:26:10',
                'updated_at' => NULL,
            ),
            112 => 
            array (
                'id' => 115,
                'display_name' => 'Show FAQ Category',
                'permission_code' => 'faq_category.show',
                'display_group' => 'FAQ Category',
                'created_at' => '2024-02-22 17:26:10',
                'updated_at' => NULL,
            ),
            113 => 
            array (
                'id' => 116,
                'display_name' => 'Import FAQ Category',
                'permission_code' => 'faq_category.import',
                'display_group' => 'FAQ Category',
                'created_at' => '2024-02-22 17:26:10',
                'updated_at' => NULL,
            ),
            114 => 
            array (
                'id' => 117,
                'display_name' => 'Export FAQ Category',
                'permission_code' => 'faq_category.export',
                'display_group' => 'FAQ Category',
                'created_at' => '2024-02-22 17:26:10',
                'updated_at' => NULL,
            ),
            115 => 
            array (
                'id' => 118,
                'display_name' => 'Contact Index',
                'permission_code' => 'contact.index',
                'display_group' => 'Contact Us',
                'created_at' => '2024-02-22 17:55:46',
                'updated_at' => NULL,
            ),
            116 => 
            array (
                'id' => 119,
                'display_name' => 'Show Contact',
                'permission_code' => 'contact.show',
                'display_group' => 'Contact Us',
                'created_at' => '2024-02-22 17:55:46',
                'updated_at' => NULL,
            ),
            117 => 
            array (
                'id' => 120,
                'display_name' => 'Gateway Index',
                'permission_code' => 'gateway.index',
                'display_group' => 'Gateway',
                'created_at' => '2024-02-22 17:56:58',
                'updated_at' => NULL,
            ),
            118 => 
            array (
                'id' => 121,
                'display_name' => 'Edit Gateway',
                'permission_code' => 'gateway.edit',
                'display_group' => 'Gateway',
                'created_at' => '2024-02-22 17:56:58',
                'updated_at' => NULL,
            ),
            119 => 
            array (
                'id' => 122,
                'display_name' => 'Show Gateway',
                'permission_code' => 'gateway.show',
                'display_group' => 'Gateway',
                'created_at' => '2024-02-22 17:56:58',
                'updated_at' => NULL,
            ),
            120 => 
            array (
                'id' => 123,
                'display_name' => 'Pricing Plan Index',
                'permission_code' => 'pricing_plane.index',
                'display_group' => 'Pricing Plan',
                'created_at' => '2024-02-22 17:59:23',
                'updated_at' => NULL,
            ),
            121 => 
            array (
                'id' => 124,
                'display_name' => 'Add Pricing Plan',
                'permission_code' => 'pricing_plane.add',
                'display_group' => 'Pricing Plan',
                'created_at' => '2024-02-22 17:59:23',
                'updated_at' => NULL,
            ),
            122 => 
            array (
                'id' => 125,
                'display_name' => 'Edit Pricing Plan',
                'permission_code' => 'pricing_plane.edit',
                'display_group' => 'Pricing Plan',
                'created_at' => '2024-02-22 17:59:23',
                'updated_at' => NULL,
            ),
            123 => 
            array (
                'id' => 126,
                'display_name' => 'Delete Pricing Plan',
                'permission_code' => 'pricing_plane.delete',
                'display_group' => 'Pricing Plan',
                'created_at' => '2024-02-22 17:59:23',
                'updated_at' => NULL,
            ),
            124 => 
            array (
                'id' => 127,
                'display_name' => 'Show Pricing Plan',
                'permission_code' => 'pricing_plane.show',
                'display_group' => 'Pricing Plan',
                'created_at' => '2024-02-22 17:59:23',
                'updated_at' => NULL,
            ),
            125 => 
            array (
                'id' => 128,
                'display_name' => 'Import Pricing Plan',
                'permission_code' => 'pricing_plane.import',
                'display_group' => 'Pricing Plan',
                'created_at' => '2024-02-22 17:59:23',
                'updated_at' => NULL,
            ),
            126 => 
            array (
                'id' => 129,
                'display_name' => 'Export Pricing Plan',
                'permission_code' => 'pricing_plane.export',
                'display_group' => 'Pricing Plan',
                'created_at' => '2024-02-22 17:59:23',
                'updated_at' => NULL,
            ),
            127 => 
            array (
                'id' => 130,
                'display_name' => 'Blog Index',
                'permission_code' => 'blog.index',
                'display_group' => 'Blog',
                'created_at' => '2024-02-22 17:59:59',
                'updated_at' => NULL,
            ),
            128 => 
            array (
                'id' => 131,
                'display_name' => 'Add Blog',
                'permission_code' => 'blog.add',
                'display_group' => 'Blog',
                'created_at' => '2024-02-22 17:59:59',
                'updated_at' => NULL,
            ),
            129 => 
            array (
                'id' => 132,
                'display_name' => 'Edit Blog',
                'permission_code' => 'blog.edit',
                'display_group' => 'Blog',
                'created_at' => '2024-02-22 17:59:59',
                'updated_at' => NULL,
            ),
            130 => 
            array (
                'id' => 133,
                'display_name' => 'Delete Blog',
                'permission_code' => 'blog.delete',
                'display_group' => 'Blog',
                'created_at' => '2024-02-22 17:59:59',
                'updated_at' => NULL,
            ),
            131 => 
            array (
                'id' => 134,
                'display_name' => 'Show Blog',
                'permission_code' => 'blog.show',
                'display_group' => 'Blog',
                'created_at' => '2024-02-22 17:59:59',
                'updated_at' => NULL,
            ),
            132 => 
            array (
                'id' => 135,
                'display_name' => 'Blog Category Index',
                'permission_code' => 'blog_category.index',
                'display_group' => 'Blog Category',
                'created_at' => '2024-02-22 18:00:53',
                'updated_at' => NULL,
            ),
            133 => 
            array (
                'id' => 136,
                'display_name' => 'Add Blog Category',
                'permission_code' => 'blog_category.add',
                'display_group' => 'Blog Category',
                'created_at' => '2024-02-22 18:00:53',
                'updated_at' => NULL,
            ),
            134 => 
            array (
                'id' => 137,
                'display_name' => 'Edit Blog Category',
                'permission_code' => 'blog_category.edit',
                'display_group' => 'Blog Category',
                'created_at' => '2024-02-22 18:00:53',
                'updated_at' => NULL,
            ),
            135 => 
            array (
                'id' => 138,
                'display_name' => 'Delete Blog Category',
                'permission_code' => 'blog_category.delete',
                'display_group' => 'Blog Category',
                'created_at' => '2024-02-22 18:00:53',
                'updated_at' => NULL,
            ),
            136 => 
            array (
                'id' => 139,
                'display_name' => 'Show Blog Category',
                'permission_code' => 'blog_category.show',
                'display_group' => 'Blog Category',
                'created_at' => '2024-02-22 18:00:53',
                'updated_at' => NULL,
            ),
            137 => 
            array (
                'id' => 140,
                'display_name' => 'Cource Index',
                'permission_code' => 'cource.index',
                'display_group' => 'Cource',
                'created_at' => '2024-02-22 18:02:01',
                'updated_at' => NULL,
            ),
            138 => 
            array (
                'id' => 141,
                'display_name' => 'Add Cource',
                'permission_code' => 'cource.add',
                'display_group' => 'Cource',
                'created_at' => '2024-02-22 18:02:01',
                'updated_at' => NULL,
            ),
            139 => 
            array (
                'id' => 142,
                'display_name' => 'Edit Cource',
                'permission_code' => 'cource.edit',
                'display_group' => 'Cource',
                'created_at' => '2024-02-22 18:02:01',
                'updated_at' => NULL,
            ),
            140 => 
            array (
                'id' => 143,
                'display_name' => 'Delete Cource',
                'permission_code' => 'cource.delete',
                'display_group' => 'Cource',
                'created_at' => '2024-02-22 18:02:02',
                'updated_at' => NULL,
            ),
            141 => 
            array (
                'id' => 144,
                'display_name' => 'Show Cource',
                'permission_code' => 'cource.show',
                'display_group' => 'Cource',
                'created_at' => '2024-02-22 18:02:02',
                'updated_at' => NULL,
            ),
            142 => 
            array (
                'id' => 145,
                'display_name' => 'Cource Category Index',
                'permission_code' => 'cource_category.index',
                'display_group' => 'Cource Category',
                'created_at' => '2024-02-22 18:02:59',
                'updated_at' => NULL,
            ),
            143 => 
            array (
                'id' => 146,
                'display_name' => 'Add Cource Category',
                'permission_code' => 'cource_category.add',
                'display_group' => 'Cource Category',
                'created_at' => '2024-02-22 18:03:00',
                'updated_at' => NULL,
            ),
            144 => 
            array (
                'id' => 147,
                'display_name' => 'Edit Cource Category',
                'permission_code' => 'cource_category.edit',
                'display_group' => 'Cource Category',
                'created_at' => '2024-02-22 18:03:00',
                'updated_at' => NULL,
            ),
            145 => 
            array (
                'id' => 148,
                'display_name' => 'Delete Cource Category',
                'permission_code' => 'cource_category.delete',
                'display_group' => 'Cource Category',
                'created_at' => '2024-02-22 18:03:00',
                'updated_at' => NULL,
            ),
            146 => 
            array (
                'id' => 149,
                'display_name' => 'Show Cource Category',
                'permission_code' => 'cource_category.show',
                'display_group' => 'Cource Category',
                'created_at' => '2024-02-22 18:03:00',
                'updated_at' => NULL,
            ),
            147 => 
            array (
                'id' => 150,
                'display_name' => 'Testimonial Index',
                'permission_code' => 'testimonial.index',
                'display_group' => 'Testimonial',
                'created_at' => '2024-02-22 18:03:47',
                'updated_at' => NULL,
            ),
            148 => 
            array (
                'id' => 151,
                'display_name' => 'Add Testimonial',
                'permission_code' => 'testimonial.add',
                'display_group' => 'Testimonial',
                'created_at' => '2024-02-22 18:03:47',
                'updated_at' => NULL,
            ),
            149 => 
            array (
                'id' => 152,
                'display_name' => 'Edit Testimonial',
                'permission_code' => 'testimonial.edit',
                'display_group' => 'Testimonial',
                'created_at' => '2024-02-22 18:03:47',
                'updated_at' => NULL,
            ),
            150 => 
            array (
                'id' => 153,
                'display_name' => 'Delete Testimonial',
                'permission_code' => 'testimonial.delete',
                'display_group' => 'Testimonial',
                'created_at' => '2024-02-22 18:03:47',
                'updated_at' => NULL,
            ),
            151 => 
            array (
                'id' => 154,
                'display_name' => 'Show Testimonial',
                'permission_code' => 'testimonial.show',
                'display_group' => 'Testimonial',
                'created_at' => '2024-02-22 18:03:47',
                'updated_at' => NULL,
            ),
            152 => 
            array (
                'id' => 155,
                'display_name' => 'Import Testimonial',
                'permission_code' => 'testimonial.import',
                'display_group' => 'Testimonial',
                'created_at' => '2024-02-22 18:03:47',
                'updated_at' => NULL,
            ),
            153 => 
            array (
                'id' => 156,
                'display_name' => 'Export Testimonial',
                'permission_code' => 'testimonial.export',
                'display_group' => 'Testimonial',
                'created_at' => '2024-02-22 18:03:47',
                'updated_at' => NULL,
            ),
            154 => 
            array (
                'id' => 157,
                'display_name' => 'Tag Index',
                'permission_code' => 'tag.index',
                'display_group' => 'Tag',
                'created_at' => '2024-02-22 18:04:33',
                'updated_at' => NULL,
            ),
            155 => 
            array (
                'id' => 158,
                'display_name' => 'Add Tag',
                'permission_code' => 'tag.add',
                'display_group' => 'Tag',
                'created_at' => '2024-02-22 18:04:33',
                'updated_at' => NULL,
            ),
            156 => 
            array (
                'id' => 159,
                'display_name' => 'Edit Tag',
                'permission_code' => 'tag.edit',
                'display_group' => 'Tag',
                'created_at' => '2024-02-22 18:04:33',
                'updated_at' => NULL,
            ),
            157 => 
            array (
                'id' => 160,
                'display_name' => 'Delete Tag',
                'permission_code' => 'tag.delete',
                'display_group' => 'Tag',
                'created_at' => '2024-02-22 18:04:33',
                'updated_at' => NULL,
            ),
            158 => 
            array (
                'id' => 161,
                'display_name' => 'Show Tag',
                'permission_code' => 'tag.show',
                'display_group' => 'Tag',
                'created_at' => '2024-02-22 18:04:33',
                'updated_at' => NULL,
            ),
            159 => 
            array (
                'id' => 162,
                'display_name' => 'Import Tag',
                'permission_code' => 'tag.import',
                'display_group' => 'Tag',
                'created_at' => '2024-02-22 18:04:33',
                'updated_at' => NULL,
            ),
            160 => 
            array (
                'id' => 163,
                'display_name' => 'Export Tag',
                'permission_code' => 'tag.export',
                'display_group' => 'Tag',
                'created_at' => '2024-02-22 18:04:33',
                'updated_at' => NULL,
            ),
            161 => 
            array (
                'id' => 164,
                'display_name' => 'Currency Index',
                'permission_code' => 'currency.index',
                'display_group' => 'Currency',
                'created_at' => '2024-02-22 18:05:30',
                'updated_at' => NULL,
            ),
            162 => 
            array (
                'id' => 165,
                'display_name' => 'Add Currency',
                'permission_code' => 'currency.add',
                'display_group' => 'Currency',
                'created_at' => '2024-02-22 18:05:30',
                'updated_at' => NULL,
            ),
            163 => 
            array (
                'id' => 166,
                'display_name' => 'Edit Currency',
                'permission_code' => 'currency.edit',
                'display_group' => 'Currency',
                'created_at' => '2024-02-22 18:05:30',
                'updated_at' => NULL,
            ),
            164 => 
            array (
                'id' => 167,
                'display_name' => 'Delete Currency',
                'permission_code' => 'currency.delete',
                'display_group' => 'Currency',
                'created_at' => '2024-02-22 18:05:30',
                'updated_at' => NULL,
            ),
            165 => 
            array (
                'id' => 168,
                'display_name' => 'Show Currency',
                'permission_code' => 'currency.show',
                'display_group' => 'Currency',
                'created_at' => '2024-02-22 18:05:30',
                'updated_at' => NULL,
            ),
            166 => 
            array (
                'id' => 169,
                'display_name' => 'Withdraw Request Index',
                'permission_code' => 'withdraw_request.index',
                'display_group' => 'Withdraw Request',
                'created_at' => '2024-02-22 18:06:49',
                'updated_at' => NULL,
            ),
            167 => 
            array (
                'id' => 170,
                'display_name' => 'Edit Withdraw Request',
                'permission_code' => 'withdraw_request.edit',
                'display_group' => 'Withdraw Request',
                'created_at' => '2024-02-22 18:06:49',
                'updated_at' => NULL,
            ),
            168 => 
            array (
                'id' => 171,
                'display_name' => 'Show Withdraw Request',
                'permission_code' => 'withdraw_request.show',
                'display_group' => 'Withdraw Request',
                'created_at' => '2024-02-22 18:06:49',
                'updated_at' => NULL,
            ),
            169 => 
            array (
                'id' => 172,
                'display_name' => 'Company Page Index',
                'permission_code' => 'company_page.index',
                'display_group' => 'Company Page',
                'created_at' => '2024-02-22 18:38:45',
                'updated_at' => NULL,
            ),
            170 => 
            array (
                'id' => 173,
                'display_name' => 'Add Company Page',
                'permission_code' => 'company_page.add',
                'display_group' => 'Company Page',
                'created_at' => '2024-02-22 18:38:45',
                'updated_at' => NULL,
            ),
            171 => 
            array (
                'id' => 174,
                'display_name' => 'Edit Company Page',
                'permission_code' => 'company_page.edit',
                'display_group' => 'Company Page',
                'created_at' => '2024-02-22 18:38:45',
                'updated_at' => NULL,
            ),
            172 => 
            array (
                'id' => 175,
                'display_name' => 'Delete Company Page',
                'permission_code' => 'company_page.delete',
                'display_group' => 'Company Page',
                'created_at' => '2024-02-22 18:38:45',
                'updated_at' => NULL,
            ),
            173 => 
            array (
                'id' => 176,
                'display_name' => 'Show Company Page',
                'permission_code' => 'company_page.show',
                'display_group' => 'Company Page',
                'created_at' => '2024-02-22 18:38:45',
                'updated_at' => NULL,
            ),
            174 => 
            array (
                'id' => 177,
                'display_name' => 'Site Content Index',
                'permission_code' => 'site_content.index',
                'display_group' => 'Site Content Index',
                'created_at' => '2024-02-22 18:39:51',
                'updated_at' => NULL,
            ),
            175 => 
            array (
                'id' => 178,
                'display_name' => 'Country Index',
                'permission_code' => 'country.index',
                'display_group' => 'Country',
                'created_at' => '2024-02-22 18:40:45',
                'updated_at' => NULL,
            ),
            176 => 
            array (
                'id' => 179,
                'display_name' => 'Add Country',
                'permission_code' => 'country.add',
                'display_group' => 'Country',
                'created_at' => '2024-02-22 18:40:45',
                'updated_at' => NULL,
            ),
            177 => 
            array (
                'id' => 180,
                'display_name' => 'Edit Country',
                'permission_code' => 'country.edit',
                'display_group' => 'Country',
                'created_at' => '2024-02-22 18:40:45',
                'updated_at' => NULL,
            ),
            178 => 
            array (
                'id' => 181,
                'display_name' => 'Delete Country',
                'permission_code' => 'country.delete',
                'display_group' => 'Country',
                'created_at' => '2024-02-22 18:40:45',
                'updated_at' => NULL,
            ),
            179 => 
            array (
                'id' => 182,
                'display_name' => 'Show Country',
                'permission_code' => 'country.show',
                'display_group' => 'Country',
                'created_at' => '2024-02-22 18:40:45',
                'updated_at' => NULL,
            ),
            180 => 
            array (
                'id' => 183,
                'display_name' => 'Import Country',
                'permission_code' => 'country.import',
                'display_group' => 'Country',
                'created_at' => '2024-02-22 18:40:45',
                'updated_at' => NULL,
            ),
            181 => 
            array (
                'id' => 184,
                'display_name' => 'Export Country',
                'permission_code' => 'country.export',
                'display_group' => 'Country',
                'created_at' => '2024-02-22 18:40:45',
                'updated_at' => NULL,
            ),
            182 => 
            array (
                'id' => 185,
                'display_name' => 'State Index',
                'permission_code' => 'state.index',
                'display_group' => 'State',
                'created_at' => '2024-02-22 18:41:18',
                'updated_at' => NULL,
            ),
            183 => 
            array (
                'id' => 186,
                'display_name' => 'Add State',
                'permission_code' => 'state.add',
                'display_group' => 'State',
                'created_at' => '2024-02-22 18:41:18',
                'updated_at' => NULL,
            ),
            184 => 
            array (
                'id' => 187,
                'display_name' => 'Edit State',
                'permission_code' => 'state.edit',
                'display_group' => 'State',
                'created_at' => '2024-02-22 18:41:18',
                'updated_at' => NULL,
            ),
            185 => 
            array (
                'id' => 188,
                'display_name' => 'Delete State',
                'permission_code' => 'state.delete',
                'display_group' => 'State',
                'created_at' => '2024-02-22 18:41:18',
                'updated_at' => NULL,
            ),
            186 => 
            array (
                'id' => 189,
                'display_name' => 'Show State',
                'permission_code' => 'state.show',
                'display_group' => 'State',
                'created_at' => '2024-02-22 18:41:18',
                'updated_at' => NULL,
            ),
            187 => 
            array (
                'id' => 190,
                'display_name' => 'Import State',
                'permission_code' => 'state.import',
                'display_group' => 'State',
                'created_at' => '2024-02-22 18:41:18',
                'updated_at' => NULL,
            ),
            188 => 
            array (
                'id' => 191,
                'display_name' => 'Export State',
                'permission_code' => 'state.export',
                'display_group' => 'State',
                'created_at' => '2024-02-22 18:41:18',
                'updated_at' => NULL,
            ),
            189 => 
            array (
                'id' => 192,
                'display_name' => 'City Index',
                'permission_code' => 'city.index',
                'display_group' => 'City',
                'created_at' => '2024-02-22 18:41:47',
                'updated_at' => NULL,
            ),
            190 => 
            array (
                'id' => 193,
                'display_name' => 'Add City',
                'permission_code' => 'city.add',
                'display_group' => 'City',
                'created_at' => '2024-02-22 18:41:47',
                'updated_at' => NULL,
            ),
            191 => 
            array (
                'id' => 194,
                'display_name' => 'Edit City',
                'permission_code' => 'city.edit',
                'display_group' => 'City',
                'created_at' => '2024-02-22 18:41:47',
                'updated_at' => NULL,
            ),
            192 => 
            array (
                'id' => 195,
                'display_name' => 'Delete City',
                'permission_code' => 'city.delete',
                'display_group' => 'City',
                'created_at' => '2024-02-22 18:41:47',
                'updated_at' => NULL,
            ),
            193 => 
            array (
                'id' => 196,
                'display_name' => 'Show City',
                'permission_code' => 'city.show',
                'display_group' => 'City',
                'created_at' => '2024-02-22 18:41:47',
                'updated_at' => NULL,
            ),
            194 => 
            array (
                'id' => 197,
                'display_name' => 'Import City',
                'permission_code' => 'city.import',
                'display_group' => 'City',
                'created_at' => '2024-02-22 18:41:47',
                'updated_at' => NULL,
            ),
            195 => 
            array (
                'id' => 198,
                'display_name' => 'Export City',
                'permission_code' => 'city.export',
                'display_group' => 'City',
                'created_at' => '2024-02-22 18:41:47',
                'updated_at' => NULL,
            ),
            196 => 
            array (
                'id' => 199,
                'display_name' => 'Language Index',
                'permission_code' => 'language.index',
                'display_group' => 'Language',
                'created_at' => '2024-02-22 18:42:27',
                'updated_at' => NULL,
            ),
            197 => 
            array (
                'id' => 200,
                'display_name' => 'Add Language',
                'permission_code' => 'language.add',
                'display_group' => 'Language',
                'created_at' => '2024-02-22 18:42:27',
                'updated_at' => NULL,
            ),
            198 => 
            array (
                'id' => 201,
                'display_name' => 'Edit Language',
                'permission_code' => 'language.edit',
                'display_group' => 'Language',
                'created_at' => '2024-02-22 18:42:27',
                'updated_at' => NULL,
            ),
            199 => 
            array (
                'id' => 202,
                'display_name' => 'Delete Language',
                'permission_code' => 'language.delete',
                'display_group' => 'Language',
                'created_at' => '2024-02-22 18:42:27',
                'updated_at' => NULL,
            ),
            200 => 
            array (
                'id' => 203,
                'display_name' => 'Show Language',
                'permission_code' => 'language.show',
                'display_group' => 'Language',
                'created_at' => '2024-02-22 18:42:27',
                'updated_at' => NULL,
            ),
            201 => 
            array (
                'id' => 204,
                'display_name' => 'Import Language',
                'permission_code' => 'language.import',
                'display_group' => 'Language',
                'created_at' => '2024-02-22 18:42:27',
                'updated_at' => NULL,
            ),
            202 => 
            array (
                'id' => 205,
                'display_name' => 'Export Language',
                'permission_code' => 'language.export',
                'display_group' => 'Language',
                'created_at' => '2024-02-22 18:42:27',
                'updated_at' => NULL,
            ),
            203 => 
            array (
                'id' => 206,
                'display_name' => 'Role Index',
                'permission_code' => 'role.index',
                'display_group' => 'Role',
                'created_at' => '2024-02-22 18:44:29',
                'updated_at' => NULL,
            ),
            204 => 
            array (
                'id' => 207,
                'display_name' => 'Add Role',
                'permission_code' => 'role.add',
                'display_group' => 'Role',
                'created_at' => '2024-02-22 18:44:29',
                'updated_at' => NULL,
            ),
            205 => 
            array (
                'id' => 208,
                'display_name' => 'Edit Role',
                'permission_code' => 'role.edit',
                'display_group' => 'Role',
                'created_at' => '2024-02-22 18:44:29',
                'updated_at' => NULL,
            ),
            206 => 
            array (
                'id' => 209,
                'display_name' => 'Delete Role',
                'permission_code' => 'role.delete',
                'display_group' => 'Role',
                'created_at' => '2024-02-22 18:44:29',
                'updated_at' => NULL,
            ),
            207 => 
            array (
                'id' => 210,
                'display_name' => 'Show Role',
                'permission_code' => 'role.show',
                'display_group' => 'Role',
                'created_at' => '2024-02-22 18:44:29',
                'updated_at' => NULL,
            ),
            208 => 
            array (
                'id' => 211,
                'display_name' => 'Import Role',
                'permission_code' => 'role.import',
                'display_group' => 'Role',
                'created_at' => '2024-02-22 18:44:29',
                'updated_at' => NULL,
            ),
            209 => 
            array (
                'id' => 212,
                'display_name' => 'Export Role',
                'permission_code' => 'role.export',
                'display_group' => 'Role',
                'created_at' => '2024-02-22 18:44:29',
                'updated_at' => NULL,
            ),
            210 => 
            array (
                'id' => 213,
                'display_name' => 'General Setting Index',
                'permission_code' => 'general_setting.index',
                'display_group' => 'Setting',
                'created_at' => '2024-02-22 18:47:17',
                'updated_at' => NULL,
            ),
            211 => 
            array (
                'id' => 214,
                'display_name' => 'Configurations Setting Index',
                'permission_code' => 'configurations_setting.index',
                'display_group' => 'Setting',
                'created_at' => '2024-02-22 18:47:17',
                'updated_at' => NULL,
            ),
            212 => 
            array (
                'id' => 215,
                'display_name' => 'Social Links Setting Index',
                'permission_code' => 'social_links_setting.index',
                'display_group' => 'Setting',
                'created_at' => '2024-02-22 18:47:17',
                'updated_at' => NULL,
            ),
            213 => 
            array (
                'id' => 216,
                'display_name' => 'Subscription Methods Setting Index',
                'permission_code' => 'subscription_methods_etting.index',
                'display_group' => 'Setting',
                'created_at' => '2024-02-22 18:47:17',
                'updated_at' => NULL,
            ),
            214 => 
            array (
                'id' => 217,
                'display_name' => 'Commission Index',
                'permission_code' => 'commission.index',
                'display_group' => 'Setting',
                'created_at' => '2024-02-22 18:47:17',
                'updated_at' => NULL,
            ),
            215 => 
            array (
                'id' => 218,
                'display_name' => 'Users Index',
                'permission_code' => 'users.index',
                'display_group' => 'User',
                'created_at' => '2024-02-22 18:47:17',
                'updated_at' => NULL,
            ),
            216 => 
            array (
                'id' => 219,
                'display_name' => 'Add Users',
                'permission_code' => 'users.add',
                'display_group' => 'User',
                'created_at' => '2024-02-22 18:47:17',
                'updated_at' => NULL,
            ),
            217 => 
            array (
                'id' => 220,
                'display_name' => 'Edit Users',
                'permission_code' => 'users.edit',
                'display_group' => 'User',
                'created_at' => '2024-02-22 18:47:17',
                'updated_at' => NULL,
            ),
            218 => 
            array (
                'id' => 221,
                'display_name' => 'Show Users',
                'permission_code' => 'users.show',
                'display_group' => 'User',
                'created_at' => '2024-02-22 18:47:17',
                'updated_at' => NULL,
            ),
            219 => 
            array (
                'id' => 222,
                'display_name' => 'Delete Users',
                'permission_code' => 'users.delete',
                'display_group' => 'User',
                'created_at' => '2024-02-22 18:47:17',
                'updated_at' => NULL,
            ),
        ));
        
        
    }
}