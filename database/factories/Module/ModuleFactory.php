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
                'created_by'            => 1,
                'updated_at'            => null,
            ],
            [
                'name'                  => 'Personal Details',
                'route'                 => null,
                'status_active'         => 1,
                'is_delete'             => 0,
                'created_at'            => UseHelpers::currentDateTime(),
                'created_by'            => 1,
                'updated_at'            => null,
            ],
            [
                'name'                  => 'User Management',
                'route'                 => null,
                'route_type'            => 2,
                'status_active'         => 1,
                'is_delete'             => 0,
                'created_at'            => UseHelpers::currentDateTime(),
                'created_by'            => 1,
                'updated_at'            => null,
            ],
            [
                'name'                  => 'email',
                'route'                 => null,
                'route_type'            => 2,
                'status_active'         => 1,
                'is_delete'             => 0,
                'created_at'            => UseHelpers::currentDateTime(),
                'created_by'            => 1,
                'updated_at'            => null,
            ],
            [
                'name'                  => 'calender',
                'route'                 => 'fullcalender',
                'icon'                 => 'mdi mdi-calender-check',
                'route_type'            => 1,
                'status_active'         => 1,
                'is_delete'             => 0,
                'created_at'            => UseHelpers::currentDateTime(),
                'created_by'            => 1,
                'updated_at'            => null,
            ],
            [
                'name'                  => 'Visitor',
                'route'                 => 'visitor',
                'route_type'            => 1,
                'status_active'         => 1,
                'is_delete'             => 0,
                'created_at'            => UseHelpers::currentDateTime(),
                'created_by'            => 1,
                'updated_at'            => null,
            ]
        ];
    }
}
