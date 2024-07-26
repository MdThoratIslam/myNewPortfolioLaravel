<?php

namespace Database\Factories;

use App\UseHelpers;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\SpecialQualification\SpecialQualification>
 */
class SpecialQualificationFactory extends Factory
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
                'title'             => 'Professional Web Application Development (PWAD):',
                'description'       => 'Islamic Development Bank-Bangladesh Islamic Solidarity Educational Wakf(IDB-BISEW) IT Scholarship Project',
                'projectAuthority'  => 'IDB-BISEW',
                'duration'          => '460 hrs',
                'earned_on'         => '2021-06-30',
                'certificate_path'  => 'public/assest/certificate/certificate.png',
                'status_active'     => 1,
                'is_delete'         => 0,
                'created_by'        => 1,
                'updated_by'        => null,
                'created_at'        => currentDateTime(),
                'updated_at'        => null
            ],
        ];
    }
}
