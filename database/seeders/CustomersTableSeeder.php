<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class CustomersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('customers')->delete();
        
        \DB::table('customers')->insert(array (
            0 => 
            array (
                'id' => 1,
                'user_id' => 2,
                'user_name' => 'jack',
                'country_id' => 167,
                'state_id' => 3176,
                'city_id' => 85437,
                'first_name' => 'Mary',
                'last_name' => 'Jennifer',
                'description' => 'Jack Testing Customer',
                'address_line_1' => 'D Ground People Colony',
                'address_line_2' => 'Faisalabad',
                'zip_code' => '38000',
                'is_active' => 1,
                'is_featured' => 0,
                'is_online' => 0,
                'icon' => NULL,
                'image' => '/images/profile_images/652fcc3d5fab9.png',
                'cover_image' => NULL,
                'created_at' => '2023-08-01 16:54:49',
                'updated_at' => '2023-11-03 15:41:58',
                'deleted_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'user_id' => 4,
                'user_name' => 'sir_john',
                'country_id' => 19,
                'state_id' => 766,
                'city_id' => 8541,
                'first_name' => 'John',
                'last_name' => 'James',
                'description' => NULL,
                'address_line_1' => '123 Main Street
Anytown, USA
12345',
                'address_line_2' => '123 Main Street
Anytown, USA
12345',
                'zip_code' => '38000',
                'is_active' => 1,
                'is_featured' => 0,
                'is_online' => 1,
                'icon' => NULL,
                'image' => '/images/profile_images/652fc895e6093.png',
                'cover_image' => NULL,
                'created_at' => '2023-08-03 15:51:33',
                'updated_at' => '2023-11-03 15:43:38',
                'deleted_at' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
                'user_id' => 18,
                'user_name' => 'sir_thomas',
                'country_id' => 19,
                'state_id' => 766,
                'city_id' => 8541,
                'first_name' => 'Daniel',
                'last_name' => 'Thomas',
                'description' => 'asd asds',
                'address_line_1' => '123 Main Street
Anytown, USA
12345',
                'address_line_2' => '123 Main Street
Anytown, USA
12345',
                'zip_code' => '38000',
                'is_active' => 1,
                'is_featured' => 0,
                'is_online' => 0,
                'icon' => NULL,
                'image' => '/images/profile_images/652fcb5adc5a7.png',
                'cover_image' => NULL,
                'created_at' => '2023-08-09 09:16:12',
                'updated_at' => '2023-11-01 17:30:11',
                'deleted_at' => NULL,
            ),
            3 => 
            array (
                'id' => 4,
                'user_id' => 19,
                'user_name' => 'abc12',
                'country_id' => NULL,
                'state_id' => NULL,
                'city_id' => NULL,
                'first_name' => 'Tonny',
                'last_name' => 'Jaw',
                'description' => 'Hi there! I\'m Tonny, and I\'m passionate about [mention a few of your interests]. I\'m always up for trying new foods, discovering great music, and exploring new places. When I\'m not indulging in my hobbies, you can find me at work or spending quality time with family and friends. Feel free to connect with me; I love meeting new people and making meaningful connections.',
                'address_line_1' => '80880',
                'address_line_2' => 'Adress in Uk Street 1',
                'zip_code' => 'Adress in Uk',
                'is_active' => 1,
                'is_featured' => 0,
                'is_online' => 1,
                'icon' => NULL,
                'image' => '/images/profile_images/6530f2797834d.png',
                'cover_image' => NULL,
                'created_at' => '2023-08-09 11:58:55',
                'updated_at' => '2023-11-01 18:49:59',
                'deleted_at' => NULL,
            ),
            4 => 
            array (
                'id' => 5,
                'user_id' => 17,
                'user_name' => 'Isabella',
                'country_id' => NULL,
                'state_id' => NULL,
                'city_id' => NULL,
                'first_name' => 'Isabella',
                'last_name' => 'Carrington',
                'description' => 'Isabella Carrington is a dynamic and results-driven attorney with a passion for justice and a strong commitment to her clients\' well-being. With a wealth of legal experience and a reputation for strategic thinking, Isabella has established herself as a trusted advocate known for her tenacity and dedication.

Education:

J.D. (Juris Doctor), Belleview Law School
B.A. in Political Science, University of Belleview',
                'address_line_1' => 'house 325',
                'address_line_2' => NULL,
                'zip_code' => '38000',
                'is_active' => 1,
                'is_featured' => 0,
                'is_online' => 1,
                'icon' => NULL,
                'image' => '/images/lawyers/64ccd745aaa0b.png',
                'cover_image' => NULL,
                'created_at' => '2023-08-22 18:00:55',
                'updated_at' => '2023-10-18 19:23:12',
                'deleted_at' => NULL,
            ),
            5 => 
            array (
                'id' => 6,
                'user_id' => 16,
                'user_name' => NULL,
                'country_id' => NULL,
                'state_id' => NULL,
                'city_id' => NULL,
                'first_name' => 'Sophia',
                'last_name' => 'Lancaster',
                'description' => 'Sophia Lancaster is a skilled and compassionate attorney who is dedicated to advocating for her clients\' rights and ensuring access to justice. With a diverse legal background and a deep commitment to serving her community, Sophia has earned a reputation as a reliable and empathetic advocate.

Education:

J.D. (Juris Doctor), Summitville Law School
B.A. in Sociology, University of Summitville
Areas of Expertise:

Sophia specializes in family law, offering comprehensive legal support in matters such as divorce, child custody, spousal support, and adoption. Her extensive experience in mediation and negotiation enables her to guide her clients through challenging family situations while minimizing conflict. Sophia also provides legal assistance in estate planning, offering clients peace of mind for the future.',
                'address_line_1' => NULL,
                'address_line_2' => NULL,
                'zip_code' => NULL,
                'is_active' => 1,
                'is_featured' => 0,
                'is_online' => 0,
                'icon' => NULL,
                'image' => '/images/lawyers/64ccd745aaa0b.png',
                'cover_image' => NULL,
                'created_at' => '2023-08-25 13:58:58',
                'updated_at' => '2023-08-25 13:58:58',
                'deleted_at' => NULL,
            ),
            6 => 
            array (
                'id' => 7,
                'user_id' => 20,
                'user_name' => NULL,
                'country_id' => NULL,
                'state_id' => NULL,
                'city_id' => NULL,
                'first_name' => 'Dean',
                'last_name' => 'Jhon',
                'description' => NULL,
                'address_line_1' => NULL,
                'address_line_2' => NULL,
                'zip_code' => NULL,
                'is_active' => 1,
                'is_featured' => 0,
                'is_online' => 0,
                'icon' => NULL,
                'image' => '/images/lawyers/64ccd745aaa0b.png',
                'cover_image' => NULL,
                'created_at' => '2023-09-27 10:57:37',
                'updated_at' => '2023-09-27 10:57:37',
                'deleted_at' => NULL,
            ),
            7 => 
            array (
                'id' => 8,
                'user_id' => 22,
                'user_name' => NULL,
                'country_id' => NULL,
                'state_id' => NULL,
                'city_id' => NULL,
                'first_name' => 'john',
                'last_name' => 'wick',
                'description' => NULL,
                'address_line_1' => NULL,
                'address_line_2' => NULL,
                'zip_code' => NULL,
                'is_active' => 1,
                'is_featured' => 0,
                'is_online' => 0,
                'icon' => NULL,
                'image' => '/images/lawyers/64ccd745aaa0b.png',
                'cover_image' => NULL,
                'created_at' => '2023-09-27 15:52:55',
                'updated_at' => '2023-10-02 18:45:57',
                'deleted_at' => NULL,
            ),
            8 => 
            array (
                'id' => 9,
                'user_id' => 40,
                'user_name' => 'sir_faizan',
                'country_id' => NULL,
                'state_id' => NULL,
                'city_id' => NULL,
                'first_name' => 'Faizan',
                'last_name' => 'Fazal',
                'description' => NULL,
                'address_line_1' => NULL,
                'address_line_2' => NULL,
                'zip_code' => NULL,
                'is_active' => 1,
                'is_featured' => 0,
                'is_online' => 0,
                'icon' => NULL,
                'image' => NULL,
                'cover_image' => NULL,
                'created_at' => '2023-10-26 19:54:30',
                'updated_at' => '2023-10-26 20:02:45',
                'deleted_at' => '2023-10-26 20:02:45',
            ),
            9 => 
            array (
                'id' => 10,
                'user_id' => 42,
                'user_name' => 'sir_fazal',
                'country_id' => NULL,
                'state_id' => NULL,
                'city_id' => NULL,
                'first_name' => 'Faizan',
                'last_name' => 'Fazal',
                'description' => NULL,
                'address_line_1' => NULL,
                'address_line_2' => NULL,
                'zip_code' => NULL,
                'is_active' => 1,
                'is_featured' => 0,
                'is_online' => 0,
                'icon' => NULL,
                'image' => NULL,
                'cover_image' => NULL,
                'created_at' => '2023-10-26 20:12:05',
                'updated_at' => '2023-10-26 20:12:59',
                'deleted_at' => '2023-10-26 20:12:59',
            ),
            10 => 
            array (
                'id' => 11,
                'user_id' => 3,
                'user_name' => 'sir_dave',
                'country_id' => NULL,
                'state_id' => NULL,
                'city_id' => NULL,
                'first_name' => 'john',
                'last_name' => 'dave',
                'description' => 'hello i am a customer hello',
                'address_line_1' => NULL,
                'address_line_2' => NULL,
                'zip_code' => NULL,
                'is_active' => 1,
                'is_featured' => 0,
                'is_online' => 0,
                'icon' => NULL,
                'image' => '/images/customers/6542467632fc0.png',
                'cover_image' => NULL,
                'created_at' => '2023-11-01 17:37:10',
                'updated_at' => '2023-11-01 17:38:48',
                'deleted_at' => '2023-11-01 17:38:48',
            ),
        ));
        
        
    }
}