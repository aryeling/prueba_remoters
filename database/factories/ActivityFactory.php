<?php

namespace Database\Factories;

use App\Models\Activity;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Activity>
 */
class ActivityFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [

            'title' => fake()->sentence(),
            'description' => fake()->paragraph(),
            'dateFrom' => fake()->dateTimeBetween('now','+5 days'),
            'dateTo' => fake()->dateTimeBetween('now','+15 days'),
            'max_quantity_people' => fake()->randomDigitNotNull(),
            'price_person' => fake()->randomFloat(2,1,100000),
            'popularity' => fake()->randomDigit(),

        ];
    }
}
