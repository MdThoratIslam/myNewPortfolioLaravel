<?php

namespace Database\Factories;

use App\UseHelpers;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Responsibilities\Responsibilities>
 */
class ResponsibilitiesFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
//            ============================= Unique Group =================
            [
                'employment_history_id' => 1,
                'label'                 => 'IT Support',
                'description'           => '',
                'user_id'               => 1,
                'created_by'            => 1,
                'updated_by'            => null,
                'created_at'            => UseHelpers::currentDateTime(),
                'updated_at'            => null,
            ],
//            =============================================================
//            ============================= Logic Software ================
            [
                'employment_history_id' => 2,
                'label'                 => 'Programming languages',
                'description'           => 'Core Php, JavaScript',
                'user_id'               => 1,
                'created_by'            => 1,
                'updated_by'            => null,
                'created_at'            => UseHelpers::currentDateTime(),
                'updated_at'            => null,
            ],
            [
                'employment_history_id' => 2,
                'label'                 => 'Database management',
                'description'           => 'MySql and ORACLE Database 12c',
                'user_id'               => 1,
                'created_by'            => 1,
                'updated_by'            => null,
                'created_at'            => UseHelpers::currentDateTime(),
                'updated_at'            => null,
            ],
            [
                'employment_history_id' => 2,
                'label'                 => 'Web technologies',
                'description'           => 'HTML5, CSS3, Javascript,JQuery, Ajax',
                'user_id'               => 1,
                'created_by'            => 1,
                'updated_by'            => null,
                'created_at'            => UseHelpers::currentDateTime(),
                'updated_at'            => null,
            ],
            [
                'employment_history_id' => 2,
                'label'                 => 'Version control',
                'description'           => 'Git',
                'user_id'               => 1,
                'created_by'            => 1,
                'updated_by'            => null,
                'created_at'            => UseHelpers::currentDateTime(),
                'updated_at'            => null,
            ],
            [
                'employment_history_id' => 2,
                'label'                 => 'Development tools',
                'description'           => 'Composer, npm, VSCode, PhpStorm',
                'user_id'               => 1,
                'created_by'            => 1,
                'updated_by'            => null,
                'created_at'            => UseHelpers::currentDateTime(),
                'updated_at'            => null,
            ],
            [
                'employment_history_id' => 2,
                'label'                 => 'Server management',
                'description'           => 'WampServer',
                'user_id'               => 1,
                'created_by'            => 1,
                'updated_by'            => null,
                'created_at'            => UseHelpers::currentDateTime(),
                'updated_at'            => null,
            ],
            [
                'employment_history_id' => 2,
                'label'                 => 'Database management tools',
                'description'           => 'Toad',
                'user_id'               => 1,
                'created_by'            => 1,
                'updated_by'            => null,
                'created_at'            => UseHelpers::currentDateTime(),
                'updated_at'            => null,
            ],
            [
                'employment_history_id' => 2,
                'label'                 => 'Command-line interface',
                'description'           => 'Git Bash',
                'user_id'               => 1,
                'created_by'            => 1,
                'updated_by'            => null,
                'created_at'            => UseHelpers::currentDateTime(),
                'updated_at'            => null,
            ],
//          ==================================================================
//          ============================= Blue Planet Group ==================
//          ==================================================================
//          ============================= Smart Think ========================
        ];
    }
}
