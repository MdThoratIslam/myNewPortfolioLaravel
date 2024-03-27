<?php

namespace Database\Factories\Events;

use App\UseHelpers;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Events\Events>
 */
class EventsFactory extends Factory
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
                'title'                 => 'Birthday',
                'description'           => 'Birthday celebration',
                'start'                 => '2024-05-04',
                'end'                   => null,
                'status_active'         => 1,
                'is_delete'             => 0,
                'created_by'            => 1,
                'updated_by'            => null,
                'created_at'            => UseHelpers::currentDateTime(),
                'updated_at'            => null,
            ],
            [
                'title'                 => 'Wife Birthday',
                'description'           => 'Birthday celebration',
                'start'                 => '2024-10-20',
                'end'                   => null,
                'status_active'         => 1,
                'is_delete'             => 0,
                'created_by'            => 1,
                'updated_by'            => null,
                'created_at'            => UseHelpers::currentDateTime(),
                'updated_at'            => null,
            ],
        ];
    }
}
