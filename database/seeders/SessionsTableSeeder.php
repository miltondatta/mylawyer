<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class SessionsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('sessions')->delete();
        
        \DB::table('sessions')->insert(array (
            0 => 
            array (
                'id' => '0dHuWtUEpkek7ybwWO2NrIwxyYuXPN3CX4mfo3mG',
                'user_id' => 1,
                'ip_address' => '172.69.242.132',
            'user_agent' => 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/118.0.0.0 Safari/537.36',
                'payload' => 'YTo1OntzOjY6Il90b2tlbiI7czo0MDoiYnJjazhMV2owWUF4S0xPaFVUd0RmT3BsdjVtOFN4bUdaREZheFB1cSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Njg6Imh0dHBzOi8vbGF3YWR2aXNvci1kZW1vLmhleGF0aGVtZXMuY29tL3N1cGVyX2FkbWluL2Jyb2FkY2FzdHMvY3JlYXRlIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo1MDoibG9naW5fd2ViXzU5YmEzNmFkZGMyYjJmOTQwMTU4MGYwMTRjN2Y1OGVhNGUzMDk4OWQiO2k6MTtzOjEyOiJsb2dnZWRfaW5fYXMiO3M6MTE6InN1cGVyX2FkbWluIjt9',
                'last_activity' => 1699027107,
            ),
            1 => 
            array (
                'id' => 'nl36t0ZuHeKmawT8vCL3CulSw5rPK45Jqpe43xdv',
                'user_id' => NULL,
                'ip_address' => '162.158.171.9',
            'user_agent' => 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/118.0.0.0 Safari/537.36',
                'payload' => 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiWU5UZUpJMEgzRVF1QlNKd00zWTk2TnNmWjBVM3E4ODRWelJqdWdIUiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mzg6Imh0dHBzOi8vbGF3YWR2aXNvci1kZW1vLmhleGF0aGVtZXMuY29tIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==',
                'last_activity' => 1699016034,
            ),
            2 => 
            array (
                'id' => '030xwSjL4xOS9ZP3VwUTm4KscFnPn1DHAf65xyqR',
                'user_id' => 4,
                'ip_address' => '172.69.242.132',
            'user_agent' => 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/118.0.0.0 Safari/537.36',
                'payload' => 'YTo1OntzOjY6Il90b2tlbiI7czo0MDoiaEFoQXFob3JjQWMxdENTOUR2UnBRdk5hclFBWk1tMXY5eDc3S0pCNiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mzg6Imh0dHBzOi8vbGF3YWR2aXNvci1kZW1vLmhleGF0aGVtZXMuY29tIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo1MDoibG9naW5fd2ViXzU5YmEzNmFkZGMyYjJmOTQwMTU4MGYwMTRjN2Y1OGVhNGUzMDk4OWQiO2k6NDtzOjEyOiJsb2dnZWRfaW5fYXMiO3M6ODoiY3VzdG9tZXIiO30=',
                'last_activity' => 1699023307,
            ),
        ));
        
        
    }
}