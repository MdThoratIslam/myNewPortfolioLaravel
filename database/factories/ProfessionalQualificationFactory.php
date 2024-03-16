<?php

namespace Database\Factories;

use App\UseHelpers;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\ProfessionalQualification>
 */
class ProfessionalQualificationFactory extends Factory
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
                'certification' => 'WordPress',
                'institute'     => 'Institute Of Information Technology Under University of Dhaka',
                'location'      => 'University of dhaka',
                'from'          => date('Y-m-d', strtotime('2014-09-01')), // Format the date properly
                'to'            => date('Y-m-d', strtotime('2015-02-28')), // Format the date properly
                'user_id'       => 1,
                'created_by'    => 1,
                'updated_by'    => null,
                'created_at'    => UseHelpers::currentDateTime(),
                'updated_at'    => null,
            ],
            [
                'certification' => 'Professional Web Application Development',
                'institute'     => 'IDB-bisew',
                'location'      => 'Sher-e-Bangla Nagar. Dhaka-1207, Bangladesh	',
                'from'          => date('Y-m-d', strtotime('2020-12-09')), // Format the date properly
                'to'            => date('Y-m-d', strtotime('2021-05-21')), // Format the date properly
                'user_id'       => 1,
                'created_by'    => 1,
                'updated_by'    => null,
                'created_at'    => UseHelpers::currentDateTime(),
                'updated_at'    => null,
            ]
        ];
    }
}
