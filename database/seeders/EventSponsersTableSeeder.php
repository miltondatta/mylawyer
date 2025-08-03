<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class EventSponsersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('event_sponsers')->delete();
        
        \DB::table('event_sponsers')->insert(array (
            0 => 
            array (
                'id' => 1,
                'event_id' => 16,
                'name' => 'Deleniti dolore exce',
            'image' => '/files/event_sponsers/1693929623download (2).jpeg',
                'created_at' => '2023-09-05 16:00:23',
                'updated_at' => '2023-09-05 16:02:02',
                'deleted_at' => '2023-09-05 16:02:02',
            ),
            1 => 
            array (
                'id' => 2,
                'event_id' => 16,
                'name' => 'Id voluptas ex cupid',
                'image' => '/files/event_sponsers/1693929623download.jpeg',
                'created_at' => '2023-09-05 16:00:23',
                'updated_at' => '2023-09-05 16:02:02',
                'deleted_at' => '2023-09-05 16:02:02',
            ),
            2 => 
            array (
                'id' => 6,
                'event_id' => 8,
                'name' => 'Sponser Name',
                'image' => '/files/event_sponsers/1696334741dashboard-image-1.png',
                'created_at' => '2023-10-03 17:05:41',
                'updated_at' => '2023-10-03 17:05:41',
                'deleted_at' => NULL,
            ),
            3 => 
            array (
                'id' => 7,
                'event_id' => 10,
                'name' => 'Legitadvisor',
                'image' => '/files/event_sponsers/1696406193tick-icon.png',
                'created_at' => '2023-10-04 12:56:33',
                'updated_at' => '2023-10-04 16:16:48',
                'deleted_at' => '2023-10-04 16:16:48',
            ),
            4 => 
            array (
                'id' => 8,
                'event_id' => 10,
                'name' => 'Legitadvisor',
                'image' => '/files/event_sponsers/1696418208tick-icon.png',
                'created_at' => '2023-10-04 16:16:48',
                'updated_at' => '2023-10-11 20:44:48',
                'deleted_at' => '2023-10-11 20:44:48',
            ),
            5 => 
            array (
                'id' => 9,
                'event_id' => 11,
                'name' => 'Legit Advisor',
                'image' => '/files/event_sponsers/1696488027100 x 100.png',
                'created_at' => '2023-10-05 11:40:27',
                'updated_at' => '2023-10-11 20:36:57',
                'deleted_at' => '2023-10-11 20:36:57',
            ),
            6 => 
            array (
                'id' => 10,
                'event_id' => 11,
                'name' => 'logo',
                'image' => '/files/event_sponsers/1697038617law-legal-justice-graphic_24877-52551.avif',
                'created_at' => '2023-10-11 20:36:57',
                'updated_at' => '2023-10-11 20:36:57',
                'deleted_at' => NULL,
            ),
            7 => 
            array (
                'id' => 11,
                'event_id' => 10,
                'name' => 'Legitadvisor',
                'image' => '/files/event_sponsers/1697039088hand-drawn-advocate-logo-design_23-2150640393.avif',
                'created_at' => '2023-10-11 20:44:48',
                'updated_at' => '2023-10-12 17:41:22',
                'deleted_at' => '2023-10-12 17:41:22',
            ),
            8 => 
            array (
                'id' => 12,
                'event_id' => 9,
                'name' => 'legal',
            'image' => '/files/event_sponsers/1697039620hand-drawn-advocate-logo-design_23-2150640393 (1).avif',
                'created_at' => '2023-10-11 20:53:40',
                'updated_at' => '2023-10-12 17:43:10',
                'deleted_at' => '2023-10-12 17:43:10',
            ),
            9 => 
            array (
                'id' => 13,
                'event_id' => 5,
                'name' => 'legal',
                'image' => '/files/event_sponsers/1697040264law-legal-justice-graphic_24877-52551.avif',
                'created_at' => '2023-10-11 21:04:24',
                'updated_at' => '2023-10-12 16:21:23',
                'deleted_at' => '2023-10-12 16:21:23',
            ),
            10 => 
            array (
                'id' => 14,
                'event_id' => 12,
                'name' => 'legal',
                'image' => '/files/event_sponsers/1697107186copyright-law-day-banner-design_1308-121882.avif',
                'created_at' => '2023-10-12 15:39:46',
                'updated_at' => '2023-10-12 15:39:46',
                'deleted_at' => NULL,
            ),
            11 => 
            array (
                'id' => 16,
                'event_id' => 13,
                'name' => 'legal',
                'image' => '/files/event_sponsers/1697107461hand-drawn-advocate-logo-design_23-2150640393.avif',
                'created_at' => '2023-10-12 15:44:21',
                'updated_at' => '2023-10-12 15:44:21',
                'deleted_at' => NULL,
            ),
            12 => 
            array (
                'id' => 17,
                'event_id' => 14,
                'name' => 'legal',
                'image' => '/files/event_sponsers/1697107828hand-drawn-advocate-logo-design_23-2150640393.avif',
                'created_at' => '2023-10-12 15:50:28',
                'updated_at' => '2023-10-12 15:50:28',
                'deleted_at' => NULL,
            ),
            13 => 
            array (
                'id' => 18,
                'event_id' => 15,
                'name' => 'Logo',
                'image' => '/files/event_sponsers/1697108080sponsor-stickers-collection_23-2148737616.avif',
                'created_at' => '2023-10-12 15:54:40',
                'updated_at' => '2023-10-12 15:54:40',
                'deleted_at' => NULL,
            ),
            14 => 
            array (
                'id' => 19,
                'event_id' => 16,
                'name' => 'Logo',
                'image' => '/files/event_sponsers/1697108519law-legal-justice-graphic_24877-52551.avif',
                'created_at' => '2023-10-12 16:01:59',
                'updated_at' => '2023-10-12 16:01:59',
                'deleted_at' => NULL,
            ),
            15 => 
            array (
                'id' => 20,
                'event_id' => 18,
                'name' => 'Logo',
                'image' => '/files/event_sponsers/1697108944hand-drawn-advocate-logo-design_23-2150652390.avif',
                'created_at' => '2023-10-12 16:09:04',
                'updated_at' => '2023-10-12 17:39:48',
                'deleted_at' => '2023-10-12 17:39:48',
            ),
            16 => 
            array (
                'id' => 21,
                'event_id' => 17,
                'name' => 'Logo',
            'image' => '/files/event_sponsers/1697109543law-firm-logo-icon-design-template-vector_9999-1654 (1).avif',
                'created_at' => '2023-10-12 16:19:03',
                'updated_at' => '2023-10-12 17:38:44',
                'deleted_at' => '2023-10-12 17:38:44',
            ),
            17 => 
            array (
                'id' => 22,
                'event_id' => 5,
                'name' => 'legal',
            'image' => '/files/event_sponsers/1697109683world-day-social-justice-banner_1308-127133 (1).avif',
                'created_at' => '2023-10-12 16:21:23',
                'updated_at' => '2023-10-12 16:22:20',
                'deleted_at' => '2023-10-12 16:22:20',
            ),
            18 => 
            array (
                'id' => 23,
                'event_id' => 5,
                'name' => 'legal',
            'image' => '/files/event_sponsers/1697109740world-day-social-justice-banner_1308-127133 (1).avif',
                'created_at' => '2023-10-12 16:22:20',
                'updated_at' => '2023-10-12 16:23:18',
                'deleted_at' => '2023-10-12 16:23:18',
            ),
            19 => 
            array (
                'id' => 24,
                'event_id' => 5,
                'name' => 'legal',
            'image' => '/files/event_sponsers/1697109798world-day-social-justice-banner_1308-127133 (1).avif',
                'created_at' => '2023-10-12 16:23:18',
                'updated_at' => '2023-10-12 16:24:05',
                'deleted_at' => '2023-10-12 16:24:05',
            ),
            20 => 
            array (
                'id' => 25,
                'event_id' => 5,
                'name' => 'legal',
            'image' => '/files/event_sponsers/1697109845world-day-social-justice-banner_1308-127133 (1).avif',
                'created_at' => '2023-10-12 16:24:05',
                'updated_at' => '2023-10-12 16:32:07',
                'deleted_at' => '2023-10-12 16:32:07',
            ),
            21 => 
            array (
                'id' => 26,
                'event_id' => 5,
                'name' => 'legal',
            'image' => '/files/event_sponsers/1697110327world-day-social-justice-banner_1308-127133 (1).avif',
                'created_at' => '2023-10-12 16:32:07',
                'updated_at' => '2023-10-12 16:35:56',
                'deleted_at' => '2023-10-12 16:35:56',
            ),
            22 => 
            array (
                'id' => 27,
                'event_id' => 5,
                'name' => 'legal',
                'image' => '/files/event_sponsers/1697110556world-day-social-justice-banner_1308-127133.avif',
                'created_at' => '2023-10-12 16:35:56',
                'updated_at' => '2023-10-19 14:34:21',
                'deleted_at' => '2023-10-19 14:34:21',
            ),
            23 => 
            array (
                'id' => 28,
                'event_id' => 17,
                'name' => 'Logo',
            'image' => '/files/event_sponsers/1697114324law-firm-logo-icon-design-template-vector_9999-1654 (1).avif',
                'created_at' => '2023-10-12 17:38:44',
                'updated_at' => '2023-10-12 17:38:44',
                'deleted_at' => NULL,
            ),
            24 => 
            array (
                'id' => 29,
                'event_id' => 18,
                'name' => 'Logo',
                'image' => '/files/event_sponsers/1697114388world-day-social-justice-banner_1308-127133.avif',
                'created_at' => '2023-10-12 17:39:48',
                'updated_at' => '2023-10-12 17:39:48',
                'deleted_at' => NULL,
            ),
            25 => 
            array (
                'id' => 30,
                'event_id' => 10,
                'name' => 'Legitadvisor',
                'image' => '/files/event_sponsers/1697114482world-day-social-justice-banner_1308-127133.avif',
                'created_at' => '2023-10-12 17:41:22',
                'updated_at' => '2023-10-12 17:41:22',
                'deleted_at' => NULL,
            ),
            26 => 
            array (
                'id' => 31,
                'event_id' => 9,
                'name' => 'legal',
            'image' => '/files/event_sponsers/1697114590world-day-social-justice-banner_1308-127133 (1).avif',
                'created_at' => '2023-10-12 17:43:10',
                'updated_at' => '2023-10-12 17:43:56',
                'deleted_at' => '2023-10-12 17:43:56',
            ),
            27 => 
            array (
                'id' => 32,
                'event_id' => 9,
                'name' => 'logo',
                'image' => '/files/event_sponsers/1697114590world-day-social-justice-banner_1308-127133.avif',
                'created_at' => '2023-10-12 17:43:10',
                'updated_at' => '2023-10-12 17:43:56',
                'deleted_at' => '2023-10-12 17:43:56',
            ),
            28 => 
            array (
                'id' => 33,
                'event_id' => 9,
                'name' => 'legal',
            'image' => '/files/event_sponsers/1697114636world-day-social-justice-banner_1308-127133 (1).avif',
                'created_at' => '2023-10-12 17:43:56',
                'updated_at' => '2023-10-12 17:43:56',
                'deleted_at' => NULL,
            ),
            29 => 
            array (
                'id' => 34,
                'event_id' => 9,
                'name' => 'logo',
                'image' => '/files/event_sponsers/1697114636world-day-social-justice-banner_1308-127133.avif',
                'created_at' => '2023-10-12 17:43:56',
                'updated_at' => '2023-10-12 17:43:56',
                'deleted_at' => NULL,
            ),
            30 => 
            array (
                'id' => 35,
                'event_id' => 23,
                'name' => 'Logo',
                'image' => '/files/event_sponsers/1697197265hand-drawn-advocate-logo-design_23-2150640387.avif',
                'created_at' => '2023-10-13 16:41:05',
                'updated_at' => '2023-10-30 16:51:31',
                'deleted_at' => '2023-10-30 16:51:31',
            ),
            31 => 
            array (
                'id' => 36,
                'event_id' => 24,
                'name' => 'logo',
                'image' => NULL,
                'created_at' => '2023-10-13 16:47:12',
                'updated_at' => '2023-10-13 16:47:12',
                'deleted_at' => NULL,
            ),
            32 => 
            array (
                'id' => 37,
                'event_id' => 27,
                'name' => 'ASF',
                'image' => '/files/event_sponsers/1697205290hand-drawn-advocate-logo-design_23-2150640387.avif',
                'created_at' => '2023-10-13 18:54:50',
                'updated_at' => '2023-10-13 18:54:50',
                'deleted_at' => NULL,
            ),
            33 => 
            array (
                'id' => 38,
                'event_id' => 28,
                'name' => 'legal',
                'image' => '/files/event_sponsers/1697110556world-day-social-justice-banner_1308-127133.avif',
                'created_at' => '2023-10-12 16:35:56',
                'updated_at' => '2023-10-12 16:35:56',
                'deleted_at' => NULL,
            ),
            34 => 
            array (
                'id' => 39,
                'event_id' => 29,
                'name' => 'Logo',
            'image' => '/files/event_sponsers/1697114324law-firm-logo-icon-design-template-vector_9999-1654 (1).avif',
                'created_at' => '2023-10-12 17:38:44',
                'updated_at' => '2023-10-12 17:38:44',
                'deleted_at' => NULL,
            ),
            35 => 
            array (
                'id' => 40,
                'event_id' => 5,
                'name' => 'legal',
            'image' => '/files/event_sponsers/1697708061advocate-logo-design-template_23-2150628876 (1).avif',
                'created_at' => '2023-10-19 14:34:21',
                'updated_at' => '2023-10-19 14:34:21',
                'deleted_at' => NULL,
            ),
            36 => 
            array (
                'id' => 41,
                'event_id' => 208,
                'name' => 'lawyer',
                'image' => '/files/event_sponsers/1698153939gradient-advocate-logo-template_23-2150670338.avif',
                'created_at' => '2023-10-24 18:25:39',
                'updated_at' => '2023-10-30 16:23:18',
                'deleted_at' => '2023-10-30 16:23:18',
            ),
            37 => 
            array (
                'id' => 42,
                'event_id' => 209,
                'name' => NULL,
                'image' => '/files/event_sponsers/1698154087law-firm-logo-icon-design-template-vector_9999-1654.avif',
                'created_at' => '2023-10-24 18:28:07',
                'updated_at' => '2023-10-24 18:29:38',
                'deleted_at' => '2023-10-24 18:29:38',
            ),
            38 => 
            array (
                'id' => 43,
                'event_id' => 209,
                'name' => NULL,
                'image' => '/files/event_sponsers/1698154087law-firm-logo-icon-design-template-vector_9999-1654.avif',
                'created_at' => '2023-10-24 18:29:38',
                'updated_at' => '2023-10-24 18:32:27',
                'deleted_at' => '2023-10-24 18:32:27',
            ),
            39 => 
            array (
                'id' => 44,
                'event_id' => 209,
                'name' => NULL,
                'image' => '/files/event_sponsers/1698154087law-firm-logo-icon-design-template-vector_9999-1654.avif',
                'created_at' => '2023-10-24 18:32:27',
                'updated_at' => '2023-10-24 18:37:30',
                'deleted_at' => '2023-10-24 18:37:30',
            ),
            40 => 
            array (
                'id' => 45,
                'event_id' => 209,
                'name' => NULL,
                'image' => '/files/event_sponsers/1698154087law-firm-logo-icon-design-template-vector_9999-1654.avif',
                'created_at' => '2023-10-24 18:37:30',
                'updated_at' => '2023-10-30 16:21:35',
                'deleted_at' => '2023-10-30 16:21:35',
            ),
            41 => 
            array (
                'id' => 46,
                'event_id' => 209,
                'name' => 'LawFirm',
                'image' => '/files/event_sponsers/1698154087law-firm-logo-icon-design-template-vector_9999-1654.avif',
                'created_at' => '2023-10-30 16:21:35',
                'updated_at' => '2023-10-30 16:21:35',
                'deleted_at' => NULL,
            ),
            42 => 
            array (
                'id' => 47,
                'event_id' => 208,
                'name' => 'lawyer',
                'image' => '/files/event_sponsers/1698153939gradient-advocate-logo-template_23-2150670338.avif',
                'created_at' => '2023-10-30 16:23:18',
                'updated_at' => '2023-10-30 16:23:18',
                'deleted_at' => NULL,
            ),
            43 => 
            array (
                'id' => 48,
                'event_id' => 23,
                'name' => 'Logo',
            'image' => '/files/event_sponsers/1698666691hand-drawn-advocate-logo-design_23-2150640399 (1).avif',
                'created_at' => '2023-10-30 16:51:31',
                'updated_at' => '2023-10-30 16:51:31',
                'deleted_at' => NULL,
            ),
            44 => 
            array (
                'id' => 49,
                'event_id' => 112,
                'name' => 'legal',
            'image' => '/files/event_sponsers/1698667319advocate-logo-design-template_23-2150628876 (1).avif',
                'created_at' => '2023-10-30 17:01:59',
                'updated_at' => '2023-10-30 17:01:59',
                'deleted_at' => NULL,
            ),
            45 => 
            array (
                'id' => 50,
                'event_id' => 205,
                'name' => 'Logo',
            'image' => '/files/event_sponsers/1698667588advocate-logo-design-template_23-2150628876 (1).avif',
                'created_at' => '2023-10-30 17:06:28',
                'updated_at' => '2023-10-30 17:08:55',
                'deleted_at' => '2023-10-30 17:08:55',
            ),
            46 => 
            array (
                'id' => 51,
                'event_id' => 205,
                'name' => 'Logo',
            'image' => '/files/event_sponsers/1698667735hand-drawn-advocate-logo-design_23-2150640399 (1).avif',
                'created_at' => '2023-10-30 17:08:55',
                'updated_at' => '2023-10-30 17:08:55',
                'deleted_at' => NULL,
            ),
            47 => 
            array (
                'id' => 52,
                'event_id' => 204,
                'name' => 'Logo',
            'image' => '/files/event_sponsers/1698667934advocate-logo-design-template_23-2150628876 (1).avif',
                'created_at' => '2023-10-30 17:12:14',
                'updated_at' => '2023-10-30 17:12:14',
                'deleted_at' => NULL,
            ),
            48 => 
            array (
                'id' => 53,
                'event_id' => 203,
                'name' => 'Logo',
            'image' => '/files/event_sponsers/1698668135advocate-logo-design-template_23-2150628876 (1).avif',
                'created_at' => '2023-10-30 17:15:35',
                'updated_at' => '2023-10-30 17:15:35',
                'deleted_at' => NULL,
            ),
            49 => 
            array (
                'id' => 54,
                'event_id' => 185,
                'name' => 'Logo',
            'image' => '/files/event_sponsers/1698668360advocate-logo-design-template_23-2150628876 (1).avif',
                'created_at' => '2023-10-30 17:19:20',
                'updated_at' => '2023-10-30 17:19:20',
                'deleted_at' => NULL,
            ),
            50 => 
            array (
                'id' => 55,
                'event_id' => 201,
                'name' => 'Logo',
            'image' => '/files/event_sponsers/1698668534advocate-logo-design-template_23-2150628876 (1).avif',
                'created_at' => '2023-10-30 17:22:14',
                'updated_at' => '2023-10-30 17:22:14',
                'deleted_at' => NULL,
            ),
            51 => 
            array (
                'id' => 56,
                'event_id' => 181,
                'name' => 'Logo',
                'image' => '/files/event_sponsers/1698668744dark-lawyer-logo-design_1051-1626.avif',
                'created_at' => '2023-10-30 17:25:44',
                'updated_at' => '2023-10-30 17:25:44',
                'deleted_at' => NULL,
            ),
            52 => 
            array (
                'id' => 57,
                'event_id' => 200,
                'name' => 'Logo',
            'image' => '/files/event_sponsers/1698669142hand-drawn-advocate-logo-design_23-2150640399 (1).avif',
                'created_at' => '2023-10-30 17:32:22',
                'updated_at' => '2023-10-30 17:34:06',
                'deleted_at' => '2023-10-30 17:34:06',
            ),
            53 => 
            array (
                'id' => 58,
                'event_id' => 200,
                'name' => 'Logo',
                'image' => '/files/event_sponsers/1698669246dark-lawyer-logo-design_1051-1626.avif',
                'created_at' => '2023-10-30 17:34:06',
                'updated_at' => '2023-10-30 17:34:06',
                'deleted_at' => NULL,
            ),
            54 => 
            array (
                'id' => 59,
                'event_id' => 211,
                'name' => 'Legal',
                'image' => '/files/event_sponsers/1698846213hand-drawn-advocate-logo-design_23-2150640387.avif',
                'created_at' => '2023-11-01 18:43:33',
                'updated_at' => '2023-11-01 18:46:10',
                'deleted_at' => '2023-11-01 18:46:10',
            ),
            55 => 
            array (
                'id' => 60,
                'event_id' => 211,
                'name' => 'Legal',
                'image' => '/files/event_sponsers/1698846370gradient-advocate-logo-template_23-2150670338.avif',
                'created_at' => '2023-11-01 18:46:10',
                'updated_at' => '2023-11-01 18:46:10',
                'deleted_at' => NULL,
            ),
        ));
        
        
    }
}