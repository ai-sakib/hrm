<?php

namespace Database\Factories\HRM;

use App\Models\HRM\Designation;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Designation>
 */
class DesignationFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = Designation::class;

    public function definition()
    {
        return [
            'name' => $this->faker->name(),
        ];
    }
   
}
