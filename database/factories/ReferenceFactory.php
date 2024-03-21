<?php

namespace Database\Factories;

use App\UseHelpers;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Reference\Reference>
 */
class ReferenceFactory extends Factory
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
                'name'              => 'Mohammad Towhidul Islam',
                'designation_id'    => 8,
                'organization'      => 'Intellect Software Ltd',
                'email'             => 'towhidsir@yahoo.com',
                'phone'             => '01715785434',
                'address'           => '',
                'relation_id'       => 1,
                'reference_type'    => 1,
                'user_id'           => 1,
                'created_by'        => 1,
                'updated_by'        => null,
                'created_at'        => UseHelpers::currentDateTime(),
                'updated_at'        => null,
            ],
            [
                'name'              => 'MD. Moshaidul Islam',
                'designation_id'    => 9,
                'organization'      => 'IDB-BISEW IT Scholarship Project',
                'email'             => 'moshaidul@gmail.com',
                'phone'             => '01711071219',
                'address'           => '',
                'relation_id'       => 1,
                'reference_type'    => 2,
                'user_id'           => 1,
                'created_by'        => 1,
                'updated_by'        => null,
                'created_at'        => UseHelpers::currentDateTime(),
                'updated_at'        => null,
            ],
        ];
    }
}
