<?php

namespace Database\Seeders\HRM;

use App\Models\HRM\WorkType;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class WorkTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $workTypes = [
            [
                'name' => 'Normal',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Weekend',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Day Off',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Holiday',
                'created_at' => now(),
                'updated_at' => now()
            ], 
            [
                'name' => 'Leave',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Maternity Leave',
                'created_at' => now(),
                'updated_at' => now()
            ], 
            [
                'name' => 'Overtime',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Others',
                'created_at' => now(),
                'updated_at' => now()
            ], 
        ];

        WorkType::insert($workTypes);
    }
}
