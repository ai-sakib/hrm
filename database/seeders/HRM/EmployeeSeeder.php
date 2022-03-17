<?php

namespace Database\Seeders\HRM;

use App\Models\HRM\Employee;
use App\Models\HRM\Designation;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class EmployeeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $employees = [
            [
                'name' => 'Mohammad Shariare',
                'designation_id' => 3,
                'phone' => '015**********',
                'email' => 'shahriare@magnetismtech.com',
                'address' => 'Barik Building, Chittagong',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Jahangir Alam',
                'designation_id' => 4,
                'phone' => '016**********',
                'email' => 'jahangir@magnetismtech.com',
                'address' => 'Shagarika, Chittagong',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Zulkar Nain Rohan',
                'designation_id' => 5,
                'phone' => '018**********',
                'email' => 'rohan@magnetismtech.com',
                'address' => 'Haishahar B Block, Chittagong',
                'created_at' => now(),
                'updated_at' => now()
            ], 
            [
                'name' => 'Asiful Islam Sakib',
                'designation_id' => 6,
                'phone' => '017**********',
                'email' => 'asif@magnetismtech.com',
                'address' => 'Navy Sailors Colony 2, Chittagong',
                'created_at' => now(),
                'updated_at' => now()
            ],
            
            
            
        ];

        Employee::insert($employees);
    }   
}
