<?php

namespace Database\Factories\HRM;

use App\Models\HRM\Holiday;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\HRM\Holiday>
 */
class HolidayFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     * 
     */

    public function getDate(){

        $startDate = '2022-01-01';
        $endDate = '2023-12-31';
        $fakerDate = $this->faker->unique()->dateTimeBetween($startDate, $endDate);
        $date = $fakerDate->format('Y-m-d');

        $holidayFound = Holiday::where('date', $date)->first();
        if($holidayFound){
            return $this->getDate();
        }
        return $date;
        
    }   

    public function definition()
    {
        $descriptions = ['Govt Holiday', 'Independece Day', 'Victory Day', 'Mother Language Day', 'Eid'];

        $date = $this->getDate();
        return [
            'date' => $date,
            'description' => $descriptions[array_rand($descriptions)],
            'created_at' => now(),
            'updated_at' => now(),
        ];
        
    }
}
