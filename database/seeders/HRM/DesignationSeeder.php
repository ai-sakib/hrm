<?php

namespace Database\Seeders\HRM;

use App\Models\HRM\Designation;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DesignationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $designations = [
            [
                'name' => 'Managing Director',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Cheif Executive Officer',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'General Manager',
                'created_at' => now(),
                'updated_at' => now()
            ], 
            [
                'name' => 'Project Manager',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Assistant Manager',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Senior Executive',
                'created_at' => now(),
                'updated_at' => now()
            ], 
            [
                'name' => 'Executive',
                'created_at' => now(),
                'updated_at' => now()
            ], 
            [
                'name' => 'Junior Executive',
                'created_at' => now(),
                'updated_at' => now()
            ], 
        ];

        Designation::insert($designations);
    }
}
