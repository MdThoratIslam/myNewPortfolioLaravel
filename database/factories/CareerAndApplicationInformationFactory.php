<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\CareerAndApplicationInformation\CareerAndApplicationInformation>
 */
class CareerAndApplicationInformationFactory extends Factory
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
                'label' => "Looking For",
                'description' => "Mid Level Job",
                'user_id' => 1,
            ],
            [
                'label' => "Available For",
                'description' => "Full Time",
                'user_id' => 1,
            ],[
                'label' => "Present Salary",
                'description' => "Tk. 35000",
                'user_id' => 1,
            ],[
                'label' => "Expected Salary",
                'description' => "Tk. 70000",
                'user_id' => 1,
            ],[
                'label' => "Preferred Job Category",
                'description' => "IT/Telecommunication",
                'user_id' => 1,
            ],[
                'label' => "Preferred District",
                'description' => "Chattogram, Dhaka, Gazipur, Narayanganj",
                'user_id' => 1,
            ],[
                'label' => "Preferred Country",
                'description' => "Australia, Canada, Italy, Malaysia",
                'user_id' => 1,
            ],[
                'label' => "Preferred Organization Types",
                'description' => "NGO",
                'user_id' => 1,
            ],
        ];
    }
}
