<?php

namespace Database\Factories;

use App\UseHelpers;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\CareerSummary>
 */
class CareerSummaryFactory extends Factory
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
                'career_summary'    => 'Excellent knowledge of developing web applications and websites. Career oriented, hardworking and ability to handle multiple tasks. Developing and creating PHP MySQL application as per the specifications. Quick learner and ability to learn new concept. Experience on coordinating with team members in database structure Passionate about giving best design and coding practices',
                'created_by'        => 1,
                'updated_by'        => null,
                'created_at'        => UseHelpers::currentDateTime(),
                'updated_at'        => null
            ]
        ];
    }
}
