<?php

namespace Database\Factories;

use App\Models\TrainingSummary\TrainingSummary;
use Illuminate\Database\Eloquent\Factories\Factory;

class TrainingSummaryFactory extends Factory
{
    protected $model = TrainingSummary::class;

    public function definition(): array
    {
        return [
            'training_title' => 'Default Training Title',
            'topics_covered' => 'Default Topics',
            'institute' => 'Default Institute',
            'country' => 'Bangladesh',
            'location' => 'Default Location',
            'year' => 2021,
            'duration' => '6 Months',
        ];
    }

    public function professionalWebAppDevelopment(): Factory
    {
        return $this->state([
            'training_title' => 'Professional Web Application Development',
            'topics_covered' => 'CF, HTML5, CSS3, Bootstrap, Javascript, PHP (OOP), MySQL, JQuery, WordPress, Laravel',
            'institute' => 'IDB-bisew',
            'country' => 'Bangladesh',
            'location' => 'Sher-e-Bangla Nagar, Dhaka-1207, Bangladesh',
            'year' => 2021,
            'duration' => '6 Months',
        ]);
    }

    public function webDevelopment(): Factory
    {
        return $this->state([
            'training_title' => 'Web Development',
            'topics_covered' => 'WordPress, HTML, CSS, PHP, MySQL',
            'institute' => 'Institute Of Information Technology (DU)',
            'country' => 'Bangladesh',
            'location' => 'University of Dhaka',
            'year' => 2015,
            'duration' => '3 Months',
        ]);
    }
}
