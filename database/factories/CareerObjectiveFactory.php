<?php

namespace Database\Factories;

use App\UseHelpers;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\CareerObjective\CareerObjective>
 */
class CareerObjectiveFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            [
                'user_id'           => 1,
                'career_objective'  => 'To build a career in Information and Communication technology with the experience that I have gained from my education and professional background willing to take any challenge in the relevant field.',
                'created_by'        => 1,
                'updated_by'        => null,
                'created_at'        => UseHelpers::currentDateTime(),
                'updated_at'        => null
            ]
        ];
    }
}
