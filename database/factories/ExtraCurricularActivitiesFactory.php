<?php

namespace Database\Factories;

use App\UseHelpers;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\ExtraCurricularActivities>
 */
class ExtraCurricularActivitiesFactory extends Factory
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
                'activity_name' => "FSCD Volunteer Training",
                'activities_description' => "Fire Fighting, Earthquake Awareness, First Aid and Emergency Rescue.",
                'organization' => "Bangladesh Fire Service and civil Defense.",
                'position' => "FSCD Volunteer",
                'certificate_path' => "",
                'duration' => "48 hours",
                'earned_on' => 2014,
                'address' => "Khilgaon Fire Station, Khilgaon, Dhaka.",
                'country' => "Bangladesh",
                'user_id'           => 1,
                'created_by'        => 1,
                'updated_by'        => null,
                'created_at'        => UseHelpers::currentDateTime(),
                'updated_at'        => null,
            ],
        ];
    }
}
