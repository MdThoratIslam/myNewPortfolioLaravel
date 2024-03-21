<?php

namespace Database\Factories;

use App\UseHelpers;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\FieldsOfSkillDescription\FieldsOfSkillDescription>
 */
class FieldsOfSkillDescriptionFactory extends Factory
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
                'field_of_skill_id'     => 1,
                'description'           => '# HTML5 is primarily responsible for defining the content and structure of a webpage. It ensures that the content is semantically structured, accessible, and meaningful for both users and search engines.# CSS3 is responsible for the visual presentation and styling of the webpage. It enhances the user experience by making the webpage aesthetically pleasing, consistent, and responsive across different devices and screen sizes.',
                'code'                  => 101,
                'label'                 => 'HTML5 and CSS3',
                'type'                  => '',
                'user_id'               => 1,
                'created_by'            => 1,
                'updated_by'            => null,
                'created_at'            => UseHelpers::currentDateTime(),
                'updated_at'            => null
            ],
            [
                'field_of_skill_id'     => 2,
                'description'           => "Bootstrap is a CSS framework and toolkit. Developers can't use it to write programs, but because Bootstrap contains massive amounts of reusable code and website element templates, the framework can remove some of the “busy work” and significantly speed up the process of building a website.",
                'code'                  => 102,
                'label'                 => 'Bootstrap and other Scripting Languages',
                'type'                  => '',
                'user_id'               => 1,
                'created_by'            => 1,
                'updated_by'            => null,
                'created_at'            => UseHelpers::currentDateTime(),
                'updated_at'            => null
            ],
        ];
    }
}
