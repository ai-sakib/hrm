<?php

namespace Database\Seeders\HRM;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::insert([
            'name' => 'Asiful Islam Sakib',
            'email' => 'asif@magnetismtech.com',
            'password' => bcrypt(123123123), // password
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
