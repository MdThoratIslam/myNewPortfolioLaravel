<?php

namespace Database\Factories;

use App\UseHelpers;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\SkillSummary\SkillSummary>
 */
class SkillSummaryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        /*
         * $table->foreignId('user_id')->constrained('users')->cascadeOnDelete();
            $table->longText('summary');
            $table->integer('status_active')->default(1);
            $table->integer('is_delete')->default(0);
            $table->foreignId('created_by')->constrained('users')->cascadeOnDelete();
            $table->foreignId('updated_by')->nullable()->constrained('users')->nullOnDelete();
        */
        return [
            [
                'user_id'       => 1,
                'summary'       => 'I am a professional web developer with 5 years of experience in web application development. I have developed a wide range of websites using PHP, Laravel, HTML, CSS, JavaScript, jQuery, and MySQL including sites for startup companies and small businesses. My core competency lies in complete end-end management of a new website development project, and I am seeking opportunities to build websites from the ground up for you or your business.',
                'status_active' => 1,
                'is_delete'     => 0,
                'created_by'    => 1,
                'updated_by'    => null,
                'created_at'    => currentDateTime(),
                'updated_at'    => null
            ]
        ];
    }
}
