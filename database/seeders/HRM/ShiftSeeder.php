<?php

namespace Database\Seeders\HRM;

use App\Models\HRM\Shift;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ShiftSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $shifts = [
            [
                'name' => 'A',
                'description' => 'Morning',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'B',
                'description' => 'Day',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'C',
                'description' => 'Night',
                'created_at' => now(),
                'updated_at' => now()
            ],
        ];

        Shift::insert($shifts);
    }
}
