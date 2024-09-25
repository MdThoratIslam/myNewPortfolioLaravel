<?php

namespace Database\Factories\Module;

use App\UseHelpers;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Module\SubModule>
 */
class SubModuleFactory extends Factory
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
                'name'                  => 'Personal Details',
                'icon'                  => 'mdi mdi-account-plus',
                'route'                 => 'users.index',
                'status_active'         => 1,
                'is_delete'             => 0,
                'module_id'             => 3,
                'created_at'            => currentDateTime()
            ],
            [
                'name'                  => 'Academic Details',
                'icon'                  => 'fas fa-users',
                'route'                 => 'academic-dtails',
                'status_active'         => 1,
                'is_delete'             => 0,
                'module_id'             => 3,
                'created_at'            => currentDateTime()
            ],
            [
                'name'                  => 'Compose',
                'icon'                  => 'mdi-open-in-new',
                'route'                 => 'mail.compose',
                'status_active'         => 1,
                'is_delete'             => 0,
                'module_id'             => 4,
                'created_at'            => currentDateTime()
            ],
            [
                'name'                  => 'Modules List',
                'icon'                  => 'mdi mdi-menu',
                'route'                 => 'modules.index',
                'status_active'         => 1,
                'is_delete'             => 0,
                'module_id'             => 7,
                'created_at'            => currentDateTime()
            ],
//            [
//                'name'                  => 'Index',
//                'icon'                  => 'mdi mdi-menu',
//                'route'                 => 'modules.create',
//                'status_active'         => 1,
//                'is_delete'             => 0,
//                'module_id'             => 8,
//                'created_at'            => currentDateTime()
//            ]
        ];
    }
}
