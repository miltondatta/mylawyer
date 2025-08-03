<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class MigrationsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('migrations')->delete();
        
        \DB::table('migrations')->insert(array (
            0 => 
            array (
                'id' => 217,
                'migration' => '2014_10_12_100000_create_password_resets_table',
                'batch' => 1,
            ),
            1 => 
            array (
                'id' => 218,
                'migration' => '2019_08_19_000000_create_failed_jobs_table',
                'batch' => 1,
            ),
            2 => 
            array (
                'id' => 219,
                'migration' => '2019_12_14_000001_create_personal_access_tokens_table',
                'batch' => 1,
            ),
            3 => 
            array (
                'id' => 220,
                'migration' => '2023_01_10_000000_create_social_accounts_table',
                'batch' => 2,
            ),
            4 => 
            array (
                'id' => 221,
                'migration' => '2023_01_13_174757_create_sessions_table',
                'batch' => 2,
            ),
            5 => 
            array (
                'id' => 222,
                'migration' => '2023_01_13_174757_create_sessions_table',
                'batch' => 2,
            ),
            6 => 
            array (
                'id' => 223,
                'migration' => '2019_05_03_000001_create_customer_columns',
                'batch' => 3,
            ),
            7 => 
            array (
                'id' => 224,
                'migration' => '2019_05_03_000002_create_subscriptions_table',
                'batch' => 3,
            ),
            8 => 
            array (
                'id' => 225,
                'migration' => '2019_05_03_000003_create_subscription_items_table',
                'batch' => 3,
            ),
            9 => 
            array (
                'id' => 226,
                'migration' => '2023_11_15_152445_create_all_languages_table',
                'batch' => 0,
            ),
            10 => 
            array (
                'id' => 227,
                'migration' => '2023_11_15_152445_create_appointment_ratings_table',
                'batch' => 0,
            ),
            11 => 
            array (
                'id' => 228,
                'migration' => '2023_11_15_152445_create_appointment_schedule_slots_table',
                'batch' => 0,
            ),
            12 => 
            array (
                'id' => 229,
                'migration' => '2023_11_15_152445_create_appointment_schedules_table',
                'batch' => 0,
            ),
            13 => 
            array (
                'id' => 230,
                'migration' => '2023_11_15_152445_create_appointment_statuses_table',
                'batch' => 0,
            ),
            14 => 
            array (
                'id' => 231,
                'migration' => '2023_11_15_152445_create_appointment_types_table',
                'batch' => 0,
            ),
            15 => 
            array (
                'id' => 232,
                'migration' => '2023_11_15_152445_create_archive_categories_table',
                'batch' => 0,
            ),
            16 => 
            array (
                'id' => 233,
                'migration' => '2023_11_15_152445_create_archive_tag_table',
                'batch' => 0,
            ),
            17 => 
            array (
                'id' => 234,
                'migration' => '2023_11_15_152445_create_archives_table',
                'batch' => 0,
            ),
            18 => 
            array (
                'id' => 235,
                'migration' => '2023_11_15_152445_create_blog_categories_table',
                'batch' => 0,
            ),
            19 => 
            array (
                'id' => 236,
                'migration' => '2023_11_15_152445_create_booked_appointments_table',
                'batch' => 0,
            ),
            20 => 
            array (
                'id' => 237,
                'migration' => '2023_11_15_152445_create_broadcast_categories_table',
                'batch' => 0,
            ),
            21 => 
            array (
                'id' => 238,
                'migration' => '2023_11_15_152445_create_broadcast_tag_table',
                'batch' => 0,
            ),
            22 => 
            array (
                'id' => 239,
                'migration' => '2023_11_15_152445_create_broadcasts_table',
                'batch' => 0,
            ),
            23 => 
            array (
                'id' => 240,
                'migration' => '2023_11_15_152445_create_certifications_table',
                'batch' => 0,
            ),
            24 => 
            array (
                'id' => 241,
                'migration' => '2023_11_15_152445_create_change_logs_table',
                'batch' => 0,
            ),
            25 => 
            array (
                'id' => 242,
                'migration' => '2023_11_15_152445_create_cities_table',
                'batch' => 0,
            ),
            26 => 
            array (
                'id' => 243,
                'migration' => '2023_11_15_152445_create_company_pages_table',
                'batch' => 0,
            ),
            27 => 
            array (
                'id' => 244,
                'migration' => '2023_11_15_152445_create_contacts_table',
                'batch' => 0,
            ),
            28 => 
            array (
                'id' => 245,
                'migration' => '2023_11_15_152445_create_countries_table',
                'batch' => 0,
            ),
            29 => 
            array (
                'id' => 246,
                'migration' => '2023_11_15_152445_create_customers_table',
                'batch' => 0,
            ),
            30 => 
            array (
                'id' => 247,
                'migration' => '2023_11_15_152445_create_event_categories_table',
                'batch' => 0,
            ),
            31 => 
            array (
                'id' => 248,
                'migration' => '2023_11_15_152445_create_event_sponsers_table',
                'batch' => 0,
            ),
            32 => 
            array (
                'id' => 249,
                'migration' => '2023_11_15_152445_create_event_tag_table',
                'batch' => 0,
            ),
            33 => 
            array (
                'id' => 250,
                'migration' => '2023_11_15_152445_create_events_table',
                'batch' => 0,
            ),
            34 => 
            array (
                'id' => 251,
                'migration' => '2023_11_15_152445_create_failed_jobs_table',
                'batch' => 0,
            ),
            35 => 
            array (
                'id' => 252,
                'migration' => '2023_11_15_152445_create_faq_categories_table',
                'batch' => 0,
            ),
            36 => 
            array (
                'id' => 253,
                'migration' => '2023_11_15_152445_create_faqs_table',
                'batch' => 0,
            ),
            37 => 
            array (
                'id' => 254,
                'migration' => '2023_11_15_152445_create_general_settings_table',
                'batch' => 0,
            ),
            38 => 
            array (
                'id' => 255,
                'migration' => '2023_11_15_152445_create_jobs_table',
                'batch' => 0,
            ),
            39 => 
            array (
                'id' => 256,
                'migration' => '2023_11_15_152445_create_languages_table',
                'batch' => 0,
            ),
            40 => 
            array (
                'id' => 257,
                'migration' => '2023_11_15_152445_create_law_firm_categories_table',
                'batch' => 0,
            ),
            41 => 
            array (
                'id' => 258,
                'migration' => '2023_11_15_152445_create_law_firm_category_table',
                'batch' => 0,
            ),
            42 => 
            array (
                'id' => 259,
                'migration' => '2023_11_15_152445_create_law_firm_language_table',
                'batch' => 0,
            ),
            43 => 
            array (
                'id' => 260,
                'migration' => '2023_11_15_152445_create_law_firm_main_categories_table',
                'batch' => 0,
            ),
            44 => 
            array (
                'id' => 261,
                'migration' => '2023_11_15_152445_create_law_firm_reviews_table',
                'batch' => 0,
            ),
            45 => 
            array (
                'id' => 262,
                'migration' => '2023_11_15_152445_create_law_firm_settings_table',
                'batch' => 0,
            ),
            46 => 
            array (
                'id' => 263,
                'migration' => '2023_11_15_152445_create_law_firm_tag_table',
                'batch' => 0,
            ),
            47 => 
            array (
                'id' => 264,
                'migration' => '2023_11_15_152445_create_law_firms_table',
                'batch' => 0,
            ),
            48 => 
            array (
                'id' => 265,
                'migration' => '2023_11_15_152445_create_lawyer_categories_table',
                'batch' => 0,
            ),
            49 => 
            array (
                'id' => 266,
                'migration' => '2023_11_15_152445_create_lawyer_category_table',
                'batch' => 0,
            ),
            50 => 
            array (
                'id' => 267,
                'migration' => '2023_11_15_152445_create_lawyer_educations_table',
                'batch' => 0,
            ),
            51 => 
            array (
                'id' => 268,
                'migration' => '2023_11_15_152445_create_lawyer_experiences_table',
                'batch' => 0,
            ),
            52 => 
            array (
                'id' => 269,
                'migration' => '2023_11_15_152445_create_lawyer_language_table',
                'batch' => 0,
            ),
            53 => 
            array (
                'id' => 270,
                'migration' => '2023_11_15_152445_create_lawyer_main_categories_table',
                'batch' => 0,
            ),
            54 => 
            array (
                'id' => 271,
                'migration' => '2023_11_15_152445_create_lawyer_payments_history_table',
                'batch' => 0,
            ),
            55 => 
            array (
                'id' => 272,
                'migration' => '2023_11_15_152445_create_lawyer_reviews_table',
                'batch' => 0,
            ),
            56 => 
            array (
                'id' => 273,
                'migration' => '2023_11_15_152445_create_lawyer_settings_table',
                'batch' => 0,
            ),
            57 => 
            array (
                'id' => 274,
                'migration' => '2023_11_15_152445_create_lawyer_tag_table',
                'batch' => 0,
            ),
            58 => 
            array (
                'id' => 275,
                'migration' => '2023_11_15_152445_create_lawyers_table',
                'batch' => 0,
            ),
            59 => 
            array (
                'id' => 276,
                'migration' => '2023_11_15_152445_create_media_table',
                'batch' => 0,
            ),
            60 => 
            array (
                'id' => 277,
                'migration' => '2023_11_15_152445_create_media_categories_table',
                'batch' => 0,
            ),
            61 => 
            array (
                'id' => 278,
                'migration' => '2023_11_15_152445_create_messages_table',
                'batch' => 0,
            ),
            62 => 
            array (
                'id' => 279,
                'migration' => '2023_11_15_152445_create_oauth_access_tokens_table',
                'batch' => 0,
            ),
            63 => 
            array (
                'id' => 280,
                'migration' => '2023_11_15_152445_create_oauth_auth_codes_table',
                'batch' => 0,
            ),
            64 => 
            array (
                'id' => 281,
                'migration' => '2023_11_15_152445_create_oauth_clients_table',
                'batch' => 0,
            ),
            65 => 
            array (
                'id' => 282,
                'migration' => '2023_11_15_152445_create_oauth_personal_access_clients_table',
                'batch' => 0,
            ),
            66 => 
            array (
                'id' => 283,
                'migration' => '2023_11_15_152445_create_oauth_refresh_tokens_table',
                'batch' => 0,
            ),
            67 => 
            array (
                'id' => 284,
                'migration' => '2023_11_15_152445_create_pages_contents_table',
                'batch' => 0,
            ),
            68 => 
            array (
                'id' => 285,
                'migration' => '2023_11_15_152445_create_password_resets_table',
                'batch' => 0,
            ),
            69 => 
            array (
                'id' => 286,
                'migration' => '2023_11_15_152445_create_personal_access_tokens_table',
                'batch' => 0,
            ),
            70 => 
            array (
                'id' => 287,
                'migration' => '2023_11_15_152445_create_podcast_categories_table',
                'batch' => 0,
            ),
            71 => 
            array (
                'id' => 288,
                'migration' => '2023_11_15_152445_create_podcast_tag_table',
                'batch' => 0,
            ),
            72 => 
            array (
                'id' => 289,
                'migration' => '2023_11_15_152445_create_podcasts_table',
                'batch' => 0,
            ),
            73 => 
            array (
                'id' => 290,
                'migration' => '2023_11_15_152445_create_post_tag_table',
                'batch' => 0,
            ),
            74 => 
            array (
                'id' => 291,
                'migration' => '2023_11_15_152445_create_posts_table',
                'batch' => 0,
            ),
            75 => 
            array (
                'id' => 292,
                'migration' => '2023_11_15_152445_create_pricing_plan_module_table',
                'batch' => 0,
            ),
            76 => 
            array (
                'id' => 293,
                'migration' => '2023_11_15_152445_create_pricing_plan_modules_table',
                'batch' => 0,
            ),
            77 => 
            array (
                'id' => 294,
                'migration' => '2023_11_15_152445_create_pricing_plans_table',
                'batch' => 0,
            ),
            78 => 
            array (
                'id' => 295,
                'migration' => '2023_11_15_152445_create_role_permission_table',
                'batch' => 0,
            ),
            79 => 
            array (
                'id' => 296,
                'migration' => '2023_11_15_152445_create_role_permissions_table',
                'batch' => 0,
            ),
            80 => 
            array (
                'id' => 297,
                'migration' => '2023_11_15_152445_create_roles_table',
                'batch' => 0,
            ),
            81 => 
            array (
                'id' => 298,
                'migration' => '2023_11_15_152445_create_sessions_table',
                'batch' => 0,
            ),
            82 => 
            array (
                'id' => 299,
                'migration' => '2023_11_15_152445_create_social_accounts_table',
                'batch' => 0,
            ),
            83 => 
            array (
                'id' => 300,
                'migration' => '2023_11_15_152445_create_states_table',
                'batch' => 0,
            ),
            84 => 
            array (
                'id' => 301,
                'migration' => '2023_11_15_152445_create_subscription_items_table',
                'batch' => 0,
            ),
            85 => 
            array (
                'id' => 302,
                'migration' => '2023_11_15_152445_create_subscriptions_table',
                'batch' => 0,
            ),
            86 => 
            array (
                'id' => 303,
                'migration' => '2023_11_15_152445_create_tags_table',
                'batch' => 0,
            ),
            87 => 
            array (
                'id' => 304,
                'migration' => '2023_11_15_152445_create_testimonials_table',
                'batch' => 0,
            ),
            88 => 
            array (
                'id' => 305,
                'migration' => '2023_11_15_152445_create_user_role_table',
                'batch' => 0,
            ),
            89 => 
            array (
                'id' => 306,
                'migration' => '2023_11_15_152445_create_users_table',
                'batch' => 0,
            ),
            90 => 
            array (
                'id' => 307,
                'migration' => '2023_11_15_152448_add_foreign_keys_to_states_table',
                'batch' => 0,
            ),
        ));
        
        
    }
}