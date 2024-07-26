<?php

namespace Database\Factories;

use App\UseHelpers;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\FieldsOfSkill\FieldsOfSkill>
 */
class FieldsOfSkillFactory extends Factory
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
                'skill_name'        => 'HTML5 and CSS3',
                'code'              => '101',
                'percentage'        => 100,
                'user_id'           => 1,
                'created_by'        => 1,
                'updated_by'        => null,
                'created_at'        => currentDateTime(),
                'updated_at'        => null,
            ],
            [
                'skill_name'        => 'Bootstrap and other Scripting Languages',
                'code'              => '102',
                'percentage'        => 100,
                'user_id'           => 1,
                'created_by'        => 1,
                'updated_by'        => null,
                'created_at'        => currentDateTime(),
                'updated_at'        => null,
            ],
            [
                'skill_name'        => 'PHP (OOP)',
                'code'              => '103',
                'percentage'        => 90,
                'user_id'           => 1,
                'created_by'        => 1,
                'updated_by'        => null,
                'created_at'        => currentDateTime(),
                'updated_at'        => null,
            ],
            [
                'skill_name'        => 'Laravel and Vue.js',
                'code'              => '104',
                'percentage'        => 80,
                'user_id'           => 1,
                'created_by'        => 1,
                'updated_by'        => null,
                'created_at'        => currentDateTime(),
                'updated_at'        => null,
            ],
            [
                'skill_name'        => 'API Development',
                'code'              => '105',
                'percentage'        => 75,
                'user_id'           => 1,
                'created_by'        => 1,
                'updated_by'        => null,
                'created_at'        => currentDateTime(),
                'updated_at'        => null,
            ],
            [
                'skill_name'        => 'RESTful API',
                'code'              => '106',
                'percentage'        => 75,
                'user_id'           => 1,
                'created_by'        => 1,
                'updated_by'        => null,
                'created_at'        => currentDateTime(),
                'updated_at'        => null,
            ],
            [
                'skill_name'        => 'Git Version Control System',
                'code'              => '107',
                'percentage'        => 70,
                'user_id'           => 1,
                'created_by'        => 1,
                'updated_by'        => null,
                'created_at'        => currentDateTime(),
                'updated_at'        => null,
            ],
            [
                'skill_name'        => 'PHP MySql',
                'code'              => '108',
                'percentage'        => 80,
                'user_id'           => 1,
                'created_by'        => 1,
                'updated_by'        => null,
                'created_at'        => currentDateTime(),
                'updated_at'        => null,
            ],
            [
                'skill_name'        => 'JS JQuery AJAX',
                'code'              => '109',
                'percentage'        => 90,
                'user_id'           => 1,
                'created_by'        => 1,
                'updated_by'        => null,
                'created_at'        => currentDateTime(),
                'updated_at'        => null,
            ],
            [
                'skill_name'        => 'Oracle Database',
                'code'              => '110',
                'percentage'        => 70,
                'user_id'           => 1,
                'created_by'        => 1,
                'updated_by'        => null,
                'created_at'        => currentDateTime(),
                'updated_at'        => null,
            ],
        ];
    }
}
