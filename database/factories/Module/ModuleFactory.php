<?php

namespace Database\Factories\Module;

use App\UseHelpers;
use Dompdf\Helpers;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Module\Module>
 */
class ModuleFactory extends Factory
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
                'name'                  => 'Dashboard',
                'route'                 => 'dashboard',
                'route_type'            => 1,
                'status_active'         => 1,
                'is_delete'             => 0,
                'created_at'            => UseHelpers::currentDateTime(),
                'created_by'            => 1
            ],
            [
                'name'                  => 'Personal Details',
                'route'                 => null,
                'status_active'         => 1,
                'is_delete'             => 0,
                'created_at'            => UseHelpers::currentDateTime(),
                'created_by'            => 1
            ],
            [
                'name'                  => 'User Management',
                'route'                 => null,
                'route_type'            => 2,
                'status_active'         => 1,
                'is_delete'             => 0,
                'created_at'            => UseHelpers::currentDateTime(),
                'created_by'            => 1
            ],
            [
                'name'                  => 'email',
                'route'                 => null,
                'route_type'            => 2,
                'status_active'         => 1,
                'is_delete'             => 0,
                'created_at'            => UseHelpers::currentDateTime(),
                'created_by'            => 1
            ]
        ];
    }
}
