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
                'icon'                  => 'mdi mdi-desktop-mac-dashboard',
                'route_type'            => 1,
                'priority'              => 1,
                'status_active'         => 1,
                'is_delete'             => 0,
                'created_at'            => currentDateTime(),
                'created_by'            => 1,
                'updated_at'            => null,
            ],
            [
                'name'                  => 'Personal Details',
                'route'                 => null,
                'status_active'         => 1,
                'is_delete'             => 0,
                'created_at'            => currentDateTime(),
                'created_by'            => 1,
                'updated_at'            => null,
            ],
            [
                'name'                  => 'User Management',
                'route'                 => null,
                'icon'                  => ' mdi mdi-account-details',
                'route_type'            => 2,
                'priority'              => 2,
                'status_active'         => 1,
                'is_delete'             => 0,
                'created_at'            => currentDateTime(),
                'created_by'            => 1,
                'updated_at'            => null,
            ],
            [
                'name'                  => 'email',
                'route'                 => null,
                'icon'                  => 'mdi mdi-email-box',
                'route_type'            => 2,
                'priority'              => 3,
                'status_active'         => 1,
                'is_delete'             => 0,
                'created_at'            => currentDateTime(),
                'created_by'            => 1,
                'updated_at'            => null,
            ],
//            [
//                'name'                  => 'events',
//                'route'                 => 'fullcalender',
//                'icon'                 => 'mdi mdi-events-check',
//                'route_type'            => 1,
//                'priority'              => 5,
//                'status_active'         => 1,
//                'is_delete'             => 0,
//                'created_at'            => currentDateTime(),
//                'created_by'            => 1,
//                'updated_at'            => null,
//            ],
            [
                'name'                  => 'Visitor',
                'route'                 => 'visitor',
                'icon'                  => 'mdi mdi-walk',
                'route_type'            => 1,
                'priority'              => 7,
                'status_active'         => 1,
                'is_delete'             => 0,
                'created_at'            => currentDateTime(),
                'created_by'            => 1,
                'updated_at'            => null,
            ],
            [
                'name'                  => 'Money',
                'route'                 => null,
                'icon'                  => 'mdi mdi-cash',
                'route_type'            => 2,
                'priority'              => 4,
                'status_active'         => 1,
                'is_delete'             => 0,
                'created_at'            => currentDateTime(),
                'created_by'            => 1,
                'updated_at'            => null,
            ],
            [
                'name'                  => 'Modules',
                'route'                 => null,
                'icon'                  => 'mdi mdi-menu',
                'route_type'            => 2,
                'priority'              => 6,
                'status_active'         => 1,
                'is_delete'             => 0,
                'created_at'            => currentDateTime(),
                'created_by'            => 1,
                'updated_at'            => null,
            ]

        ];
    }
}
