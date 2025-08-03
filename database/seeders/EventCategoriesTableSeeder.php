<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class EventCategoriesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('event_categories')->delete();
        
        \DB::table('event_categories')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'Add Archive Category',
                'description' => '<ol>
<li>Add Archive Category</li>
</ol>',
                'slug' => 'add-archive-category-1',
                'is_active' => 1,
                'sort_order' => NULL,
                'image' => NULL,
                'created_at' => '2023-09-19 13:41:01',
                'updated_at' => '2023-09-19 14:06:44',
                'deleted_at' => '2023-09-19 14:06:44',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'Event Category 123',
                'description' => '<p>Event Category&nbsp;&nbsp;Event Category&nbsp;&nbsp;Event Category&nbsp;&nbsp;Event Category&nbsp;</p>',
                'slug' => 'event-category-123-2',
                'is_active' => 1,
                'sort_order' => NULL,
                'image' => '/images/event_categories/6509abc1a594e.png',
                'created_at' => '2023-09-19 14:10:09',
                'updated_at' => '2023-09-19 14:10:34',
                'deleted_at' => '2023-09-19 14:10:34',
            ),
            2 => 
            array (
                'id' => 3,
                'name' => '{"en":"Law Event","hi":"\\u0915\\u093e\\u0928\\u0942\\u0928 \\u0918\\u091f\\u0928\\u093e","ar":"\\u062d\\u062f\\u062b \\u0627\\u0644\\u0642\\u0627\\u0646\\u0648\\u0646"}',
                'description' => '{"en":"<p>Law event&nbsp;<\\/p>","hi":"<p>\\u0915\\u093e\\u0928\\u0942\\u0928 \\u0907\\u0935\\u0947\\u0902\\u091f<\\/p>","ar":"<p>\\u062d\\u062f\\u062b \\u0642\\u0627\\u0646\\u0648\\u0646\\u064a<\\/p>"}',
                'slug' => 'kanana-ghatana-3',
                'is_active' => 1,
                'sort_order' => NULL,
                'image' => NULL,
                'created_at' => '2023-09-19 14:10:44',
                'updated_at' => '2023-10-11 17:49:53',
                'deleted_at' => NULL,
            ),
            3 => 
            array (
                'id' => 4,
                'name' => '{"en":"Advertising Law","hi":"\\u0935\\u093f\\u091c\\u094d\\u091e\\u093e\\u092a\\u0928 \\u0915\\u093e\\u0928\\u0942\\u0928","ar":"\\u0642\\u0627\\u0646\\u0648\\u0646 \\u0627\\u0644\\u0625\\u0639\\u0644\\u0627\\u0646"}',
                'description' => '{"en":"<ul>\\r\\n\\t<li><a href=\\"https:\\/\\/lawadvisor-demo.hexathemes.com\\/lawyers?lawyer_category=advertising-law-1&amp;main_category_slug=administrative-regulatory-law-1\\">Advertising Law<\\/a><\\/li>\\r\\n<\\/ul>","hi":"<ul>\\r\\n\\t<li><a href=\\"https:\\/\\/lawadvisor-demo.hexathemes.com\\/lawyers?lawyer_category=advertising-law-1&amp;main_category_slug=administrative-regulatory-law-1\\">\\u0935\\u093f\\u091c\\u094d\\u091e\\u093e\\u092a\\u0928 \\u0915\\u093e\\u0928\\u0942\\u0928<\\/a><\\/li>\\r\\n<\\/ul>","ar":"<ul>\\r\\n\\t<li><a href=\\"https:\\/\\/lawadvisor-demo.hexathemes.com\\/lawyers?lawyer_category=advertising-law-1&amp;main_category_slug=administrative-regulatory-law-1\\">\\u0642\\u0627\\u0646\\u0648\\u0646 \\u0627\\u0644\\u0625\\u0639\\u0644\\u0627\\u0646\\u0627\\u062a<\\/a><\\/li>\\r\\n<\\/ul>"}',
                'slug' => 'advertising-law-4',
                'is_active' => 1,
                'sort_order' => NULL,
                'image' => NULL,
                'created_at' => '2023-10-04 16:19:20',
                'updated_at' => '2023-10-11 20:20:32',
                'deleted_at' => NULL,
            ),
            4 => 
            array (
                'id' => 5,
                'name' => '{"en":"Legal Symposium","hi":"\\u0915\\u093e\\u0928\\u0942\\u0928\\u0940 \\u0938\\u092e\\u094d\\u092e\\u0947\\u0932\\u0928","ar":"\\u0645\\u0624\\u062a\\u0645\\u0631 \\u0642\\u0627\\u0646\\u0648\\u0646\\u064a"}',
                'description' => '{"en":"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.as","hi":"\\u0932\\u094b\\u0930\\u0947\\u092e \\u0907\\u092a\\u094d\\u0938\\u092e \\u0921\\u094b\\u0932\\u0930 \\u0938\\u093f\\u091f \\u0905\\u092e\\u0947\\u0924, \\u0915\\u0949\\u0928\\u094d\\u0938\\u0947\\u0915\\u094d\\u091f\\u0947\\u0924\\u0941\\u0930 \\u090f\\u0921\\u093f\\u092a\\u093f\\u0938\\u093f\\u0902\\u0917 \\u090f\\u0932\\u093f\\u0924\\u0964 \\u0938\\u0947\\u0926 \\u0926\\u094b \\u090f\\u0938\\u092e\\u094b\\u0926 \\u0924\\u0947\\u092e\\u094d\\u092a\\u094b\\u0930 \\u0907\\u0928\\u094d\\u0926\\u093f\\u0921\\u0941\\u0902\\u091f \\u0909\\u0924 \\u0932\\u092c\\u094b\\u0930\\u0947 \\u090f\\u0924 \\u0926\\u094b\\u0932\\u094b\\u0930\\u0947 \\u092e\\u0917\\u094d\\u0928\\u093e \\u0905\\u0932\\u093f\\u0915\\u094d\\u0935\\u093e\\u0964 \\u0909\\u0924 \\u090f\\u0928\\u093f\\u092e \\u0905\\u0926 \\u092e\\u093f\\u0928\\u093f\\u092e \\u0935\\u0947\\u0928\\u093f\\u092f\\u093e\\u092e, \\u0915\\u094d\\u0935\\u093f\\u0938 \\u0928\\u094b\\u0938\\u094d\\u0924\\u094d\\u0930\\u0941\\u0926 \\u090f\\u0915\\u094d\\u0938\\u0947\\u0930\\u094d\\u0938\\u093f\\u091f\\u0947\\u0936\\u0928 \\u0909\\u0932\\u094d\\u0932\\u093e\\u092e\\u094d\\u0915\\u094b \\u0932\\u093e\\u092c\\u094b\\u0930\\u093f\\u0938 \\u0928\\u093f\\u0938\\u093f \\u0909\\u0924 \\u0905\\u0932\\u093f\\u0915\\u094d\\u0935\\u093f\\u092a \\u090f\\u0915\\u094d\\u0938 \\u0908\\u0906 \\u0915\\u094b\\u092e\\u094d\\u092e\\u094b\\u0926\\u094b \\u0915\\u0949\\u0928\\u094d\\u0938\\u0947\\u0915\\u094d\\u0935\\u093e\\u0924\\u0964","ar":"\\u0644\\u0648\\u0631\\u064a\\u0645 \\u0625\\u064a\\u0628\\u0633\\u0648\\u0645 \\u062f\\u0648\\u0644\\u0648\\u0631 \\u0633\\u064a\\u062a \\u0622\\u0645\\u064a\\u062a\\u060c \\u0643\\u0648\\u0646\\u0633\\u064a\\u0643\\u062a\\u064a\\u062a\\u0648\\u0631 \\u0623\\u062f\\u064a\\u0628\\u064a\\u0633\\u064a\\u0646\\u063a \\u0625\\u0644\\u064a\\u062a. \\u0633\\u062f \\u062f\\u0648 \\u0623\\u064a\\u0648\\u0633\\u0645\\u0648\\u062f \\u062a\\u0645\\u0628\\u0648\\u0631 \\u0625\\u0646\\u0633\\u064a\\u062f\\u064a\\u0648\\u0646\\u062a \\u0623\\u0648\\u062a \\u0644\\u0627\\u0628\\u0648\\u0631 \\u0622\\u062a \\u062f\\u0648\\u0644\\u0648\\u0631\\u064a \\u0645\\u0627\\u062c\\u0646\\u0627 \\u0623\\u0644\\u064a\\u0643\\u0648\\u0627. \\u0623\\u062a \\u0625\\u0646\\u064a\\u0645 \\u0622\\u062f \\u0645\\u064a\\u0646\\u064a\\u0645 \\u0641\\u064a\\u0646\\u064a\\u0627\\u0645\\u060c \\u0643\\u0648\\u064a\\u0633 \\u0646\\u0648\\u0633\\u062a\\u0631\\u0648\\u062f \\u0625\\u0643\\u0633\\u064a\\u0631\\u0633\\u064a\\u062a\\u0627\\u062a\\u064a\\u0648\\u0646 \\u0623\\u0644\\u0627\\u0645\\u0643\\u0648 \\u0644\\u0627\\u0628\\u0648\\u0631\\u064a\\u0633 \\u0646\\u064a\\u0633\\u064a \\u0623\\u0648\\u062a \\u0623\\u0644\\u064a\\u0643\\u0648\\u064a\\u0628 \\u0625\\u0643\\u0633 \\u0625\\u064a\\u0627 \\u0643\\u0648\\u0645\\u0648\\u062f\\u0648 \\u0643\\u0648\\u0646\\u0633\\u064a\\u0643\\u0648\\u0627\\u062a."}',
                'slug' => 'legal-symposium-5',
                'is_active' => 1,
                'sort_order' => NULL,
                'image' => '/images/event_categories/654253ec06333.png',
                'created_at' => '2023-11-01 18:34:36',
                'updated_at' => '2023-11-01 18:35:23',
                'deleted_at' => '2023-11-01 18:35:23',
            ),
        ));
        
        
    }
}