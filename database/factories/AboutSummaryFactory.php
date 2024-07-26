<?php

namespace Database\Factories;

use App\UseHelpers;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\About\AboutSummary>
 */
class AboutSummaryFactory extends Factory
{
    /**
     * Define the model's default state.
     * $table->integer('happy_clients');
     * $table->string('happy_clients_disc');
     * $table->string('happy_clients_icon');
     * $table->integer('projects _complete');
     * $table->string('projects _complete_disc');
     * $table->string('projects _complete_icon');
     * $table->integer('years_of_experience');
     * $table->string('years_of_experience_disc');
     * $table->string('years_of_experience_icon');
     * $table->integer('awards');
     * $table->string('awards_disc');
     * $table->string('awards_icon');
     * $table->tinyInteger('status_active')->default(1);
     * $table->tinyInteger('is_deleted')->default(0);
     * $table->integer('created_by')->nullable()->default(null);
     * $table->integer('updated_by')->nullable()->default(null);
 */
    public function definition(): array
    {
        return [
            'happy_clients'             => 5,
            'happy_clients_disc'        => 'Happy Clients consequuntur voluptas nostrum aliquid ipsam architecto ut.',
            'happy_clients_icon'        => 'bi-emoji-smile',

            'projects_complete'         => 10,
            'projects_complete_disc'    => 'Projects adipisci atque cum quia aspernatur totam laudantium et quia dere tan',
            'projects_complete_icon'    => 'bi-journal-richtext',

            'years_of_experience'       => 3,
            'years_of_experience_disc'  => 'Years of experience aut commodi quaerat modi aliquam nam ducimus aut voluptate non vel',
            'years_of_experience_icon'  => 'bi-clock',

            'awards'                    => 3,
            'awards_disc'               => 'Awards rerum asperiores dolor alias quo reprehenderit eum et nemo pad der',
            'awards_icon'               => 'bi-award',

            'status_active'             => 1, // 90% chance of being active
            'is_deleted'                => 0, // 10% chance of being deleted
            'created_by'                => 1,
            'created_at'                => currentDateTime(),
            'updated_by'                => null,
            'updated_at'                => null
        ];
    }
}
