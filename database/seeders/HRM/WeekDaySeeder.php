<?php

namespace Database\Seeders\HRM;

use App\Models\HRM\WeekDay;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class WeekDaySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $weekDays = [
            
            [
                'day' => 'Sunday',
                'is_weekend' => false
            ], 
            [
                'day' => 'Monday',
                'is_weekend' => false
            ],
            [
                'day' => 'Tuesday',
                'is_weekend' => false
            ],
            [
                'day' => 'Wednesday',
                'is_weekend' => false
            ], 
            [
                'day' => 'Thursday',
                'is_weekend' => false
            ],
            [
                'day' => 'Friday',
                'is_weekend' => true
            ],
            [
                'day' => 'Saturday',
                'is_weekend' => true
            ],
            
        ];
        
        WeekDay::insert($weekDays);
    }
}
