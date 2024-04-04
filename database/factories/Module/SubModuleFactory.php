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
                'route'                 => 'users.details',
                'status_active'         => 1,
                'is_delete'             => 0,
                'module_id'             => 3,
                'created_at'            => UseHelpers::currentDateTime()
            ],
            [
                'name'                  => 'Academic Details',
                'icon'                  => 'fas fa-users',
                'route'                 => 'academic-dtails',
                'status_active'         => 1,
                'is_delete'             => 0,
                'module_id'             => 3,
                'created_at'            => UseHelpers::currentDateTime()
            ],
//            [
//                'name'                  => 'Email Inbox',
//                'icon'                  => 'mdi mdi-email',
//                'route'                 => 'inbox',
//                'status_active'         => 1,
//                'is_delete'             => 0,
//                'module_id'             => 4,
//                'created_at'            => UseHelpers::currentDateTime()
//            ],
//            [
//                'name'                  => 'Email Details',
//                'icon'                  => 'mdi mdi-email-open',
//                'route'                 => 'inbox-details',
//                'status_active'         => 1,
//                'is_delete'             => 0,
//                'module_id'             => 4,
//                'created_at'            => UseHelpers::currentDateTime()
//            ],
//            [
//                'name'                  => 'Email Compose',
//                'icon'                  => 'mdi mdi-email-open',
//                'route'                 => 'email-compose',
//                'status_active'         => 1,
//                'is_delete'             => 0,
//                'module_id'             => 4,
//                'created_at'            => UseHelpers::currentDateTime()
//            ]
        ];
    }
}
