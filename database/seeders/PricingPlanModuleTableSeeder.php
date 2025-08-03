<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class PricingPlanModuleTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('pricing_plan_module')->delete();
        
        \DB::table('pricing_plan_module')->insert(array (
            0 => 
            array (
                'id' => 22,
                'module_code' => 'test',
                'pricing_plan_id' => 49,
            ),
            1 => 
            array (
                'id' => 23,
                'module_code' => 'test123',
                'pricing_plan_id' => 49,
            ),
            2 => 
            array (
                'id' => 30,
                'module_code' => 'test',
                'pricing_plan_id' => 50,
            ),
            3 => 
            array (
                'id' => 43,
                'module_code' => 'lawyer-list-services',
                'pricing_plan_id' => 45,
            ),
            4 => 
            array (
                'id' => 44,
                'module_code' => 'lawyer-basic-profile',
                'pricing_plan_id' => 45,
            ),
            5 => 
            array (
                'id' => 45,
                'module_code' => 'lawyer-social-info',
                'pricing_plan_id' => 45,
            ),
            6 => 
            array (
                'id' => 46,
                'module_code' => 'lawyer-profile-display',
                'pricing_plan_id' => 45,
            ),
            7 => 
            array (
                'id' => 47,
                'module_code' => 'lawyer-calendly-integration',
                'pricing_plan_id' => 45,
            ),
            8 => 
            array (
                'id' => 48,
                'module_code' => 'lawyer-events',
                'pricing_plan_id' => 45,
            ),
            9 => 
            array (
                'id' => 49,
                'module_code' => 'lawyer-broadcasts',
                'pricing_plan_id' => 45,
            ),
            10 => 
            array (
                'id' => 50,
                'module_code' => 'lawyer-blogs',
                'pricing_plan_id' => 45,
            ),
            11 => 
            array (
                'id' => 51,
                'module_code' => 'lawyer-archives',
                'pricing_plan_id' => 45,
            ),
            12 => 
            array (
                'id' => 52,
                'module_code' => 'lawyer-podcasts',
                'pricing_plan_id' => 45,
            ),
            13 => 
            array (
                'id' => 53,
                'module_code' => 'law_firm-list-services',
                'pricing_plan_id' => 48,
            ),
            14 => 
            array (
                'id' => 54,
                'module_code' => 'law_firm-basic-profile',
                'pricing_plan_id' => 48,
            ),
            15 => 
            array (
                'id' => 55,
                'module_code' => 'law_firm-social-info',
                'pricing_plan_id' => 48,
            ),
            16 => 
            array (
                'id' => 56,
                'module_code' => 'law_firm-profile-display',
                'pricing_plan_id' => 48,
            ),
            17 => 
            array (
                'id' => 57,
                'module_code' => 'law_firm-calendly-integration',
                'pricing_plan_id' => 48,
            ),
            18 => 
            array (
                'id' => 58,
                'module_code' => 'law_firm-events',
                'pricing_plan_id' => 48,
            ),
            19 => 
            array (
                'id' => 59,
                'module_code' => 'law_firm-broadcasts',
                'pricing_plan_id' => 48,
            ),
            20 => 
            array (
                'id' => 60,
                'module_code' => 'law_firm-blogs',
                'pricing_plan_id' => 48,
            ),
            21 => 
            array (
                'id' => 61,
                'module_code' => 'law_firm-archives',
                'pricing_plan_id' => 48,
            ),
            22 => 
            array (
                'id' => 62,
                'module_code' => 'law_firm-podcasts',
                'pricing_plan_id' => 48,
            ),
            23 => 
            array (
                'id' => 120,
                'module_code' => 'law_firm-list-services',
                'pricing_plan_id' => 2,
            ),
            24 => 
            array (
                'id' => 121,
                'module_code' => 'law_firm-basic-profile',
                'pricing_plan_id' => 2,
            ),
            25 => 
            array (
                'id' => 122,
                'module_code' => 'law_firm-social-info',
                'pricing_plan_id' => 2,
            ),
            26 => 
            array (
                'id' => 123,
                'module_code' => 'law_firm-profile-display',
                'pricing_plan_id' => 2,
            ),
            27 => 
            array (
                'id' => 124,
                'module_code' => 'law_firm-calendly-integration',
                'pricing_plan_id' => 2,
            ),
            28 => 
            array (
                'id' => 125,
                'module_code' => 'law_firm-events',
                'pricing_plan_id' => 2,
            ),
            29 => 
            array (
                'id' => 126,
                'module_code' => 'law_firm-broadcasts',
                'pricing_plan_id' => 2,
            ),
            30 => 
            array (
                'id' => 127,
                'module_code' => 'law_firm-blogs',
                'pricing_plan_id' => 2,
            ),
            31 => 
            array (
                'id' => 128,
                'module_code' => 'law_firm-archives',
                'pricing_plan_id' => 2,
            ),
            32 => 
            array (
                'id' => 129,
                'module_code' => 'law_firm-podcasts',
                'pricing_plan_id' => 2,
            ),
            33 => 
            array (
                'id' => 130,
                'module_code' => 'law_firm-certifications',
                'pricing_plan_id' => 2,
            ),
            34 => 
            array (
                'id' => 131,
                'module_code' => 'law_firm-appointment',
                'pricing_plan_id' => 2,
            ),
            35 => 
            array (
                'id' => 132,
                'module_code' => 'lawyer-list-services',
                'pricing_plan_id' => 1,
            ),
            36 => 
            array (
                'id' => 133,
                'module_code' => 'lawyer-basic-profile',
                'pricing_plan_id' => 1,
            ),
            37 => 
            array (
                'id' => 134,
                'module_code' => 'lawyer-social-info',
                'pricing_plan_id' => 1,
            ),
            38 => 
            array (
                'id' => 135,
                'module_code' => 'lawyer-profile-display',
                'pricing_plan_id' => 1,
            ),
            39 => 
            array (
                'id' => 136,
                'module_code' => 'lawyer-calendly',
                'pricing_plan_id' => 1,
            ),
            40 => 
            array (
                'id' => 137,
                'module_code' => 'lawyer-events',
                'pricing_plan_id' => 1,
            ),
            41 => 
            array (
                'id' => 138,
                'module_code' => 'lawyer-broadcasts',
                'pricing_plan_id' => 1,
            ),
            42 => 
            array (
                'id' => 139,
                'module_code' => 'lawyer-blogs',
                'pricing_plan_id' => 1,
            ),
            43 => 
            array (
                'id' => 140,
                'module_code' => 'lawyer-archives',
                'pricing_plan_id' => 1,
            ),
            44 => 
            array (
                'id' => 141,
                'module_code' => 'lawyer-podcasts',
                'pricing_plan_id' => 1,
            ),
            45 => 
            array (
                'id' => 142,
                'module_code' => 'lawyer-certifications',
                'pricing_plan_id' => 1,
            ),
            46 => 
            array (
                'id' => 143,
                'module_code' => 'lawyer-appointment',
                'pricing_plan_id' => 1,
            ),
            47 => 
            array (
                'id' => 144,
                'module_code' => 'lawyer-list-services',
                'pricing_plan_id' => 53,
            ),
            48 => 
            array (
                'id' => 145,
                'module_code' => 'lawyer-basic-profile',
                'pricing_plan_id' => 53,
            ),
            49 => 
            array (
                'id' => 146,
                'module_code' => 'lawyer-social-info',
                'pricing_plan_id' => 53,
            ),
            50 => 
            array (
                'id' => 147,
                'module_code' => 'lawyer-profile-display',
                'pricing_plan_id' => 53,
            ),
            51 => 
            array (
                'id' => 148,
                'module_code' => 'lawyer-calendly',
                'pricing_plan_id' => 53,
            ),
            52 => 
            array (
                'id' => 149,
                'module_code' => 'lawyer-events',
                'pricing_plan_id' => 53,
            ),
            53 => 
            array (
                'id' => 150,
                'module_code' => 'lawyer-broadcasts',
                'pricing_plan_id' => 53,
            ),
            54 => 
            array (
                'id' => 151,
                'module_code' => 'lawyer-blogs',
                'pricing_plan_id' => 53,
            ),
            55 => 
            array (
                'id' => 152,
                'module_code' => 'lawyer-archives',
                'pricing_plan_id' => 53,
            ),
            56 => 
            array (
                'id' => 153,
                'module_code' => 'lawyer-podcasts',
                'pricing_plan_id' => 53,
            ),
            57 => 
            array (
                'id' => 154,
                'module_code' => 'lawyer-certifications',
                'pricing_plan_id' => 53,
            ),
            58 => 
            array (
                'id' => 155,
                'module_code' => 'lawyer-appointment',
                'pricing_plan_id' => 53,
            ),
        ));
        
        
    }
}