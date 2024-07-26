<?php

namespace Database\Factories\Portfolio;

use App\UseHelpers;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Portfolio\Portfolio>
 */
class PortfolioFactory extends Factory
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
                'name'              => 'Web',
                'code'             => 101,
                'status_active'     => 1,
                'is_delete'         => 0,
                'created_by'        => 1,
                'updated_by'        => null,
                'created_at'        => currentDateTime(),
                'updated_at'        => null
            ],
            [
                'name'              => 'API',
                'code'             => 102,
                'status_active'     => 1,
                'is_delete'         => 0,
                'created_by'        => 1,
                'updated_by'        => null,
                'created_at'        => currentDateTime(),
                'updated_at'        => null
            ],
            [
                'name'              => 'ERP',
                'code'             => 103,
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
