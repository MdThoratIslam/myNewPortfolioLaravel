<?php

namespace Database\Factories;

use App\UseHelpers;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\LanguageProficiency\LanguageProficiency>
 */
class LanguageProficiencyFactory extends Factory
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
                'language'      => 'Bangle',
                'reading'       => 'High',
                'writing'       => 'High',
                'speaking'      => 'High',
                'listening'     => 'High',
                'user_id'       => 1,
                'created_by'    => 1,
                'updated_by'    => null,
                'created_at'    => UseHelpers::currentDateTime(),
                'updated_at'    => null,
            ],
            [
                'language'      => 'English',
                'reading'       => 'High',
                'writing'       => 'High',
                'speaking'      => 'High',
                'listening'     => 'High',
                'user_id'       => 1,
                'created_by'    => 1,
                'updated_by'    => null,
                'created_at'    => UseHelpers::currentDateTime(),
                'updated_at'    => null,
            ],
        ];
    }
}
