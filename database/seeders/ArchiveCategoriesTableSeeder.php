<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ArchiveCategoriesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('archive_categories')->delete();
        
        \DB::table('archive_categories')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => '{"en":"Criminal Law","hi":"\\u092b\\u094c\\u091c\\u0926\\u093e\\u0930\\u0940 \\u0915\\u093e\\u0928\\u0942\\u0928","ar":"\\u0642\\u0627\\u0646\\u0648\\u0646 \\u062c\\u0646\\u0627\\u0626\\u064a"}',
                'description' => '{"en":"<ul>\\r\\n\\t<li>Introduction to Criminal Law<\\/li>\\r\\n\\t<li>Criminal Procedure<\\/li>\\r\\n\\t<li>White-Collar Crime<\\/li>\\r\\n\\t<li>Cybercrime and Computer Law<\\/li>\\r\\n<\\/ul>","hi":"<ul>\\r\\n\\t<li>\\u0915\\u0941\\u0916\\u094d\\u092f\\u093e\\u0924\\u093f \\u0915\\u093e\\u0928\\u0942\\u0928 \\u0915\\u093e \\u092a\\u0930\\u093f\\u091a\\u092f<\\/li>\\r\\n\\t<li>\\u0915\\u0941\\u0916\\u094d\\u092f\\u093e\\u0924\\u093f \\u092a\\u094d\\u0930\\u0915\\u094d\\u0930\\u093f\\u092f\\u093e<\\/li>\\r\\n\\t<li>\\u0938\\u092b\\u0947\\u0926 \\u0915\\u0949\\u0932\\u0930 \\u0905\\u092a\\u0930\\u093e\\u0927<\\/li>\\r\\n\\t<li>\\u0938\\u093e\\u0907\\u092c\\u0930 \\u0905\\u092a\\u0930\\u093e\\u0927 \\u0914\\u0930 \\u0915\\u0902\\u092a\\u094d\\u092f\\u0942\\u091f\\u0930 \\u0915\\u093e\\u0928\\u0942\\u0928<\\/li>\\r\\n<\\/ul>","ar":"<ul>\\r\\n\\t<li>\\u0645\\u0642\\u062f\\u0645\\u0629 \\u0641\\u064a \\u0627\\u0644\\u0642\\u0627\\u0646\\u0648\\u0646 \\u0627\\u0644\\u062c\\u0646\\u0627\\u0626\\u064a<\\/li>\\r\\n\\t<li>\\u0625\\u062c\\u0631\\u0627\\u0621\\u0627\\u062a \\u0627\\u0644\\u0642\\u0627\\u0646\\u0648\\u0646 \\u0627\\u0644\\u062c\\u0646\\u0627\\u0626\\u064a<\\/li>\\r\\n\\t<li>\\u0627\\u0644\\u062c\\u0631\\u064a\\u0645\\u0629 \\u0630\\u0627\\u062a \\u0627\\u0644\\u064a\\u0627\\u0642\\u0648\\u062a \\u0627\\u0644\\u0623\\u0628\\u064a\\u0636<\\/li>\\r\\n\\t<li>\\u062c\\u0631\\u064a\\u0645\\u0629 \\u0627\\u0644\\u0625\\u0646\\u062a\\u0631\\u0646\\u062a \\u0648\\u0642\\u0627\\u0646\\u0648\\u0646 \\u0627\\u0644\\u062d\\u0627\\u0633\\u0648\\u0628<\\/li>\\r\\n<\\/ul>"}',
                'slug' => 'criminal-law-1',
                'is_active' => 1,
                'sort_order' => NULL,
                'image' => NULL,
                'created_at' => '2023-10-04 14:09:03',
                'updated_at' => '2023-10-11 19:15:22',
                'deleted_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'name' => '{"en":"asdas","hi":"sdas","ar":"asd"}',
                'description' => '{"en":"dasdas","hi":"dasdas","ar":"asdasd"}',
                'slug' => 'asdas-2',
                'is_active' => 1,
                'sort_order' => NULL,
                'image' => '/images/archive_categories/6543a98e6fd69.png',
                'created_at' => '2023-11-02 18:52:14',
                'updated_at' => '2023-11-02 18:52:24',
                'deleted_at' => '2023-11-02 18:52:24',
            ),
            2 => 
            array (
                'id' => 3,
                'name' => '{"en":"Religious Freedom and Expression","hi":"\\u0936\\u093f\\u0915\\u094d\\u0937\\u093e \\u0915\\u093e\\u0928\\u0942\\u0928","ar":"\\u0627\\u0644\\u062d\\u0631\\u064a\\u0629 \\u0627\\u0644\\u062f\\u064a\\u0646\\u064a\\u0629 \\u0648\\u0627\\u0644\\u062a\\u0639\\u0628\\u064a\\u0631"}',
                'description' => '{"en":"asdasd","hi":"asdasd","ar":"asdasdasdad"}',
                'slug' => 'religious-freedom-and-expression-3',
                'is_active' => 1,
                'sort_order' => NULL,
                'image' => '/images/archive_categories/6543a9b29612d.png',
                'created_at' => '2023-11-02 18:52:50',
                'updated_at' => '2023-11-02 18:52:59',
                'deleted_at' => '2023-11-02 18:52:59',
            ),
            3 => 
            array (
                'id' => 4,
                'name' => '{"en":"Religious Freedom and Expression","hi":"\\u0927\\u093e\\u0930\\u094d\\u092e\\u093f\\u0915 \\u0938\\u094d\\u0935\\u0924\\u0902\\u0924\\u094d\\u0930\\u0924\\u093e \\u0914\\u0930 \\u0905\\u092d\\u093f\\u0935\\u094d\\u092f\\u0915\\u094d\\u0924\\u093f","ar":"\\u0627\\u0644\\u062d\\u0631\\u064a\\u0629 \\u0627\\u0644\\u062f\\u064a\\u0646\\u064a\\u0629 \\u0648\\u0627\\u0644\\u062a\\u0639\\u0628\\u064a\\u0631"}',
                'description' => '{"en":"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.","hi":"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.","ar":"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur."}',
                'slug' => 'religious-freedom-and-expression-4',
                'is_active' => 1,
                'sort_order' => NULL,
                'image' => '/images/archive_categories/6544c627836f7.png',
                'created_at' => '2023-11-03 15:06:31',
                'updated_at' => '2023-11-03 15:07:25',
                'deleted_at' => '2023-11-03 15:07:25',
            ),
        ));
        
        
    }
}