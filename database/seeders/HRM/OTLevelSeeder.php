<?php

namespace Database\Seeders\HRM;

use App\Models\HRM\OTLevel;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class OTLevelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $otLevels = [
            [
                'name' => 'OT Level 1',
                'hours' => 480,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'OT Level 2',
                'hours' => 540,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'OT Level 3',
                'hours' => 600,
                'created_at' => now(),
                'updated_at' => now()
            ], 
        ];

        OTLevel::insert($otLevels);
    }
}
