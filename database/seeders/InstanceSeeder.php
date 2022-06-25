<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Instance;

class InstanceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Instance::create([
            'subdomain' => 'kristijan',
            'hash' => 'fb9441e6-4d4c-436c-b6c2-3b0e0155f84c',
            'name' => 'Kristijan',
            'email' => 'kristijan@gmail.abc' ,
            'status' => 'ACTIVE',
            'database' => 'sp_15_kristijan',
            'custom_domain' => NULL,
            'quick_login_hash' => NULL,
            'progress' => 100,
            'message' => 'Installing...',
            'password' => 'eyJpdiI6InEzVHQ2bGk5UitzeUtyUkgyZG9UcVE9PSIsInZhbHVlIjoidFZjZHoxRjU3RlBjaSthMnFKOUxUdz09IiwibWFjIjoiODAxOTI1OTU5YmMxYjYzZmQwNDEwODQwZTZmMWZmODJmMDg0NzdhMDA1MWM5MWJhOWJkNmNmNTk3YWFlNTQ3YSJ9',
            'verification_code' => NULL
        ]);
    }
}
