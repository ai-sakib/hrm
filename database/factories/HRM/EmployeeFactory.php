<?php

namespace Database\Factories\HRM;

use App\Models\HRM\Designation;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class EmployeeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $designations = Designation::get()->pluck('id')->toArray();
        return [
            'name' => $this->faker->name(),
            'designation_id' => $designations ? $designations[array_rand($designations)] : 1,
            'phone' => $this->faker->phoneNumber(),
            'email' => $this->faker->unique()->safeEmail(),
            'address' => $this->faker->address(),
        ];
    }
}
